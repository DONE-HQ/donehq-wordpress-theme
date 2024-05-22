<!DOCTYPE html>
<html data-wf-page="<?php echo esc_attr($wf_page); ?>" data-wf-site="<?php echo esc_attr($wf_site); ?>" lang="en">
<head>
  <meta charset="utf-8">
  <title>DONE HQ - Integrated Web Engineering Crew.</title>
  <meta content="Cohesive and synchronized team of professionals who work collaboratively to design, develop, and maintain web-based projects." name="description">
  <meta content="DONE HQ - Integrated Web Engineering Crew." property="og:title">
  <meta content="Cohesive and synchronized team of professionals who work collaboratively to design, develop, and maintain web-based projects." property="og:description">
  <meta content="https://uploads-ssl.webflow.com/65e76fa8241fed2684a8f549/65e8b415195182841d6782fa_2.jpg" property="og:image">
  <meta content="DONE HQ - Integrated Web Engineering Crew." property="twitter:title">
  <meta content="Cohesive and synchronized team of professionals who work collaboratively to design, develop, and maintain web-based projects." property="twitter:description">
  <meta content="https://uploads-ssl.webflow.com/65e76fa8241fed2684a8f549/65e8b415195182841d6782fa_2.jpg" property="twitter:image">
  <meta property="og:type" content="website">
  <meta content="summary_large_image" name="twitter:card">
  <meta content="width=device-width, initial-scale=1" name="viewport">
  <style>@media (min-width:992px) {html.w-mod-js:not(.w-mod-ix) [data-w-id="6bb45b8b-f51e-d72e-7cbd-c050628dafba"] {opacity:0;}html.w-mod-js:not(.w-mod-ix) [data-w-id="80eccc43-adab-eda6-6d87-459bc27a8e33"] {opacity:0;}html.w-mod-js:not(.w-mod-ix) [data-w-id="6a659206-c8b2-e165-1f69-edf234cf66c6"] {opacity:0;}}@media (max-width:991px) and (min-width:768px) {html.w-mod-js:not(.w-mod-ix) [data-w-id="6bb45b8b-f51e-d72e-7cbd-c050628dafba"] {opacity:0;}html.w-mod-js:not(.w-mod-ix) [data-w-id="80eccc43-adab-eda6-6d87-459bc27a8e33"] {opacity:0;}html.w-mod-js:not(.w-mod-ix) [data-w-id="6a659206-c8b2-e165-1f69-edf234cf66c6"] {opacity:0;}}</style>
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js" type="text/javascript"></script>
  <script type="text/javascript">WebFont.load({  google: {    families: ["Onest:regular,500,700"]  }});</script>
  <script type="text/javascript">!function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);</script>
  <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/favicon.png" rel="shortcut icon" type="image/x-icon">
  <link href="<?php echo esc_url( get_template_directory_uri() ); ?>/images/webclip.png" rel="apple-touch-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<?php wp_head(); ?>

</head>
<body <?php body_class('myClass secondcass'); ?>>
  <div class="css">
    <div class="css-fliud w-embed">
      
    </div>
    <div class="css-base w-embed">
      
    </div>
    <div class="css-other w-embed">
    </div>
    <div class="css-animations w-embed">
    </div>
  </div>
  <section data-loader="" class="loader">
    <div class="logo-spinner">
      <div class="css w-embed">
      </div>
      <div class="loader__svg w-embed"><svg xmlns="http://www.w3.org/2000/svg" width="138" viewbox="0 0 138 132" fill="none">
          <g>
            <path d="M75.5713 42.5677V4.4727C75.5713 0.398871 70.4952 -1.44212 67.8889 1.68633L1.01183 82.3419C-1.34007 85.1781 0.670521 89.4696 4.3442 89.4696H61.4723V127.552C61.4723 131.626 66.5484 133.467 69.1548 130.339L136.032 49.6829C138.384 46.8468 136.373 42.5552 132.699 42.5552L132.687 42.5677H75.5713Z" fill="#7EE100"></path>
          </g>
        </svg></div>
    </div>
  </section>
  <header class="header">

  <?php
// Получить значение поля "header_logo" из страницы опций
$header_logo = get_field('header_logo', 'option');
$header_logo_white = get_field('header_logo_white', 'option');

// Проверить и вывести значение
if( $header_logo ) {
    echo '<a href="'.home_url().'" data-logo="original" aria-current="page" class="header__logo-wrap w-inline-block w--current"><img src="'. esc_html($header_logo) .'" alt="" animate-body-to="2" class="header__logo-blue"><img src="'. esc_html($header_logo_white) .'" alt="" animate-body-to="1" class="header__logo-white hide"></a>';
}
?>
  
  
    

 
    <div data-desktop-flex="" class="header__nav-links">
           <?php
            $menuParameters = array(
              'theme_location'  => 'header_nav', 
              'container'       => false,
              'echo'            => false,
              'items_wrap'      => '%3$s',
              'depth'           => 0,
            );
            echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
            ?>
    </div>

    <?php
// Получить значение поля "footer_email" из страницы опций
$header_button_text = get_field('header_button_text', 'option');
$header_button_link = get_field('header_button_link', 'option');

// Проверить и вывести значение
if( $header_button_link ) {
    echo '

    <a href="mailto:'. esc_html($header_button_link) .'" data-desktop-flex="" data-css="btn-arrow" class="btn w-inline-block">
      <div>' . esc_html($header_button_text) . '</div><img src="https://uploads-ssl.webflow.com/65ca48647f3eeedb29f339ad/65caa14408754eab01abcef2_arrow-right-white.svg" alt="" data-arrow-rotated="" class="btn__arrow">
    </a>';
    }
    ?>
    

    
    
    <a data-action="menu-open" data-mobile-flex="" data-w-id="cd1cc1c4-7e94-3624-5696-c4fc5ffd0991" href="#" class="header__humburger w-inline-block"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/humburger-white.svg" alt="" class="header__humburger-icon-white hide"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/humburger.svg" alt="" class="header__humburger-icon"></a>
    <div class="menu">
      <div data-mobile-flex="" class="menu__top-wrap">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" aria-current="page" class="menu__logo w-inline-block w--current"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logo-donehq-white.svg" alt="" animate-body-to="1"></a>
        <a data-action="menu-close" data-w-id="025c54a9-212a-520a-c085-4b210e97f0ee" href="#" class="menu__humburger w-inline-block"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/humburger-white-close.svg" loading="lazy" alt=""></a>
      </div>
      <div class="menu__nav">
        <?php
            $menuParameters = array(
              'theme_location'  => 'header_nav', 
              'container'       => false,
              'echo'            => false,
              'items_wrap'      => '%3$s',
              'depth'           => 0,
            );
            echo strip_tags(wp_nav_menu( $menuParameters ), '<a>' );
            ?>
      </div>
      <?php
// Получить значение поля "footer_email" из страницы опций
$header_button_text = get_field('header_button_text', 'option');
$header_button_link = get_field('header_button_link', 'option');

// Проверить и вывести значение
if( $header_button_text ) {
    echo '


      <a href="mailto:'. esc_html($header_button_link) .'" data-action="menu-close" data-css="btn-arrow" data-mobile-flex="" data-w-id="025c54a9-212a-520a-c085-4b210e97f0f9" class="btn orange-btn w-inline-block">
        <div>' . esc_html($header_button_text) . '</div><img src="https://uploads-ssl.webflow.com/65ca48647f3eeedb29f339ad/65caa14408754eab01abcef2_arrow-right-white.svg" loading="lazy" data-arrow-move="" alt="" class="btn__arrow">
      </a>';
    }
    ?>
      </div>

  </header>