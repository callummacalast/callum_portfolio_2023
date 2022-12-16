<?php

get_header();
$post_id = get_the_ID();

$category = get_the_terms($id, 'project_categories');


$post = get_post($id);
$author = $post->post_author;
$first_name = get_the_author_meta('first_name', $author);
$last_name = get_the_author_meta('last_name', $author);



?>
<div class="mb-4 md:mb-0 w-full mx-auto relative" style="height: 24em;">
    <div class="absolute left-0 bottom-0 w-full h-full z-10 " style="background-image: linear-gradient(219deg,transparent,rgba(0,0,0,.7));"></div>
    <img src="<?= get_the_post_thumbnail_url(); ?>" class="absolute left-0 top-0 w-full h-full z-0 object-cover" />
    <div class="p-4 absolute bottom-0 left-0 z-20">
        <a href="<?= get_home_url(); ?>/project_categories/<?= $category[0]->slug; ?>" class="px-4 py-1 bg-blue-500 text-white rounded-lg shadow hover:bg-blue-600 transition inline-flex items-center justify-center mb-2"><?= $category[0]->name ?></a>
        <h2 class="text-4xl font-semibold text-gray-100 leading-tight">
            <?= the_title(); ?>
        </h2>
        <div class="flex mt-3">
            <img src="https://randomuser.me/api/portraits/men/97.jpg" class="h-10 w-10 rounded-full mr-2 object-cover" />
            <div>
                <p class="font-semibold text-gray-200 text-sm"> <?= $first_name . ' ' . $last_name; ?> </p>
                <p class="font-semibold text-gray-400 text-xs"> <?= get_the_date('d M'); ?> </p>
            </div>
        </div>
    </div>
</div>

<div class="px-4 lg:px-0 mt-12 text-gray-700 max-w-screen-md mx-auto text-lg leading-relaxed project-content">
    <?= the_content(); ?>

</div>

<?php
get_footer();
