<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Padma Bridge</title>
    <?php wp_head()?>
</head>
<body>
    <!-- header part start  -->
    <header class="container-fluid ps-0 pe-0">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">

      <?php
      while(have_posts()){the_post();
      ?>

          <div class="carousel-item active">
              <?php the_post_thumbnail() ; ?>
            <!-- <img src="..." class="d-block w-100" alt="...">  -->
          </div>
      <?php }?>

          <!-- <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
          </div>
          <div class="carousel-item">
            <img src="..." class="d-block w-100" alt="...">
          </div> -->
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <!-- slider end  -->
      <!-- logo start -->
      <div class="logo1">
          <?php the_custom_logo() ;?>
      </div>
      <div class="logo2">
          <?php dynamic_sidebar('bdlogo');?>
      </div>
      <!-- logo end -->
    </header>
    <!-- header part end  -->
    <!-- menu part  -->
    <section class="container ">
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
        
          <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <?php
                  wp_nav_menu([
                    'theme_location'=>'PM',
                    'menu_class'=>'navbar-nav navmenu1'
                  ]) ;
                  ?>
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0 ">
          
            </ul>
        
          </div>
        </div>
      </nav>
    </section>    
    <!-- menu part end -->


    <!-- hero part  -->
    <section class="hero container mt-5 ">
      <div class="row hero_title w-75 text-center mx-auto mb-5">
        <?php dynamic_sidebar('herotitle');?>

      </div>
      <div class="row heroCard mt-5">
        <div class="col-sm-4">
          <div class="card cards" style="width: 18rem;">
            <?php dynamic_sidebar('herocard1');?>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card cards" style="width: 18rem;">
            <?php dynamic_sidebar('herocard2');?>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="card cards" style="width: 18rem;">
            <?php dynamic_sidebar('herocard3');?>
          </div>
        </div>
      

      </div>
    </section>



    


<?php wp_footer()?>
</body>
</html>