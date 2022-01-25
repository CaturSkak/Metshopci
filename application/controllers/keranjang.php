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
        $this->load->model('m_pembayaran');
        $this->load->library('form_validation');
        $this->load->database();
    }

    public function index()
    {

        // var_dump($data);
        // die;
        // $data['path'] = base_url('assets');
        // $userID = $this->session->userdata('email');
        // $id = $this->session->userdata('pengguna_id');

        // $data['userr'] = $this->m_user->getDataByID($userID)->row_array();
        // $data['provinsi'] = $this->m_wilayah->getProvinsi()->result_array();
        // $data['kot'] = $this->m_wilayah->getkot()->result_array();
        // $data['kec'] = $this->m_wilayah->getkec()->result_array();


        // $row = $this->m_wilayah->getUserProvinsi($id)->row_array();
        // $province_id = $this->input->post('prov', TRUE);
        // $data['kota'] = $this->m_wilayah->getKota($province_id)->result();

        // if (!empty($row['province_id'])) {

        //     $data['kota'] = $this->m_wilayah->getKota($row['province_id'])->result();

        //     $row2 = $this->m_user->getUserKota($userID)->row();

        //     if (!empty($row->province_id)) {

        //         $data['kecamatan'] = $this->m_user->getKecamatan($row2->city_id)->result();
        //     }
        // }

        if (empty($this->session->userdata('email'))) {

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
            // var_dump($data);
            // die;
            // $id = $this->session->userdata('USER_ID');
            // $data['kab_id'] = $this->session->userdata('USER_KABUPATEN');

            // $data['customer'] = $this->M_Keranjang->getDataCustomer($id)->row();
            // $data['barang'] = $this->M_Keranjang->getDataKeranjang($id)->result();
            // $data['metode'] = $this->M_Keranjang->getDataMetodePembayaran()->result();

            // //Berat Total Barang
            // $data['berat'] = $this->M_Keranjang->getDataBerat($id)->row()->berat;

            $this->load->view('layout/header',  $data);
            $this->load->view('konten/keranjang', $data);
            $this->load->view('layout/footer');
        }
    }

    // public function tes()
    // {
    //     $row = array(1, 2);
    //     $id = $this->session->userdata('USER_ID');
    //     $berat = $this->M_Keranjang->getDataBerat($id)->row()->berat;
    //     $kab_id = $this->session->userdata('USER_KABUPATEN');
    //     foreach ($row as $row) {
    //         echo "<option value='" . $kab_id . "'>" . $berat . "</option>";
    //     }
    // }

    // public function kurir()
    // {
    //     $id = $this->session->userdata('USER_ID');
    //     $berat = $this->M_Keranjang->getDataBerat($id)->row()->berat;
    //     $kab_id = $this->session->userdata('USER_KABUPATEN');
    //     $barang = $this->M_Keranjang->getDataKeranjang($id)->result();
    //     $stat = false;

    //     if (!empty($kab_id) && !empty($barang)) {
    //         //kurir JNE
    //         if (!empty($this->M_Keranjang->getDataKurir('jne', $kab_id, $berat))) {
    //             $data_kurir = $status = $this->M_Keranjang->getDataKurir('jne', $kab_id, $berat);
    //             if ($status["rajaongkir"]["status"]["description"] !== "OK") {
    //                 echo "error";
    //             } else {
    //                 $stat = true;
    //                 echo '<option class="text-secondary" selected disabled hidden value="">Pilih Kurir</option>';
    //                 echo '<option class="text-dark" value="0.Ambil Di Toko Kapron Petshop">Ambil Di Toko Kapron Petshop (Gratis)</option>';
    //                 for ($k = 0; $k < count($data_kurir['rajaongkir']['results']); $k++) {
    //                     for ($l = 0; $l < count($data_kurir['rajaongkir']['results'][$k]['costs']); $l++) {
    //                         $value1 = $data_kurir['rajaongkir']['results'][$k]['costs'][$l]['cost'][0]['value'];
    //                         $service1 = $data_kurir['rajaongkir']['results'][$k]['costs'][$l]['service'];
    //                         $harga1 = number_format($data_kurir['rajaongkir']['results'][$k]['costs'][$l]['cost'][0]['value'], 0, ",", ".");
    //                         echo "<option class='text-dark' value='$value1.JNE ($service1)'>JNE $service1 (Rp $harga1)</option>";
    //                     }
    //                 }
    //             }
    //         } else {
    //             echo "error";
    //         }

    //         //Kurir POS
    //         if (!empty($this->M_Keranjang->getDataKurir('pos', $kab_id, $berat))) {
    //             $data_kurir2 = $this->M_Keranjang->getDataKurir('pos', $kab_id, $berat);
    //             if (!$stat) {
    //                 echo '<option class="text-secondary" selected disabled hidden value="">Pilih Kurir</option>';
    //                 echo '<option class="text-dark" value="0.Ambil Di Toko Kapron Petshop">Ambil Di Toko Kapron Petshop (Gratis)</option>';
    //             }
    //             for ($k = 0; $k < count($data_kurir2['rajaongkir']['results']); $k++) {
    //                 for ($l = 0; $l < count($data_kurir2['rajaongkir']['results'][$k]['costs']); $l++) {
    //                     $value2 = $data_kurir2['rajaongkir']['results'][$k]['costs'][$l]['cost'][0]['value'];
    //                     $service2 = $data_kurir2['rajaongkir']['results'][$k]['costs'][$l]['service'];
    //                     $harga2 = number_format($data_kurir2['rajaongkir']['results'][$k]['costs'][$l]['cost'][0]['value'], 0, ",", ".");
    //                     echo "<option class='text-dark' value='$value2.POS ($service2)'>POS $service2 (Rp $harga2)</option>";
    //                 }
    //             }
    //         } else {
    //             echo "error";
    //         }
    //     } else {
    //         echo "empty";
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
    //         $result = $this->M_Keranjang->addOrder($data);

    //         if ($result == TRUE) {

    //             // Get latest inserted id
    //             $last_id = $this->db->insert_id();

    //             // Get Data from tb_keranjang
    //             $keranjang = $this->M_Keranjang->getDataKeranjangCheckout($customer_id)->result();

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

    //                 $result2 = $this->M_Keranjang->addOrderItem($data2);

    //                 if ($result2 == TRUE) {

    //                     // Check Stock
    //                     $stockOld = $row->product_stock;

    //                     // Update Stock
    //                     $stokBaru = $stockOld - $row->cart_amount_item;
    //                     $data3 = array(
    //                         'product_stock' => $stokBaru
    //                     );

    //                     $this->M_Keranjang->updateStock($row->product_id, $data3);

    //                     // Remove Item From tb_kasir
    //                     $result3 = $this->M_Keranjang->deleteData($customer_id, $row->product_id);
    //                 } else {

    //                     $this->session->set_flashdata('error_flashData', 'Gagal membuat order detail.');
    //                     redirect(base_url('shop/keranjang'));
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

    //                 $this->M_Keranjang->addPayment($dataOrder);

    //                 // Insert Kurir
    //                 $dataKurir = array(
    //                     'order_id' => $last_id,
    //                     'kurir_name' => $nama_kurir,
    //                     'kurir_harga' => $ongkir
    //                 );

    //                 $this->M_Keranjang->addKurir($dataKurir);

    //                 $this->session->set_flashdata('success_flashData', "Berhasil Melakukan Checkout Transaksi!");
    //                 redirect(base_url("shop/detail-transaksi/$last_id"));
    //             } else {

    //                 $this->session->set_flashdata('error_flashData', 'Gagal Menghapus Item Kasir!');
    //                 redirect(base_url('shop/keranjang'));
    //             }
    //         } else {

    //             $this->session->set_flashdata('error_flashData', 'Gagal membuat order.');
    //             redirect(base_url('shop/keranjang'));
    //         }
    //     }
    // }

    // public function delete()
    // {
    //     if (empty($this->session->userdata('USER_ID'))) {

    //         $this->session->set_flashdata('warning_flashData', 'Anda harus login terlebih dahulu!');
    //         redirect(base_url('login'));
    //         exit;
    //     } else {
    //         $customer_id = $this->session->userdata('USER_ID');
    //         $product_id = $this->input->post('product_id', TRUE);

    //         $result = $this->M_Keranjang->deleteData($customer_id, $product_id);

    //         if ($result == TRUE) {

    //             $this->session->set_flashdata('success_flashData', 'Barang berhasil dihapus dari keranjang belanja.');
    //             redirect(base_url('shop/keranjang'));
    //         } else {

    //             $this->session->set_flashdata('error_flashData', 'Gagal menghapus barang dari keranjang belanja.');
    //             redirect(base_url('shop/keranjang'));
    //         }
    //     }
    // }

    // public function add()
    // {
    //     if (empty($this->session->userdata('USER_ID'))) {

    //         $this->session->set_flashdata('warning_flashData', 'Anda harus login terlebih dahulu!');
    //         redirect(base_url('login'));
    //         exit;
    //     } else {
    //         // menyimpan nilai dari form post yang dikirimkan
    //         $customer_id = $this->session->userdata('USER_ID');
    //         $product_id = $this->input->post('product_id', TRUE);
    //         $cart_amount_item = $this->input->post('cart_amount_item', TRUE);

    //         $data = array(
    //             'product_id' => $product_id,
    //             'customer_id' => $customer_id,
    //             'cart_amount_item' => $cart_amount_item
    //         );

    //         $cekKeranjang = $this->M_Keranjang->cekKeranjang($customer_id, $product_id);

    //         if (!empty($cekKeranjang) || $cekKeranjang == 1) {

    //             $hasil = $this->M_Keranjang->getItemStock($product_id)->result();
    //             $stock = $hasil[0]->product_stock;

    //             $QtyBaru = $cart_amount_item;

    //             if ($QtyBaru > $stock) {
    //                 $data2 = array(
    //                     'product_id' => $product_id,
    //                     'customer_id' => $customer_id,
    //                     'cart_amount_item' => $stock
    //                 );

    //                 $result2 = $this->M_Keranjang->editKeranjang($customer_id, $product_id, $data2);

    //                 if ($result2 == TRUE) {

    //                     $this->session->set_flashdata('warning_flashData', "Jumlah melebihi stok ($stock), Berhasil menambahkan max barang.");
    //                     redirect(base_url("shop/keranjang"));
    //                 } else {

    //                     $this->session->set_flashdata('error_flashData', 'Gagal menambahkan jumlah barang.');
    //                     redirect(base_url("shop/keranjang"));
    //                 }
    //             } else {
    //                 $data2 = array(
    //                     'product_id' => $product_id,
    //                     'customer_id' => $customer_id,
    //                     'cart_amount_item' => $QtyBaru
    //                 );

    //                 $result2 = $this->M_Keranjang->editKeranjang($customer_id, $product_id, $data2);

    //                 if ($result2 == TRUE) {

    //                     $this->session->set_flashdata('success_flashData', 'Berhasil menambahkan jumlah barang.');
    //                     redirect(base_url("shop/keranjang"));
    //                 } else {

    //                     $this->session->set_flashdata('error_flashData', 'Gagal menambahkan jumlah barang.');
    //                     redirect(base_url("shop/keranjang"));
    //                 }
    //             }
    //         } else {

    //             $result = $this->M_Keranjang->addKeranjang($data);

    //             if ($result == TRUE) {

    //                 $this->session->set_flashdata('success_flashData', 'Berhasil menambahkan jumlah barang.');
    //                 redirect(base_url("shop/keranjang"));
    //             } else {

    //                 $this->session->set_flashdata('error_flashData', 'Gagal menambahkan jumlah barang.');
    //                 redirect(base_url("shop/keranjang"));
    //             }
    //         }
    //     }
    // }
}
