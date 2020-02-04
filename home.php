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
        <div class="col-sm-7">

        <!-- Tabs -->
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" data-id="tab-1" href="#">Огласна табла</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-id="tab-2" href="#">Новости</a>
                </li>
            </ul>
        <!-- EOF Tabs -->
            <!-- Tab Content -->
            <div class="post-area">
                <!-- Display content from info bar -->
                    <div class="tab-content" id="tab-1">
                    <?php if( have_posts() ): ?>
                        <?php while( have_posts() ): the_post(); ?>
                            <?php if( in_category('oglasna-tabla') ): ?>
                                <article class="post-content">
                                    <?php if( has_post_thumbnail() ): ?>
                                        <?php the_post_thumbnail(); ?>
                                    <?php endif; ?>
                                    <a href="<?php the_permalink(); ?>"><h1 class="cd-dark"><?php the_title(); ?></h1></a>
                                    <div class="post-excerpt font-weight-normal"><?php the_excerpt(); ?></div>
                                    <p><strong class="text-uppercase">OBJAVLJENO</strong><i class="fas fa-calendar" title="Datum"></i> <?php the_date("Y-M-d H:i"); ?> <em>|</em> <i class="fas fa-user" title="Autor Teksta"></i> <?php the_author(); ?> </p>
                                </article>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif ?>
                    </div>
                    <div class="tab-content" id="tab-2">
                    <?php if( have_posts() ): ?>
                        <?php while( have_posts() ): the_post(); ?>
                            <?php if( in_category('oglasna-tabla') || in_category('personal') ): continue; ?>
                            <?php else: ?>
                                <article class="post-content">
                                    <?php if( has_post_thumbnail() ): ?>
                                        <?php the_post_thumbnail(); ?>
                                    <?php endif; ?>
                                    <a href="<?php the_permalink(); ?>"><h1 class="cd-dark"><?php the_title(); ?></h1></a>
                                    <div class="post-excerpt font-weight-normal"><?php the_excerpt(); ?></div>
                                    <p><strong class="text-uppercase">OBJAVLJENO</strong><i class="fas fa-calendar" title="Datum"></i> <?php the_date("Y-M-d H:i"); ?> <em>|</em> <i class="fas fa-user" title="Autor Teksta"></i> <?php the_author(); ?> </p>
                                </article>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif ?>
                    </div>
            </div>

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