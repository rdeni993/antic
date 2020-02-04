<!-- HEADER -->
<?php get_header(); ?>
<!-- EOF HEADER -->

<div class="container">

<!-- Put Menu At the Top -->
<?php echo get_template_part('parts/top_menu'); ?>
<!-- End of menu -->
   
<!-- Antic School image -->
<div class="school-intro-image pacifico">
    <?php new Cite_Slider(); ?>
</div>
<!-- EOF ASI -->

<!-- Homepage Content -->
<div class="rschool-content">
    
    <div class="row">
        <div class="col-sm-7 real-post">
            <?php if(have_posts()): ?>
                <?php while( have_posts() ): the_post(); ?>
                    <!-- Template page -->
                    <?php if( has_post_thumbnail() ): ?>
                        <?php the_post_thumbnail(); ?>
                    <?php endif; ?>
                    
                    <!-- Title of the post -->
                    <a href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
                    <!-- EOF Title -->

                    <!-- POST CONTENT -->
                    <div class="meta-post-content"><?php the_content(); ?></div>
                    <!-- EOF POST CONTENT -->

                <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <div class="col-sm-5 sidebars">
            <!-- Sidebar Part -->
            <!-- Put all sidebar here -->
            <?php get_sidebar(); ?>
        </div>
        <!-- FOOTER --> 
        <?php get_template_part('parts/footer'); ?>
        <!-- EOF FOOTER --> 
    </div>

</div>
<!-- End of page content -->

</div>

<!-- FOOTER -->
<?php get_footer(); ?>
<!-- EOF FOOTER --> 