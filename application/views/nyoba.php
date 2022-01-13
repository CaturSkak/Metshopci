<section class="login_box_area section-margin pt-0 mt-0 pt-md-5 mt-md-5 px-0 mx-0 mx-md-5 pb-0 mb-0">
    <div class="container pb-0 mb-0">
        <div class="row">
            <div class="col-xl-4 col-md-12 d-inline-flex align-items-stretch px-0">
                <div class="card rounded-0 shadow w-100 bg-brown border-0">
                    <div class="card-body">
                        <form action="<?= base_url('app/user-profile/upload'); ?>" enctype="multipart/form-data" method="POST">
                            <div class="avatar-upload mt-0 pt-0">
                                <div class="avatar-edit">
                                    <input type="hidden" name="customer_id" value="<?= $user->customer_id; ?>">
                                    <input type="hidden" name="customer_image" value="<?= $user->customer_image; ?>">
                                    <input required id="file" name="file" type="file" accept=".png, .jpg, .jpeg" oninput="javascript: submit()" />
                                    <label for="file"></label>
                                </div>
                                <div class="avatar-preview shadow bg-dark">
                                    <?php
                                    if (!empty($user->customer_image)) {
                                        $url = base_url("assets/img/customer/") . $user->customer_image;
                                        if (@getimagesize($url)) {
                                            $urlImg = base_url("assets/img/customer/") . $user->customer_image;
                                        } else {
                                            $urlImg = base_url("assets/img/system/undraw_profile.svg");
                                        }
                                    } else {
                                        $urlImg = base_url("assets/img/system/undraw_profile.svg");
                                    }
                                    ?>
                                    <div id="imagePreview" style="background-image: url(<?= $urlImg; ?>);">
                                    </div>
                                </div>
                            </div>
                            <label for="file" class="btn btn-sm btn-outline-light rounded-pill form-control mt-n5 font-weight-bold">Upload Foto</label>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-md-12 align-items-stretch px-0">
                <div class="login_form_inner border">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item ml-auto mr-4 mb-5">
                            <button class="btn-sm btn-outline-brown nav-link shadow active" id="login-tab" data-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="true"><i class="fa fa-user"></i> Profil</button>
                        </li>
                        <li class="nav-item mr-auto ml-4 mb-5">
                            <button class="btn-sm btn-outline-brown nav-link shadow" id="create-tab" data-toggle="tab" href="#edit" role="tab" aria-controls="edit" aria-selected="false"><i class="fa fa-edit"></i> Edit</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
                            <h3>Informasi Data Diri</h3>
                            <div class="konten m-2 mx-sm-5 px-sm-3 px-md-5">
                                <table class="table text-left">
                                    <tr>
                                        <td width="190px">
                                            <span class="font-weight-bolder">Nama</span>
                                        </td>
                                        <td>
                                            <span><?= $user->customer_name; ?></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="font-weight-bolder">Email</span>
                                        </td>
                                        <td>
                                            <span><?= $user->email; ?></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="font-weight-bolder">Jenis Kelamin</span>
                                        </td>
                                        <td>
                                            <span><?= $user->gender; ?></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="font-weight-bolder">No Telephone</span>
                                        </td>
                                        <td>
                                            <span><?= $user->phone_number; ?></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="font-weight-bolder">Alamat Pengiriman</span>
                                        </td>
                                        <td>
                                            <span><?= $user->address; ?></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <span class="font-weight-bolder">Daerah Pengiriman</span>
                                        </td>
                                        <td>
                                            <span><?php if (!empty($user->province_name)) : ?><?= $user->province_name; ?>, <?= $user->city_name; ?>, <?= $user->subdistrict_name; ?><?php endif; ?></span>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="edit" role="tabpanel" aria-labelledby="create-tab">
                            <h3>Edit Data Diri</h3>
                            <form class="row pl-5 pr-md-5 d-flex w-100 mx-auto" action="<?= base_url('app/user-profile/edit'); ?>" method="POST" id="contactForm">
                                <input type="hidden" name="customer_id" value="<?= $user->customer_id; ?>">
                                <div class="col-md-12 form-group form-check-inline w-100 d-flex">
                                    <div class="row w-100 d-flex">
                                        <div class="col-4 w-100 d-flex">
                                            <label for="customer_name" class="font-weight-bolder mr-4 text-dark" style="font-size: 17px;">Nama</label>
                                        </div>
                                        <div class="col-8 w-100 d-flex">
                                            <input required maxlength="50" type="text" class="form-control text-dark" value="<?= $user->customer_name; ?>" id="customer_name" name="customer_name" placeholder="Nama Lengkap" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Lengkap'">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 form-group form-check-inline w-100 d-flex">
                                    <div class="row w-100 d-flex">
                                        <div class="col-4 w-100 d-flex">
                                            <label for="email" class="font-weight-bolder mr-4 text-dark" style="font-size: 17px;">Email</label>
                                        </div>
                                        <div class="col-8 w-100 d-flex">
                                            <input required maxlength="50" type="text" class="form-control text-dark" value="<?= $user->email; ?>" id="email" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 form-group form-check-inline w-100 d-flex">
                                    <div class="row w-100 d-flex">
                                        <div class="col-4 w-100 d-flex">
                                            <label for="gender" class="font-weight-bolder mr-4 text-dark" style="font-size: 17px;">Gender</label>
                                        </div>
                                        <div class="col-8 w-100 d-flex">
                                            <select class="form-control rounded" name="gender" id="gender">
                                                <option value="" disabled hidden selected>Jenis Kelamin</option>
                                                <option value="Perempuan" <?php echo ('Perempuan' == $user->gender) ? 'selected="selected"' : ''; ?>>Perempuan</option>
                                                <option value="Laki-Laki" <?php echo ('Laki-Laki' == $user->gender) ? 'selected="selected"' : ''; ?>>Laki-Laki</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 form-group form-check-inline w-100 d-flex">
                                    <div class="row w-100 d-flex">
                                        <div class="col-4 w-100 d-flex">
                                            <label for="phone_number" class="font-weight-bolder mr-4 text-dark" style="font-size: 17px;">Phone</label>
                                        </div>
                                        <div class="col-8 w-100 d-flex">
                                            <input required type="number" class="form-control text-dark" value="<?= $user->phone_number; ?>" id="phone_number" name="phone_number" placeholder="Nomor Telephone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nomor Telephone'">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12 form-group form-check-inline w-100 d-flex">
                                    <div class="row w-100 d-flex">
                                        <div class="col-4 w-100 d-flex">
                                            <label for="province_id" class="font-weight-bolder mr-4 text-dark" style="font-size: 17px;">Provinsi</label>
                                        </div>
                                        <div class="col-8 w-100 d-flex">
                                            <select class="form-control rounded" name="province_id" id="province_id">
                                                <option value="" selected disabled hidden>Pilih Provinsi</option>
                                                <?php foreach ($provinsi as $row) : ?>
                                                    <option value="<?= $row->province_id; ?>" <?php echo ($row->province_id == $user->province_id) ? 'selected="selected"' : ''; ?>><?= $row->province_name; ?></option>
                                                <?php endforeach ?>
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
                                            <select class="form-control rounded" name="city_id" id="city_id">
                                                <option value="" selected disabled hidden>Pilih Kota/Kabupaten</option>
                                                <?php foreach ($kota as $row) : ?>
                                                    <option value="<?= $row->city_id; ?>" <?php echo ($row->city_id == $user->city_id) ? 'selected="selected"' : ''; ?>><?= $row->city_name; ?></option>
                                                <?php endforeach ?>
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
                                            <select class="form-control rounded" name="subdistrict_id" id="subdistrict_id">
                                                <option value="" selected disabled hidden>Pilih Kecamatan</option>
                                                <?php foreach ($kecamatan as $row) : ?>
                                                    <option value="<?= $row->subdistrict_id; ?>" <?php echo ($row->subdistrict_id == $user->subdistrict_id) ? 'selected="selected"' : ''; ?>><?= $row->subdistrict_name; ?></option>
                                                <?php endforeach ?>
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
                                            <textarea name="address" id="address" class="form-control text-dark" cols="10" rows="5"><?= $user->address; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" value="submit" class="btn btn-block btn-brown rounded-pill mt-3 mr-5 mr-md-0">Update Data</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Bootstrap Script Core -->
<script src="<?= base_url() ?>assets/vendors/jquery/jquery-3.2.1.min.js"></script>
<script src="<?= base_url() ?>assets/vendors/bootstrap/popper.min.js"></script>
<script src="<?= base_url() ?>assets/vendors/bootstrap/bootstrap.min.js"></script>
<!-- Custom scripts -->
<script src="<?= base_url() ?>assets/js/script.js"></script>
<script>
    $(document).ready(function() {

        $('#province_id').change(function() {
            var provinsi = $('#province_id').val();
            $.ajax({
                type: 'GET',
                url: '<?= base_url('app/user-profile/cekKota'); ?>',
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
                url: '<?= base_url('app/user-profile/cekKecamatan'); ?>',
                data: 'city_id=' + kota,
                success: function(data) {
                    $("#subdistrict_id").html(data);
                }
            });
        });
    });
</script>