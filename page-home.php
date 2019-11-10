<?php
/**
 * 
 * Template Name: Home
 *
 * @package JohnnyDev
 *
 */

get_header(); 

?>

<div class="barba-container" data-namespace="page-home">

  <section id="inicial">
    <div class="owl-carousel owl-theme carousel-1">
      <?php foreach(get_dados('carousel') as $item) { ?>
        <div class="item">
          <div class="card-carousel" style="background-image: url(<?php echo $item['imagem']['url']; ?>);">
            <div class="box">
              <h1><?php echo $item['titulo']; ?></h1>
              <?php echo $item['descricao']; ?>
              <a href="<?php echo $item['botao']['url']; ?>" target="<?php echo $item['botao']['target']; ?>" class="btn-custo" >
                <span><?php echo $item['botao']['title']; ?></span>
              </a>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </section>

  <section id="video">
    <div class="btn-play"></div>
    <video id="video-play" src="<?php echo get_dados('video'); ?>" poster="<?php echo get_dados('preload')['url']; ?>"></video>
  </section>

  <section id="o-que-fazemos">
    <div class="o-que-fazemos">
      <?php foreach(get_dados('conteudos') as $item) { ?>
        <div class="row principal">
          <div class="col-md-6" style="padding: 0;">
            <div class="imagem-pesquisa">
              <img src="<?php echo $item['imagem']['url'] ?>">
            </div>
          </div>
          <div class="col-md-6">
            <div class="texto">
              <div class="conteudo">
                <div class="titulo-e-texto">
                  <h1><?php echo $item['titulo'] ?></h1>
                  <?php echo $item['descricao'] ?>
                </div>
                <a href="<?php echo $item['botao']['url']; ?>" target="<?php echo $item['botao']['target']; ?>" class="botao" >
                  <span><?php echo $item['botao']['title']; ?></span>
                </a>
              </div>
            </div>
          </div>
        </div>
      <?php } ?>
    </div>
  </section>

  <section id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="owl-carousel owl-theme carousel-3">
            <?php foreach(get_dados('itens_portfolio') as $item) { ?>
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