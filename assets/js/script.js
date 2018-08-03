var footer_height;
var header_height;
$(document).ready(function() {
    $('.callback_container').click(function(e) {
        $('label.error').hide();
    });
    $('.callback_btn').click(function(e) {
        e.stopPropagation();
        e.preventDefault();
        $("#callback_form").fadeIn(300);
        $("#callback_success").fadeOut(300);
        $(this).parent('.callback_container').addClass('opened');
    });
    $('.callback_container_close').click(function(e) {
        e.stopPropagation();
        e.preventDefault();
        $(this).parent('.callback_container').removeClass('opened');
    });
    $(document).on('click', '.enter_name', function(e) {
        e.stopPropagation();
        e.preventDefault();
        $('#callback_form').toggleClass('phone').toggleClass('name');
    });
    $('.cancel_name').click(function(e) {
        e.stopPropagation();
        e.preventDefault();
        $('#callback_form').toggleClass('phone').toggleClass('name');
    });
    $(".do_callback").on("click", function(e) {
        e.stopPropagation();
        e.preventDefault();
        $("#callback_form").submit();
    });
    $("#callback_form").validate({
        submitHandler: function(form) {
            var formdata = $("#callback_form").serialize();
            $("#callback_form")[0].reset();
            $('.bmw_checkbox').closest('label').removeClass('checked');
            $.ajax({
                url: "service/send",
                type: 'POST',
                data: {
                    "data": formdata,
                    "subj": "callback"
                },
                success: function(data) {
                    $("#callback_form").fadeOut(300);
                    $("#callback_success").fadeIn(300);
                    $('.personal_data_note').css('opacity', '0');
                    $('.callback_container').addClass('success');
                    setTimeout(function() {
                        $('.callback_container_close').click();
                        $('.callback_container').removeClass('success');
                    }, 3000);
                }
            });
        }
    });

   /* $("input[type=phone]").mask('+38 (999) 999-99-99');*/
      Inputmask({
        mask: "+38 (999) 999-99-99",
        placeholder: "",
        clearMaskOnLostFocus: true,
        clearIncomplete: true
    }).mask('input[name="phone"]');

      
    $('.models_cards_toggler').click(function(e) {
        e.stopPropagation();
        e.preventDefault();
        var $el = $(this)
        var windowWidth = $('.models_list_outer').width();
        var boxWidth = $el.width();
        var boxesPerRow = ~~(windowWidth / boxWidth);
        var index = $el.closest('.models_list_item').index();
        var col = (index % boxesPerRow) + 1;
        var $endOfRow = $('.models_list_item').eq(index + boxesPerRow - col);
        if (!$endOfRow.length) $endOfRow = $('.models_list_item').last();
        var id = $el.attr('data-id');
        var loaded_id = 0;
        if ($('.loadable_models').length > 0) {
            loaded_id = $('.loadable_models').attr('data-id');
        }
        if (loaded_id != 0) {
            $('.models_cards_toggler').removeClass('active');
            $('.loadable_models').fadeOut(400, function() {
                $('.loadable_models').remove();
                if (loaded_id != id) {
                    var content = $('#models_row_' + id).html();
                    $endOfRow.after("<div class='loadable_models' data-id='" + id + "' >" + content + "</div>");
                    $('.loadable_models').fadeIn(400);
                    $el.addClass('active');
                }
            });
        } else {
            var content = $('#models_row_' + id).html();
            $endOfRow.after("<div class='loadable_models' data-id='" + id + "' >" + content + "</div>");
            $('.loadable_models').fadeIn(500);
            $el.addClass('active');
        }
    });
    $("#up_button").on("click", function(e) {
        e.stopPropagation();
        e.preventDefault();
        $('html, body').animate({
            scrollTop: 0
        }, 450);
    });
    $(".search_toggler").on("click", function(e) {
        e.stopPropagation();
        e.preventDefault();
        $(".search_container").slideToggle(250);
    });
    $(".xs_contacts_a").on("click", function(e) {
        e.stopPropagation();
        e.preventDefault();
        $(".xs_contacts_menu").slideToggle(250);
    });
    $(".xs_opener_a").on("click", function(e) {
        e.stopPropagation();
        e.preventDefault();
        if ($(this).hasClass('opened')) {
            $('.xs-main_level_a').removeClass('opened');
            $('.xs_sub_menu').hide();
            $('.xs-main_level_a').closest('li').show();
        } else {
            $('.xs-main_level_a').removeClass('opened');
            $('.xs-main_level_a').closest('li').hide();
            $(this).closest('li').show();
            $(this).addClass('opened');
            $('.xs_sub_menu').hide();
            $(this).next('.xs_sub_menu').show();
        }
    });
    $(".xs_und_opener").on("click", function(e) {
        e.stopPropagation();
        e.preventDefault();
        if ($(this).hasClass('opened')) {
            $('.xs-second_level_a').removeClass('opened');
            $('.xs_under_menu').hide();
            $('.xs-second_level_a').closest('li').show();
            $(this).closest('.xs_sub_menu').prev('a').show();
            $('.xs-main_level_a').show();
        } else {
            $('.xs-main_level_a').hide();
            $('.xs-second_level_a').removeClass('opened');
            $('.xs-second_level_a').closest('li').hide();
            $(this).closest('li').show();
            $(this).addClass('opened');
            $('.xs_under_menu').hide();
            $(this).next('.xs_under_menu').show();
        }
    });
});
$(window).load(function() {
    var footer_height = $("footer").height() + 70;
    $(".main-wrap").css('padding-bottom', footer_height);
    // $('.tiles').each(function(index, el) {
    //     var max_tile_height = 0;
    //     $(this).find('.tile-item').each(function(index, el) {
    //         if ($(this).height() > max_tile_height) {
    //             max_tile_height = $(this).height();
    //         };
    //     });
    //     $(this).find('.tile-item').height(max_tile_height);
    // });
    $(".share").on("click", function(e) {
        e.stopPropagation();
        e.preventDefault();
        var count = $(this).attr('data-count');
        $('#share42').find('a[data-count="' + count + '"]').click();
    });
    $(".do_test_drive").on("click", function(e) {
        e.stopPropagation();
        e.preventDefault();
        if ($('#data').prop('checked')) {
            if ($('#rights').prop('checked')) {
                $("#test_drive_form").submit();
            } else {
                $('#rights').closest('label').addClass('unchecked');
            }
        } else {
            $('#data').closest('label').addClass('unchecked');
        };
    });
    $(".do_service_appoint").on("click", function(e) {
        e.stopPropagation();
        e.preventDefault();
        if ($('#data').prop('checked')) {
            $("#service_appoint_form").submit();
        } else {
            $('#data').closest('label').addClass('unchecked');
        };
    });
    $(".do_feedback").on("click", function(e) {
        e.stopPropagation();
        e.preventDefault();
        $("#feedback_form").submit();
    });
    $("#do_mini_tour").on("click", function(e) {
        e.stopPropagation();
        e.preventDefault();
        $("#mini_form").submit();
    });
    $("#mini_form").validate({
        submitHandler: function(form) {
            var formdata = $("#mini_form").serialize();
            $.ajax({
                url: "service/send-mini",
                type: 'POST',
                data: {
                    "data": formdata,
                    "subj": "test_drive_mini"
                },
                success: function(data) {
                    $("#mini_form").hide(300);
                    $("#mini-success").show(300);
                }
            });
        }
    });
    $("#test_drive_form").validate({
        submitHandler: function(form) {
            var formdata = $("#test_drive_form").serialize();
            $("#test_drive_form")[0].reset();
            $('.bmw_checkbox').closest('label').removeClass('checked');
            $.ajax({
                url: "service/send",
                type: 'POST',
                data: {
                    "data": formdata,
                    "subj": "test_drive"
                },
                success: function(data) {
                    $("#test_drive_success").removeClass('hide');
                    $("#test_drive_form_container").addClass('hide');
                    $("#wellcome_test_drive").addClass('hide');

                }
            });
        }
    });
    $("#service_appoint_form").validate({
        submitHandler: function(form) {
            var formdata = $("#service_appoint_form").serialize();
            $("#service_appoint_form")[0].reset();
            $('.bmw_checkbox').closest('label').removeClass('checked');
            $.ajax({
                url: "service/send",
                type: 'POST',
                data: {
                    "data": formdata,
                    "subj": "service_appoint"
                },
                success: function(data) {
                    $("#service_appoint_success").removeClass('hide');
                    $("#service_appoint_form_container").addClass('hide');
                    $("#wellcome_service_appoint").addClass('hide');

                }
            });
        }
    });
    $("#feedback_form").validate({
        submitHandler: function(form) {
            var formdata = $("#feedback_form").serialize();
            $("#feedback_form")[0].reset();
            $('.bmw_checkbox').closest('label').removeClass('checked');
            $.ajax({
                url: "service/send",
                type: 'POST',
                data: {
                    "data": formdata,
                    "subj": "feedback"
                },
                success: function(data) {
                    $("#feedback_success").removeClass('hide');
                    $(".do_feedback").addClass('hide');
                }
            });
        }
    });
    $('.fixed_contacts').click(function(e) {
        e.stopPropagation();
        e.preventDefault();
        var parent_a = $(this);
        parent_a.toggleClass('opened');
        $('.fixed_menu').toggleClass('opened');
    });
    $('.simple_menu_opener').click(function(e) {
        e.stopPropagation();
        e.preventDefault();
        var parent_a = $(this);
        parent_a.toggleClass('opened');
        parent_a.next('ul').slideToggle(400);
    });
    $('.opener_a').click(function(e) {
        e.stopPropagation();
        e.preventDefault();
        var parent_a = $(this);
        if (parent_a.hasClass('opened')) {
            $('.opener_a').removeClass('opened');
            $('.sub_menu').animate({
                'opacity': 0
            }, 250, function() {
                $('.sub_menu').hide();
            });
            $('.header-container').height(100);
        } else {
            var header_height = parent_a.next('.sub_menu').height() + 30 + 100;
            $('.opener_a').removeClass('opened');
            parent_a.addClass('opened');
            $('.sub_menu').animate({
                'opacity': 0
            }, 250, function() {
                $('.sub_menu').hide();
                $('.header-container').height(header_height);
                parent_a.next('.sub_menu').show();
                parent_a.next('.sub_menu').animate({
                    'opacity': 1
                }, 250);
            });
        }
    });
    $('.und_opener').click(function(e) {
        e.stopPropagation();
        e.preventDefault();
        var parent_a = $(this);
        if ((parent_a).hasClass('opened')) {
            parent_a.closest('.sub_menu').css('border-color', 'transparent');
            $('.und_opener').removeClass('opened');
            $('.under_menu').animate({
                'opacity': 0
            }, 250, function() {
                $('.under_menu').hide();
            });
        } else {
            parent_a.closest('.sub_menu').css('border-color', '#BBB');
            $('.und_opener').removeClass('opened');
            parent_a.addClass('opened');
            $('.under_menu').animate({
                'opacity': 0
            }, 250, function() {
                $('.under_menu').hide();
                parent_a.next('.under_menu').show();
                parent_a.next('.under_menu').animate({
                    'opacity': 1
                }, 250);
            });
        }
    });
});
$(window).resize(function(event) {
    var footer_height = $("footer").height() + 70;
    $(".main-wrap").css('padding-bottom', footer_height);
});
$(window).scroll(function() {
    if ($(window).scrollTop() > 360) $("#up_button").fadeIn();
    else
        $("#up_button").fadeOut();
});

function Back() {
    history.back()
}
