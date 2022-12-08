(function($) {

    $(document).ready(function() {
        $(document).on('click', '.js-filter-item', function(e) {
            e.preventDefault();

            var category = $(this).data('category');

            $.ajax({
                url: wp_ajax.ajax_url,
                data: { action: 'filter', category: category},
                type: 'post',
                // beforeSend: function(xhr){
                //     $('.blogs').html('<div class="flex flex-row items-center justify-center mx-auto animate-bounce">Loading</div>')
                // },
                success: function(result) {
                    $('.blogs').html(result);
                    jQuery(".item-blog").fadeIn("slow");
                }, 
                error: function (result) {
                    console.warn(result)
                }
            })
        })
    
    })
})(jQuery);