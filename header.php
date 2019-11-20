<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package JohnnyDev
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <!-- <div class="loading-page"> 
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
  </div> -->
  
	<header>
    <nav class="container navbar navbar-expand-lg">

      <a class="navbar-brand" href="/"></a>

      <div class="menu-mobile">
        <div class="bar top"></div>
        <div class="bar right"></div>
        <div class="bar left"></div>
        <div class="bar bottom"></div>
      </div>

      

      <div class="collapse navbar-collapse display-menu" id="conteudoNavbarSuportado">

        <?php echo wp_nav_menu(['menu' => 'Menu 1']); ?>

        <div class="btn-mobile">
          <a href="http://economiailicita.com.br/" >
            <p>plataforma de mercados ilícitos</p>
          </a>
        </div>

      </div>

      <div class="box-btn">
        <a href="http://economiailicita.com.br/" target="_blank">
          <p>plataforma de mercados ilícitos</p>
        </a>
      </div>

    </nav>
	</header>
	
  <div data-barba="wrapper">
	