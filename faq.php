<?php
/**
* Template Name: FAQ
*
* @package WordPress
* @subpackage DoneHQ
* @since DoneHQ
*/

?>
<?php get_header(); ?>
<main class="main">
<div class="breadcrumbs">
  <a href="index.html" class="breadcrumbs__item">Home</a>
  <div class="breadcrumbs__sep">&gt;</div>
  <div class="breadcrumbs__item item--active">F.A.Q.</div>
</div>
<section class="common-hero hero--faq">
  <div class="container">
    <div class="common-hero__content">
      <div class="common-hero__title-wrap wrap--without-text">
        <h1 class="common-hero__title title--faq">You Ask<br>We Answer</h1>
      </div>
    </div>
  </div>
</section>
<section class="faq">
  <div class="container">       
    <div class="w-dyn-list">
       <div role="list" class="faq__list w-dyn-items">   




       <?php

// Check rows exists.
if( have_rows('faq') ):

    // Loop through rows.
    while( have_rows('faq') ) : the_row();

?>

<div data-faq="item" data-w-id="f3055b97-3b09-214f-abc4-7f81cf84f1d9" style="opacity: 1; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); transform-style: preserve-3d;" role="listitem" class="faq__item w-dyn-item">
            <div class="faq__icon-wrap">
              <div data-faq="plus-vertical" class="faq__icon-line-vertical w-embed">
                <svg width="36" height="2" viewBox="0 0 36 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M35.375 1C35.375 1.26522 35.2573 1.51957 35.0478 1.70711C34.8383 1.89464 34.5542 2 34.258 2H1.49202C1.19577 2 0.91165 1.89464 0.702168 1.70711C0.492686 1.51957 0.375 1.26522 0.375 1C0.375 0.734784 0.492686 0.48043 0.702168 0.292894C0.91165 0.105357 1.19577 0 1.49202 0H34.258C34.5542 0 34.8383 0.105357 35.0478 0.292894C35.2573 0.48043 35.375 0.734784 35.375 1Z" fill="currentColor"></path>
                </svg>
              </div>
              <div class="faq__icon-line w-embed">
                <svg width="36" height="2" viewBox="0 0 36 2" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M35.375 1C35.375 1.26522 35.2573 1.51957 35.0478 1.70711C34.8383 1.89464 34.5542 2 34.258 2H1.49202C1.19577 2 0.91165 1.89464 0.702168 1.70711C0.492686 1.51957 0.375 1.26522 0.375 1C0.375 0.734784 0.492686 0.48043 0.702168 0.292894C0.91165 0.105357 1.19577 0 1.49202 0H34.258C34.5542 0 34.8383 0.105357 35.0478 0.292894C35.2573 0.48043 35.375 0.734784 35.375 1Z" fill="currentColor"></path>
                </svg>
              </div>
            </div>
            <div data-faq="question-wrap" class="faq__question-wrap">
              <div data-faq="question" class="faq__question">        <?php  echo get_sub_field('question'); ?></div>
            </div>
            <div data-faq="answer-wrap" class="faq__answer-wrap">
              <p class="text"><?php echo get_sub_field('answer'); ?></p>
            </div>
          </div>

<?php

    // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;


?>









     
      </div>
    </div> 
  </div> 
</section>




  <section id="consultation" data-w-id="608ffed6-a747-b2b9-3dae-e3c50b857597" class="h-consultation">
  <div class="container">
    <div class="consultation">
      <div class="consultation__title-wrap">
        <h2 class="h-title-mobile">Arrange a <span class="span--red">consultation</span> with team to explore dynamic strategies for <span class="span--blue">boosting</span> <span class="span--green">revenue</span> and reducing costs.</h2>
      </div>
      <div class="title-animated-wrap">
        <div class="animated__title-line line--1">
          <h2 class="home-title">Arrange a <span class="span--red">consultation</span> with </h2>
          <h2 data-w-id="608ffed6-a747-b2b9-3dae-e3c50b8575ad" class="home-title title--reveal">Arrange a <span class="span--red">consultation</span> with </h2>
        </div>
        <div class="animated__title-line line--1">
          <h2 class="home-title">team to explore dynamic</h2>
          <h2 data-w-id="608ffed6-a747-b2b9-3dae-e3c50b8575b5" class="home-title title--reveal">team to explore dynamic</h2>
        </div>
        <div class="animated__title-line line--1">
          <h2 class="home-title">strategies for <span class="span--blue">boosting </span></h2>
          <h2 data-w-id="608ffed6-a747-b2b9-3dae-e3c50b8575bc" class="home-title title--reveal">strategies for <span class="span--blue">boosting </span></h2>
        </div>
   
   
   
        <div class="animated__title-line line--1">
          <h2 class="home-title"><span class="span--blue">revenue</span> and reducing costs</h2>
          <h2 data-w-id="608ffed6-a747-b2b9-3dae-e3c50b8575c5" class="home-title title--reveal"><span class="span--blue">revenue</span> and reducing costs</h2>
        </div>
      </div>
      <div class="consultation__form w-form">
        <form method="get" name="wf-form-consultration" data-name="consultration" data-wf-page-id="66144ad77b32f4949163cbb8" data-wf-element-id="608ffed6-a747-b2b9-3dae-e3c50b8575ca">
          <div class="form__inputs"><input class="input w-input" maxlength="256" name="name" data-name="name" placeholder="Your Name *" type="text" required=""><input class="input w-input" maxlength="256" name="email" data-name="email" placeholder="Your Email *" type="email" required=""></div><button class="btn btn--blue btn--consultation" data-css="btn-arrow" type="submit">
            <div>Send</div><img data-arrow-move="" loading="lazy" alt="" src="https://uploads-ssl.webflow.com/65ca48647f3eeedb29f339ad/65caa14408754eab01abcef2_arrow-right-white.svg" class="btn__arrow hide">
          </button>
        </form>
        <div class="consultation__success-wrap w-form-done">
          <div class="schedule__success">
            <div>Thank you! Your submission has been received!</div>
          </div>
        </div>
        <div class="w-form-fail">
          <div>Oops! Something went wrong while submitting the form.</div>
        </div>
      </div>
    </div>
  </div>
</section>
</main>



<?php
get_footer();
?>