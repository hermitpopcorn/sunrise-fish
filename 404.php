<?php get_header(); ?>

	<div class="container main-container pl-0 pr-0">

		<?php get_template_part('parts/header'); ?>

		<div class="content-container">

			<div class="wrap text-center">
				<h1>404</h1>
				<h5>URL yang diminta tidak ditemukan.</h5>
				<br/>
				<p>Jika Anda pikir ini adalah kesalahan, mohon <a href="mailto:unpadhimade@gmail.com">kontak kami</a>.</p>
				<br/>
				<p style="font-size: 0.8em">
					<a href="<?php echo get_home_url() ?>">Klik di sini untuk kembali ke beranda.</a>
				</p>
			</div>

		</div>

<?php get_footer(); ?>
