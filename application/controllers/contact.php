<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

class contact extends CI_Controller {
 public function __construct()
 {
  parent::__construct();
 }
 public function index()
 {
  $this->load->view('layout/header');
  $this->load->view('konten/contact');
  $this->load->view('layout/footer');
 }

 public function contact_proses()
 {
    if(isset($_POST['submit'])){

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    $nama               = $this->input->post('nama');
    $email              = $this->input->post('email');
    $email_pribadi      = $this->input->post('email_pribadi');
    $no_invoice         = $this->input->post('no_invoice');
    $keterangan         = $this->input->post('keterangan');
    $pesan              = $this->input->post('pesan');
    

    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'dedikurniawan.real@gmail.com';                     //SMTP username
    $mail->Password   = 'dedi085746190641';                               //SMTP password
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($email_pribadi, 'Balasan dari Admin');
    $mail->addAddress($email, $nama);     //Add a recipient

    $mail->addReplyTo($email_pribadi, 'Balasan dari Admin');

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Ada Pesan nih dari salah satu customer '.$nama.'';
    $mail->Body    = 'Halo Admin, Ada Pesan baru dengan nomor invoice '.$no_invoice.' Atas Nama Pengirim '.$nama.' kepada Admin '.$email.', Keterangan dari customer = '.$keterangan.', Pesan dari customer = '.$pesan.'';

    if($mail->send())
    {
        echo 'Pesan Anda sudah Terkirim, Silahkan Tunggu Balasan dari Admin dalam beberapa saat';
    }
    else{
        echo "Pesan gagal terkirim. Mailer Error: {$mail->ErrorInfo}";
    }
}
else{
    echo "Mohon untuk mengisi Form diatas dulu yah";
}
 }
}