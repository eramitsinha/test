<footer class="text-center text-uppercase py-5"> 
        <div class="footer-icons ">
          <a href=""><img src="<?php echo get_template_directory_uri(); ?>/.img/facebook-footer.svg" alt=""></a>
          <a href=""><img src="<?php echo get_template_directory_uri(); ?>/.img/instagramm-footer.svg" alt=""></a>
          <a href=""><img src="<?php echo get_template_directory_uri(); ?>/.img/pinterest-footer.svg" alt=""></a>
        </div>
        <div class="copyright pt-4 text-muted text-center">
          <p>
            <?php if ( dynamic_sidebar('Footer') ) : else : endif; ?>
          </p>
          <!--
          This template is licenced under Attribution 3.0 (CC BY 3.0 PL),
          You are free to: Share and Adapt. You must give appropriate credit, you may do so in any reasonable manner, but not in any way that suggests the licensor endorses you or your use.
          --> 
      </div>
      </footer>
      <div class="fb2022-copy">Fbee 2022 copyright</div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
      <script src="<?php echo get_template_directory_uri(); ?>/.js/script.js"></script>

      <div id="fb-root"></div>
<script async defer crossorigin="anonymous"
  src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v17.0&appId=YOUR_APP_ID&autoLogAppEvents=1">
</script>


     
</body>
</html>