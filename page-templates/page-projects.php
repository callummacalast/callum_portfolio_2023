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


<section class="py-6 sm:py-12  text-black">
    <div class="container p-6 mx-auto space-y-8">
        <div class="heading my-5 text-center">
            <h1 class="text-5xl font-bold">My Projects<span class="text-blue-600">.</span></h1>
        </div>

        <div class="grid lg:grid-cols-8 md:grid-cols-4 grid-cols-2 categories gap-5 container mx-auto">

            <button class="js-filter-project inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-300 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">All</button>
            <?php
            $project_cats = get_terms(array('taxonomy' => 'project_categories'));
            // var_dump($project_cats);



            foreach ($project_cats as $cat) : ?>
                <button class="js-filter-project inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-300 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" data-category="<?= $cat->term_id; ?>"><?= $cat->name; ?></button>

            <?php endforeach; ?>



        </div>
        <div class="grid grid-cols-1 gap-x-4 gap-y-8 md:grid-cols-2 lg:grid-cols-4 blogs">
            <?php if ($our_posts->have_posts()) : ?>
                <?php while ($our_posts->have_posts()) : $our_posts->the_post(); ?>
                    <?php
                    $cat = get_the_terms($post->ID, 'project_categories');
                    ?>
                    <article class="flex flex-col bg-gray-900" style="margin: 0!important;">
                        <a rel="noopener noreferrer" href="<?= get_the_permalink(); ?>" aria-label="Te nulla oportere reprimique his dolorum" style="margin: 0;">
                            <img alt="" class="object-cover w-full h-52 bg-gray-500" src="<?= get_the_post_thumbnail_url(); ?>">
                        </a>
                        <div class="flex flex-col flex-1 p-6">
                            <a rel="noopener noreferrer" href="#" aria-label="Te nulla oportere reprimique his dolorum"></a>
                            <a rel="noopener noreferrer" href="<?= get_home_url(); ?>/project_categories/<?= $cat[0]->slug; ?>" class="text-xs tracking-wider uppercase hover:underline text-sky-400"><?= $cat[0]->name; ?></a>
                            <h3 class="flex-1 py-2 text-lg font-semibold leading-snug text-white"><?= the_title(); ?></h3>
                            <div class="flex flex-wrap justify-between pt-3 space-x-2 text-xs text-gray-400">
                                <span><?= get_the_date(); ?></span>

                            </div>
                        </div>
                    </article>

                <?php endwhile; ?>
            <?php endif; ?>


        </div>
    </div>
</section>

<!-- ====== Blog Section End -->


<?php
get_footer();
