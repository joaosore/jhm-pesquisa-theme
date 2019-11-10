<?php
/**
 * 
 * Template Name: O que fazemos
 *
 * @package JohnnyDev
 *
 */

get_header(); 

?>

<div class="barba-container" data-namespace="page-o-que-fazemos">

  <section id="titulo-o-que-fazemos">
      <div class="titulo-o-que-fazemos">
          <h1>O QUE FAZEMOS</h1>
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

</div>

<?php 

get_footer();