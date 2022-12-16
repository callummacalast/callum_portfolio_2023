<?php





add_action('wp_ajax_nopriv_filter', 'filter_ajax');
add_action('wp_ajax_filter', 'filter_ajax');

function filter_ajax()
{

    $category = $_POST['category'];

    $args = array(
        'post_type'   => 'post',
        'post_status' => 'publish',
    );

    if (isset($category)) {
        $args['category__in'] = array($category);
    }
    $our_posts = new WP_Query($args);



    if ($our_posts->have_posts()) :
        while ($our_posts->have_posts()) : $our_posts->the_post();
?>
            <style>
                .item-blog {
                    display: none;

                }
            </style>
            <div class="w-full md:w-1/2 lg:w-1/3 px-4  item-blog">
                <div class="max-w-[370px] mx-auto mb-10">
                    <div class="rounded overflow-hidden mb-8 shadow" style="height: 250px!important;">
                        <img src="<?= get_the_post_thumbnail_url(); ?>" alt="image" class="w-full h-full object-cover" />
                    </div>
                    <div>
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

                            ">
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
<?php
        endwhile;
    endif;
    die();
}
