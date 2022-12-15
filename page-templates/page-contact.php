<?php
/* Template Name: Contact Me */
get_header();
?>
<section class="bg-white dark:bg-gray-900">
    <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
        <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-center text-gray-900 dark:text-white">Contact Me</h2>
        <p class="mb-8 lg:mb-16 font-light text-center text-gray-500 dark:text-gray-400 sm:text-xl">Got a technical issue? Want to send feedback about something? Need more details about me or my tech choice ;)? Let me know.</p>
        <?php echo do_shortcode('[ninja_form id=1]'); ?>

    </div>
</section>

<?php
get_footer();
