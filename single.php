<?php get_header(); ?>


<div class="container my-8 mx-auto">

	<?php if (have_posts()) : ?>

		<?php
		while (have_posts()) :
			the_post();
		?>
			<div class="px-5 mx-auto sm:p-10 md:p-16 ">
				<div class="flex flex-col max-w-3xl mx-auto overflow-hidden rounded">
					<img src="<?= get_the_post_thumbnail_url(); ?>" alt="" class="w-full lg:h-60 md:h-52 h-96  object-cover">
					<div class="p-6 pb-12 m-4 mx-auto -mt-16 space-y-6 lg:max-w-2xl sm:px-10 sm:mx-12 lg:rounded-md w-full post-article">
						<div class="space-y-2">
							<a rel="noopener noreferrer" href="#" class="inline-block text-2xl font-semibold sm:text-3xl text-white rounded p-3 bg-blue-500 drop-shadow"><?= the_title(); ?></a>
							<p class="text-xs ">
								<a rel="noopener noreferrer" href="#" class="text-xs hover:underline"><?= get_the_date(); ?></a>
							</p>
						</div>
						<div class="">
							<?= the_content(); ?>
						</div>
					</div>
				</div>
			</div>

			<?php
			// If comments are open or we have at least one comment, load up the comment template.
			//	if ( comments_open() || get_comments_number() ) :
			//		comments_template();
			//	endif;
			?>

		<?php endwhile; ?>

	<?php endif; ?>

</div>

<?php
get_footer();
