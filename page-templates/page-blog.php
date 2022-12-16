<?php /* Template Name: Blog */
get_header();

$args = array(
    'post_type'   => 'post',
    'post_status' => 'publish',
);
$our_posts = new WP_Query($args);
?>


<!-- component -->
<link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />
<!-- ====== Blog Section Start -->
<section class="pt-10 pb-10 lg:pb-20">
    <div class="container">
        <div class="heading my-5 text-center">
            <h1 class="text-5xl font-bold">Blog<span class="text-blue-600">.</span></h1>
        </div>
        <div class="grid lg:grid-cols-8 md:grid-cols-4 grid-cols-2 categories gap-5 container mx-auto">
            <button class="js-filter-item inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-300 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">All</button>
            <?php
            $cat_args = array(
                'exclude' => array(1),
                'option_all' => 'ALL'
            );
            $cats = get_categories($cat_args);
            foreach ($cats as $cat) : ?>
                <button class="js-filter-item inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-300 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out " data-category="<?= $cat->term_id; ?>"><?= $cat->name; ?></button>


            <?php endforeach; ?>
        </div>
        <div class="flex flex-wrap -mx-4 blogs transition mt-16">
            <?php if ($our_posts->have_posts()) : ?>
                <?php while ($our_posts->have_posts()) : $our_posts->the_post(); ?>
                    <div class="w-full md:w-1/2 lg:w-1/3 px-4 ">
                        <div class="max-w-[370px] mx-auto mb-10">
                            <div class="rounded overflow-hidden mb-8 shadow" style="height: 250px!important;">
                                <img src="<?= get_the_post_thumbnail_url(); ?>" alt="image" class="w-full h-full object-cover" />
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
                                        <?= the_category(); ?>
                                    </span>
                                    <span class="text-xs font-bold"><?= get_the_date(__('d M')); ?></span>
                                </div>

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
