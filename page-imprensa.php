<?php
/**
 * 
 * Template Name: Imprensa
 *
 * @package JohnnyDev
 *
 */

get_header(); 

?>

<div class="barba-container" data-namespace="page-imprensa">

  <section id="titulo-outros">
    <div class="titulo-outros">
      <h1>IMPRENSA</h1>
    </div>
  </section>

  <section id="releases">
    <div class="conteudo">
      <h1>RELEASES</h1>
      <div class="accordion">
        <?php foreach(get_dados('acordion') as $item) { ?>
          <div class="box">
            <div class="title">
              <span><?php echo $item['titulo']; ?></span>
            </div>
            <div class="text">
              <?php echo $item['descricao']; ?>
            </div>
          </div>
        <?php } ?>
      </div>
    </div>
  </section>

  <section id="entrevistas">
    <div class="conteudo">
      <h1>ENTREVISTAS</h1>
      <div class="owl-carousel owl-theme carousel-2">
        <?php foreach(get_dados('carousel') as $item) { ?>
          <div class="item">
            <div class="video" style="background-image: url(<?php echo $item['titulo']; ?>); ">
              <h1><?php echo $item['titulo']; ?></h1>
            </div>
          </div>
        <?php } ?>
      </div>
    </div> 
  </section>

  <seciont id="poadcast">
    <div class="conteudo">
      <h1>POADCAST</h1>
      <p>DESCRIÇÃOEM ATÉ DUAS LINHAS</p>
      <a href="<?php echo get_dados('link')['url']; ?>">
        <span>OUVIR</span>
      </a>
    </div>
  </secion>

</div>

<?php 

get_footer();