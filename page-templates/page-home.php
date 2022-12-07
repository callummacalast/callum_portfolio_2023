<?php /* Template Name: Homepage */
get_header();
?>
<main class="container mx-auto ">
    <section class="bg-gray-800 text-gray-100 h-3/4">
        <div class="container flex flex-col justify-center p-6 mx-auto sm:py-12 lg:py-24 lg:flex-row lg:justify-between">
            <div class="flex flex-col justify-center p-6 text-center rounded-sm lg:max-w-md xl:max-w-lg lg:text-left">
                <h1 class="text-5xl font-bold leading-none sm:text-6xl flex flex-col"><span class="text-violet-400 mr-2">Callum</span>Macalast</h1>
                <p class="mt-6 mb-8 text-lg sm:mb-12">A self-taught full-stack web developer, with a passion for anything tech!</p>
                <div class="flex flex-col space-y-4 sm:items-center sm:justify-center sm:flex-row sm:space-y-0 sm:space-x-4 lg:justify-start"><a rel="noopener noreferrer" class="px-8 py-3 text-lg font-semibold rounded bg-violet-400 border-violet-400 text-gray-900 hover:border-gray-100 hover:bg-none" href="/about">About Me</a><a rel="noopener noreferrer" class="px-8 py-3 text-lg font-semibold border rounded border-gray-100 hover:bg-violet-400 hover:text-gray-900 hover:border-violet-400 transition" href="/projects">My Work</a></div>
            </div>
            <div class="flex items-center justify-center p-6 mt-8 lg:mt-0 h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128"><img src="https://www.callummacalast.com/img/surfing_cal.jpg" alt="" layout="fill" class="object-contain h-72 sm:h-80 lg:h-96 xl:h-112 2xl:h-128 rounded shadow"></div>
        </div>
    </section>
</main>

<?php
get_footer();
