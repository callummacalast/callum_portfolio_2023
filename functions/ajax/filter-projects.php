<?php

add_action('wp_ajax_nopriv_filter_project', 'filter_projects');
add_action('wp_ajax_filter_project', 'filter_projects');

function filter_projects()
{

    $category = $_POST['category'];

    $args = array(
        'post_type'   => 'projects',
        'post_status' => 'publish',
    );

    if (isset($category)) {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'project_categories',
                'field' => 'id',
                'terms' => $category
            )
        );
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
            <article class="flex flex-col bg-gray-900 item-blog" style="margin: 0!important;">
                <a rel="noopener noreferrer" href="<?= get_the_permalink(); ?>" aria-label="Te nulla oportere reprimique his dolorum" style="margin: 0;">
                    <img alt="" class="object-cover w-full h-52 bg-gray-500" src="<?= get_the_post_thumbnail_url(); ?>">
                </a>
                <div class="flex flex-col flex-1 p-6">
                    <a rel="noopener noreferrer" href="#" aria-label="Te nulla oportere reprimique his dolorum"></a>
                    <a rel="noopener noreferrer" href="#" class="text-xs tracking-wider uppercase hover:underline text-sky-400">Convenire</a>
                    <h3 class="flex-1 py-2 text-lg font-semibold leading-snug text-white"><?= the_title(); ?></h3>
                    <div class="flex flex-wrap justify-between pt-3 space-x-2 text-xs text-gray-400">
                        <span><?= get_the_date(); ?></span>
                        <span>2.2K views</span>
                    </div>
                </div>
            </article>
<?php
        endwhile;
    endif;

    die();
}
