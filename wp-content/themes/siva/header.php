<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Firmbee.com - Free Project Management Platform for remote teams"> 
    <title>Clear blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main.css">
    <script src="https://kit.fontawesome.com/0e035b9984.js" crossorigin="anonymous"></script>

</head>
<body data-bs-spy="scroll" data-bs-target="#navbar-example" data-bs-offset="82">
      <header id="home">
        <nav id="#navbar" class="navbar navbar-expand-lg position-fixed top-0 w-100 py-3">
          <div class="container">
            <!-- <a class="navbar-brand" href="index.html"> -->
              <?php // if ( dynamic_sidebar('Logo') ) : else : endif; ?>
            <!-- </a> -->
              <?php  
  $logo = get_theme_mod( 'mytheme_logo' ); 
  if ( $logo ) { ?> 
  <a href="<?php echo home_url(); ?>"> 
  <img src="<?php echo esc_url( $logo ); ?>" alt="<?php bloginfo( 'name' ); ?>" /> 
  </a> 
  <?php } else { ?> 
  <h1><?php bloginfo( 'name' ); ?></h1> 
  <?php } ?> 
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav ms-auto">
               <?php
wp_nav_menu( array(
    'theme_location' => 'primary', // Replace 'primary' with your registered theme location
    'container_class' => 'navbar-nav ms-auto',
    'menu_class' => 'navbar-nav ms-auto',
) );
?>

            </div>
          </div>
        </nav>
      </header>