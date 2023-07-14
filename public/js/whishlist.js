$('.whishlist_btn').on('click',function () {
    let product_id = $(this).attr('product_id');

    $.ajax({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf"]').attr('content')
        },
        url: '/whishlist/'+product_id,
        method: "post",
        beforeSend: () => {
            $(this).attr('disabled',true);  
        },
        success: (response) => {

            $(this).toggleClass('whished');

            if ( $(this).hasClass('whished') ) {
                $(this).text('Whished');
            } else {
                $(this).text('Add To Whished List');
            }

            $(this).attr('disabled',false);  
        }
    });
});