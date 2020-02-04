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
        <div class="col-sm-7 personal">
                <?php if(have_posts()): ?>
                    <?php while( have_posts() ): the_post(); ?>
                    <article>
                        <div class="row">
                            <div class="col-sm-4">
                                <?php if( has_post_thumbnail() ): ?>
                                    <?php the_post_thumbnail(); ?>
                                <?php else: ?>
                                    <img src="<?php echo get_template_directory_uri() . '/img/logo.png' ?>" alt="logo" />
                                <?php endif; ?>
                            </div>
                            <div class="col-sm-8">
                                <h1><?php the_title(); ?></h1>
                                <p class="text-muted"><?php strip_tags(the_content()); ?></p>
                            </div>
                        </div>
                    </article>
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