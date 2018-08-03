$(document).ready(function() {
    $("body").responsiveText();  

    $('[data-toggle="tooltip"]').tooltip({
        placement:"right"
    });  

    $('.addition_gallery_play').click(function(e) {
        e.stopPropagation();
        e.preventDefault();
        $(this).prev('video').get(0).play();
        $(this).hide();
    }); 

    $('.modal_video_opener').click(function(e) {
        e.stopPropagation();
        e.preventDefault();
        var video_url = $(this).attr('href').replace(/%20/g,' ');       
        var video_id = video_url.substr(video_url.lastIndexOf('/') + 1).replace(/\s/g,'_');
        if ($('#modal_video_' + video_id).length == 0) {
            var modal_video = "<div id='modal_video_" + video_id + "' class='modal fade modal_video' tabindex='-1' role='dialog' aria-hidden='true'><div class='modal-dialog modal-lg'><div class='modal-content'><a href='#' data-dismiss='modal' class='modal_video_close'></a><video class='modal_video_el' style='width: 100%; height: auto;' preload='auto' controls><p>Your Browser does not support HTML5 Video tag or the video cannot be played.</p><source src='" + video_url + "'></video></div></div></div>";
            $('body').append(modal_video);
        };
        $('#modal_video_' + video_id).modal('show');
    });

     setTimeout(function() {
        $('.addition_center_list_title').each(function(index, el) {
            if ($(this).prev('.prepend_text').length > 0){
                var prepend_text = $(this).prev('.prepend_text').text();
                if (prepend_text != ''){
                    $(this).prepend('<span class="prepend_text_span" style="font-size: 270%">'+prepend_text+'</span>');
                }

            }
            $(this).css('text-align', 'left');
            if ($(this).hasClass('white_space_normal')){
                $(this).css('white-space', 'normal');
            }
        });
    }, 200);

}); 

$(document).on('click', '.gallery_modal_close', function(event) {
    var vid = $('video'); 
    vid.each(function(index, el) {
        $(this).get(0).pause();
    });
}); 

$(document).on('click', '.modal_video_close', function(event) {
    var vid = $('video'); 
    vid.each(function(index, el) {
        $(this).get(0).pause();
    });
}); 

$(window).load(function() {
    $('.spoiler_toggler').click(function(e) {
        e.stopPropagation();
        e.preventDefault();
        $(this).next('.spoiler_body').slideToggle(200);
        $(this).toggleClass('opened');
    });

   	$('.addition_image_info_inner').each(function(index, el) {
    	var addition_image_info_inner_width = $(this).closest('.addition_image').find('.addition_image_img').first().width();
    	$(this).width(addition_image_info_inner_width);
    	$(this).show();
    }); 

    $('.addition_element_with_button_info_inner').each(function(index, el) {
        var addition_element_with_button_info_inner_width = $(this).closest('.addition_element_with_button').find('.addition_element_with_button_img').first().width();
        $(this).width(addition_element_with_button_info_inner_width);
        $(this).show();
    });    	

});

$(window).resize(function(e) {
	$('.addition_image_info_inner').each(function(index, el) {
    	var addition_image_info_inner_width = $(this).closest('.addition_image').find('.addition_image_img').first().width();
    	$(this).width(addition_image_info_inner_width);
    });

    $('.addition_element_with_button_info_inner').each(function(index, el) {
        var addition_element_with_button_info_inner_width = $(this).closest('.addition_element_with_button').find('.addition_element_with_button_img').first().width();
        $(this).width(addition_element_with_button_info_inner_width);
        $(this).show();
    });  
    setTimeout(function() {
        $('.addition_center_list_title').each(function(index, el) {
            if ($(this).prev('.prepend_text').length > 0){
                var prepend_text = $(this).prev('.prepend_text').text();
                if (prepend_text != ''){
                    $(this).empty().append($(this).next('.main_text').text()).prepend('<span class="prepend_text_span" style="font-size: 250%">'+prepend_text+'</span>');
                }
            }
        });
    }, 100);   

});

function show_button(video){
    jQuery(video).next('a.addition_gallery_play').show();
}