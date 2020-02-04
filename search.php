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
            <h3>Rezultati pretrage za <i class="fas fa-quote-left"></i><em><?php echo $_GET['s']; ?></em><i class="fas fa-quote-right"></i></h3>
            <?php $post_counter = 0; ?>
            <?php if(have_posts()): ?>
                <?php while( have_posts() ): the_post(); $post_counter++; ?>
                <article>
                    <!-- Title of the post -->
                    <a class="text-capitalize" href="<?php the_permalink(); ?>"><h1><?php the_title(); ?></h1></a>
                    <!-- EOF Title -->

                    <!-- POST META -->
                    <p class="meta-post"><strong class="text-uppercase">OBJAVLJENO</strong><i class="fas fa-calendar" title="Datum"></i> <?php the_date("Y-M-d H:i"); ?> <em>|</em> <i class="fas fa-user" title="Autor Teksta"></i> <?php the_author(); ?> </p>
                    <!-- EOF POST META -->
                </article>
                <?php endwhile; ?>
            <?php endif; ?>
            <h3>Pronadjeno rezultata <i class="fas fa-quote-left"></i><em><?php echo $post_counter; ?></em><i class="fas fa-quote-right"></i></h3>
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