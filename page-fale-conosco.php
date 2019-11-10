<?php
/**
 * 
 * Template Name: Fale Conosco
 *
 * @package JohnnyDev
 *
 */

get_header(); 

?>

<div class="barba-container" data-namespace="page-fale-conosco">

<section id="titulo-outros">
    <div class="titulo-outros">
      <h1>CONTATO</h1>
    </div>
  </section>

  <section id="contato">
    <div class="contato">
      <?php echo get_dados('descricao'); ?>
      <form id="contato-form">
        <div class="box-input">
          <input type="text" name="nome" id="nome" placeholder="Nome">
        </div>
        <div class="box-input">
          <input type="text" name="email" id="email" placeholder="E-mail">
        </div>
        <div class="box-input">
          <input type="text" name="mensagem" id="mensagem" placeholder="Mensagem">
        </div>
        <button id="btn-submit">
          <span>ENVIAR</span>
        </button>
        <div class="loading">
          <svg class="lds-spinner" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid"><g transform="rotate(0 50 50)">
            <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#1365c0">
                <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.9166666666666666s" repeatCount="indefinite"></animate>
              </rect>
            </g><g transform="rotate(30 50 50)">
              <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#1365c0">
                <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.8333333333333334s" repeatCount="indefinite"></animate>
              </rect>
            </g><g transform="rotate(60 50 50)">
              <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#1365c0">
                <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.75s" repeatCount="indefinite"></animate>
              </rect>
            </g><g transform="rotate(90 50 50)">
              <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#1365c0">
                <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.6666666666666666s" repeatCount="indefinite"></animate>
              </rect>
            </g><g transform="rotate(120 50 50)">
              <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#1365c0">
                <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5833333333333334s" repeatCount="indefinite"></animate>
              </rect>
            </g><g transform="rotate(150 50 50)">
              <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#1365c0">
                <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.5s" repeatCount="indefinite"></animate>
              </rect>
            </g><g transform="rotate(180 50 50)">
              <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#1365c0">
                <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.4166666666666667s" repeatCount="indefinite"></animate>
              </rect>
            </g><g transform="rotate(210 50 50)">
              <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#1365c0">
                <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.3333333333333333s" repeatCount="indefinite"></animate>
              </rect>
            </g><g transform="rotate(240 50 50)">
              <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#1365c0">
                <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.25s" repeatCount="indefinite"></animate>
              </rect>
            </g><g transform="rotate(270 50 50)">
              <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#1365c0">
                <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.16666666666666666s" repeatCount="indefinite"></animate>
              </rect>
            </g><g transform="rotate(300 50 50)">
              <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#1365c0">
                <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="-0.08333333333333333s" repeatCount="indefinite"></animate>
              </rect>
            </g><g transform="rotate(330 50 50)">
              <rect x="47" y="24" rx="9.4" ry="4.8" width="6" height="12" fill="#1365c0">
                <animate attributeName="opacity" values="1;0" keyTimes="0;1" dur="1s" begin="0s" repeatCount="indefinite"></animate>
              </rect>
            </g>
          </svg>
        </div>
      </form>
    </div>
  </section>

  <section id="assessoria">
    <div class="assessoria">
      <h1>ASSESSORIA DE IMPRENSA</h1>
      <img src="<?php echo get_template_directory_uri(); ?>/dist/imgs/email-icon.svg" alt="Email">
      <p><?php echo get_dados('email'); ?></p>
      <img src="<?php echo get_template_directory_uri(); ?>/dist/imgs/phone-icon.svg" alt="Phone">
      <p><?php echo get_dados('telefone'); ?></p>
    </div>
  </section>

</div>

<?php 

get_footer();