<?php
/* 
Template Name:Home
*/
?>

<?php
get_header();
?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

<main>
        <section class="main-slider">
          <div class="hero-img">
            <div class="hero-bg"></div>
            <div class="container">
              <div class="hero-text">
                <div class="welcome-text"><span class ="big-text">WELCOME</span><span class="small-text">TO OUR BLOG</span></div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            </div>
            <a href="#about"><i class="fas fa-chevron-down"></i></a>
          </div>
        </section>
        
        <div class="container">
          <div class="row mainmargin">
            <div class="blog col-md-8">
              <div class="all-posts">

              	<?php
					$recentposts = get_posts('numberposts=10');
						foreach ($recentposts as $post) :
						setup_postdata($post);
				?>


                <div class="post-item">
                  <div class="post-img"><img src="<?php echo get_template_directory_uri(); ?>/img/architecture-1857175_1920.jpg" alt=""></div>
                  <div class="post-main-info">
                    <p class="post-title">
                    	<?php 
                    		echo the_title();
                    	?>
                    </p>
                    <div class="post-meta">
                      <span><i class="far fa-user"></i> Posted by : <?php echo the_author(); ?></span><span><i class="far fa-calendar"></i> <?php echo the_date(); ?></span>
                    </div>
                    <p>
                    	<?php echo the_excerpt(); ?>
                    </p>
                    <br /><br />
                    <a href="<?php echo the_permalink(); ?>" class="main-button">Read More</a>
                  </div>
                </div>
                <?php endforeach; ?>
                
 
              </div>
            </div>
            <?php include "sidebar.php"; ?>
          </div>
        </div>    
      </main>


<?php
get_footer();
?>