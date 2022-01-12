<?php
defined('BASEPATH') or exit('No direct script access allowed');

class nyoba extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

        $this->load->model('M_User');
    }

    public function index($var = null)
    {
        // menyimpan url sebelum login
        // $previous_url = array(
        //     'previous_url'  => base_url(uri_string())
        // );
        // $this->session->set_userdata($previous_url);
        $data['userr'] =
            $this->db->get_where('tb_pengguna', ['email' =>
            $this->session->userdata('email')])->row_array();
        if (empty($this->session->userdata('email'))) {

            $this->session->set_flashdata('warning_flashData', 'Anda harus login terlebih dahulu!');
            redirect(base_url('auth/login'));
            exit;
        } else {

            // Get Sess User ID
            $userID = $this->session->userdata('pengguna_id');

            $data['user'] = $this->M_User->getDataByID($userID)->row();
            $data['provinsi'] = $this->M_User->getProvinsi()->result();

            $row = $this->M_User->getUserProvinsi($userID)->row();

            if (!empty($row->province_id)) {

                $data['kota'] = $this->M_User->getKota($row->province_id)->result();

                $row2 = $this->M_User->getUserKota($userID)->row();

                if (!empty($row->province_id)) {

                    $data['kecamatan'] = $this->M_User->getKecamatan($row2->city_id)->result();
                }
            }

            $this->load->view('admin/header', $data);
            $this->load->view('nyoba', $data);
            $this->load->view('admin/footer');
        }
    }

    public function cekKota()
    {
        $id = $this->input->get('province_id', TRUE);
        $kota = $this->M_User->getKota($id)->result();

        foreach ($kota as $row) {
            echo "<option value='" . $row->city_id . "'>" . $row->city_name . "</option>";
        }
    }

    public function cekKecamatan()
    {
        $id = $this->input->get('city_id', TRUE);
        $kecamatan = $this->M_User->getKecamatan($id)->result();

        foreach ($kecamatan as $row) {
            echo "<option value='" . $row->subdistrict_id . "'>" . $row->subdistrict_name . "</option>";
        }
    }

    public function upload()
    {
        if (empty($this->input->post('customer_id', TRUE))) {
            $this->session->set_flashdata('error_flashData', 'Aksi Illegal!.');
            redirect(base_url('user-profile'));
        } else {
            $customer_id = $this->input->post('customer_id', TRUE);
            $img = $this->input->post('customer_image', TRUE);
            $error = '';

            $config['upload_path']          = './assets/img/customer/';
            $config['allowed_types']        = 'jpeg|jpg|png';
            $config['max_size']             = 10000;
            $config['encrypt_name']         = TRUE;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('file')) {

                $error = array('error' => $this->upload->display_errors());
                $this->load->view('errors/error', $error);
            } else {
                $data = $this->upload->data();

                // Hapus gambar sebelumnya
                if (!empty($img)) {
                    unlink(FCPATH . "assets/img/customer/" . $img);
                }

                /* 
			* Manipulate image 
			*/

                $imgdata = exif_read_data($this->upload->upload_path . $this->upload->file_name, 'IFD0');

                // Crop Square
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/img/customer/' . $data["file_name"];
                $config['maintain_ratio'] = false;

                // Set cropping for y or x axis, depending on image orientation
                if ($data['image_width'] > $data['image_height']) {
                    $config['width'] = $data['image_height'];
                    $config['height'] = $data['image_height'];
                    $config['x_axis'] = (($data['image_width'] / 2) - ($config['width'] / 2));
                } else {
                    $config['height'] = $data['image_width'];
                    $config['width'] = $data['image_width'];
                    $config['y_axis'] = (($data['image_height'] / 2) - ($config['height'] / 2));
                }

                $config['new_image'] = './assets/img/customer/' . $data["file_name"];
                $this->load->library('image_lib', $config);
                $this->image_lib->initialize($config);
                $this->image_lib->crop();

                // Clear config
                $this->image_lib->clear();
                unset($config);

                // resize
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/img/customer/' . $data['file_name'];
                $config['maintain_ratio'] = TRUE;
                $config['quality'] = '60%';
                if ($data["image_width"] >= 1200) {
                    $config['width'] = ($data["image_width"] * 1 / 2);
                } else {
                    $config['width'] = ($data["image_width"] * 2 / 3);
                }
                $config['new_image'] = './assets/img/customer/' . $data['file_name'];

                $this->load->library('image_lib', $config);
                $this->image_lib->initialize($config);
                $this->image_lib->resize();

                // Clear config
                $this->image_lib->clear();
                unset($config);

                // Create Thumbnail
                $config['image_library'] = 'gd2';
                $config['source_image'] = './assets/img/customer/' . $data['file_name'];
                $config['new_image'] = './assets/img/customer/';
                $config['maintain_ratio'] = TRUE;
                $config['create_thumb'] = TRUE;
                $config['thumb_marker'] = '';
                $config['width'] = 600;

                $this->load->library('image_lib', $config);
                $this->image_lib->initialize($config);
                $this->image_lib->resize();

                // Fix EXIF Image
                $this->image_lib->clear();
                $config = array();

                $config['image_library'] = 'gd2';
                $config['source_image'] = $this->upload->upload_path . $this->upload->file_name;

                switch ($imgdata['Orientation']) {
                    case 3:
                        $config['rotation_angle'] = '180';
                        break;
                    case 6:
                        $config['rotation_angle'] = '270';
                        break;
                    case 8:
                        $config['rotation_angle'] = '90';
                        break;
                }

                $this->image_lib->initialize($config);
                $this->image_lib->rotate();

                $data = array(
                    'customer_image' => $data["file_name"],
                );

                $result = $this->M_User->editData($customer_id, $data);

                if ($result == TRUE) {

                    /**
                     * Update Session
                     */
                    $session_array = array(
                        'USER_IMAGE'  => $data["file_name"]
                    );

                    $this->session->set_userdata($session_array);

                    // Update Cookie
                    if (!empty(get_cookie('USER_ID'))) {
                        $time = time() + (86400 * 30);
                        set_cookie('USER_IMAGE', $data["file_name"], $time);
                    }

                    $this->session->set_flashdata('success_flashData', 'Profil berhasil diperbaharui.');
                    redirect(base_url('user-profile'));
                } else {

                    $this->session->set_flashdata('error_flashData', 'Gagal memperbarui profil.');
                    redirect(base_url('user-profile'));
                }
            }
        }
    }

    public function edit()
    {
        if (empty($this->input->post('customer_id', TRUE))) {
            $this->session->set_flashdata('error_flashData', 'Aksi Illegal!.');
            redirect(base_url('user-profile'));
        } else {

            $customer_id = $this->input->post('customer_id', TRUE);
            $customer_name = $this->input->post('customer_name', TRUE);
            $email = $this->input->post('email', TRUE);
            $gender = $this->input->post('gender', TRUE);
            $phone_number = $this->input->post('phone_number', TRUE);
            $province_id = $this->input->post('province_id', TRUE);
            $city_id = $this->input->post('city_id', TRUE);
            $subdistrict_id = $this->input->post('subdistrict_id', TRUE);
            $address = $this->input->post('address', TRUE);

            $checkEmail = $this->M_User->existsEmail($email);
            $isDefaultEmail = $this->M_User->defaultEmail($customer_id, $email);

            if ($checkEmail == 0 || $isDefaultEmail == 1) {

                $data = array(
                    'customer_name' => $customer_name,
                    'login_id' => $email,
                    'email' => $email,
                    'gender' => $gender,
                    'phone_number' => $phone_number,
                    'province_id' => $province_id,
                    'city_id' => $city_id,
                    'subdistrict_id' => $subdistrict_id,
                    'address' => $address
                );

                $result = $this->M_User->editData($customer_id, $data);

                if ($result == TRUE) {

                    /**
                     * Update Session
                     */
                    $session_array = array(
                        'USER_ID'  => $customer_id,
                        'USER_NAME'  => $customer_name,
                        'USER_USERNAME'  => $email,
                        'USER_KABUPATEN' => $city_id
                    );

                    $this->session->set_userdata($session_array);

                    // Update Cookie
                    if (!empty(get_cookie('USER_ID'))) {
                        $time = time() + (86400 * 30);
                        set_cookie('USER_ID', $customer_id);
                        set_cookie('USER_NAME', $customer_name, $time);
                        set_cookie('USER_USERNAME', $email, $time);
                        set_cookie('USER_KABUPATEN', $city_id, $time);
                    }

                    $this->session->set_flashdata('success_flashData', 'Biodata berhasil diedit.');
                    redirect(base_url('user-profile'));
                } else {

                    $this->session->set_flashdata('error_flashData', 'Gagal mengedit biodata.');
                    redirect(base_url('user-profile'));
                }
            } else {

                $this->session->set_flashdata('warning_flashData', 'Email sudah ada, silahkan gunakan email yang berbeda.' . $checkEmail . $isDefaultEmail);
                redirect(base_url('user-profile'));
            }
        }
    }
}
