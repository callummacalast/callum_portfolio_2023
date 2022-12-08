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
<section class="pt-20 lg:pt-[120px] pb-10 lg:pb-20">
    <div class="container">
        <div class="flex flex-wrap justify-center -mx-4">
            <div class="w-full px-4">
                <div class="text-center mx-auto mb-[60px] lg:mb-20 max-w-[510px]">
                    <span class="font-semibold text-lg text-primary mb-2 block">
                        Our Blogs
                    </span>
                    <h2 class="
                  font-bold
                  text-3xl
                  sm:text-4xl
                  md:text-[40px]
                  text-dark
                  mb-4
                  ">
                        Our Recent News
                    </h2>
                    <p class="text-base text-body-color">
                        There are many variations of passages of Lorem Ipsum available
                        but the majority have suffered alteration in some form.
                    </p>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-5 categories gap-5 container mx-auto">
            <button class="js-filter-project p-3 bg-blue-300 hover:bg-blue-400 text-white">All</button>
            <?php
            $project_cats = get_terms(array('taxonomy' => 'project_categories'));
            // var_dump($project_cats);



            foreach ($project_cats as $cat) : ?>
                <button class="js-filter-project p-3 bg-blue-300 hover:bg-blue-400 text-white" data-category="<?= $cat->term_id; ?>"><?= $cat->name; ?></button>

            <?php endforeach; ?>



        </div>
        <div class="flex flex-wrap -mx-4 blogs transition">


            <?php if ($our_posts->have_posts()) : ?>
                <?php while ($our_posts->have_posts()) : $our_posts->the_post(); ?>
                    <?php

                    ?>
                    <div class="w-full md:w-1/2 lg:w-1/3 px-4 ">
                        <div class="max-w-[370px] mx-auto mb-10">
                            <div class="rounded overflow-hidden mb-8">
                                <img src="https://cdn.tailgrids.com/1.0/assets/images/blogs/blog-01/image-01.jpg" alt="image" class="w-full" />
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
                                    <?= the_date(); ?>
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
