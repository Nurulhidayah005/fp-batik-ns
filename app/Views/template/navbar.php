<div class="container">
    <h1><a href="<?= base_url('home') ?>">Batik Nakula Sadewa</a></h1>
    
    <ul>
        <li class="<?= uri_string() == 'home' ? 'active' : '' ?>"><a href="<?= base_url('home') ?>">BERANDA</a></li>
        <li class="<?= uri_string() == 'produk' ? 'active' : '' ?>"><a href="<?= base_url('produk') ?>">BELANJA</i></a></li>
        <li class="<?= uri_string() == 'keranjang' ? 'active' : '' ?>"><a href="<?= base_url('keranjang') ?>"><i class="fas fa-shopping-basket"></i></a></li>
        <?php if (isLoggin()): ?>
            <li class="<?= uri_string() == 'keranjang/transaksi' ? 'active' : '' ?>"><a href="<?= base_url('keranjang/transaksi') ?>">TRANSAKSI</i></a></li>
            <li><a href="<?= base_url('logout') ?>">Logout</a></li>
        <?php else: ?>
            <li class="<?= uri_string() == 'login' ? 'active' : '' ?>"><a href="<?= base_url('login') ?>">Sign In</a></li>
            <li class="<?= uri_string() == 'daftar' ? 'active' : '' ?>"><a href="<?= base_url('register') ?>">Sign Up</a></li>
        <?php endif; ?>

        
    </ul>
</div>
