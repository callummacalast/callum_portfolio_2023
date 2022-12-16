<?php

/**
 * A Simple Category Template
 */

get_header();
$posts = get_queried_object();


$category_id = $posts->term_id;
$category_slug = $posts->slug;


?>

<?php

if ($posts->taxonomy == 'project_categories') {
    $args = array(
        'post_type' => 'projects',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'tax_query' => array(
            array(
                'taxonomy' => 'project_categories',
                'field' => 'slug',
                'terms' => $category_slug
            )
        )
    );
} elseif ($posts->taxonomy == 'category') {
    $args = array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'category_name' => $category_slug,
        'posts_per_page' => -1,
    );
}
$our_posts = new WP_Query($args);

?>
<section class="pt-10 pb-10 lg:pb-20">
    <div class="container mx-auto">
        <div class="heading my-5 text-center">
            <?php if ($posts->taxonomy == 'project_categories') : ?>
                <h1 class="lg:text-5xl text-3xl font-bold">Project Category: <?= single_cat_title(); ?><span class="text-blue-600">.</span></h1>
            <?php else : ?>
                <h1 class="lg:text-5xl text-3xl font-bold">Category: <?= single_cat_title(); ?><span class="text-blue-600">.</span></h1>
            <?php endif; ?>
        </div>

        <div class="flex flex-wrap -mx-4 blogs transition mt-16">
            <?php if ($our_posts->have_posts()) : ?>
                <?php while ($our_posts->have_posts()) : $our_posts->the_post(); ?>
                    <div class="w-full md:w-1/2 lg:w-1/3 px-4 ">
                        <div class="max-w-[370px] mx-auto mb-10">
                            <div class="rounded overflow-hidden mb-8 shadow " style="height: 250px!important;">
                                <img src="<?= get_the_post_thumbnail_url(); ?>" alt="image" class="w-full h-full object-cover hover:scale-105 transition ease-in-out delay-50" />
                            </div>
                            <div class="my-3">
                                <div class="flex justify-between items-center my-5">

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
                     hover:bg-transparent
                     border
                     borer-primary
                     transition
                     ease
                     hover:text-black

                     ">
                                        <?php if ($posts->taxonomy == 'project_categories') : ?>
                                            <?php
                                            $cat = get_the_terms($post->ID, 'project_categories');
                                            ?>
                                            <?= $cat[0]->name; ?>
                                        <?php else : ?>
                                        <?php endif; ?>
                                        <?= the_category(); ?>
                                    </span>
                                    <span class="text-xs font-bold"><?= get_the_date(__('d M')); ?></span>
                                </div>

                                <h3>
                                    <a href="<?= the_permalink(); ?>" class="
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

<?php

get_footer();
