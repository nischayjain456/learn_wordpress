 <?php get_header();?>
    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row align-items-stretch retro-layout-2">
          <div class="col-md-4">
            <a href="single.html" class="h-entry mb-30 v-height gradient" style="background-image: url('<?php bloginfo('template_directory');?>/<?php bloginfo('template_directory');?>/images/img_1.jpg');">
              
              <div class="text">
                <h2>The AI magically removes moving objects from videos.</h2>
                <span class="date">July 19, 2019</span>
              </div>
            </a>
            <a href="single.html" class="h-entry v-height gradient" style="background-image: url('<?php bloginfo('template_directory');?>/<?php bloginfo('template_directory');?>/images/img_2.jpg');">
              
              <div class="text">
                <h2>The AI magically removes moving objects from videos.</h2>
                <span class="date">July 19, 2019</span>
              </div>
            </a>
          </div>
          <div class="col-md-4">
            <a href="C:\xampp\htdocs\wordpress\wp-content\themes\Blog\images" class="h-entry img-5 h-100 gradient" style="background-image: url('<?php bloginfo('template_directory');?>/<?php bloginfo('template_directory');?>/images/img_v_1.jpg');">
              
              <div class="text">
                <div class="post-categories mb-3">
                  <span class="post-category bg-danger">Travel</span>
                  <span class="post-category bg-primary">Food</span>
                </div>
                <h2>The AI magically removes moving objects from videos.</h2>
                <span class="date">July 19, 2019</span>
              </div>
            </a>
          </div>
          <div class="col-md-4">
            <a href="single.html" class="h-entry mb-30 v-height gradient" style="background-image: url('<?php bloginfo('template_directory');?>/<?php bloginfo('template_directory');?>/images/img_3.jpg');">
              
              <div class="text">
                <h2>The 20 Biggest Fintech Companies In America 2019</h2>
                <span class="date">July 19, 2019</span>
              </div>
            </a>
            <a href="single.html" class="h-entry v-height gradient" style="background-image: url('<?php bloginfo('template_directory');?>/<?php bloginfo('template_directory');?>/images/img_4.jpg');">
              
              <div class="text">
                <h2>The 20 Biggest Fintech Companies In America 2019</h2>
                <span class="date">July 19, 2019</span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12">
            <h2>Recent Posts</h2>
          </div>
        </div>
      <div class="row">
        <?php $the_query = new WP_Query( 'posts_per_page=5' ); ?>
        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
          <div class="col-lg-4 mb-4">
            <div class="entry2">
              <a href="<?php the_permalink() ?>"><img src="<?php echo the_post_thumbnail('thumbnail'); ?>" alt="Image" class="img-fluid rounded"></a>
              <div class="excerpt">
              <span class="post-category text-white bg-secondary mb-3">Politics</span>

              <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
              <div class="post-meta align-items-center text-left clearfix">
                <figure class="author-figure mb-0 mr-3 float-left"><img src="<?php bloginfo('template_directory');?>/<?php bloginfo('template_directory');?>/<?php bloginfo('template_directory');?>/images/person_1.jpg" alt="Image" class="img-fluid"></figure>
                <span class="d-inline-block mt-1">By <a href="#">Carrol Atkinson</a></span>
                <span>&nbsp;-&nbsp; July 19, 2019</span>
              </div>
                <p><?php the_excerpt(__('(more…)')); ?></p>
              </div>
            </div>
          </div>
          <?php 
endwhile;
wp_reset_postdata();
?>
        </div>

        <div class="row text-center pt-5 border-top">
          <div class="col-md-12">
            <div class="custom-pagination">
              <span>1</span>
              <a href="#">2</a>
              <a href="#">3</a>
              <a href="#">4</a>
              <span>...</span>
              <a href="#">15</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section bg-light">
      <div class="container">

        <div class="row align-items-stretch retro-layout">
          
          <div class="col-md-5 order-md-2">
            <a href="single.html" class="hentry img-1 h-100 gradient" style="background-image: url('<?php bloginfo('template_directory');?>/<?php bloginfo('template_directory');?>/<?php bloginfo('template_directory');?>/images/img_4.jpg');">
              <span class="post-category text-white bg-danger">Travel</span>
              <div class="text">
                <h2>The 20 Biggest Fintech Companies In America 2019</h2>
                <span>February 12, 2019</span>
              </div>
            </a>
          </div> 


          <div class="col-md-7">
            
            <a href="single.html" class="hentry img-2 v-height mb30 gradient" style="background-image: url('<?php bloginfo('template_directory');?>/<?php bloginfo('template_directory');?>/<?php bloginfo('template_directory');?>/images/img_1.jpg');">
              <span class="post-category text-white bg-success">Nature</span>
              <div class="text text-sm">
                <h2>The 20 Biggest Fintech Companies In America 2019</h2>
                <span>February 12, 2019</span>
              </div>
            </a>
            
            <div class="two-col d-block d-md-flex">
              <a href="single.html" class="hentry v-height img-2 gradient" style="background-image: url('<?php bloginfo('template_directory');?>/<?php bloginfo('template_directory');?>/<?php bloginfo('template_directory');?>/images/img_2.jpg');">
                <span class="post-category text-white bg-primary">Sports</span>
                <div class="text text-sm">
                  <h2>The 20 Biggest Fintech Companies In America 2019</h2>
                  <span>February 12, 2019</span>
                </div>
              </a>
              <a href="single.html" class="hentry v-height img-2 ml-auto gradient" style="background-image: url('<?php bloginfo('template_directory');?>/<?php bloginfo('template_directory');?>/images/img_3.jpg');">
                <span class="post-category text-white bg-warning">Lifestyle</span>
                <div class="text text-sm">
                  <h2>The 20 Biggest Fintech Companies In America 2019</h2>
                  <span>February 12, 2019</span>
                </div>
              </a>
            </div>  
            
          </div>
        </div>

      </div>
    </div>


    <div class="site-section bg-lightx">
      <div class="container">
        <div class="row justify-content-center text-center">
          <div class="col-md-5">
            <div class="subscribe-1 ">
              <h2>Subscribe to our newsletter</h2>
              <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit nesciunt error illum a explicabo, ipsam nostrum.</p>
              <form action="#" class="d-flex">
                <input type="text" class="form-control" placeholder="Enter your email address">
                <input type="submit" class="btn btn-primary" value="Subscribe">
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>




    <?php get_footer();?>
