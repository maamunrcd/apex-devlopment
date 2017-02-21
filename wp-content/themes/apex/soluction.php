<?php
/*
 * Template Name:All Soluctions
 *
 * The template for All Soluctions
 *
 * This is the template that displays All Soluctions.
 *
 */
get_header();
?>
    <section id="company-about">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6">
                    <h3 class="brat_cumb"><?php echo get_the_title(); ?></h3>
                </div>
                <div class="col-sm-6 col-md-6">
                    <ol class="breadcrumb brat_cumb pull-right">
                        <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                        <li class="active"><?php the_title(); ?></li>
                    </ol>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <?php
                $all_soluction = array(
                    'post_type' => 'solution',
                    'posts_per_page' => -1,
                    'order' => 'ASC'
                );
                $all_soluction_loop = new WP_Query($all_soluction);
                while ($all_soluction_loop->have_posts()) : $all_soluction_loop->the_post();
                    $page_title=get_the_title();
                        ?>
                        <div class="col-sm-4 col-md-4">
                            <div class="thumbnail">
                                <div class="thum-img">
                                    <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>
                                </div>
                                <div class="caption">
                                    <h3><?php the_title(); ?></h3>
                                    <?php
                                    $content=get_the_excerpt();
                                    $conent_array=explode(" ", $content);
                                    $conent_slice=array_slice($conent_array,0,45);
                                    $ready_content=implode(" ",$conent_slice);


                                    ?>
                                    <p><?=$ready_content; ?></p>
                                    <p><a href="<?=the_permalink();?>">Read More <i class="fa fa-caret-right"></i></a></p>
                                </div>
                            </div>
                        </div>
                        <?php
                    ?>
                    <?php
                endwhile;
                ?>
            </div>
        </div>
    </section>

    <!-- footer -->
<?php
get_footer();
?>