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
            <button class="js-filter-item p-3 bg-blue-300 hover:bg-blue-400 text-white">All</button>
            <?php
            $cat_args = array(
                'exclude' => array(1),
                'option_all' => 'ALL'
            );
            $cats = get_categories($cat_args);
            foreach ($cats as $cat) : ?>
                <button class="js-filter-item inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out" data-category="<?= $cat->term_id; ?>"><?= $cat->name; ?></button>


            <?php endforeach; ?>
        </div>
        <div class="flex flex-wrap -mx-4 blogs transition mt-16">
            <?php if ($our_posts->have_posts()) : ?>
                <?php while ($our_posts->have_posts()) : $our_posts->the_post(); ?>
                    <div class="w-full md:w-1/2 lg:w-1/3 px-4 ">
                        <div class="max-w-[370px] mx-auto mb-10">
                            <div class="rounded overflow-hidden mb-8 shadow">
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
                                    <?= get_the_date(); ?>
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

<section class="pt-24 pb-36 bg-white overflow-hidden">
    <div class="container px-4 mx-auto">
        <h2 class="mb-4 text-6xl md:text-7xl text-center font-bold font-heading font-heading tracking-px-n leading-tight">Latest from Blog</h2>
        <p class="mb-24 font-medium text-gray-600 text-center leading-relaxed md:max-w-lg mx-auto">Lorem ipsum dolor sit amet, to the consectr adipiscing elit. Volutpat tempor to the condimentum vitae vel purus.</p>
        <div class="flex flex-wrap -m-8">
            <?php if ($our_posts->have_posts()) : ?>
                <?php while ($our_posts->have_posts()) : $our_posts->the_post(); ?>
                    <div class="w-full md:w-1/2 p-8">
                        <div class="flex flex-wrap lg:items-center -m-4">
                            <div class="w-auto p-4">
                                <div class="overflow-hidden rounded-xl">
                                    <img class="transform hover:scale-105 transition ease-in-out duration-1000" src="<?= get_the_post_thumbnail_url(); ?>" alt="">
                                </div>
                            </div>
                            <div class="flex-1 p-4">
                                <div class="md:max-w-xs">
                                    <div class="flex flex-col justify-between h-full">
                                        <div class="mb-6">
                                            <p class="mb-1.5 text-sm text-gray-500 font-medium uppercase tracking-px">Product</p>
                                            <a class="inline-block hover:text-gray-800 hover:underline" href="#">
                                                <h3 class="text-xl font-semibold leading-normal"> <?= the_title(); ?></h3>
                                            </a>
                                        </div>
                                        <div class="flex flex-wrap items-center -m-1">
                                            <div class="w-auto p-1">
                                                <img src="flaro-assets/images/blog/blog-avatar.png" alt="">
                                            </div>
                                            <div class="w-auto p-1">
                                                <p class="text-sm font-semibold leading-relaxed">Wade Warren</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
