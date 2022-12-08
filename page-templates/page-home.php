<?php /* Template Name: Homepage */
get_header();
?>
<div class="relative flex flex-col-reverse py-16 lg:pt-0 lg:flex-col lg:pb-0">
    <div class="inset-y-0 top-0 right-0 z-0 w-full max-w-xl px-4 mx-auto md:px-0 lg:pr-0 lg:mb-0 lg:mx-0 lg:w-7/12 lg:max-w-full lg:absolute xl:px-0">
        <svg class="absolute left-0 hidden h-full text-white transform -translate-x-1/2 lg:block" viewBox="0 0 100 100" fill="currentColor" preserveAspectRatio="none slice">
            <path d="M50 0H100L50 100H0L50 0Z"></path>
        </svg>
        <img class="object-cover w-full h-56 rounded shadow-lg lg:rounded-none lg:shadow-none md:h-96 lg:h-full" src="https://www.callummacalast.com/img/surfing_cal.jpg" alt="" />
    </div>
    <div class="relative flex flex-col items-start w-full max-w-xl px-4 mx-auto md:px-0 lg:px-8 lg:max-w-screen-xl">
        <div class="mb-16 lg:my-40 lg:max-w-lg lg:pr-5">

            <h2 class="mb-5 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none">
                Callum Macalast<span class="text-blue-600">.</span>
                <br class="hidden md:block" />
                <span class="inline-block text-deep-purple-accent-400 text-3xl">Web Developer</span>
            </h2>
            <p class="pr-5 mb-5 text-base text-gray-700 md:text-lg">
                I am a self taught web developer from rural pembrokeshire! I am very passionate about anything tech!
            </p>
            <div class="flex items-center">
                <a href="<?= get_home_url(); ?>/projects" class="inline-flex items-center justify-center h-12 px-6 mr-6 font-medium tracking-wide text-white transition duration-200 rounded shadow-md bg-blue-500 hover:bg-blue-700 focus:shadow-outline focus:outline-none">
                    My Work
                </a>
                <a href="<?= get_home_url(); ?>/about" aria-label="" class="inline-flex items-center justify-center h-12 px-6 mr-6 font-medium tracking-wide hover:text-white transition duration-200 rounded shadow-md  hover:bg-blue-700 focus:shadow-outline focus:outline-none">
                    About me
                </a>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();
