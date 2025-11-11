<?php
get_header();
?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
<main>
        <div class="container">
          <div class="row mainmargin">
            
            <div class="single-post col-md-8">
              <h2 class="underscore"><?php echo the_title(); ?></h2>
              <div class="post-meta">
                <span><i class="far fa-user"></i> Posted by : <?php echo the_author(); ?></span><span><i class="far fa-calendar"></i> <?php echo the_date(); ?></span>
              </div>
            
              <p>
              	<?php echo the_content(); ?>
              </p>

             
              <?php
// WORDPRESS COMMENT BOX
// if ( comments_open() || get_comments_number() ) :
//     comments_template();
// endif;
?>

<div class="fb-comments"
     data-href="<?php echo esc_url( get_permalink() ); ?>"
     data-width="100%"
     data-numposts="5"
     data-colorscheme="light">
</div>

              
            </div>

            <?php include "sidebar.php"; ?>
          </div>
        </div>
      </main>

<?php
get_footer();
?>