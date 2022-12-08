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
                I am a self taught web developer from rural Pembrokeshire! I love anything tech, and surfing!
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
<section class=" mb-20">
    <div class="container flex flex-col mx-auto lg:flex-row">
        <div class="w-full lg:w-1/3" style="background-image: url('https://source.unsplash.com/random/640x480'); background-position: center center; background-size: cover;"></div>
        <div class="flex flex-col w-full p-6 lg:w-2/3 md:p-8 lg:p-12">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="w-8 h-8 mb-8 text-sky-400">
                <path fill-rule="evenodd" d="M2.166 4.999A11.954 11.954 0 0010 1.944 11.954 11.954 0 0017.834 5c.11.65.166 1.32.166 2.001 0 5.225-3.34 9.67-8 11.317C5.34 16.67 2 12.225 2 7c0-.682.057-1.35.166-2.001zm11.541 3.708a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
            </svg>
            <h2 class="text-3xl font-semibold leading-none">Modern solutions to all kinds of problems</h2>
            <p class="mt-4 mb-8 text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Non voluptatum rem amet!</p>
            <button class="self-start px-10 py-3 text-lg font-medium rounded-3xl bg-sky-400 text-gray-900">Get started</button>
        </div>
    </div>
</section>
<?php
get_footer();
