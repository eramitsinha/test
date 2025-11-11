<div class="sidebar col-md-4">
              <div class="input-group">
                <div class="form-outline">
                  <input id="search-input" type="search" id="form1" class="form-control" placeholder="search" />
                </div>
                <button id="search-button" type="button" class="btn dark">
                  <i class="fas fa-search"></i>
                </button>
              </div>
              <div class="recent-posts pt-5">
                <h4 class="mb-3">RECENT POSTS</h4>
                <?php
          $recentposts = get_posts('numberposts=5&category=2');
            foreach ($recentposts as $post) :
            setup_postdata($post);
        ?>
                <div class="post-item">
                  <a href="simple-post.html" class="post-title"><?php echo the_title(); ?></a>
                  <div class="post-meta">
                    <span><i class="far fa-user"></i> Posted by <?php echo the_author(); ?></span><span><i class="far fa-calendar"></i> <?php echo the_date(); ?></span>
                  </div>
                  <p class="post-content"><?php echo the_excerpt(); ?></p>
                </div>
              <?php endforeach; ?>
                 
               
                <div class="popular pt-5">
                  <h4 class="mb-3">Categories</h4>
                  <ul>
                    <?php echo wp_list_categories(); ?>
                  </ul>
                </div>

                <div class="popular pt-5">
                  <h4 class="mb-3">Archives</h4>
                  <ul>
                    <?php
                    echo wp_get_archives();
                    ?>
                  </ul>

                  <h4>Contact Form</h4>
                  <!-- COntact Form -- Plugin -->
                  <?php
                    echo do_shortcode('[simple_contact_form]');
                  ?>
                </div>
            </div>
            </div>