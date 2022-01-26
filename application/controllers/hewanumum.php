<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
class hewanumum extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("hewan_model");
        $this->load->library('form_validation');
        $this->load->library('session');
        $this->load->model('m_user');
        $this->load->model('m_produk');
        $this->load->model('m_detailproduk');
    }
    public function index()
    {
        $data['lihathewan'] = $this->hewan_model->tampil_data()->result();
        $data['lihathewan1'] = $this->hewan_model->tampil_data()->result_array();
        $data['pembayaran'] = $this->m_user->show_barang();
        // var_dump($data);
        // die;
        $data['user'] = $this->db->get_where('tb_pengguna', ['email' =>
        $this->session->userdata('email')])->row_array();
        $data['hewan'] = $this->db->get_where('tb_hewan')->row_array();
        $this->load->view('layout/header',  $data);
        $this->load->view('konten/hewanumum');
        $this->load->view('layout/footer');
    }
    public function lihat($hewan_id)
    {
        $data['ambil'] = $this->hewan_model->get_hewan_id($hewan_id);
        $data['lihathewan'] = $this->hewan_model->tampil_data()->result();
        $data['lihathewan1'] = $this->hewan_model->tampil_data()->result_array();
        $data['pembayaran'] = $this->m_user->show_barang();
        // var_dump($data);
        // die;
        $data['user'] = $this->db->get_where('tb_pengguna', ['email' =>
        $this->session->userdata('email')])->row_array();

        $this->load->view('layout/header');
        $this->load->view('konten/single-product', $data);
        $this->load->view('layout/footer');
    }
    public function add()
    {
        if (empty($this->session->userdata('customer_id'))) {

            $this->session->set_flashdata('warning_flashData', 'Anda harus login terlebih dahulu!');
            redirect(base_url('authcustomer'));
            exit;
        } else {
            // menyimpan nilai dari form post yang dikirimkan
            $customer_id = $this->session->userdata('customer_id');
            $product_id = $this->input->post('hewan_id', TRUE);
            $cart_amount_item = 1;

            $data = array(
                'pengguna_id' => $customer_id,
                'hewan_id' => $product_id,
                'jumlah_keranjang' => $cart_amount_item
            );

            $cekKeranjang = $this->m_detailproduk->cekKeranjang($customer_id, $product_id);

            if (!empty($cekKeranjang) || $cekKeranjang == 1) {

                $hasil = $this->m_detailproduk->getItemStock($product_id)->result();
                $stock = $hasil[0]->jumlah;

                $hasil2 = $this->m_detailproduk->getCartItemQty($customer_id, $product_id)->result();
                $Qty = $hasil2[0]->cart_amount_item;

                $QtyBaru = $Qty + $cart_amount_item;

                if ($QtyBaru > $stock) {
                    $data2 = array(
                        'product_id' => $product_id,
                        'customer_id' => $customer_id,
                        'jumlah_keranjang' => $stock
                    );

                    $result2 = $this->m_detailproduk->editKeranjang($customer_id, $product_id, $data2);

                    if ($result2 == TRUE) {

                        echo "<div class='row d-flex'>
                        <div class='col-12 col-md-7 col-lg-6 col-xl-5 d-none d-sm-flex fixed-bottom ml-auto'>
                            <div class='w-100 alert alert-warning alert-dismissible fade show d-flex mr-0 mr-md-3 ' style='z-index: 999;'>
                                <a class='close' data-dismiss='alert' aria-label='close' style='cursor: pointer;'>&times;</a>
                                <span><strong>Warning!</strong> Stok barang tersisa ($stock), hanya dapat menyimpan $stock barang dikeranjang</span>
                                </div>
                            </div>
                            <div class='col-12 col-md-7 col-lg-6 col-xl-5 fixed-top d-flex d-sm-none mt-3 ml-auto'>
                                <div class='w-100 alert alert-warning alert-dismissible fade show d-flex mr-0 mr-md-3 ' style='z-index: 999; font-size: smaller;'>
                                    <a class='close' data-dismiss='alert' aria-label='close' style='cursor: pointer;'>&times;</a>
                                    <span><strong>Warning!</strong> Stok barang tersisa ($stock), hanya dapat menyimpan $stock barang dikeranjang</span>
                                    </div>
                                </div>
                        </div>";
                        // $this->session->set_flashdata('warning_flashData', "Jumlah melebihi stok ($stock), Berhasil menambahkan max barang ke keranjang belanja.");
                        // redirect(base_url("hewanumum"));
                    } else {

                        echo "<div class='row d-flex'>
                        <div class='col-12 col-md-7 col-lg-6 col-xl-5 d-none d-sm-flex fixed-bottom ml-auto'>
                            <div class='w-100 alert alert-success alert-dismissible fade show ml-auto mr-0 mr-md-3 ' style='z-index: 999;'>
                                <a class='close' data-dismiss='alert' aria-label='close' style='cursor: pointer;'>&times;</a>
                                <span><strong>Success!</strong> Berhasil menambahkan barang ke keranjang belanja.</span>
                                </div>
                            </div>
                            <div class='col-12 col-md-7 col-lg-6 col-xl-5 fixed-top d-flex d-sm-none mt-3 ml-auto'>
                                <div class='w-100 alert alert-success alert-dismissible fade show d-flex ml-auto mr-0 mr-md-3 ' style='z-index: 999; font-size: smaller;'>
                                    <a class='close' data-dismiss='alert' aria-label='close' style='cursor: pointer;'>&times;</a>
                                    <span><strong>Success!</strong> Berhasil menambahkan barang ke keranjang belanja.</span>
                                    </div>
                                </div>
                        </div>";
                        // $this->session->set_flashdata('error_flashData', 'Gagal menambahkan barang ke keranjang belanja.');
                        // redirect(base_url("hewanumum"));
                    }
                } else {
                    $data2 = array(
                        'product_id' => $product_id,
                        'customer_id' => $customer_id,
                        'jumlah_keranjang' => $QtyBaru
                    );

                    $result2 = $this->m_detailproduk->editKeranjang($customer_id, $product_id, $data2);

                    if ($result2 == TRUE) {

                        echo "<div class='row d-flex'>
                        <div class='col-12 col-md-7 col-lg-6 col-xl-5 d-none d-sm-flex fixed-bottom ml-auto'>
                            <div class='w-100 alert alert-success alert-dismissible fade show ml-auto mr-0 mr-md-3 ' style='z-index: 999;'>
                                <a class='close' data-dismiss='alert' aria-label='close' style='cursor: pointer;'>&times;</a>
                                <span><strong>Success!</strong> Berhasil menambahkan barang ke keranjang belanja.</span>
                                </div>
                            </div>
                            <div class='col-12 col-md-7 col-lg-6 col-xl-5 fixed-top d-flex d-sm-none mt-3 ml-auto'>
                                <div class='w-100 alert alert-success alert-dismissible fade show d-flex ml-auto mr-0 mr-md-3 ' style='z-index: 999; font-size: smaller;'>
                                    <a class='close' data-dismiss='alert' aria-label='close' style='cursor: pointer;'>&times;</a>
                                    <span><strong>Success!</strong> Berhasil menambahkan barang ke keranjang belanja.</span>
                                    </div>
                                </div>
                        </div>";
                        // $this->session->set_flashdata('success_flashData', 'Berhasil menambahkan barang ke keranjang belanja.');
                        // redirect(base_url("shop/produk"));
                    } else {


                        echo "<div class='row d-flex'>
                        <div class='col-12 col-md-7 col-lg-6 col-xl-5 d-none d-sm-flex fixed-bottom ml-auto'>
                            <div class='w-100 alert alert-danger alert-dismissible fade show d-flex mr-0 mr-md-3 ' style='z-index: 999;'>
                                <a class='close' data-dismiss='alert' aria-label='close' style='cursor: pointer;'>&times;</a>
                                <span><strong>Error!</strong> Gagal menambahkan barang ke keranjang belanja.</span>
                                </div>
                            </div>
                            <div class='col-12 col-md-7 col-lg-6 col-xl-5 fixed-top d-flex d-sm-none mt-3 ml-auto'>
                                <div class='w-100 alert alert-danger alert-dismissible fade show d-flex mr-0 mr-md-3 ' style='z-index: 999; font-size: smaller;'>
                                    <a class='close' data-dismiss='alert' aria-label='close' style='cursor: pointer;'>&times;</a>
                                    <span><strong>Error!</strong> Gagal menambahkan barang ke keranjang belanja.</span>
                                    </div>
                                </div>
                        </div>";
                        // $this->session->set_flashdata('error_flashData', 'Gagal menambahkan barang ke keranjang belanja.');
                        // redirect(base_url("shop/produk"));
                    }
                }
            } else {

                $result = $this->m_detailproduk->addKeranjang($data);

                if ($result == TRUE) {

                    echo "<div class='row d-flex'>
                    <div class='col-12 col-md-7 col-lg-6 col-xl-5 d-none d-sm-flex fixed-bottom ml-auto'>
                        <div class='w-100 alert alert-success alert-dismissible fade show ml-auto mr-0 mr-md-3 ' style='z-index: 999;'>
                            <a class='close' data-dismiss='alert' aria-label='close' style='cursor: pointer;'>&times;</a>
                            <span><strong>Success!</strong> Berhasil menambahkan barang ke keranjang belanja.</span>
                            </div>
                        </div>
                        <div class='col-12 col-md-7 col-lg-6 col-xl-5 fixed-top d-flex d-sm-none mt-3 ml-auto'>
                            <div class='w-100 alert alert-success alert-dismissible fade show d-flex ml-auto mr-0 mr-md-3 ' style='z-index: 999; font-size: smaller;'>
                                <a class='close' data-dismiss='alert' aria-label='close' style='cursor: pointer;'>&times;</a>
                                <span><strong>Success!</strong> Berhasil menambahkan barang ke keranjang belanja.</span>
                                </div>
                            </div>
                    </div>";
                    // $this->session->set_flashdata('success_flashData', 'Berhasil menambahkan barang ke keranjang belanja.');
                    // redirect(base_url("shop/produk"));
                } else {

                    echo "<div class='row d-flex'>
                    <div class='col-12 col-md-7 col-lg-6 col-xl-5 d-none d-sm-flex fixed-bottom ml-auto'>
                        <div class='w-100 alert alert-danger alert-dismissible fade show d-flex mr-0 mr-md-3 ' style='z-index: 999;'>
                            <a class='close' data-dismiss='alert' aria-label='close' style='cursor: pointer;'>&times;</a>
                            <span><strong>Error!</strong> Gagal menambahkan barang ke keranjang belanja.</span>
                            </div>
                        </div>
                        <div class='col-12 col-md-7 col-lg-6 col-xl-5 fixed-top d-flex d-sm-none mt-3 ml-auto'>
                            <div class='w-100 alert alert-danger alert-dismissible fade show d-flex mr-0 mr-md-3 ' style='z-index: 999; font-size: smaller;'>
                                <a class='close' data-dismiss='alert' aria-label='close' style='cursor: pointer;'>&times;</a>
                                <span><strong>Error!</strong> Gagal menambahkan barang ke keranjang belanja.</span>
                                </div>
                            </div>
                    </div>";
                    // $this->session->set_flashdata('error_flashData', 'Gagal menambahkan barang ke keranjang belanja.');
                    // redirect(base_url("shop/produk"));
                }
            }
        }
    }
    public function addcart()
    {

        if (empty($this->session->userdata('customer_id'))) {

            $this->session->set_flashdata('warning_flashData', 'Anda harus login terlebih dahulu!');
            redirect(base_url('login'));
            exit;
        } else {
            // menyimpan nilai dari form post yang dikirimkan
            $customer_id = $this->input->post('customer_id', TRUE);
            $product_id = $this->input->post('product_id', TRUE);
            $cart_amount_item = $this->input->post('qty', TRUE);

            $data = array(
                'pengguna_id' => $customer_id,
                'hewan_id' => $product_id,
                'jumlah_keranjang' => $cart_amount_item,


            );

            $cekKeranjang = $this->m_detailproduk->cekKeranjang($customer_id, $product_id);

            if (!empty($cekKeranjang) || $cekKeranjang == 1) {

                $hasil = $this->m_detailproduk->getItemStock($product_id)->result();
                $stock = $hasil[0]->jumlah;

                $hasil2 = $this->m_detailproduk->getCartItemQty($customer_id, $product_id)->result();
                $Qty = $hasil2[0]->jumlah_keranjang;

                $QtyBaru = $Qty + $cart_amount_item;

                if ($QtyBaru > $stock) {
                    $data2 = array(
                        'hewan_id' => $product_id,
                        'pengguna_id' => $customer_id,
                        'jumlah_keranjang' => $stock,

                    );

                    $result2 = $this->m_detailproduk->editKeranjang($customer_id, $product_id, $data2);

                    if ($result2 == TRUE) {

                        $this->session->set_flashdata('warning_flashData', "Jumlah melebihi stok ($stock), Berhasil menambahkan max barang ke keranjang belanja.");
                        redirect(base_url("hewanumum/lihat/$product_id"));
                    } else {

                        $this->session->set_flashdata('error_flashData', 'Gagal menambahkan barang ke keranjang belanja.');
                        redirect(base_url("hewanumum/lihat/$product_id"));
                    }
                } else {
                    $data2 = array(
                        'hewan_id' => $product_id,
                        'pengguna_id' => $customer_id,
                        'jumlah_keranjang' => $QtyBaru,

                    );

                    $result2 = $this->m_detailproduk->editKeranjang($customer_id, $product_id, $data2);

                    if ($result2 == TRUE) {

                        $this->session->set_flashdata('success_flashData',  '<div class="alert alert-success" role="alert">
                        Berhasil menambahkan barang ke keranjang belanja.!
                      </div> ');
                        redirect(base_url("hewanumum/lihat/$product_id"));
                    } else {

                        $this->session->set_flashdata('error_flashData', '<div class="alert alert-danger" role="alert">
                        Gagal menambahkan barang ke keranjang belanja.!
                      </div> ');
                        redirect(base_url("hewanumum/lihat/$product_id"));
                    }
                }
            } else {

                $result = $this->m_detailproduk->addKeranjang($data);

                if ($result == TRUE) {

                    $this->session->set_flashdata('success_flashData', '<div class="alert alert-success" role="alert">
                    Berhasil menambahkan barang ke keranjang belanja.!
                  </div> ');
                    redirect(base_url("hewanumum/lihat/$product_id"));
                } else {

                    $this->session->set_flashdata('error_flashData', '<div class="alert alert-danger" role="alert">
                    Gagal menambahkan barang ke keranjang belanja.!
                  </div> ');
                    redirect(base_url("hewanumum/lihat/$product_id"));
                }
            }
        }
    }
    public function beli()
    {

        if (empty($this->session->userdata('USER_ID'))) {

            $this->session->set_flashdata('warning_flashData', 'Anda harus login terlebih dahulu!');
            redirect(base_url('login'));
            exit;
        } else {
            // menyimpan nilai dari form post yang dikirimkan
            $customer_id = $this->input->post('customer_id', TRUE);
            $product_id = $this->input->post('product_id', TRUE);
            $cart_amount_item = $this->input->post('qty', TRUE);

            $data = array(
                'pengguna_id' => $customer_id,
                'hewan_id' => $product_id,
                'jumlah_keranjang' => $cart_amount_item,

            );

            $cekKeranjang = $this->m_detailproduk->cekKeranjang($customer_id, $product_id);

            if (!empty($cekKeranjang) || $cekKeranjang == 1) {

                $hasil = $this->m_detailproduk->getItemStock($product_id)->result();
                $stock = $hasil[0]->jumlah;

                $hasil2 = $this->m_detailproduk->getCartItemQty($customer_id, $product_id)->result();
                $Qty = $hasil2[0]->jumlah_keranjang;

                $QtyBaru = $Qty + $cart_amount_item;

                if ($QtyBaru > $stock) {
                    $data2 = array(
                        'hewan_id' => $product_id,
                        'pengguna_id' => $customer_id,
                        'jumlah_keranjang' => $stock,
                    );

                    $result2 = $this->m_detailproduk->editKeranjang($customer_id, $product_id, $data2);

                    if ($result2 == TRUE) {

                        $this->session->set_flashdata('warning_flashData', "Jumlah melebihi stok ($stock), Berhasil menambahkan max barang ke keranjang belanja.");
                        redirect(base_url("keranjang"));
                    } else {

                        $this->session->set_flashdata('error_flashData', '<div class="alert alert-danger" role="alert">
                        Gagal menambahkan barang ke keranjang belanja.!
                      </div> ');
                        redirect(base_url("keranjang"));
                    }
                } else {
                    $data2 = array(
                        'hewan_id' => $product_id,
                        'pengguna_id' => $customer_id,
                        'jumlah_keranjang' => $QtyBaru,
                    );

                    $result2 = $this->m_detailproduk->editKeranjang($customer_id, $product_id, $data2);

                    if ($result2 == TRUE) {

                        $this->session->set_flashdata('success_flashData', '<div class="alert alert-success" role="alert">
                        Berhasil menambahkan barang ke keranjang belanja.!
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

                $result = $this->m_detailproduk->addKeranjang($data);

                if ($result == TRUE) {

                    $this->session->set_flashdata('success_flashData', '<div class="alert alert-success" role="alert">
                    Berhasil menambahkan barang ke keranjang belanja.!
                  </div> ');
                    redirect(base_url("keranjang"));
                } else {

                    $this->session->set_flashdata('error_flashData', '<div class="alert alert-danger" role="alert">
                    Gagal menambahkan barang ke keranjang belanja.!
                  </div> ');
                    redirect(base_url("keranjang"));
                }
            }
        }
    }
}
