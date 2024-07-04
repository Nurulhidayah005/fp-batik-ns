<?= $this->extend('template/layout') ?>
<?= $this->section('konten') ?>
<!-- label -->
<section class="label">
    <div class="container">
        <p>HOME / CHECK OUT</p>
    </div>
</section>

<section class="h-100">
    <div style="display: flex; justify-content: center; margin-top:15px;">
        <div class="col-lg-5">
            <div class="card text-white rounded-3" style="background-color: #371d19;">
                <div class="card-body">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h5 class="mb-0">Detail Pembeli</h5>
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/avatar-12.webp"
                    class="img-fluid rounded-3" style="width: 45px;" alt="Avatar">
                </div>
        
                <!-- <p class="small mb-2">Card type</p>
                <a href="#!" type="submit" class="text-white"><i
                    class="fab fa-cc-mastercard fa-2x me-2"></i></a>
                <a href="#!" type="submit" class="text-white"><i
                    class="fab fa-cc-visa fa-2x me-2"></i></a>
                <a href="#!" type="submit" class="text-white"><i
                    class="fab fa-cc-amex fa-2x me-2"></i></a>
                <a href="#!" type="submit" class="text-white"><i class="fab fa-cc-paypal fa-2x"></i></a> -->
        
                <form class="mt-4" method="POST" action="<?= base_url('keranjang/checkout_proses')?>" >
                <?php
                    foreach ($data_keranjang as $index => $row) { 
                ?>
                    <input type="hidden" name="id_keranjangs[]" value="<?= $row->id_keranjang ?>" >
                <?php } ?>

                    <div class="form-outline form-white mb-4">
                    <label class="form-label" for="typeName">Name Pembeli</label>
                    <input type="text" id="typeName" name="nama" class="form-control form-control-lg" size="17"
                        placeholder="Masukkan Nama Lengkap" required />
                    </div>
        
                    <div class="form-outline form-white mb-4">
                    <label class="form-label" for="typeText">Alamat</label>
                    <!-- <textarea name="alamat_jalan"></textarea> -->
                    <textarea type="text" id="typeText"name="alamat_jalan" class="form-control form-control-lg" style="resize: none;" required></textarea>
                    </div>

                    <div class="form-outline form-white mb-4">
                    <label class="form-label" for="kecamatan">Kecamatan</label>
                    <input type="text" id="kecamatan" name="kecamatan" class="form-control form-control-lg" size="17"
                        placeholder="Kecamatan" required />
                    </div>

                    <div class="form-outline form-white mb-4">
                    <label class="form-label" for="kecamatan">Kota</label>
                    <input type="text" id="kota" name="kota" class="form-control form-control-lg" size="17"
                        placeholder="Kota" required />
                    </div>

                    <div class="form-outline form-white mb-4">
                    <label class="form-label" for="kecamatan">Provinsi</label>
                    <input type="text" id="provinsi" name="provinsi" class="form-control form-control-lg" size="17"
                        placeholder="Provinsi" required />
                    </div>
        
                <hr class="my-4">
        
                <div class="d-flex justify-content-between">
                    <p class="mb-2">Subtotal</p>
                    <p class="mb-2"><?= 'Rp. ' . number_format($total, 2, ",", ".") ?></p>
                </div>
        
                <div class="d-flex justify-content-between">
                    <p class="mb-2">Shipping</p>
                    <p class="mb-2">Rp. 0</p>
                </div>
        
                <div class="d-flex justify-content-between mb-4">
                    <p class="mb-2">Total(Incl. taxes)</p>
                    <p class="mb-2"><?= 'Rp. ' . number_format($total, 2, ",", ".") ?></p>
                    <input type="hidden" name="total" value="<?= $total?>">
                </div>
        
                <button type="submit" type="button" class="btn btn-primary btn-block btn-lg">
                    <div class="d-flex justify-content-between">
                    <span>Checkout <i class="fas fa-long-arrow-alt-right ms-2"></i></span>
                    </div>
                </button>
                </form>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="col">
            <div class="card">
                <div class="card-body" style="text-align: center;">
                    <h3 style="margin-bottom: 20px !important;">Pembayaran melalui VA account :</h3>
                    <h4 style="color: black; margin-bottom: 20px;"><?= 'Rp. ' . number_format($total, 2, ",", ".") ?></h4>
                    <h5 style="margin-bottom: 20px;"><strong>BRI</strong> : 2343242535234523</h5>
                    <p class="small mb-2">Card type</p>
                    <img class="me-2" width="45px"
                    src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/visa.svg"
                    alt="Visa" />
                    <img class="me-2" width="45px"
                    src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/amex.svg"
                    alt="American Express" />
                    <img class="me-2" width="45px"
                    src="https://mdbcdn.b-cdn.net/wp-content/plugins/woocommerce-gateway-stripe/assets/images/mastercard.svg"
                    alt="Mastercard" />
                    
                </div>
            </div>
        </div>
</section>

<?= $this->endSection() ?>