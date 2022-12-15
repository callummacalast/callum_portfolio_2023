<?php /* Template Name: About Me */
get_header();
$about_image = get_field('about_image');
?>

<section class="">
    <div class="container max-w-xl p-6 py-12 mx-auto space-y-24 lg:px-8 lg:max-w-7xl">
        <div>
            <h2 class="text-3xl font-bold tracking-tight text-left sm:text-5xl ">About me<span class="text-blue-600">.</span></h2>
        </div>
        <div class="grid lg:gap-8 lg:grid-cols-2 lg:items-center text-black" style="margin-top: 10px;">
            <div>
                <h3 class="text-2xl font-bold tracking-tight sm:text-3xl ">Callum Macalast at a glance</h3>
                <p class="mt-3 text-lg ">Website development has always been a passion of mine from, from a young age anything and everything tech got me thinking - <span class="italic"> 'How does that work?'</span>.</p>
                <div class="mt-12 space-y-12">
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center w-12 h-12 rounded-md bg-violet-400 text-gray-900"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-7 h-7">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg></div>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-medium leading-6 ">4+ Years of web development</h4>
                            <p class="mt-2 ">I have been building and creating websites for the past 4+ years, ranging from various different tech</p>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center w-12 h-12 rounded-md bg-violet-400 text-gray-900"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-7 h-7">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg></div>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-medium leading-6 ">A keen surfer and skateboarder</h4>
                            <p class="mt-2 ">Skateboarding and surfing is a way for me to escape the life of tech and catch some downtime wherever possible!</p>
                        </div>
                    </div>
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center w-12 h-12 rounded-md bg-violet-400 text-gray-900"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-7 h-7">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg></div>
                        </div>
                        <div class="ml-4">
                            <h4 class="text-lg font-medium leading-6 ">Travelling</h4>
                            <p class="mt-2 "><span class="italic">'The action or activity of going from one place to another, typically over a distance of some length.' - Google</span></p>
                        </div>
                    </div>
                </div>
            </div>
            <div aria-hidden="true" class="mt-10 lg:mt-0"><img src="<?= wp_get_attachment_url($about_image); ?>" alt="" height="700" class="mx-auto rounded-lg shadow-lg bg-gray-500 object-cover"></div>
        </div>
    </div>
</section>

<?php
get_footer();
