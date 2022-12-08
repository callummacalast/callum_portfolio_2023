<?php /* Template Name: Contact Me */
get_header();

?>

<div class="grid max-w-screen-xl grid-cols-1 gap-8 px-8 py-16 mx-auto rounded-lg md:grid-cols-2 md:px-12 lg:px-16 xl:px-32 bg-gray-800 text-gray-100">
    <div class="flex flex-col justify-between">
        <div class="space-y-2">
            <h2 class="text-4xl font-bold leading-tight lg:text-5xl">Let's talk!</h2>
            <div class="text-gray-400">Vivamus in nisl metus? Phasellus.</div>
        </div>
        <img src="assets/svg/doodle.svg" alt="" class="p-6 h-52 md:h-64">
    </div>
    <?php echo do_shortcode('[ninja_form id=1]'); ?>
</div>

<?php

get_footer();
