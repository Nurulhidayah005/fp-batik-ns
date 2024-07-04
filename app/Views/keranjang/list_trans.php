<?= $this->extend('template/layout') ?>
<?= $this->section('konten') ?>

<!-- label -->
<section class="label">
    <div class="container">
        <p>HOME / TRANSAKSI</p>
    </div>
</section>

<section>
    <div class="container">
        <div class="col" style="min-height: 300px;">
            <table class="table">
              <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Tujuan Pengiriman</th>
                        <th>Alamat Jalan</th>
                        <th>Kecamatan</th>
                        <th>Kota</th>
                        <th>Provinsi</th>
                        <th>Tanggal</th>
                        <th>Total Pembelian</th>
                        <th>Status</th>
                    </tr>
              </thead>
              <tbody>
              <?php foreach ($data_trans as $index => $row) { ?>
                    <tr>
                        <td scope="row"><?= $index+1 ?></td>
                        <td><?= $row->nama ?></td>
                        <td><?= $row->alamat_jalan ?></td>
                        <td><?= $row->kecamatan ?></td>
                        <td><?= $row->kota ?></td>
                        <td><?= $row->provinsi ?></td>
                        <td><?= date("d-M-Y", strtotime($row->tgl_transaksi)) ?></td>
                        <td><?= 'Rp '.number_format($row->total_bayar) ?></td>
                        <td><span class="badge text-bg-warning">Belum Bayar</span></td>
                    </tr>
                    <?php } ?>
              </tbody>
            </table>
        </div>
    </div>
</section>

<?= $this->endSection() ?>