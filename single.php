<?php get_header()?>

<!-- Single -->
<?php if(have_posts()) :while(have_posts()) :the_post(); ?>
<section class="single bg-light_accent py-20 mb-[300px]">
      <div class="container px-4 mx-auto">
        <div class="single__content flex justify-between items-end">
          <h1 class="max-w-[550px] w-full mb-0">
            <?php the_title()?>
          </h1>
          <p class="font-bold">
            Published: <span class="font-normal"><?php echo get_the_date('M j, Y'); ?></span>
          </p>
        </div>

        <div
          class="single__meta py-4 border-b border-t border-gray-100 mt-10 -mb-[220px]">
          <ul class="flex justify-between">
            <li><span class="font-bold">Level:</span> <?php echo get_post_meta(get_the_ID(), 'Level', true)?></li>
            <li><span class="font-bold">Cooking Time:</span> <?php echo get_post_meta(get_the_ID(), 'Time', true)?> mins</li>
            <li><span class="font-bold">Servings:</span> <?php echo get_post_meta(get_the_ID(), 'Serving', true)?> persons</li>
          </ul>
        </div>

        <div class="grid grid-cols-[2fr_1fr] gap-10 translate-y-[260px]">
          <?php if(has_post_thumbnail()){
                        the_post_thumbnail();
                    } ?>
          <div class="bg-accent text-white px-10 py-14">
            <h3>Ingredients</h3>
            <ul>
              <li>1 tsp Asin</li>
              <li>2 tsp Mantika</li>
              <li>2 tsp Mantika</li>
              <li>2 tsp Mantika</li>
              <li>2 tsp Mantika</li>
              <li>2 tsp Mantika</li>
              <li>2 tsp Mantika</li>
            </ul>
          </div>
        </div>
      </div>
</section>

<!-- Direction -->
<section>
      <div class="container mx-auto px-6">
        <h3 class="text-accent mb-10">Direction</h3>

        <div class="grid grid-cols-[2fr_1fr] gap-10">
          <main>
            <h5>Step 1</h5>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. A ab in
              sunt. Sapiente, aliquid! Mollitia fugit dicta expedita doloremque
              dolorum.
            </p>

            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. A ab in
              sunt. Sapiente, aliquid! Mollitia fugit dicta expedita doloremque
              dolorum.
            </p>

            <h5>Step 2</h5>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi
              porro fugit iure nihil tenetur, optio corrupti dolor debitis
              beatae. Aliquam ducimus pariatur iure aliquid aperiam esse impedit
              dolor, quos quas? Eveniet beatae voluptas, nostrum sed accusantium
              sunt nesciunt veritatis exercitationem, eligendi, quis minima modi
              cupiditate dicta at. Quisquam, voluptatibus totam?
            </p>
          </main>
          <aside>
            <h4 class="mb-10">Looking for something else</h4>

            <?php if(have_posts()) : while(have_posts()) : the_post() ?>
            <div class="recipe__card flex gap-5 mb-5">
              <?php if(has_post_thumbnail()){
                        the_post_thumbnail();
                    } ?>
              <div>
                <small><?php echo get_the_category()[0]->name ?></small>
                <h5><?php the_title()?></h5>
                <ul class="flex gap-1">
                  <li><i class="fas fa-star text-accent"></i></li>
                  <li><i class="fas fa-star text-accent"></i></li>
                  <li><i class="fas fa-star text-accent"></i></li>
                  <li><i class="fas fa-star text-accent"></i></li>
                </ul>
                <a href="<?php the_permalink()?>">Get recipe</a>
              </div>
            </div>
            <?php endwhile;
                        else:
                          echo "No Post";
                        endif;
                    ?>
          </aside>
        </div>
      </div>
</section>
<?php endwhile;
    else:
    echo "no post";
    endif;
?>
<?php get_footer()?>