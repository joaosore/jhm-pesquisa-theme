<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JohnnyDev
 */

?>

	</div>
	<footer id="footer">
		<div class="newsletter">
			<div class="box-texto">
				<hr>
				<h1>NEWSLETTER</h1>
				<p>Cadastre-se e receba notícias e novidades no seu email</p>
			</div>
			<div class="box-cadastro">
				<?php echo do_shortcode( '[email-subscribers-form id="1"]' ); ?>
				<!-- <input type="text" class="email" placeholder="E-mail">
				<a href="">
					<span>CADASTRAR</span>
				</a> -->
			</div>
		</div>
		<div class="redes-sociais">
			<div class="icones">
				<?php foreach(get_redes() as $item) { ?>
					<a href="<?php echo $item['link']; ?>">
						<img src="<?php echo $item['imagem']['url']; ?>" alt="">
					</a>
				<?php } ?>
			</div>
		</div>
		<div class="direitos">
			<p>Todos os direitos reservados a JHM 2019.</p>
		</div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
