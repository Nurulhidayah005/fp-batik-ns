<?= $this->extend('template/layout') ?>
<?= $this->section('konten') ?>
	<!-- label -->
	<section class="label">
		<div class="container">
			<p>HOME / BELANJA</p>
		</div>
	</section>

	<!-- gambar -->
	<selection class="gambargerak">
		<div align="center">
			<marquee width ="1200">
				<img src="<?= base_url('img/k12.jpeg')?>" height="100">
				<img src="<?= base_url('img/k13.jpeg')?>" height="100">
				<img src="<?= base_url('img/k14.jpeg')?>" height="100">
				<img src="<?= base_url('img/k15.jpeg')?>" height="100">
				<img src="<?= base_url('img/k16.jpeg')?>" height="100">
				<img src="<?= base_url('img/k17.jpeg')?>" height="100">
				<img src="<?= base_url('img/k18.jpeg')?>" height="100">
				<img src="<?= base_url('img/k19.jpeg')?>" height="100">
				<img src="<?= base_url('img/k20.jpeg')?>" height="100">
				<img src="<?= base_url('img/k21.jpeg')?>" height="100">
				<img src="<?= base_url('img/k22.jpeg')?>" height="100">
				<img src="<?= base_url('img/k23.jpeg')?>" height="100">
				<img src="<?= base_url('img/k24.jpeg')?>" height="100">
				<img src="<?= base_url('img/k25.jpeg')?>" height="100">
				<img src="<?= base_url('img/k26.jpeg')?>" height="100">
				<img src="<?= base_url('img/k27.jpeg')?>" height="100">
				<img src="<?= base_url('img/k28.jpeg')?>" height="100">
				<img src="<?= base_url('img/k29.jpeg')?>" height="100">
				<img src="<?= base_url('img/k30.jpeg')?>" height="100">
			</marquee>
		</div>
	</selection>

	<!-- kategori -->
	<section class="kategori">
		<div class="container">
			<h3>KATEGORI</h3>
			<div class="box">
				<div class="col-7">
					<div class="icon"><i class="fas fa-hamburger"></i></div>
					<h4>MAKANAN</h4>
				</div>
				<div class="col-7">
					<div class="icon"><i class="fas fa-mobile-alt"></i></div>
					<h4>ELECTRONIC</h4>
				</div>
				<div class="col-7">
					<div class="icon"><i class="fas fa-tshirt"></i></div>
					<h4>FASHION</h4>
				</div>
				<div class="col-7">
					<div class="icon"><i class="fas fa-couch"></i></div>
					<h4>ITEM</h4>
				</div>
				<div class="col-7">
					<div class="icon"><i class="fas fa-paw"></i></div>
					<h4>PET</h4>
				</div>
				<div class="col-7">
					<div class="icon"><i class="fas fa-gamepad"></i></div>
					<h4>GAME</h4>
				</div>
				<div class="col-7">
					<div class="icon"><i class="fas fa-random"></i></div>
					<h4>RANDOM</h4> <br><br>
				</div>
			</div>
		</div>
	</section>

	<!-- recomendasi -->
	<div class="rekomendasi">
		<h3>REKOMENDASI</h3>
	</div>
    <h3>Pencarian Produk : <?= $pencarian_id_produk==''?'':$pencarian_id_produk ?></h3>
    <hr/>
     
    <form>
        <div class="col-md-6" style="margin-left: 10px">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Nama Produk" aria-label="nama-produk" aria-describedby="button-addon2" name="cari">
                <button type="submit" class="btn btn-outline-secondary" type="button" id="button-addon2" onclick="setScrollbar()">Cari</button>
            </div>
        </div>
    </form>
    
    </div>
</div>
	<!-- beli beli -->
	<div class='gambar'>
    <?php foreach ($data as $index => $row) { ?>
        <div class='foto'>
            <img src="<?= base_url('img/'.$row->foto_produk) ?>">
            <h2><?= $row->nama_produk ?></h2>
            <p><?= 'Rp. ' . number_format($row->harga, 2, ",", ".") ?></p> <br>
            <a href="<?= base_url('keranjang/proses?aksi=add&id_produk='.$row->id_produk); ?>">Buy Now</a>
        </div>
    <?php 

    }

        if (count($data) == 0) {

        echo '<div class="row">
                <div class="col" style="text-align: center;">
                    <h3>Data Tidak Ditemukan</h3>
                </div>
            </div>';

        }
    ?>

    <br><br><br><br><br><br>
</div>

<!-- service -->
<section class="service">
    <div class="container">
        <h3>SERVICE</h3>
        <div class="box">
            <div class="col-4">
                <div class="icon"><i class="fas fa-mobile"></i></div>
                <h4>MOBILE APP</h4>
            </div>
            <div class="col-4">
                <div class="icon"><i class="fas fa-globe"></i></div>
                <h4>WEB DEVELOPER</h4>
            </div><div class="col-4">
                <div class="icon"><i class="fas fa-edit"></i></div>
                <h4>DESIGN</h4>
            </div><div class="col-4">
                <div class="icon"><i class="fas fa-chart-bar"></i></div>
                <h4>DIGITAL MARKETING</h4>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>