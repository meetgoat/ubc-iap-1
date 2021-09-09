<?php
/**
 * Template Name: Action Plan
 */
get_header(); // Loads the header.php template.
?>

<style>
  .goals-sub-header {
    color: #4C4D4F!important;
  } 
</style>

<div id="bootstrap_iso">
  <?php
  echo get_template_part('partials/section', 'header', [
      'image' => wp_get_attachment_image_url(carbon_get_the_post_meta('crb_header_background_image'), 'header'),
      'title' => get_the_title()
  ])
  ?>
  <section class="bg-beige">
    <div class="container">
      <?php echo get_template_part('partials/breadcrumbs', null, ['class' => 'black', 'margin-bottom' => 'mb-4' ]) ?>

      <!-- Intro --> 
      <h2 class="mb-5"><?php echo wp_kses_post(carbon_get_the_post_meta('crb_header_heading')) ?></h2>
      <?php echo wpautop(wp_kses_post(carbon_get_the_post_meta('crb_introduction'))) ?>

      <!-- Goals --> 
      <h2 class='mb-4'><?php echo wp_kses_post(carbon_get_the_post_meta('crb_goals_heading')) ?></h2>
      <h3 class='goals-sub-header'><?php echo wp_kses_post(carbon_get_the_post_meta('crb_goals_sub_heading')) ?></h3>
    </div>

  </section>
  <section class="bg-beige">
    <div class="clip-ellipse">
      <div class="bg-image py-3 py-md-5 py-lg-6 py-xl-10"style="background-image:url(<?php echo esc_url(wp_get_attachment_image_url(carbon_get_the_post_meta('crb_bubble_background_image'), 'full')) ?>">
        <div class="container">
        <?php echo get_template_part('partials/breadcrumbs', null, ['class' => 'white']) ?>
          <div class="row justify-content-center">
            <div class="col-12 mb-5 text-center">
              <?php echo wpautop(wp_kses_post(carbon_get_the_post_meta('crb_section_1_content_1'))) ?>
            </div>
            <div class="col-md-6 col-lg-5 mb-4 mb-md-0 mx-lg-4 mx-xl-5">
              <figure class="img-rounded--text burnt">
                <div>
                  <h2 class="mb-2 mb-md-3 text-burnt"><?php echo esc_html(carbon_get_the_post_meta('crb_section_1_bubble_1_heading')) ?></h2>
                  <p><?php echo wp_kses_post(carbon_get_the_post_meta('crb_section_1_bubble_1_content')) ?></p>
                </div>
              </figure>
            </div>
            <div class="col-md-6 col-lg-5 mx-lg-5">
              <figure class="img-rounded--text burnt">
                <div>
                  <h2 class="mb-2 mb-md-3 text-burnt"><?php echo esc_html(carbon_get_the_post_meta('crb_section_1_bubble_2_heading')) ?></h2>
                  <p><?php echo wp_kses_post(carbon_get_the_post_meta('crb_section_1_bubble_2_content')) ?></p>
                </div>
              </figure>
            </div>
            <div class="col-12 mt-5 text-white">
              <h2><?php echo esc_html(carbon_get_the_post_meta('crb_section_1_heading')) ?></h2>
              <div class="columns-2 text-white">
                <?php echo wpautop(wp_kses_post(carbon_get_the_post_meta('crb_section_1_content_2'))) ?>
              </div>
              <hr/>
              <?php echo wpautop(wp_kses_post(carbon_get_the_post_meta('crb_section_1_content_3'))) ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php echo get_template_part('partials/pre-footer') ?>
</div>

<?php
get_footer(); // Loads the footer.php template. ?>
