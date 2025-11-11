<?php
get_header();
?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
<main>
        <div class="container">
          <div class="row mainmargin">
            <div class="single-post col-md-12">
              <h2 class="underscore"><?php echo the_title(); ?></h2>
             
            
              <p>
                <?php echo the_content(); ?>
              </p>
            </div>
           
          </div>

           <div class="row mainmargin">
            <div class="single-post col-md-12">
              <h2 class="underscore">Our Director</h2>
             
              <table border="2" cellpadding="10" class="table table-bordered">
                  <tr>
                    <th><?php the_field('director'); ?></th>
                    <td>
                      <?php $image = get_field('director_image'); ?>
                      <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" width="200" style="width:200px!important;" />
                    </td>
                    <td><?php the_field('director_description'); ?></td>
                  </tr>
              </table>
            </div>
           
          </div>

        </div>
      </main>

<?php
get_footer();
?>