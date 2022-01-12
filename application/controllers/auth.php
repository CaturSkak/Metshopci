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
        if ($this->session->userdata('email')) {
            redirect('BerandaAdmin');
        }

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
        if ($this->session->userdata('email')) {
            redirect('BerandaAdmin');
        }

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
                        'tb_tipe_pengguna_id' => $user['tb_tipe_pengguna_id'],
                        'pengguna_id' => $user['pengguna_id']
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
        if ($this->session->userdata('email')) {
            redirect('BerandaAdmin');
        }

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
            $email = $this->input->post('email', 'true');
            $data = [
                'nama_lengkap' =>  htmlspecialchars($this->input->post('nama', 'true')),
                'email' => htmlspecialchars($email),
                'password' => password_hash(
                    $this->input->post('password'),
                    PASSWORD_DEFAULT
                ),
                'aktif' => 0,
                'foto_pengguna' => 'default.png',
                'tipepengguna_id' => 1,
                'tanggal_dibuat' => time()

            ];

            // siapkan token
            $token = base64_encode(random_bytes(32));
            $user_token = [
                'email' => $email,
                'token' => $token,
                'date_created' => time()
            ];


            $this->db->insert('tb_pengguna', $data);
            $this->db->insert('tb_token', $user_token);

            $this->_sendEmail($token, 'verify');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
            Selamat akun anda telah dibuat, Silakan Aktivasi Akun di Gmail!
          </div> ');
            redirect('auth');
        }
    }

    private function _sendEmail($token, $type)
    {
        $config = [
            'protocol' => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_user' => 'e31191894@student.polije.ac.id',
            'smtp_pass' => 'Ajanesu12345',
            'smtp_port' => 465,
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'newline' => "\r\n"

        ];
        $this->load->library('email', $config);
        $this->email->initialize($config);  //tambahkan baris ini
        $this->email->from('e31191894@student.polije.ac.id', 'E31191894 Ahmad Catur Yulianto');
        $this->email->to($this->input->post('email'));
        if ($type == 'verify') {

            $this->email->subject('Verifikasi Akun');
            $this->email->message('Klik link ini untuk verifikasi akun :
                <a href="' . base_url() . 'auth/verify?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '" >Aktifkan</a>');
        } else if ($type == 'forgot') {

            $this->email->subject('Reset Password');
            $this->email->message('Klik link ini untuk reset password :
                <a href="' . base_url() . 'auth/resetkatasandi?email=' . $this->input->post('email') . '&token=' . urlencode($token) . '" >Reset Kata Sandi</a>');
        }

        if ($this->email->send()) {
            return true;
        } else {
            echo $this->email->print_debugger();
            die;
        }
    }

    public function verify()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('tb_pengguna', ['email' => $email])->row_array();

        if ($user) {
            $user_token = $this->db->get_where('tb_token', ['token' => $token])->row_array();
            if ($user_token) {
                if (time() - $user_token['date_created']  < (60 * 60 * 24)) {
                    $this->db->set('aktif', 1);
                    $this->db->where('email', $email);
                    $this->db->update('tb_pengguna');

                    $this->db->delete('tb_token', ['token' => $token]);

                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
                    ' . 'Akun ' . $email . ' Telah aktif, Silakan login!.
                  </div> ');
                    redirect('auth');
                } else {
                    $this->db->delete('tb_pengguna', ['email' => $email]);
                    $this->db->delete('tb_token', ['email' => $email]);

                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                    Aktivasi akun gagal karena token kadaluarsa!
                  </div> ');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
                Aktivasi akun gagal karena token salah!
              </div> ');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
            Aktivasi akun gagal karena email salah!
          </div> ');
            redirect('auth');
        }
    }

    public function logout()
    {
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('pengguna_id');
        $this->session->unset_userdata('tb_tipe_pengguna_id');
        $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        akun anda telah keluar!
      </div> ');
        redirect('auth');
    }

    public function lupasandi()
    {
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        if ($this->form_validation->run() == false) {

            $data['title'] = 'MetShop Pets - Lupa Kata Sandi';
            $this->load->view('admin/pageforgotpassword', $data);
            $this->load->view('admin/footer');
        } else {
            $email = $this->input->post('email');
            $user = $this->db->get_where('tb_pengguna', ['email' => $email, 'aktif' => 1])->row_array();

            if ($user) {
                $token = base64_encode(random_bytes(32));
                $user_token = [
                    'email' => $email,
                    'token' => $token,
                    'date_created' => time()
                ];

                $this->db->insert('tb_token', $user_token);
                $this->_sendEmail($token, 'forgot');

                $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
        Silahkan cek email untuk mereset password! 
      </div> ');
                redirect('auth/lupasandi');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
        Email belum terdaftar atau belum aktif!
      </div> ');
                redirect('auth/lupasandi');
            }
        }
    }

    public function resetkatasandi()
    {
        $email = $this->input->get('email');
        $token = $this->input->get('token');

        $user = $this->db->get_where('tb_pengguna', ['email' => $email])->row_array();

        if ($user) {
            $user_token = $this->db->get_where('tb_token', ['token' => $token])->row_array();
            if ($user_token) {
                $this->session->set_userdata('reset_email', $email);
                $this->gantikatasandi();
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">
               Reset password gagal! Token Salah!
              </div> ');
                redirect('auth');
            }
        } else {
        }
    }

    public function gantikatasandi()
    {
        if (!$this->session->userdata('reset_email')) {
            redirect('auth');
        }

        $this->form_validation->set_rules(
            'password1',
            'Kata Sandi',
            'trim|required|min_length[5]|matches[password2]',
            [
                'matches' => 'Kata Sandi tidak sama!',
                'min_length' => 'Password minimal 5 karakter!'
            ]
        );
        $this->form_validation->set_rules(
            'password2',
            'Ulangi Kata Sandi',
            'trim|required|min_length[5]|matches[password1]',
            [
                'matches' => 'Kata Sandi tidak sama!',
                'min_length' => 'Password minimal 5 karakter!'
            ]
        );

        if ($this->form_validation->run() == false) {
            $data['title'] = 'MetShop Pets - Ganti Kata Sandi';
            $this->load->view('admin/page-pulihkan-password', $data);
            $this->load->view('admin/footer');
        } else {
            $password = password_hash($this->input->post('password1'), PASSWORD_DEFAULT);
            $email = $this->session->userdata('reset_email');

            $this->db->set('password', $password);
            $this->db->where('email', $email);
            $this->db->update('tb_pengguna');

            $this->session->unset_userdata('reset_email');

            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
               Ganti Kata Sandi telah berhasil, Silahkan Login!
              </div> ');
            redirect('auth');
        }
    }
}
