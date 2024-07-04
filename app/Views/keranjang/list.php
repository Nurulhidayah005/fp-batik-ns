<?= $this->extend('template/layout') ?>
<?= $this->section('konten') ?>
<!-- label -->
<section class="label">
    <div class="container">
        <p>HOME / KERANJANG</p>
    </div>
</section>

<section class="h-100 gradient-custom">
  <div class="container py-5">
    <div class="row d-flex justify-content-center my-4">
      <div class="col-md-8">
        <div class="card mb-4">
          <div class="card-header py-3">
            
            <h5 class="mb-0">Cart - <?= count($data_keranjang) ?> items</h5>
          </div>
          <div class="card-body">
          <?php if (count($data_keranjang) == 0): ?>
            <div class="info">
                <h3>Keranjang anda kosong silahkan kembali <a href="<?= base_url('/produk') ?>"><u>BELANJA</u></a></h3>
            </div> 
            <?php else: ?>
            <form action="<?= base_url('keranjang/checkout')?>" method="get">
            <?php
            $total = 0;
            foreach ($data_keranjang as $index => $row) { 
            ?>
            <!-- Single item -->
            <input id="id_produk" name="id_produks[]" type="hidden" value="<?= $row->id_produk ?>">
            <div class="row">
              <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                <!-- Image -->
                <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                  <img src="<?= base_url('img/'.$row->foto_produk) ?>"
                    class="w-100" alt="<?= $row->nama_produk ?>" />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.2)"></div>
                  </a>
                </div>
                <!-- Image -->
              </div>

              <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                <!-- Data -->
                <h5><strong><?= $row->nama_produk ?></strong></h5>
                <p>Deskripsi produk :</p>
                <p><?= $row->deskripsi ?></p>
                <a role="button" type="button" class="btn btn-danger btn-sm me-1 mb-2" data-mdb-toggle="tooltip" href="<?= 'keranjang/proses?id_keranjang='.$row->id_keranjang.'&aksi=hapus' ?>"><i class="fas fa-trash"></i></a>
                <!-- <button type="button" class="btn btn-danger btn-sm mb-2" data-mdb-toggle="tooltip"
                  title="Move to the wish list">
                  <i class="fas fa-heart"></i>
                </button> -->
              </div>

              <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <!-- Quantity -->
                <div class="d-flex mb-4" style="max-width: 300px">
                  <button type="button" class="btn btn-primary px-3 me-2"
                    onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                    <i class="fas fa-minus"></i>
                  </button>

                  <div class="form-outline">
                    <input id="form1" min="0" name="jumlah_beli[]" value="<?= $row->jumlah_beli ?>" type="number" class="form-control" />
                    <label class="form-label" for="form1">Jumlah</label>
                  </div>

                  <button type="button" class="btn btn-primary px-3 ms-2"
                    onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                    <i class="fas fa-plus"></i>
                  </button>
                </div>
                <!-- Quantity -->

                <!-- Price -->
                <p class="text-start text-md-center">
                  <strong><?= 'Rp. ' . number_format($row->harga, 2, ",", ".") ?></strong>
                </p>
                <!-- Price -->
              </div>
            </div>
            <!-- Single item -->
            <?php 
                $total += $row->harga*$row->jumlah_beli; 
            } 
            ?>

            <hr class="my-4" />
          </div>
            <?php endif; ?>
         
        </div>
        <?php if(count($data_keranjang) > 0): ?>
        <div class="card mb-4">
          <div class="card-body">
            <p><strong>Perkiraan waktu delivery</strong></p>
            <p class="mb-0"><?= changedateFormat('d.m.Y', date('l', strtotime(date('l'). '+1 day'))) ?> - <?= changedateFormat('d.m.Y', date('l', strtotime(date('l'). '+6 day'))) ?></p>
          </div>
        </div>
        <div class="card mb-4 mb-lg-0">
          <div class="card-body">
            <p><strong>Menerima pembayaran via</strong></p>
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
      <div class="col-md-4">
        <div class="card mb-4">
          <div class="card-header py-3">
            <h5 class="mb-0">Summary</h5>
          </div>
          <div class="card-body">
            <ul class="list-group list-group-flush">
              <li
                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                Products
                <span><?= 'Rp. ' . number_format($total, 2, ",", ".") ?></span>
              </li>
              <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                Shipping
                <span>Gratis</span>
              </li>
              <li
                class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                <div>
                  <strong>Total amount</strong>
                  <!-- <strong>
                    <p class="mb-0">(including VAT)</p>
                  </strong> -->
                </div>
                <span><strong><?= 'Rp. ' . number_format($total, 2, ",", ".") ?></strong></span>
              </li>
            </ul>

            <button type="submit" style="color: white !important;" class="btn btn-primary btn-lg btn-block">
              Go to checkout
            </button>
          </div>
          </form>
        </div>
      </div>
      <?php endif?>
    </div>
  </div>
</section>

<?= $this->endSection() ?>