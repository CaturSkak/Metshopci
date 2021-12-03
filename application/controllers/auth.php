<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Kata Sandi', 'trim|required');
        if ($this->form_validation->run() == false) {


            $data['title'] = 'MetShop Pets - Login';
            $this->load->view('admin/page-login', $data);
            $this->load->view('admin/footer');
        } else {
            //validasi succes
            $this->_login();
        }
    }

    private function _login()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->db->get_where('tb_pengguna', ['email' => $email])->row_array();

        if ($user) {
            //user ada
            if ($user['aktif'] == 1) {
                //cek pasword
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'email' => $user['email'],
                        'tb_tipe_pengguna_id' => $user['tb_tipe_pengguna_id']
                    ];
                    $this->session->set_userdata($data);
                    redirect('BerandaAdmin');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Kata sandi salah!
                  </div> ');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Email belum diaktivasi, Silakan aktivasi email!
              </div> ');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Email tidak terdaftar, Silakan Daftar!
          </div> ');
            redirect('auth');
        }
    }

    public function registrasi()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules(
            'email',
            'Email',
            'required|trim|valid_email|is_unique[tb_pengguna.email]',
            [
                'is_unique' => 'Email sudah didaftarkan!'
            ]
        );
        $this->form_validation->set_rules(
            'password',
            'Password',
            'required|trim|min_length[5]|matches[password2]',
            [
                'matches' => 'Kata Sandi tidak sama!',
                'min_length' => 'Password minimal 5 karakter!'
            ]
        );
        $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password]');
        if ($this->form_validation->run() == false) {
            $data['title'] = 'MetShop Pets - Daftar';
            $this->load->view('admin/pageregister', $data);
            $this->load->view('admin/footer');
        } else {
            $data = [
                'nama' =>  htmlspecialchars($this->input->post('nama', 'true')),
                'email' => htmlspecialchars($this->input->post('email', 'true')),
                'password' => password_hash(
                    $this->input->post('password'),
                    PASSWORD_DEFAULT
                ),
                'tb_tipe_pengguna_id' => 1,
                'aktif' => 1,
                'date_created' => date("Y-m-d H:i:s"),
                'foto_pengguna' => 'default.png'
            ];

            $this->db->insert('tb_pengguna', $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Selamat akun anda telah dibuat, Silakan Login!
          </div> ');
            redirect('auth');
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('tb_tipe_pengguna_id');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        akun anda telah keluar!
      </div> ');
        redirect('auth');
    }
}
