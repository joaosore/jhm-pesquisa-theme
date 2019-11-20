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

<main class="barba-container" data-barba="container" data-barba-namespace="page-portfolio">

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

</main>

<?php 

get_footer();