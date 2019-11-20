<?php
/**
 * 
 * Template Name: Sobre
 *
 * @package JohnnyDev
 *
 */

get_header(); 

?>

<main class="barba-container" data-barba="container" data-barba-namespace="page-sobre">

  <section id="titulo-sobre">
    <div class="titulo-sobre">
      <h1>SOBRE</h1>
    </div>
  </section>

  <section id="informação">
    <div class="container">
      <div class="row">
        <div class="col">
          <?php echo get_dados('texto'); ?>
        </div>
      </div>
    </div>
  </section>

  <section id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="owl-carousel owl-theme carousel-3">
            <?php foreach(get_dados('itens_portfolio', 7) as $item) { ?>
              <div class="item">
                <h1><?php echo $item['titulo']; ?></h1>
                <div class="imagem">
                  <img class="top" src="<?php echo $item['imagem']['url']; ?>">
                </div>
                <a href="<?php echo $item['botao']['url']; ?>" target="<?php echo $item['botao']['target']; ?>" class="botao" >
                  <span><?php echo $item['botao']['title']; ?></span>
                </a>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>

<?php 

get_footer();