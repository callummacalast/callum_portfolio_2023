<?php /* Template Name: Projects */
get_header();

$args = array(
    'post_type'   => 'projects',
    'post_status' => 'publish',
);
$our_posts = new WP_Query($args);
?>
<!-- component -->
<link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />
<!-- ====== Blog Section Start -->
<section class="pt-10  pb-10 lg:pb-20">
    <div class="container">
        <div class="heading my-5 text-center">
            <h1 class="text-5xl font-bold">My Projects<span class="text-blue-600">.</span></h1>
        </div>

        <div class="grid lg:grid-cols-8 md:grid-cols-4 grid-cols-2 categories gap-5 container mx-auto">

            <button class="js-filter-project p-3 bg-blue-300 hover:bg-blue-400 text-white">All</button>
            <?php
            $project_cats = get_terms(array('taxonomy' => 'project_categories'));
            // var_dump($project_cats);



            foreach ($project_cats as $cat) : ?>
                <button class="js-filter-project p-3 bg-blue-300 hover:bg-blue-400 text-white" data-category="<?= $cat->term_id; ?>"><?= $cat->name; ?></button>

            <?php endforeach; ?>



        </div>
        <div class="flex flex-wrap -mx-4 blogs transition mt-16">


            <?php if ($our_posts->have_posts()) : ?>
                <?php while ($our_posts->have_posts()) : $our_posts->the_post(); ?>
                    <?php

                    ?>
                    <div class="w-full md:w-1/2 lg:w-1/3 px-4 ">
                        <div class="max-w-[370px] mx-auto mb-10">
                            <div class="rounded overflow-hidden mb-8">
                                <img src="<?= get_the_post_thumbnail_url(); ?>" alt="image" class="w-full" />
                            </div>
                            <div>
                                <span class="
                     bg-primary
                     rounded
                     inline-block
                     text-center
                     py-1
                     px-4
                     text-xs
                     leading-loose
                     font-semibold
                     text-white
                     mb-5
                     ">
                                    <?= the_date() . ',' . the_time(); ?>
                                </span>
                                <h3>
                                    <a href="javascript:void(0)" class="
                        font-semibold
                        text-xl
                        sm:text-2xl
                        lg:text-xl
                        xl:text-2xl
                        mb-4
                        inline-block
                        text-dark
                        hover:text-primary
                        ">
                                        <?= the_title(); ?>
                                    </a>
                                </h3>
                                <p class="text-base text-body-color">
                                    <?= the_excerpt(); ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php endif; ?>


        </div>
    </div>
</section>
<!-- ====== Blog Section End -->


<?php
get_footer();
