<?php get_header() ?>

<!-- Banner -->
<section class="banner mb-20">
     <?php
          $banner = new WP_Query(array (
            'post_type' => 'post',
            'posts_per_page' => 1,
            'meta_key' => "Grouping",
            'meta_value' => "Banner",
          ))
          ?>
    <?php if($banner->have_posts()) : while($banner->have_posts()) : $banner->the_post() ?>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
        <div
          class="banner__content flex flex-col justify-center items-center md:items-start px-1"
        >
          <small>Must Try</small>
          <h1><?php the_title() ?></h1>
          <p>
            <?php if ( has_excerpt() ) :?><?php echo get_the_excerpt(); ?>
<?php endif; ?>
          </p>
          <a href="<?php the_permalink()?>" class="btn btn--accent">Read More</a>
        </div>
        <div class="banner__img">
          <?php if(has_post_thumbnail()){
                the_post_thumbnail();
            }?>
        </div>
      </div>
    <?php
        endwhile;
        else:
            echo "No Content";
        endif;
        wp_reset_postdata(  );
    ?>
</section>

<!-- Week -->
<section class="week mb-20">
      <div class="container mx-auto">
        <h2 class="text-center mb-20">Recipe of the Week</h2>
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            
          <?php 
            $week = new WP_Query(array (
            'post_type' => 'post',
            'posts_per_page' => 4,
            'meta_key' => "Grouping",
            'meta_value' => "Week",
            ))?>

                <?php if($week->have_posts()) : while($week->have_posts()) : $week->the_post() ?>
          <div class="grid__item text-center">
            <a href="<?php the_permalink()?>">
              <?php if(has_post_thumbnail()){
                        the_post_thumbnail();
                    } ?>
              <small><?php echo get_the_category()[0]->name ?></small>
              <h3><?php the_title()?></h3>
              <p>
                <?php if ( has_excerpt() ) :?><?php echo get_the_excerpt(); ?>
<?php endif; ?>
              </p>
            </a>
          </div>

          <?php endwhile;
                        else:
                          echo "No Post";
                        endif;
                        wp_reset_postdata();
                    ?>

        </div>
      </div>
</section>

<!-- Collection -->
<section class="collection">
      <div class="container mx-auto">
        <h2 class="mb-20">Recipe Collection</h2>
        <div class="collection__item">
          <?php 
            $week = new WP_Query(array (
            'post_type' => 'post',
            'posts_per_page' => 3,
            'meta_key' => "Grouping",
            'meta_value' => "Collection",))
            ?>

                <?php if($week->have_posts()) : while($week->have_posts()) : $week->the_post() ?>
          <div class="recipe__collection flex justify-between flex-col md:flex-row gap-10 mb-10">
            <div class="collection__item__img basis-1/2">
              <?php if(has_post_thumbnail()){
                        the_post_thumbnail();
                    } ?>
            </div>
            <div class="collection__item__content basis-1/2">
              <div
                class="flex flex-col justify-center items-start w-[80%] h-[80%] mx-auto"
              >
                <small><?php echo get_the_category()[0]->name ?></small>
                <h3><?php the_title()?></h3>
                <p>
                  <?php if ( has_excerpt() ) :?><?php echo get_the_excerpt(); ?>
<?php endif; ?>
                </p>
                <a href="<?php the_permalink()?>" class="btn btn--accent">Read More</a>
              </div>
            </div>
          </div>
          <?php endwhile;
                        else:
                          echo "No Post";
                        endif;
                        wp_reset_postdata();
                    ?>
        </div>
      </div>
</section>

<!-- Newsletter -->
<section
      class="newsletter h-[50vh] grid place-content-center bg-cover bg-no-repeat bg-center"
    >
      <div class="newsletter__content max-w-[750px] w-full text-center px-1">
        <h2>Get out weekly Newsletter</h2>
        <p>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Minima
          molestiae earum quam eos veritatis saepe explicabo cupiditate facere
          harum animi.
        </p>
        <form action="">
          <div class="">
            <input type="text" placeholder="Email" />
            <button class="btn btn--accent">Subscribe</button>
          </div>
        </form>
      </div>
</section>

<!-- Classic -->
<section class="classic mb-20">
      <div class="container mx-auto">
        <h2 class="mb-20">Recipe classic</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
          <?php 
            $week = new WP_Query(array (
            'post_type' => 'post',
            'posts_per_page' => 9,
            'meta_key' => "Grouping",
            'meta_value' => "Classic",
            ))?>

                <?php if($week->have_posts()) : while($week->have_posts()) : $week->the_post() ?>
          <div class="classic__item flex gap-4">
            <?php if(has_post_thumbnail()){
                        the_post_thumbnail();
                    } ?>
            <div class="classic__item__content">
              <small><?php echo get_the_category()[0]->name ?></small>
              <h4><?php the_title()?></h4>
              <ul class="flex gap-2 mb-4">
                <li><i class="fas fa-star text-accent"></i></li>
                <li><i class="fas fa-star text-accent"></i></li>
                <li><i class="fas fa-star text-accent"></i></li>
                <li><i class="fas fa-star text-accent"></i></li>
                <li><i class="fas fa-star text-accent"></i></li>
              </ul>
              <a href="<?php the_permalink()?>">Get Recipe Here</a>
            </div>
          </div>
          <?php endwhile;
                        else:
                          echo "No Post";
                        endif;
                        wp_reset_postdata();
                    ?>
        </div>
      </div>
    </section>
<?php get_footer()?>