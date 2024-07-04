<?= $this->extend('template/layout') ?>

<?= $this->section('konten') ?>
<!-- banner -->
<section class="banner">
		<h2><a  href="<?= base_url('produk') ?>">WELCOME TO MY TOKO</a></h2>
	</section>

	<!-- about -->
	<section class="about">
		<div class="container">
			<h3 style="color: brown;">ABOUT</h3>
			<p>Batik Nakula Sadewa merupakan Rumah Produksi yang bergerak di bidang kerajinan batik. Rumah Produksi Batik Nakula Sadewa dikelola dan dipimpin oleh R. Bambang Sumardiyono. Rumah Produksi Batik Nakula Sadewa telah berdiri sejak tahun 1997 di Triharjo, Sleman, Yogyakarta. Dengan berbagai macam prestasi baik di dalam maupun luar negeri, Nakula Sadewa tetap mempertahankan dan menjaga kualitas untuk memuaskan konsumen.</p>
		</div>
	</section>

	<!-- service -->
	<section class="service">
		<div class="container">
			<h3 style="color: brown;">SERVICE</h3>
			<div class="box">
				<div class="col-4">
					<div class="icon"><i class="fas fa-mobile" style="color: brown;"></i></div>
					<h4 style="color: grey;">MOBILE APP</h4>
				</div>
				<div class="col-4">
					<div class="icon"><i class="fas fa-globe" style="color: brown;"></i></div>
					<h4 style="color: grey;">WEB DEVELOPER</h4>
				</div><div class="col-4">
					<div class="icon"><i class="fas fa-edit" style="color: brown;"></i></div>
					<h4 style="color: grey;">DESIGN</h4>
				</div><div class="col-4">
					<div class="icon"><i class="fas fa-chart-bar" style="color: brown;"></i></div>
					<h4 style="color: grey;">DIGITAL MARKETING</h4>
				</div>
			</div>
		</div>
	</section>

<?= $this->endSection() ?>