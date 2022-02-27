$(".password_visibility").on('click', function () {
    if ($("#passwordInp").hasClass('showPass')) {
        $(".show_icon").addClass("active_show_icon")
        $(".hide_icon").removeClass("active_show_icon")
        $("#passwordInp").removeClass('showPass')
        $('#passwordInp').attr('type', 'password')
    } else {
        $(".hide_icon").addClass("active_show_icon")
        $(".show_icon").removeClass("active_show_icon")
        $("#passwordInp").addClass('showPass')
        $('#passwordInp').attr('type', 'text')
    }

})

$(document).on("click", ".active_inactive_ads_second_item_child_edit_link_delete_btn", function () {

    var thisis = $(this);

    $.ajax({
        url: `/products/${$(this).data('id')}`,
        type: 'GET',
        cache: false,
        processData: false,
        contentType: false,
        success: function (response) {
            if (response.success) {
                thisis.parent().parent().parent().hide();
            }
        },
        error: function (err) {

        }
    })
})

$(document).on("click", ".find_transport_form_select_title_wrapper", function () {
    var thisis = $(this);
    if (thisis.parent().find(".find_transport_form_select_hidden_wrapper").hasClass("open")) {

        thisis.parent().find(".find_transport_form_select_hidden_wrapper").removeClass("open");

    } else {

        $(".find_transport_form_select_hidden_wrapper").removeClass("open");
        $(this).parent().find(".find_transport_form_select_hidden_wrapper").addClass("open");
    }
});


$(document).on("click", ".find_transport_form_select_hidden_info", function () {
    var datainfo = $(this).data("info");
    var category_id = $(this).data("id");
    $(this).parent().parent().find(".hidden_category_data").val(category_id);
    $(this).parent().parent().find(".find_transport_form_select_title").html(datainfo);
    $(".find_transport_form_select_hidden_wrapper").removeClass("open");

})


$(document).on("click", ".sort_btn", function () {

    var data_id = $(this).data("id");
    $(".sort_btn").removeClass("active");
    $(this).addClass("active");


    $(".recent_announcements_item").removeClass("open");
    $("#" + data_id).addClass("open");
});


$(document).on("click", ".hamburger_menu", function () {
    $(".mobile_version").addClass("open");
    $("body").addClass("hidden_body");
    $(this).addClass("open");
});


$(document).on("click", ".mobile_version_close", function () {
    $(".mobile_version").removeClass("open");
    $("body").removeClass("hidden_body");
    $(".hamburger_menu").removeClass("open");
});


$(document).on("click", ".active_inactive_ads_second_item_sorts_btn", function () {

    var data_id = $(this).data("id");
    console.log(data_id);
    $(".active_inactive_ads_second_item_sorts_bt" +
        "n").removeClass("active");
    $(this).addClass("active");


    $(".active_inactive_ads_second_items_wrapper").removeClass("open");
    $("#" + data_id).addClass("open");
});


$(document).on("click", ".inactive_type_btn", function () {
    $(".active_products_wrapper").css('display', 'none');
    $(".noactiv_products_wrapper").css('display', 'block');
    $(".active_type_btn").removeClass("active");
    $(".inactive_type_btn").addClass("active");
});


$(document).on("click", ".active_type_btn", function () {
    $(".noactiv_products_wrapper").css('display', 'none');
    $(".active_products_wrapper").css('display', 'block');
    $(".inactive_type_btn").removeClass("active");
    $(".active_type_btn").addClass("active");
});

$(document).on('change', '#fileinput_form2', function () {

    var value = $(this).val();
    var arr = value.split('\\');
    var fileExtension = ['jpeg', 'jpg', 'png', 'gif', 'bmp'];
    var span = $(this).closest(".registration_input_type_files_wrapper").find(".file_span");

    $(this).closest(".registration_input_type_files_wrapper").find(".file_span").html(arr[arr.length - 1]);

    if ($.inArray($(this).val().split('.').pop().toLowerCase(), fileExtension) == -1) {

        span.html("Невозможно загрузить формат");
        span.css({
            'color': '#F60000'
        });

        $('.hide-title').css({
            "display": "block"
        })

    } else {

        $(".registration_input-type_file_img_wrapper").fadeIn();
        readURL(this);
        span.css({
            "display": "none"
        });

    }

});


function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#registration_input-type_file_img').attr('src', e.target.result);
        }

        reader.readAsDataURL(input.files[0]);
    }
}


$(document).on("click", ".registration_input-type_file_img_delete_btn", function () {
    $("#fileinput_form2").val("");
    $(this).closest(".registration_input-type_file_img_wrapper").fadeOut();
})


$(document).on("click", ".profile_settings_form_textarea_icon", function () {
    $(this).parent().find(".profile_settings_form_input_field").removeAttr("readonly");
    $(this).parent().find(".profile_settings_form_input_field").focus();
})


$(document).on("click", ".notification_delete_btn", function () {
    $(this).parent().parent().hide();
})


const swiper = new Swiper('#announcement_first_swiper', {
    // Optional parameters
    direction: 'horizontal',
    loop: true,
    slidesPerView: 1,


    // Navigation arrows
    navigation: {
        nextEl: '.announcement_next_btn',
        prevEl: '.announcement_prev_btn',
    },


});


$(document).on("click", ".open_users_chat", function () {
    $(".chat_popup").toggleClass("open");
    $("body").toggleClass("hidden_body");

})


$(document).on("click", ".announcement_edit_btn2", function () {
    // var value = $(this).parent().(".announcement_second_item_title").val();
    let val = $(this).parent().find('.announcement_second_item_title').data('info');
    $(this).parent().parent().find(".announcement_second_item_title_edit_btn_wrapper").hide();
    $(this).parent().parent().find(".announcement_second_item_input_icon_wrapper").addClass("open").find('.announcement_second_item_input_field').val(val);
})


$(document).on("click", ".check_mark_icon", function () {

    var val2 = $(this).parent().find(".announcement_second_item_input_field").val();
    console.log(val2)
    $(".announcement_second_item_title_edit_btn_wrapper").show();
    $(this).parent().parent().find(".announcement_second_item_title").html(val2);
    $(this).parent().parent().find(".announcement_second_item_input_icon_wrapper").removeClass("open");
    $(this).closest(".announcement_second_item_title_edit_btn_input_wrapper").find(".announcement_second_item_title").data('info', val2);
})


$(document).on("click", ".announcement_edit_btn3", function () {

    let val3 = $(this).closest(".announcement_second_item_title_edit_btn_input_wrapper").find('.announcement_second_item_car_info_details_text').data('info');
    $(this).closest(".announcement_second_item_title_edit_btn_input_wrapper").find('.announcement_second_item_car_info_details_text').hide();
    $(this).closest(".announcement_second_item_title_edit_btn_input_wrapper").find('.announcement_second_item_input_icon_wrapper').addClass("open").find('.announcement_second_item_input_field2').val(val3);

})


$(document).on("click", ".check_mark_icon", function () {

    let val2 = $(this).closest(".announcement_second_item_title_edit_btn_input_wrapper").find(".announcement_second_item_input_field2").val();
    $(this).closest(".announcement_second_item_title_edit_btn_input_wrapper").find('.announcement_second_item_car_info_details_text').show();
    $(this).closest(".announcement_second_item_title_edit_btn_input_wrapper").find('.announcement_second_item_car_info_details_text').html(val2);
    $(this).closest(".announcement_second_item_title_edit_btn_input_wrapper").find('.announcement_second_item_input_icon_wrapper').removeClass("open");
    $(this).closest(".announcement_second_item_title_edit_btn_input_wrapper").find('.announcement_second_item_car_info_details_text').data('info', val2);
})


$(document).on("click", ".announcement_edit_btn4", function () {
    let val4 = $(this).closest(".announcement_second_item_specifications_wrapper").find('.announcement_second_item_specifications_info').data('info');
    $(this).closest(".announcement_second_item_specifications_wrapper").find('.announcement_second_item_specifications_info').hide();
    $(this).closest(".announcement_second_item_specifications_wrapper").find('.announcement_second_item_specifications_input_icon_wrapper').addClass("open").find('.announcement_second_item_specification_input_field2').val(val4);

})

$(document).on("click", ".check_mark_icon", function () {
    let val5 = $(this).closest(".announcement_second_item_specifications_wrapper").find(".announcement_second_item_specification_input_field2").val();
    $(this).closest(".announcement_second_item_specifications_wrapper").find('.announcement_second_item_specifications_info').show();
    $(this).closest(".announcement_second_item_specifications_wrapper").find('.announcement_second_item_specifications_info').html(val5);
    $(this).closest(".announcement_second_item_specifications_wrapper").find('.announcement_second_item_specifications_input_icon_wrapper').removeClass("open");
    $(this).closest(".announcement_second_item_specifications_wrapper").find('.announcement_second_item_specifications_info').data('info', val5);
})
$("#button").click(function () {
    $("#fn").show();
    $("#ln").show();
});

$(document).on("submit", ".place_an_ad_form", function (event) {
    event.preventDefault();

    var token = $('meta[name="csrf-token"]').attr('content');

    var headline = $('input[name="headline"]', this);
    var headline_val = headline.val();

    var price = $('input[name="price"]', this);
    var price_val = price.val();

    var city = $('input[name="city"]', this);
    var city_val = city.val();

    var region = $('input[name="region"]', this);
    var region_val = region.val();

    var car_model = $('input[name="car_model"]', this);
    var car_model_val = car_model.val();

    var description = $('input[name="description"]', this);
    var description_val = description.val();

    var body_type = $('input[name="body_type"]', this);
    var body_type_val = body_type.val();

    var rudder = $('input[name="rudder"]', this);
    var rudder_val = rudder.val();

    var year_of_issue = $('input[name="year_of_issue"]', this);
    var year_of_issue_val = year_of_issue.val();

    var transmission = $('input[name="transmission"]', this);
    var transmission_val = transmission.val();

    var image = $('input[type="file"]', this);

    var category_id = $('input[name="category_id"]', this).val();

    var valid = true;

    // if (category_id.length < 1){
    //     valid = false
    //     $('.find_transport_form_select_title_wrapper').css('border','1px solid red');
    // }
    //
    // if (headline_val.length < 1){
    //     valid = false
    //     headline.parent().css('border','1px solid red');
    // }
    //
    // if (price_val.length < 1){
    //     valid = false
    //     price.parent().css('border','1px solid red');
    // }
    //
    // if (city_val.length < 1){
    //     valid = false
    //     city.parent().css('border','1px solid red');
    // }
    //
    // if (region_val.length < 1){
    //     valid = false
    //     region.parent().css('border','1px solid red');
    // }
    //
    // if (car_model_val.length < 1){
    //     valid = false
    //     car_model.parent().css('border','1px solid red');
    // }
    //
    // if (description_val.length < 1){
    //     valid = false
    //     description.parent().css('border','1px solid red');
    // }
    //
    // if (body_type_val.length < 1){
    //     valid = false
    //     body_type.parent().css('border','1px solid red');
    // }
    //
    // if (rudder_val.length < 1){
    //     valid = false
    //     rudder.parent().css('border','1px solid red');
    // }
    //
    // if (year_of_issue_val.length < 1){
    //     valid = false
    //     year_of_issue.parent().css('border','1px solid red');
    // }
    //
    // if (transmission_val.length < 1){
    //     valid = false
    //     transmission.parent().css('border','1px solid red');
    // }
    //
    // if (!valid) {
    //     return false;
    // }

    let formData = new FormData();

    formData.append('headline', headline_val);
    formData.append('price', price_val);
    formData.append('city', city_val);
    formData.append('region', region_val);
    formData.append('car_model', car_model_val);
    formData.append('description', description_val);
    formData.append('body_type', body_type_val);
    formData.append('rudder', rudder_val);
    formData.append('year_of_issue', year_of_issue_val);
    formData.append('transmission', transmission_val);
    formData.append('category_id', category_id);
    formData.append('image', image[0].files[0]);

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: "/profile/create-products",
        type: 'POST',
        data: formData,
        cache: false,
        processData: false,
        contentType: false,
        success: function (data) {
            if (data.success) {
                window.location.href = 'active-ads'
            }
        },
        error: function (error) {
            $('.alert-danger-headline').css('display', 'none');
            $('.alert-danger-price').css('display', 'none');
            $('.alert-danger-region').css('display', 'none');
            $('.alert-danger-city').css('display', 'none');
            $('.alert-danger-car_model').css('display', 'none');
            $('.alert-danger-description').css('display', 'none');
            $('.alert-danger-body_type').css('display', 'none');
            $('.alert-danger-rudder').css('display', 'none');
            $('.alert-danger-year_of_issue').css('display', 'none');
            $('.alert-danger-year_of_issue').css('display', 'none');


            $('#regionError').css('display', 'block');

            if (error.responseJSON.errors.headline) {
                $('.alert-danger-headline').css('display', 'block');
                $('.alert-danger-headline').text(error.responseJSON.errors.headline[0]);
            }
            if (error.responseJSON.errors.price) {
                $('.alert-danger-price').css('display', 'block');
                $('.alert-danger-price').text(error.responseJSON.errors.price[0]);
            }
            if (error.responseJSON.errors.region) {
                $('.alert-danger-region').css('display', 'block');
                $('.alert-danger-region').text(error.responseJSON.errors.region[0]);
            }
            if (error.responseJSON.errors.city) {
                $('.alert-danger-city').css('display', 'block');
                $('.alert-danger-city').text(error.responseJSON.errors.city[0]);
            }
            if (error.responseJSON.errors.car_model) {
                $('.alert-danger-car_model').css('display', 'block');
                $('.alert-danger-car_model').text(error.responseJSON.errors.car_model[0]);
            }
            if (error.responseJSON.errors.description) {
                $('.alert-danger-description').css('display', 'block');
                $('.alert-danger-description').text(error.responseJSON.errors.description[0]);
            }
            if (error.responseJSON.errors.body_type) {
                $('.alert-danger-body_type').css('display', 'block');
                $('.alert-danger-body_type').text(error.responseJSON.errors.body_type[0]);
            }
            if (error.responseJSON.errors.rudder) {
                $('.alert-danger-rudder').css('display', 'block');
                $('.alert-danger-rudder').text(error.responseJSON.errors.rudder[0]);
            }
            if (error.responseJSON.errors.year_of_issue) {
                $('.alert-danger-year_of_issue').css('display', 'block');
                $('.alert-danger-year_of_issue').text(error.responseJSON.errors.year_of_issue[0]);
            }
            console.log(error.responseJSON.errors.headline[0]);
        }
    });

})

$(document).on("click", ".recent_announcements_item_child_link_favourite_img", function () {

    var thisis = $(this);
    var product_id = thisis.data('id');
    var token = $('meta[name="csrf-token"]').attr('content');

    $.ajax({
        url: "/profile/favourites",
        type: 'post',
        cache: false,
        data: {'_token': token, 'product_id': product_id},
        success: function (response) {

            thisis.css("display", "none");
            $(".recent_announcements_item_child_link_exist_favourite_img").css("display", "block");

        },
        error: function (err) {
            console.log(err);
        }
    })
})
$(document).on("click", ".remove-favourite", function () {

    var thisis = $(this);
    var product_id = thisis.data('id');
    $.ajax({
        url: `profile/favourites-destroy/${product_id}`,
        type: 'get',
        processData: false,
        contentType: false,
        success: function (response) {
            $(`#${product_id}`).css("display", "none");
        },
        error: function (err) {
            console.log(err);
        }
    })
})
$(document).on("submit", ".update", function (event) {
    event.preventDefault();

    var token = $('meta[name="csrf-token"]').attr('content');

    var headline = $('input[name="headline"]', this);
    var headline_val = headline.val();

    var price = $('input[name="price"]', this);
    var price_val = price.val();

    var car_model = $('input[name="car_model"]', this);
    var car_model_val = car_model.val();

    var description = $('input[name="description"]', this);
    var description_val = description.val();

    var body_type = $('input[name="body_type"]', this);
    var body_type_val = body_type.val();

    var rudder = $('input[name="rudder"]', this);
    var rudder_val = rudder.val();
    console.log(rudder_val)

    var year_of_issue = $('input[name="year_of_issue"]', this);
    var year_of_issue_val = year_of_issue.val();

    var transmission = $('input[name="transmission"]', this);
    var transmission_val = transmission.val();

    let product_id = $('input[name="product_id"]', this);
    let product_id_val = product_id.val();



    let formData = new FormData();

    formData.append('headline', headline_val);
    formData.append('price', price_val);
    formData.append('car_model', car_model_val);
    formData.append('description', description_val);
    formData.append('body_type', body_type_val);
    formData.append('rudder', rudder_val);
    formData.append('year_of_issue', year_of_issue_val);
    formData.append('transmission', transmission_val);
    formData.append('product_id',product_id_val);
    formData.append('_token',token);

    $.ajax({
        url: "announcement_update",
        type: 'POST',
        data:formData,
        cache: false,
        processData: false,
        contentType: false,
        success: function (data) {
            console.log(data);
            $('.alert-success-status').css('display', 'none');

            if (data.success) {
                $('.alert-success-status').css('display', 'block');
                setTimeout(function () {
                    alert_succes.css("border","1px solid #0086CF");
                }, 3000)
            }
                $('.alert-success-status').text(data.responseJSON.success([0]));

            },
        error: function (error) {
            $('.alert-danger-headline').css('display', 'none');
            $('.alert-danger-price').css('display', 'none');
            $('.alert-danger-region').css('display', 'none');
            $('.alert-danger-city').css('display', 'none');
            $('.alert-danger-car_model').css('display', 'none');
            $('.alert-danger-description').css('display', 'none');
            $('.alert-danger-body_type').css('display', 'none');
            $('.alert-danger-rudder').css('display', 'none');
            $('.alert-danger-year_of_issue').css('display', 'none');
            $('.alert-danger-year_of_issue').css('display', 'none');

            if (error.responseJSON.errors.headline) {
                $('.alert-danger-headline').css('display', 'block');
                $('.alert-danger-headline').text(error.responseJSON.errors.headline[0]);
            }
            if (error.responseJSON.errors.price) {
                $('.alert-danger-price').css('display', 'block');
                $('.alert-danger-price').text(error.responseJSON.errors.price[0]);
            }
            if (error.responseJSON.errors.region) {
                $('.alert-danger-region').css('display', 'block');
                $('.alert-danger-region').text(error.responseJSON.errors.region[0]);
            }
            if (error.responseJSON.errors.city) {
                $('.alert-danger-city').css('display', 'block');
                $('.alert-danger-city').text(error.responseJSON.errors.city[0]);
            }
            if (error.responseJSON.errors.car_model) {
                $('.alert-danger-car_model').css('display', 'block');
                $('.alert-danger-car_model').text(error.responseJSON.errors.car_model[0]);
            }
            if (error.responseJSON.errors.description) {
                $('.alert-danger-description').css('display', 'block');
                $('.alert-danger-description').text(error.responseJSON.errors.description[0]);
            }
            if (error.responseJSON.errors.body_type) {
                $('.alert-danger-body_type').css('display', 'block');
                $('.alert-danger-body_type').text(error.responseJSON.errors.body_type[0]);
            }
            if (error.responseJSON.errors.transmission) {
                $('.alert-danger-transmission').css('display', 'block');
                $('.alert-danger-transmission').text(error.responseJSON.errors.transmission[0]);
            }
            if (error.responseJSON.errors.rudder) {
                $('.alert-danger-rudder').css('display', 'block');
                $('.alert-danger-rudder').text(error.responseJSON.errors.rudder[0]);
            }
            if (error.responseJSON.errors.year_of_issue) {
                $('.alert-danger-year_of_issue').css('display', 'block');
                $('.alert-danger-year_of_issue').text(error.responseJSON.errors.year_of_issue[0]);
            }
            console.log(error.responseJSON.errors.headline[0]);
        }
    });

})
$(document).on("click", ".announcement_second_item_delete_btn", function () {

    var thisis = $(this);

    $.ajax({
        url: `/products/${$(this).data('id')}`,
        type: 'GET',
        cache: false,
        processData: false,
        contentType: false,
        success: function (response) {
            if (response.success) {
                thisis.parent().parent().parent().hide();
            }
        },
        error: function (err) {

        }
    })
})

