<?php
/**
 * 
 * Template Name: Portfólio
 *
 * @package JohnnyDev
 *
 */

get_header(); 

?>

<div class="barba-container" data-namespace="page-portfolio">

  <section id="titulo-outros">
    <div class="titulo-outros">
      <h1>PORTFÓLIO</h1>
    </div>
  </section>

  <section id="pdfs">
    <div class="conteudo">
      <?php foreach(get_dados('pdfs') as $item) { ?>
        
          <div class="box">
            <a href="<?php echo $item['pdf']['url']; ?>">
              <div class="content">
                <h1><?php echo $item['titulo']; ?></h1>
                <P>PDF</P>
              </div>
            </a>
          </div>
        
      <?php } ?>
    </div>
  </section>

</div>

<?php 

get_footer();