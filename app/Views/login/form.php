<?= $this->extend('template/layout') ?>
<?= $this->section('konten') ?>

<!-- sign -->
<section>
<div class="col" style="text-align: center;">
        <?php if ($error_msg??null): ?>
        <p style="color: red">
            <?= $error_msg ?>
        </p>
        <?php endif?>
        <div class="sign">
            <form action="<?= base_url('login/proses_login') ?>" method="POST" enctype="multipart/form-data">
                <h1>Login</h1>
                <input type="text" placeholder="Username" name="username" class="txtb">
                <input type="password" placeholder="Password" name="password" class="txtb">
                <input type="submit" value="Login" class="signup">
                <a href="<?= base_url('register') ?>" style="color: white;">Belum punya akun ?</a>
            </form>
        </div>
    </div>
</section>

<?= $this->endSection() ?>