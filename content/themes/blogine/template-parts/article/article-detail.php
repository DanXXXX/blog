<article <?php post_class('post'); ?>>

        <h1 class="post_title">
            <span>
                <?php the_title(); ?>
            </span>
        </h1>

        <img src="https://source.unsplash.com/700x700/?city,black-and-white" class="post_image" alt="">
        
     <!--   <img src="https://images.unsplash.com/photo-1572657262921-6de1d03d7f3e?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=700&ixid=eyJhcHBfaWQiOjF9&ixlib=rb-1.2.1&q=80&w=700" alt="">  -->

          <div class="post_meta">
                <?php the_date(); ?> &bull; by <? the_author(); ?>
          </div>

          <div class="post_content">
               <?php the_content(); ?>
          </div>
</article>