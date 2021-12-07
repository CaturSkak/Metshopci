<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

class checkout extends CI_Controller {
 public function __construct()
 {
  parent::__construct();
 }
 public function kirim()
 {
  $this->load->view('layout/header');
  $this->load->view('konten/checkout');
  $this->load->view('layout/footer');
 }

 public function contact_proses()
 {
    if(isset($_POST['submit']))
    {
    
        //Create an instance; passing `true` enables exceptions
        $mail = new PHPMailer(true);
    
        $no_invoice         = $this->input->post('no_invoice');
        $nama               = $this->input->post('nama');
        $email              = $this->input->post('email');
        $keterangan         = $this->input->post('keterangan');
        $pesan              = $this->input->post('pesan');
    
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'metshopcare@gmail.com';                     //SMTP username
        $mail->Password   = 'emailmilikmetshop123';                               //SMTP password
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('metshopcare@gmail.com    ', 'Komplain Pelanggan');
        $mail->addAddress($email, $nama);     //Add a recipient
    
        $mail->addReplyTo('metshopcare@gmail.com', 'Komplain Pelanggan');
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Komplain Pelanggan ';
        $mail->Body    = 'Halo Admin, Ada Komplain baru dengan nomor invoice '.$no_invoice.' Atas Nama Pengirim '.$nama.' dengan Alamat Email '.$email.', Keterangan = '.$keterangan.', Pesan = '.$pesan.'';
    
        if($mail->send())
        {
            echo 'Message has been sent';
        }
        else{
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    }
    else{
        echo "tekan dulu tombolnya bos";
    }
     
 }
}