<!doctype html>
<html lang="en">


<body class="theme-orange">

    <div id="wrapper">


        <div id="main-content">
            <div class="block-header">
                <div class="row clearfix">
                    <div class="col-md-6 col-sm-12">
                        <h2>Profil Saya</h2>
                    </div>
                    <div class="col-md-6 col-sm-12 text-right">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>index"><i class="icon-home"></i></a></li>
                            <li class="breadcrumb-item">Halaman</li>
                            <li class="breadcrumb-item active">Profil Saya</li>
                        </ul>
                        <a href="javascript:void(0);" class="btn btn-sm btn-primary" title="">Buat Baru</a>
                    </div>
                </div>
            </div>
            <div class="container-fluid">

                <div class="row clearfix">



                    <div class="col-lg-4 col-md-12">
                        <div class="card profile-header">

                            <div class="body text-center">

                                <?= $this->session->flashdata('message'); ?>

                                <form action="<?= base_url('pageprofile/edit'); ?>" enctype="multipart/form-data" method="POST">
                                    <div class="avatar-upload mt-1 pt-1">
                                        <div class="avatar-edit">
                                            <input type="hidden" name="pengguna_id" value="<?= $user['pengguna_id']; ?>">
                                            <input type="hidden" name="foto_pengguna" value="<?= $user['foto_pengguna']; ?>">
                                            <input required id="file" name="file" type="file" accept=".png, .jpg, .jpeg" oninput="javascript: submit()" />
                                            <label for="file"></label>
                                        </div>
                                        <div class="avatar-preview ">
                                            <?php
                                            if (!empty($user['foto_pengguna'])) {
                                                $url = base_url('assets/images/profil/') . $user['foto_pengguna'];
                                                if (@getimagesize($url)) {
                                                    $urlImg = base_url('assets/images/profil/') . $user['foto_pengguna'];
                                                } else {
                                                    $urlImg = base_url('assets/images/profil/') . $user['foto_pengguna'];
                                                }
                                            } else {
                                                $urlImg = base_url('assets/images/profil/') . $user['foto_pengguna'];
                                            }
                                            ?>
                                            <div id="imagePreview"><img style="width: 190px; height: 190px; object-fit: cover;" width="140px" src="<?= $urlImg; ?>" class="rounded-circle" alt="">
                                            </div>
                                        </div>

                                    </div>
                                    <label for="file" class="btn btn-sm btn-outline rounded-pill form-control  font-weight-bold">Upload Foto</label>
                                </form>
                                <!-- <div class="profile-image mb-3"><img width="140px" src="<?= base_url('assets/images/profil/') . $user['foto_pengguna']; ?>" class="rounded-circle" alt=""></div> -->
                                <div>
                                    <h4 class="mb-0"><strong><?= $user['nama_lengkap']; ?>
                                        </strong></h4>
                                    <span><?php if (!empty($userr['province_name'])) : ?><?= $userr['city_name']; ?>,<?= $userr['province_name']; ?><?php endif; ?></span>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="header">
                                <h2>Info</h2>
                                <ul class="header-dropdown dropdown dropdown-animated scale-left">
                                    <li> <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse"><i class="icon-refresh"></i></a></li>
                                    <li><a href="javascript:void(0);" class="full-screen"><i class="icon-size-fullscreen"></i></a></li>
                                    <li class="dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another Action</a></li>
                                            <li><a href="javascript:void(0);">Something else</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <small class="text-muted">Alamat: </small>
                                <p><?php if (!empty($userr['province_name'])) : ?><?= $user['alamat']; ?>,Kecamatan <?= $userr['subdistrict_name']; ?>, <?= $userr['city_name']; ?>,<?= $userr['province_name']; ?><?php endif; ?></p>

                                <hr>
                                <small class="text-muted">Email: </small>
                                <p><?= $user['email']; ?>
                                </p>
                                <hr>
                                <small class="text-muted">Nomor Hp: </small>
                                <p>
                                    <?= $user['nomor_telepon']; ?>
                                </p>
                                <hr>
                                <small class="text-muted">Tanggal Lahir: </small>
                                <p class="m-b-0"><?php if ($user['tanggal_lahir'] == 0) {
                                                        echo  "&nbsp;";
                                                    } else {
                                                        echo date('d F Y', strtotime($user["tanggal_lahir"]));
                                                    }; ?></p>
                                <hr>
                                <small class="text-muted">Karyawan sejak: </small>
                                <p><i class="fa fa-briefcase m-r-5"></i><?= date('d F Y', $user['tanggal_dibuat']); ?>
                                </p>
                                <!-- <p><i class="fa fa-facebook  m-r-5"></i> facebook.com/abdulmuh</p>
                                <p><i class="fa fa-instagram m-r-5"></i> instagram.com/abdulmuh</p> -->
                            </div>
                        </div>

                        <div class="card">

                            <div class="body">
                                <div class="header bline">
                                    <h2>Toko MetShopPet's I</h2>
                                </div>
                                <img class="img-fluid" src="assets/images/gd1.png" alt="img">
                                <div class="header bline">
                                    <h2>Toko MetShopPet's II</h2>
                                </div>
                                <img class="img-fluid" src="assets/images/gd.png" alt="img">
                                <ul class="right_chat list-unstyled mb-0">
                                    <li>
                                        <a href="javascript:void(0);">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-8 col-md-12">
                        <div class="card">
                            <div class="body">
                                <center>Profil Saya</center>
                                </ul>
                            </div>

                        </div>
                        <?= $this->session->flashdata('messagee'); ?>

                        <div class="tab-pane" id="Settings">

                            <div class="card">
                                <div class="header bline">
                                    <h2>Informasi Dasar</h2><br>
                                    <ul class="nav nav-tabs-new2">
                                        <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#Profile">Profil</a></li>
                                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#EditProfile">Edit</a></li>
                                        <!-- <li class="nav-item"><a class="nav-link " data-toggle="tab" href="#Profile1">Profil1</a></li>
										<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#EditProfile1">Edit1</a></li> -->

                                    </ul>
                                    <ul class="header-dropdown dropdown dropdown-animated scale-left">
                                        <li> <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse"><i class="icon-refresh"></i></a></li>
                                        <li><a href="javascript:void(0);" class="full-screen"><i class="icon-size-fullscreen"></i></a></li>
                                        <li class="dropdown">
                                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="javascript:void(0);">Tindakan</a></li>
                                                <li><a href="javascript:void(0);">Tindakan Lainnya</a></li>
                                                <li><a href="javascript:void(0);">Lain-nya</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <div class="tab-content">
                                        <div class="tab-pane show active" id="Profile">
                                            <form action="<?= base_url('pageprofile/perbarui'); ?>" enctype="multipart/form-data" method="POST">
                                                <div class="row clearfix">
                                                    <div class="col-lg- col-md-12">
                                                        <input type="hidden" name="pengguna_id" value="<?= $user['pengguna_id']; ?>">
                                                        <input type="hidden" name="email" value="<?= $user['email']; ?>">
                                                        <div class="form-group">
                                                            <label>Nama</label>
                                                            <input type="text" readonly class="form-control " id="nama" name="nama" value="<?= $user['nama_lengkap']; ?>  ">
                                                        </div>
                                                        <div class="form-group">

                                                            <label>Email</label>
                                                            <input type="text" readonly class="form-control " id="email" name="email" value="<?= $user['email']; ?>  ">
                                                        </div>
                                                        <div class="form-group">

                                                            <label>Jenis Kelamin</label>
                                                            <input type="text" readonly class="form-control " id="email" name="email" value="<?= $user['jenis_kelamin']; ?>  ">
                                                        </div>
                                                        <div class="form-group">

                                                            <label>Nomor Hp</label>
                                                            <input type="text" readonly class="form-control " id="nohp" name="nohp" value="<?= $user['nomor_telepon']; ?>  ">
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Tanggal Lahir</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="icon-calendar"></i></span>
                                                                </div>
                                                                <input class="form-control" readonly value="<?php if ($user['tanggal_lahir'] == 0) {
                                                                                                                echo  "&nbsp;";
                                                                                                            } else {
                                                                                                                echo date('d F Y', strtotime($user["tanggal_lahir"]));
                                                                                                            }; ?>">

                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <label>Daerah Pengiriman</label>

                                                            <input readonly type="text" class="form-control" value="<?php if (!empty($userr['province_name'])) : ?><?= $userr['province_name']; ?>, <?= $userr['city_name']; ?>,Kecamatan <?= $userr['subdistrict_name']; ?><?php endif; ?>">


                                                        </div>
                                                        <div class="form-group">
                                                            <label>Alamat</label>
                                                            <textarea readonly rows="4" type="text" class="form-control" value="<?= $userr['alamat']; ?>"><?= $userr['alamat']; ?></textarea>
                                                        </div>


                                                    </div>
                                                </div>



                                            </form>

                                        </div>
                                        <div class="tab-pane" id="EditProfile">
                                            <form class="row pl-5 pr-md-5 d-flex w-100 mx-auto" action="<?= base_url('pageprofile/perbarui'); ?>" method="POST" id="contactForm">
                                                <input type="hidden" name="pengguna_id" value="<?= $user['pengguna_id']; ?>">
                                                <div class="col-md-12 form-group form-check-inline w-100 d-flex">
                                                    <div class="row w-100 d-flex">
                                                        <div class="col-4 w-100 d-flex">
                                                            <label for="nama" class="font-weight-bolder mr-4 text-dark" style="font-size: 17px;">Nama</label>
                                                        </div>
                                                        <div class="col-8 w-100 d-flex">
                                                            <input required maxlength="50" type="text" class="form-control text-dark" value="<?= $user['nama_lengkap']; ?>" id="customer_name" name="customer_name" placeholder="Nama Lengkap" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Lengkap'">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 form-group form-check-inline w-100 d-flex">
                                                    <div class="row w-100 d-flex">
                                                        <div class="col-4 w-100 d-flex">
                                                            <label for="email" class="font-weight-bolder mr-4 text-dark" style="font-size: 17px;">Email</label>
                                                        </div>
                                                        <div class="col-8 w-100 d-flex">
                                                            <input readonly required maxlength="50" type="text" class="form-control text-dark" value="<?= $user['email']; ?>" id="email" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 form-group form-check-inline w-100 d-flex">
                                                    <div class="row w-100 d-flex">
                                                        <div class="col-4 w-100 d-flex">
                                                            <label for="gender" class="font-weight-bolder mr-4 text-dark" style="font-size: 17px;">Jenis Kelamin</label>
                                                        </div>
                                                        <div class="col-8 w-100 d-flex">
                                                            <select class="form-control rounded" name="gender" id="gender">
                                                                <option value="" disabled hidden selected>Jenis Kelamin</option>
                                                                <option value="Laki-Laki" <?php if ($user['jenis_kelamin'] == 'Laki-Laki') echo 'selected'; ?>>Laki-Laki</option>
                                                                <option value="Perempuan" <?php if ($user['jenis_kelamin'] == 'Perempuan') echo 'selected'; ?>>Perempuan</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 form-group form-check-inline w-100 d-flex">
                                                    <div class="row w-100 d-flex">
                                                        <div class="col-4 w-100 d-flex">
                                                            <label for="gender" class="font-weight-bolder mr-4 text-dark" style="font-size: 17px;">Tanggal Lahir</label>
                                                        </div>
                                                        <div class="col-8 w-100 d-flex">
                                                            <input required type="date" value="<?= $user["tanggal_lahir"]; ?>" class="form-control text-dark" name="tanggal_lahir">

                                                            <!-- <input required type="date" class="form-control text-dark" value="<?= date('d-m-Y', strtotime($user["tanggal_lahir"])); ?>" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tanggal Lahir'"> -->
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 form-group form-check-inline w-100 d-flex">
                                                    <div class="row w-100 d-flex">
                                                        <div class="col-4 w-100 d-flex">
                                                            <label for="phone_number" class="font-weight-bolder mr-4 text-dark" style="font-size: 17px;">Nomor Hp</label>
                                                        </div>
                                                        <div class="col-8 w-100 d-flex">
                                                            <input required type="number" class="form-control text-dark" value="<?= $user['nomor_telepon']; ?>" id="phone_number" name="phone_number" placeholder="Nomor Telephone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nomor Telephone'">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 form-group form-check-inline w-100 d-flex">
                                                    <div class="row w-100 d-flex">
                                                        <div class="col-4 w-100 d-flex">
                                                            <label for="province_id" class="font-weight-bolder mr-4 text-dark" style="font-size: 17px;">Provinsi</label>
                                                        </div>
                                                        <div class="col-8 w-100 d-flex">
                                                            <select name="prov" class="form-control" id="province_id">
                                                                <!-- <option value="" selected disabled hidden>Pilih Provinsi</option>
																<?php foreach ($provinsi as $row) : ?>
																	<option value="<?= $row->province_id; ?>" <?php echo ($row->province_id == $userr->province_id) ? 'selected="selected"' : ''; ?>><?= $row->province_name; ?></option>
																<?php endforeach ?> -->
                                                                <!-- <option value="" selected disabled hidden>Pilih Provinsi</option>
																<?php foreach ($provinsi as $row) : ?>
																	<option value="<?= $row['province_id']; ?>" <?php echo ($row['province_id'] == isset($userr['province_id'])) ? 'selected="selected"' : ''; ?>><?= $row['province_name']; ?></option>
																<?php endforeach ?> -->
                                                                <option>- Select Provinsi -</option>
                                                                <?php foreach ($provinsi as $prov) {
                                                                    echo '<option value="' . $prov['province_id'] . '">' . $prov['province_name'] . '</option>';
                                                                } ?>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 form-group form-check-inline w-100 d-flex">
                                                    <div class="row w-100 d-flex">
                                                        <div class="col-4 w-100 d-flex">
                                                            <label for="city_id" class="font-weight-bolder mr-4 text-dark" style="font-size: 17px;">Kota/Kab</label>
                                                        </div>
                                                        <div class="col-8 w-100 d-flex">
                                                            <select name="kab" class="form-control" id="city_id">
                                                                <!-- <option value="" selected disabled hidden>Pilih Kota/Kabupaten</option>
																<?php foreach ($kota as $row) : ?>
																	<option value="<?= $row->city_id; ?>" <?php echo ($row->city_id == $user->city_id) ? 'selected="selected"' : ''; ?>><?= $row->city_name; ?></option>
																<?php endforeach ?> -->
                                                                <option value=''>Select Kabupaten</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 form-group form-check-inline w-100 d-flex">
                                                    <div class="row w-100 d-flex">
                                                        <div class="col-4 w-100 d-flex">
                                                            <label for="subdistrict_id" class="font-weight-bolder mr-4 text-dark" style="font-size: 17px;">Kecamatan</label>
                                                        </div>
                                                        <div class="col-8">
                                                            <select name="kec" class="form-control" id="subdistrict_id">
                                                                <!-- <option value="" selected disabled hidden>Pilih Kecamatan</option>
																<?php foreach ($kecamatan as $row) : ?>
																	<option value="<?= $row->subdistrict_id; ?>" <?php echo ($row->subdistrict_id == $user->subdistrict_id) ? 'selected="selected"' : ''; ?>><?= $row->subdistrict_name; ?></option>
																<?php endforeach ?> -->
                                                                <option>Select Kecamatan</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-12 form-group form-check-inline w-100 d-flex">
                                                    <div class="row w-100 d-flex">
                                                        <div class="col-4 w-100 d-flex">
                                                            <label for="address" class="font-weight-bolder mr-4 text-dark" style="font-size: 17px;">Alamat</label>
                                                        </div>
                                                        <div class="col-8 w-100 d-flex">
                                                            <textarea name="address" id="address" class="form-control text-dark" cols="10" rows="5"><?= $user['alamat']; ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <button type="submit" value="submit" class="btn btn-primary  rounded-pill mt-3 mr-5 mr-md-0">Update Data</button>
                                            </form>
                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="header bline">
                                <h2>Ubah Kata Sandi</h2>
                                <ul class="header-dropdown dropdown dropdown-animated scale-left">
                                    <li> <a href="javascript:void(0);" data-toggle="cardloading" data-loading-effect="pulse"><i class="icon-refresh"></i></a></li>
                                    <li><a href="javascript:void(0);" class="full-screen"><i class="icon-size-fullscreen"></i></a></li>
                                    <li class="dropdown">
                                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="javascript:void(0);">Tindakan</a></li>
                                            <li><a href="javascript:void(0);">Tindakan Lainnya</a></li>
                                            <li><a href="javascript:void(0);">Lain-nya</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="body">
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12">
                                        <?= $this->session->flashdata('messagge'); ?>
                                        <form action="<?= base_url('pageprofile/editpassword'); ?>" enctype="multipart/form-data" method="POST">
                                            <!-- <div class="form-group">
                                                    <label for="password_lama">Kata Sandi Lama</label>
                                                    <input type="password" nama="password_lama" id="password_lama" class="form-control" placeholder="Kata Sandi Lama">
                                                    <?= form_error('password_lama', ' <small class="text-danger pl-3">', '</small>'); ?>

                                                </div> -->
                                            <div class="form-group">
                                                <label for="password0">Kata Sandi Lama</label>
                                                <input type="password" name="password0" class="form-control" id="signup-password0" placeholder="Kata Sandi Lama">
                                                <?= form_error('password0', ' <small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Kata Sandi Baru</label>
                                                <input type="password" name="password" class="form-control" id="signup-password" placeholder="Kata Sandi">
                                                <?= form_error('password', ' <small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <div class="form-group">
                                                <label for="password2">Ulangi Kata Sandi Baru</label>
                                                <input type="password" name="password2" class="form-control" id="signup-password2" placeholder="Konfirmasi Password">
                                                <?= form_error('password2', ' <small class="text-danger pl-3">', '</small>'); ?>
                                            </div>
                                            <div class="form-grup">
                                                <button type="submit" class="btn btn-primary" value="editpassword" name="editpassword">Perbarui Kata Sandi</button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>




                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>

    </div>

    <!-- Javascript -->
    <script src="assets/bundles/libscripts.bundle.js"></script>
    <script src="assets/bundles/vendorscripts.bundle.js"></script>

    <script src="assets/bundles/knob.bundle.js"></script><!-- Jquery Knob-->
    <script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script>

    <script src="assets/bundles/mainscripts.bundle.js"></script>
    <script src="assets/vendor/summernote/dist/summernote.js"></script>

    <script>
        $(function() {
            $('.knob').knob({
                draw: function() {}
            });
        });
    </script>


    <script src="<?php echo $path; ?>/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/js/script.js"></script>

    <!-- <script>
		$(document).ready(function() {

			$('#province_id').change(function() {
				var provinsi = $('#province_id').val();
				$.ajax({
					type: 'GET',
					url: '<?= base_url('Wilayah/cekKota'); ?>',
					data: 'province_id=' + provinsi,
					success: function(data) {
						$("#city_id").html(data);
						$("#subdistrict_id").val('');
					}
				});
			});

			$('#city_id').change(function() {
				var kota = $('#city_id').val();
				$.ajax({
					type: 'GET',
					url: '<?= base_url('Wilayah/cekKecamatan'); ?>',
					data: 'city_id=' + kota,
					success: function(data) {
						$("#subdistrict_id").html(data);
					}
				});
			});
		});
	</script> -->

    <script>
        $(document).ready(function() {
            $("#province_id").change(function() {
                var url = "<?php echo site_url('pageprofile/add_ajax_kab'); ?>/" + $(this).val();
                $('#city_id').load(url);
                return false;
            })

            $("#city_id").change(function() {
                var url = "<?php echo site_url('pageprofile/add_ajax_kec'); ?>/" + $(this).val();
                $('#subdistrict_id').load(url);
                return false;
            })


        });
    </script>

</body>

</html>