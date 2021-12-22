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
									<h4 class="mb-0"><strong><?= $user['nama']; ?>
										</strong></h4>
									<span>Malang,Jawa Timur</span>
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
								<p><?= $user['alamat']; ?></p>

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
										<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Coba">Coba</a></li>

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
														<div class="form-group">
															<label>Nama</label>
															<input type="text" readonly class="form-control " id="nama" name="nama" value="<?= $user['nama']; ?>  ">
														</div>
														<div class="form-group">

															<label>Email</label>
															<input type="text" readonly class="form-control " id="jenis_kelamin" name="jenis_kelamin" value="<?= $user['email']; ?>  ">
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
															<label>Provinsi</label>
															<input readonly type="text" class="form-control" value="<?php if (!empty($user['province_name'])) : ?><?= $user['province_name']; ?>, <?= $user['city_name']; ?>, <?= $user['subdistrict_name']; ?><?php endif; ?>">
														</div>
														<div class="form-group">
															<label>Kota / Kabupaten</label>
															<input type="text" class="form-control" placeholder="Kota">
														</div>
														<div class="form-group">
															<label>Kecamatan</label>
															<input type="text" class="form-control" placeholder="Kecamatan">
														</div>
														<div class="form-group">
															<label>Alamat</label>
															<textarea readonly rows="4" type="text" class="form-control" value="<?= $user['alamat']; ?>"><?= $user['alamat']; ?></textarea>
														</div>


													</div>
												</div>



											</form>
										</div>
										<div class="tab-pane" id="EditProfile">
											<form class="row pl-5 pr-md-5 d-flex w-100 mx-auto" action="<?= base_url('pageprofile/perbarui'); ?>" method="POST" id="contactForm">
												<input type="hidden" name="email" value="<?= $user['email']; ?>">
												<div class="col-md-12 form-group form-check-inline w-100 d-flex">
													<div class="row w-100 d-flex">
														<div class="col-4 w-100 d-flex">
															<label for="nama" class="font-weight-bolder mr-4 text-dark" style="font-size: 17px;">Nama</label>
														</div>
														<div class="col-8 w-100 d-flex">
															<input required maxlength="50" type="text" class="form-control text-dark" value="<?= $user['nama']; ?>" id="customer_name" name="customer_name" placeholder="Nama Lengkap" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Lengkap'">
														</div>
													</div>
												</div>
												<div class="col-md-12 form-group form-check-inline w-100 d-flex">
													<div class="row w-100 d-flex">
														<div class="col-4 w-100 d-flex">
															<label for="email" class="font-weight-bolder mr-4 text-dark" style="font-size: 17px;">Email</label>
														</div>
														<div class="col-8 w-100 d-flex">
															<input required maxlength="50" type="text" class="form-control text-dark" value="<?= $user['email']; ?>" id="email" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
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
																<option value="Perempuan" <?php echo ('Perempuan' == $user['jenis_kelamin']) ? 'selected="selected"' : ''; ?>>Perempuan</option>
																<option value="Laki-Laki" <?php echo ('Laki-Laki' == $user['jenis_kelamin']) ? 'selected="selected"' : ''; ?>>Laki-Laki</option>
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
															<input required type="date" value="<?= $user["tanggal_lahir"]; ?>" class="form-control text-dark">

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
															<select name="prov" class="form-control" id="provinsi">
																<option>- Select Provinsi -</option>
																<?php foreach ($provinsi as $prov) {
																	echo '<option value="' . $prov->id . '">' . $prov->nama . '</option>';
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
															<select name="kab" class="form-control" id="kabupaten">
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
															<select name="kec" class="form-control" id="kecamatan">
																<option>Select Kecamatan</option>
															</select>
														</div>
													</div>
												</div>
												<div class="col-md-12 form-group form-check-inline w-100 d-flex">
													<div class="row w-100 d-flex">
														<div class="col-4 w-100 d-flex">
															<label for="desa" class="font-weight-bolder mr-4 text-dark" style="font-size: 17px;">Desa</label>
														</div>
														<div class="col-8">
															<select name="des" class="form-control" id="desa">
																<option>Select Desa</option>
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
										<div class="tab-pane" id="Coba">

											<div class="body">
												<p>Provinsi :</p>
												<select name="prov" class="form-control" id="provinsi">
													<option>- Select Provinsi -</option>
													<?php foreach ($provinsi as $prov) {
														echo '<option value="' . $prov->id . '">' . $prov->nama . '</option>';
													} ?>
												</select>

												<p>Kabupaten :</p>
												<select name="kab" class="form-control" id="kabupaten">
													<option value=''>Select Kabupaten</option>
												</select>

												<p>Kecamatan :</p>
												<select name="kec" class="form-control" id="kecamatan">
													<option>Select Kecamatan</option>
												</select>

												<p>Desa :</p>
												<select name="des" class="form-control" id="desa">
													<option>Select Desa</option>
												</select>
												<hr>
											</div>

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
</body>



</html>