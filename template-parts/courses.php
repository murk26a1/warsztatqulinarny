<?php

/**
 *Banner-page
 */

?>


<div class="row wrapper">
    <div class="col-12 col-md-3">
        <div class="courses-btn">
            <div class="courses-select">Wybierz kurs</div>
            <nav>
                <ul>
                    <?php
                    $szkolenia = new WP_Query(array(
                        'posts_per_page' => -1,
                        'post_type' => 'szkolenia',
                        'order' => 'asc'
                    ));
                    while ($szkolenia->have_posts()) : $szkolenia->the_post(); ?>
                        <li>
                            <button class="btn btn-primary btn-course" data-toggle="collapse" data-target="#course-<?php echo get_the_id(); ?>" aria-expanded="false"><?php the_title(); ?></button>
                        </li>
                    <?php endwhile; ?>
                </ul>
            </nav>
        </div>

    </div>
    <div class="col-12 col-md-9" id="courses-info">
        <?php
        $szkolenia = new WP_Query(array(
            'posts_per_page' => -1,
            'post_type' => 'szkolenia',
            'order' => 'asc'
        ));
        $i = 0;
        while ($szkolenia->have_posts()) : $szkolenia->the_post();
            $i++;
        ?>
            <div class="collapse multi-collapse <?php if ($i == 1) { ?>show<?php } ?>" data-parent=" #courses-info" id="course-<?php echo get_the_id(); ?>">
                <div class="card card-body">
                    <div class="row">
                        <div class="col-12 col-md-7">
                            <?php if (get_field('podtytul')) { ?>
                                <h4><?php the_field('podtytul'); ?></h4>
                            <?php } ?>
                            <h3><?php the_title(); ?></h3>
                            <?php the_field('opis_skrocony'); ?>
                            <div class="single-btn">
                                <a href="<?php the_permalink(); ?>" class="m-btn">zobacz</a>
                            </div>
                        </div>
                        <div class="col-md-5 d-none d-md-block">
                            <div class="img-wrap">
                                <?php if (get_field('obrazek_przy_opisie')) { ?>
                                    <img class="lazy" <?php img_resp(get_field('obrazek_przy_opisie'), 'medium', '600px'); ?> />
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</div>