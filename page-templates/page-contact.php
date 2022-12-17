<?php
/* Template Name: Contact Me */
get_header();
?>
<section class="bg-white dark:bg-gray-900">
    <div class="py-3 lg:py-10 px-4 mx-auto max-w-screen-md">
        <h1 class="text-5xl text-center font-bold">Contact Me<span class="text-blue-600">.</span></h1>
        <p class="mb-8 lg:mb-8 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">Got a technical issue? Want to send feedback about something? Need more details about me or my tech choice ;)? Let me know.</p>
        <?php echo do_shortcode('[ninja_form id=1]'); ?>
    </div>
</section>
<?php
get_footer();
