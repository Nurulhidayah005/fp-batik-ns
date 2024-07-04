<!DOCTYPE html>
<html>
<?= $this->include('template/call_head') ?>
<body>
	<!-- loader -->
	<div class="bg-loader">
		<div class="loader"></div>
	</div>

	<!-- header -->
	    <?= $this->include('template/page_header') ?>
	<!-- banner -->

    <!-- Main content -->
        <?= $this->include('template/page_konten') ?>

	<!-- footer -->
        <?= $this->include('template/page_footer') ?>

    <!-- js -->
    <?= $this->include('template/call_js') ?>
</body>
</html>