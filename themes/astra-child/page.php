<?php get_header() ?>
    <div class="main-inner-page pb-5">
       <div class="container">
       <?php
        while (have_posts()) : the_post();
            the_content();
        endwhile;
        ?>
       </div>
    </div>
</div>
<?php get_footer() ?>

