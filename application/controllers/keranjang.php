<?php
defined('BASEPATH') or exit('No direct script access allowed');

class keranjang extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('url', 'html'));
        $this->load->model('m_wilayah');
        $this->load->model('m_user');
        $this->load->model('m_customer');
        $this->load->model('m_keranjang');
        $this->load->model('m_pembayaran');
        $this->load->library('form_validation');
        $this->load->database();
    }

    public function index()
    {



        if (empty($this->session->userdata('customer_id'))) {

            $this->session->set_flashdata('warning_flashData', 'Anda harus login terlebih dahulu!');
            redirect(base_url('authcustomer'));
            exit;
        } else {
            $data['user'] =
                $this->db->get_where('tb_customer', ['email' =>
                $this->session->userdata('emailcustomer')])->row_array();
            $userID = $this->session->userdata('emailcustomer');

            $data['pembayaran'] = $this->m_user->getDataMetodePembayaran()->result();
            $data['userr'] = $this->m_customer->getDataByID($userID)->row_array();
            $id = $this->session->userdata('customer_id');
            // $data['kab_id'] = $this->session->userdata('USER_KABUPATEN');

            // $data['customer'] = $this->m_keranjang->getDataCustomer($id)->row();
            $data['barang'] = $this->m_keranjang->getDataKeranjang($id)->result();
            // var_dump($data);
            // die;
            // $data['metode'] = $this->m_keranjang->getDataMetodePembayaran()->result();

            // //Berat Total Barang
            // $data['berat'] = $this->m_keranjang->getDataBerat($id)->row()->berat;

            $this->load->view('layout/header',  $data);
            $this->load->view('konten/keranjang', $data);
            $this->load->view('layout/footer');
        }
    }

    // public function tes()
    // {
    //     $row = array(1, 2);
    //     $id = $this->session->userdata('USER_ID');
    //     $berat = $this->m_keranjang->getDataBerat($id)->row()->berat;
    //     $kab_id = $this->session->userdata('USER_KABUPATEN');
    //     foreach ($row as $row) {
    //         echo "<option value='" . $kab_id . "'>" . $berat . "</option>";
    //     }
    // }



    // public function checkout()
    // {
    //     if (empty($this->session->userdata('USER_ID'))) {

    //         $this->session->set_flashdata('warning_flashData', 'Anda harus login terlebih dahulu!');
    //         redirect(base_url('login'));
    //         exit;
    //     } else {
    //         $customer_id = $this->session->userdata('USER_ID');
    //         $payment_method_id = $this->input->post('payment_method_id', TRUE);
    //         $payment_amount = $this->input->post('jumlah', TRUE);
    //         $ongkir = $this->input->post('ongkir', TRUE);
    //         $nama_kurir = $this->input->post('nama_kurir', TRUE);

    //         $uang_toko = $payment_amount - $ongkir;

    //         $data = array(
    //             'customer_id' => $customer_id,
    //             'order_bayar' => $uang_toko,
    //             'order_total' => $uang_toko,
    //             'order_type' => 'online'
    //         );

    //         // Create Order
    //         $result = $this->m_keranjang->addOrder($data);

    //         if ($result == TRUE) {

    //             // Get latest inserted id
    //             $last_id = $this->db->insert_id();

    //             // Get Data from tb_keranjang
    //             $keranjang = $this->m_keranjang->getDataKeranjangCheckout($customer_id)->result();

    //             foreach ($keranjang as $row) {
    //                 // Check Stock 
    //                 if ($row->cart_amount_item > $row->product_stock) {
    //                     $row->cart_amount_item = $row->product_stock;
    //                 }

    //                 // Sum Subtotal
    //                 $subtotal = $row->cart_amount_item * $row->product_price;

    //                 // Insert Order Detail
    //                 $data2 = array(
    //                     'order_id' => $last_id,
    //                     'product_id' => $row->product_id,
    //                     'oi_product_name' => $row->product_name,
    //                     'oi_product_price' => $row->product_price,
    //                     'oi_product_image' => $row->product_image,
    //                     'order_item_quantity' => $row->cart_amount_item,
    //                     'order_item_subtotal' => $subtotal
    //                 );

    //                 $result2 = $this->m_keranjang->addOrderItem($data2);

    //                 if ($result2 == TRUE) {

    //                     // Check Stock
    //                     $stockOld = $row->product_stock;

    //                     // Update Stock
    //                     $stokBaru = $stockOld - $row->cart_amount_item;
    //                     $data3 = array(
    //                         'product_stock' => $stokBaru
    //                     );

    //                     $this->m_keranjang->updateStock($row->product_id, $data3);

    //                     // Remove Item From tb_kasir
    //                     $result3 = $this->m_keranjang->deleteData($customer_id, $row->product_id);
    //                 } else {

    //                     $this->session->set_flashdata('error_flashData', 'Gagal membuat order detail.');
    //                     redirect(base_url('keranjang'));
    //                     exit;
    //                 }
    //             }

    //             if ($result3 == TRUE) {

    //                 // Insert Order Payment
    //                 $dataOrder = array(
    //                     'order_id' => $last_id,
    //                     'payment_method_id' => $payment_method_id,
    //                     'payment_amount' => $payment_amount
    //                 );

    //                 $this->m_keranjang->addPayment($dataOrder);

    //                 // Insert Kurir
    //                 $dataKurir = array(
    //                     'order_id' => $last_id,
    //                     'kurir_name' => $nama_kurir,
    //                     'kurir_harga' => $ongkir
    //                 );

    //                 $this->m_keranjang->addKurir($dataKurir);

    //                 $this->session->set_flashdata('success_flashData', "Berhasil Melakukan Checkout Transaksi!");
    //                 redirect(base_url("shop/detail-transaksi/$last_id"));
    //             } else {

    //                 $this->session->set_flashdata('error_flashData', 'Gagal Menghapus Item Kasir!');
    //                 redirect(base_url('keranjang'));
    //             }
    //         } else {

    //             $this->session->set_flashdata('error_flashData', 'Gagal membuat order.');
    //             redirect(base_url('keranjang'));
    //         }
    //     }
    // }

    public function hapus()
    {
        if (empty($this->session->userdata('customer_id'))) {

            $this->session->set_flashdata('warning_flashData', 'Anda harus login terlebih dahulu!');
            redirect(base_url('login'));
            exit;
        } else {
            $customer_id = $this->session->userdata('customer_id');
            $product_id = $this->input->post('product_id', TRUE);

            $result = $this->m_keranjang->deleteData($customer_id, $product_id);

            if ($result == TRUE) {

                $this->session->set_flashdata('success_flashData', '<div class="alert alert-success" role="alert">
                Berhasil menghapus barang di keranjang belanja.!
              </div> ');
                redirect(base_url('keranjang'));
            } else {

                $this->session->set_flashdata('error_flashData', '<div class="alert alert-danger" role="alert">
                Gagal menghapus barang di keranjang belanja.!
              </div> ');
                redirect(base_url('keranjang'));
            }
        }
    }

    public function tambah()
    {
        if (empty($this->session->userdata('customer_id'))) {

            $this->session->set_flashdata('warning_flashData', 'Anda harus login terlebih dahulu!');
            redirect(base_url('login'));
            exit;
        } else {
            // menyimpan nilai dari form post yang dikirimkan
            $customer_id = $this->session->userdata('customer_id');
            $product_id = $this->input->post('product_id', TRUE);
            $cart_amount_item = $this->input->post('cart_amount_item', TRUE);

            $data = array(
                'pengguna_id' => $customer_id,
                'hewan_id' => $product_id,
                'jumlah_keranjang' => $cart_amount_item,
            );

            $cekKeranjang = $this->m_keranjang->cekKeranjang($customer_id, $product_id);

            if (!empty($cekKeranjang) || $cekKeranjang == 1) {

                $hasil = $this->m_keranjang->getItemStock($product_id)->result();
                $stock = $hasil[0]->jumlah;

                $QtyBaru = $cart_amount_item;

                if ($QtyBaru > $stock) {
                    $data2 = array(
                        'hewan_id' => $product_id,
                        'pengguna_id' => $customer_id,
                        'jumlah_keranjang' => $stock,
                    );

                    $result2 = $this->m_keranjang->editKeranjang($customer_id, $product_id, $data2);

                    if ($result2 == TRUE) {

                        $this->session->set_flashdata('warning_flashData', "Jumlah melebihi stok ($stock), Berhasil menambahkan max barang.");
                        redirect(base_url("keranjang"));
                    } else {

                        $this->session->set_flashdata('error_flashData', 'Gagal menambahkan jumlah barang.');
                        redirect(base_url("keranjang"));
                    }
                } else {
                    $data2 = array(
                        'hewan_id' => $product_id,
                        'pengguna_id' => $customer_id,
                        'jumlah_keranjang' => $QtyBaru,
                    );

                    $result2 = $this->m_keranjang->editKeranjang($customer_id, $product_id, $data2);

                    if ($result2 == TRUE) {

                        $this->session->set_flashdata('success_flashData', '<div class="alert alert-success" role="alert">
                        Berhasil menambahkan atau mengurangi barang ke keranjang belanja.!
                      </div> ');
                        redirect(base_url("keranjang"));
                    } else {

                        $this->session->set_flashdata('error_flashData', '<div class="alert alert-danger" role="alert">
                        Gagal menambahkan barang ke keranjang belanja.!
                      </div> ');
                        redirect(base_url("keranjang"));
                    }
                }
            } else {

                $result = $this->m_keranjang->addKeranjang($data);

                if ($result == TRUE) {

                    $this->session->set_flashdata('success_flashData', 'Berhasil menambahkan jumlah barang.');
                    redirect(base_url("keranjang"));
                } else {

                    $this->session->set_flashdata('error_flashData', 'Gagal menambahkan jumlah barang.');
                    redirect(base_url("keranjang"));
                }
            }
        }
    }
}
