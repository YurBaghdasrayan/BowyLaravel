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
        url: `bowy.ru/BowyLaravel/public/products/${$(this).data('id')}`,
        // url: `/products/${$(this).data('id')}`,
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
$(document).on("click", ".badge", function () {

    var thisis = $(this);

    $.ajax({
        url: `bowy.ru/BowyLaravel/public/admin/${$(this).data('id')}`,
        // url: `/public/admin/${$(this).data('id')}`,
        type: 'GET',
        cache: false,
        processData: false,
        contentType: false,
        success: function (response) {
            if (response.success) {
                console.log(response)
            }
        },
        error: function (err) {
            console.log(err)
        }
    })
})

$(document).on("click", ".add_category_data", function () {
    var datainfo = $(this).data("info");
    var category_id = $(this).data("id");
    $(this).parent().parent().find(".hidden_category_data").val(category_id);
    $(this).parent().parent().find(".find_transport_form_select_title").html(datainfo);
    $(".find_transport_form_select_hidden_wrapper").removeClass("open");
})

$(document).on("click", ".add_body_type", function () {
    var datainfo = $(this).data("info");

    $(this).parent().parent().find(".hidden_category_data").val(datainfo);
    $(this).parent().parent().find(".find_transport_form_select_title").html(datainfo);
    $(".find_transport_form_select_hidden_wrapper").removeClass("open");
})

$(document).on("click", ".add_region_data", function () {
    var datainfo = $(this).data("info");
    var category_id = $(this).data("id");
    $(this).parent().parent().find(".find_transport_form_select_title").html(datainfo);
    $(".find_transport_form_select_hidden_wrapper").removeClass("open");
    $(this).parent().parent().find(".hidden_category_data").val(category_id);
    var token = $('meta[name="csrf-token"]').attr('content');
    var region_data_val = $('#region_input').val();

    $.ajax({
        url: "bowy.ru/BowyLaravel/public/getCityByRegionId",
        // url: "/getCityByRegionId",
        type: 'post',
        cache: false,
        data: {'_token': token, 'region_data': region_data_val},
        success: function (response) {
            $('#divCity').html('');
            response.city_data.forEach(function (val) {
                $('#divCity').append('<p class="find_transport_form_select_hidden_info add_region_data" data-id=' + val.id + ' data-info=' + val.name + '>' + val.name + '</p>')
            })
        },
        error: function (err) {
            console.log(err);
        }
    })
})

$(document).on("click", ".find_transport_form_btn", function () {

    var thisis = $(this);
    var category_data = thisis.parent().children().find(".check_search_category");
    var category_data_val = category_data.val();

    var valid = true;

    if (category_data_val.length < 1) {
        valid = false;
        category_data.parent().css("border", "1px solid red");
    }

    if (!valid) {
        return false;
    }

    thisis.parent().submit();

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
$(document).on("click", ".find_transport_form_select_title_wrappers", function () {
    var thisis = $(this);
    if (thisis.parent().find(".find_transport_form_select_hidden_wrapper").hasClass("open")) {

        thisis.parent().find(".find_transport_form_select_hidden_wrapper").removeClass("open");

    } else {

        $(".find_transport_form_select_hidden_wrapper").removeClass("open");
        $(this).parent().find(".find_transport_form_select_hidden_wrapper").addClass("open");
    }
});


function getCityBySelect(region_id) {
    return new Promise((resolve, reject) => {
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: "bowy.ru/BowyLaravel/public/getCityByRegionId",
            // url: "/getCityByRegionId",
            type: 'post',
            cache: false,
            data: {'region_data': region_id},
            success: function (response) {
                resolve(response)
            },
            error: function (err) {
                reject(err)
            }
        })
    })
}

$("#regionSelect").on("change", function () {
    var region_id = $(this).val();
    var token = $('meta[name="csrf-token"]').attr('content');


    $.ajax({
        url: "bowy.ru/BowyLaravel/public/getCityByRegionId",
        // url: "/getCityByRegionId",
        type: 'post',
        cache: false,
        data: {'_token': token, 'region_data': region_id},
        success: function (response) {
            $('#citySelect').html('');
            $('.show_city_data').css('display', 'block');
            response.city_data.forEach(function (val) {
                $('#citySelect').append('<option value=' + val.id + '>' + val.name + '</option>')
            })
        },
        error: function (err) {
            console.log(err);
        }
    })


})
$(document).on("click", ".add_city_data", function () {
    var datainfo = $(this).data("info");
    var category_id = $(this).data("id");
    $(this).parent().parent().find(".hidden_category_data").val(category_id);
    $(this).parent().parent().find(".find_transport_form_select_title").html(datainfo);
    $(".find_transport_form_select_hidden_wrapper").removeClass("open");

})
$(document).on("click", ".add_category_data", function () {
    var datainfo = $(this).data("info");
    var category_id = $(this).data("id");
    $(this).parent().parent().find(".hidden_category_data").val(category_id);
    $(this).parent().parent().find(".find_transport_form_select_title").html(datainfo);
    $(".find_transport_form_select_hidden_wrapper").removeClass("open");

})
$(document).on("click", ".add_cars_models_data", function () {
    var datainfo = $(this).data("info");

    $(this).parent().parent().find(".hidden_category_data").val(datainfo);
    $(this).parent().parent().find(".find_transport_form_select_title").html(datainfo);
    $(".find_transport_form_select_hidden_wrapper").removeClass("open");

})
$(document).on("click", ".add_rudder_data", function () {
    var datainfo = $(this).data("info");
    var category_id = $(this).data("id");
    $(this).parent().parent().find(".hidden_category_data").val(category_id);
    $(this).parent().parent().find(".find_transport_form_select_title").html(datainfo);
    $(".find_transport_form_select_hidden_wrapper").removeClass("open");

})
$(document).on("click", ".add_transmission_data", function () {
    var datainfo = $(this).data("info");
    var category_id = $(this).data("id");
    $(this).parent().parent().find(".hidden_category_data").val(category_id);
    $(this).parent().parent().find(".find_transport_form_select_title").html(datainfo);
    $(".find_transport_form_select_hidden_wrapper").removeClass("open");

})

$(document).on("click", ".set_city_data", function () {
    var datainfo = $(this).data("info");
    var category_id = $(this).data("id");
    $(this).parent().parent().find(".find_transport_form_select_title").html(datainfo);
    $(".find_transport_form_select_hidden_wrapper").removeClass("open");
    $(this).parent().parent().find(".hidden_category_data").val(category_id);
    var token = $('meta[name="csrf-token"]').attr('content');
    var region_data_val = $('#region_input').val();

    $.ajax({
        url: "bowy.ru/BowyLaravel/public/getCityByRegionId",
        // url: "/getCityByRegionId",
        type: 'post',
        cache: false,
        data: {'_token': token, 'region_data': region_data_val},
        success: function (response) {
            $('#divCity').html('');
            response.city_data.forEach(function (val) {
                $('#divCity').append('<p class="find_transport_form_select_hidden_info add_city_data" data-id=' + val.id + ' data-info=' + val.name + '>' + val.name + '</p>')
            })
        },
        error: function (err) {
            console.log(err);
        }
    })
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
    var active_id = $(this).data("active_id");
    console.log(active_id)
    $(".active_inactive_ads_second_item_sorts_bt" +
        "n").removeClass("active");
    $(this).addClass("active");


    $(".active_inactive_ads_second_items_wrapper").removeClass("open");
    $(".active_inactive_ads_second_items_wrapper").removeClass("no_active_open");
    $("#" + data_id).addClass("open");
    $("." + active_id).addClass("no_active_open");
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
    console.log(val2);
    $(".announcement_second_item_title_edit_btn_wrapper").show();
    $(this).parent().parent().find(".announcement_second_item_title").html(val2);
    $(this).parent().parent().find(".announcement_second_item_input_icon_wrapper").removeClass("open");
    $(this).closest(".announcement_second_item_title_edit_btn_input_wrapper").find(".announcement_second_item_title").data('info', val2);
})

$(document).on("click", ".announcement_edit_btn3", function () {

    $(".show_regions_data").show();
})


$(document).on("click", ".check_mark_icon", function () {

    let val2 = $(this).closest(".announcement_second_item_title_edit_btn_input_wrapper").find(".announcement_second_item_input_field2").val();
    $(this).closest(".announcement_second_item_title_edit_btn_input_wrapper").find('.announcement_second_item_car_info_details_text').show();
    $(this).closest(".announcement_second_item_title_edit_btn_input_wrapper").find('.announcement_second_item_car_info_details_text').html(val2);
    $(this).closest(".announcement_second_item_title_edit_btn_input_wrapper").find('.announcement_second_item_input_icon_wrapper').removeClass("open");
    $(this).closest(".announcement_second_item_title_edit_btn_input_wrapper").find('.announcement_second_item_car_info_details_text').data('info', val2);
})


$(document).on("click", ".announcement_edit_btn4", function () {

    $(".body_car").show();
    $(".car_model").show();
    $(".year_of_issue").show();
    $(".transmission").show();
    $(".rudder").show();

})

$(document).on("click", ".check_mark_icon", function () {
    let val5 = $(this).closest(".announcement_second_item_specifications_wrapper").find(".announcement_second_item_specification_input_field2").val();
    $(this).closest(".announcement_second_item_specifications_wrapper").find('.announcement_second_item_specifications_info').show();
    $(this).closest(".announcement_second_item_specifications_wrapper").find('.announcement_second_item_specifications_info').html(val5);
    $(this).closest(".announcement_second_item_specifications_wrapper").find('.announcement_second_item_specifications_input_icon_wrapper').removeClass("open");
    $(this).closest(".announcement_second_item_specifications_wrapper").find('.announcement_second_item_specifications_info').data('info', val5);
})

$("#buton").click(function () {
    $("#fn").show();
    $("#ln").show();
});

$(document).on("submit", ".place_an_ad_form", function (event) {
    event.preventDefault();

    var token = $('meta[name="csrf-token"]').attr('content');

    var headline = $('input[name="headline"]', this);
    var headline_val = headline.val();

    var city = $('input[name="city"]', this);
    var city_val = city.val();

    var region = $('input[name="region"]', this);
    var region_val = region.val();

    var price = $('input[name="price"]', this);
    var price_val = price.val();

    var address = $('input[name="address"]', this)
    var address_val = address.val();

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

    let TotalFiles = $('#fileinput_form2')[0].files.length;
    let files = $('#fileinput_form2')[0];
    var category_id = $('input[name="category_id"]', this).val();



    var valid = true;

    let formData = new FormData();

    formData.append('headline', headline_val);
    formData.append('price', price_val);
    formData.append('city', city_val);
    formData.append('region', region_val);
    formData.append('car_model', car_model_val);
    formData.append('description', description_val);
    formData.append('body_type', body_type_val);
    formData.append('rudder', rudder_val);
    formData.append('year_of_issue', (year_of_issue_val));
    formData.append('transmission', transmission_val);
    formData.append('category_id', category_id);
    // formData.append('image', image[0].files[0]);

    for (let i = 0; i < TotalFiles; i++) {
        formData.append('files' + i, files.files[i]);
    }
    formData.append('address', address_val);

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        url: "bowy.ru/BowyLaravel/public/profile/create-products",
        // url: "/profile/create-products",
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
            $('.alert-danger-address').css('display', 'none');
            $('.alert-danger-transmission').css('display', 'none');
            $('.alert-danger-category_id').css('display', 'none');
            $('.alert-danger-files0').css('display', 'none');

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
            if (error.responseJSON.errors.address) {
                $('.alert-danger-address').css('display', 'block');
                $('.alert-danger-address').text(error.responseJSON.errors.address[0]);
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
            if (error.responseJSON.errors.transmission) {
                $('.alert-danger-transmission').css('display', 'block');
                $('.alert-danger-transmission').text(error.responseJSON.errors.transmission[0]);
            }
            if (error.responseJSON.errors.category_id) {
                $('.alert-danger-category_id').css('display', 'block');
                $('.alert-danger-category_id').text(error.responseJSON.errors.category_id[0]);
            }
            if (error.responseJSON.errors.files0) {
                $('.alert-danger-files0').css('display', 'block');
                $('.alert-danger-files0').text(error.responseJSON.errors.files0[0]);
            }
            console.log(error.responseJSON.errors.headline[0]);
        }
    });

})

$(document).on("click", ".add-favorite", function () {
    var thisis = $(this);
    var product_id = thisis.data('id');
    var token = $('meta[name="csrf-token"]').attr('content');
    console.log(thisis.parent());
    $.ajax({
        url: "bowy.ru/BowyLaravel/public/profile/favourites",
        // url: "/profile/favourites",
        type: 'post',
        cache: false,
        data: {'_token': token, 'product_id': product_id},
        success: function (response) {
            thisis.css("display", "none");
            thisis.parent().children(".recent_announcements_item_child_link_exist_favourite_img").css("display", "block");

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
        url: `bowy.ru/BowyLaravel/public/profile/favourites-destroy/${product_id}`,
        // url: `profile/favourites-destroy/${product_id}`,
        type: 'get',
        processData: false,
        contentType: false,
        success: function (response) {
            $('#' + product_id).css("display", "none");
            thisis.css("display", "none");
            $(".delete_favorite_show").css("display", "block")
        },
        error: function (err) {
            console.log(err);
        }
    })
})
$(document).on("submit", ".update_place_an_ad", function (event) {
    event.preventDefault();

    var token = $('meta[name="csrf-token"]').attr('content');

    var headline = $('input[name="headline"]', this);
    var headline_val = headline.val();

    var price = $('input[name="price"]', this);
    var price_val = price.val();

    var city = $('select[name="city"]', this)
    var city_val = city.val;

    var region = $('select[name="region"]', this)
    var region_val = region.val;

    var car_model = $('select[name="car_model"]', this);
    var car_model_val = car_model.val();

    var description = $('input[name="description"]', this);
    var description_val = description.val();

    var body_type = $('select[name="body_type"]', this);
    var body_type_val = body_type.val();

    var rudder = $('select[name="rudder"]', this);
    var rudder_val = rudder.val();

    var year_of_issue = $('select[name="year_of_issue"]', this);
    var year_of_issue_val = year_of_issue.val();

    var transmission = $('select[name="transmission"]', this);
    var transmission_val = transmission.val();

    let product_id = $('input[name="product_id"]', this);
    let product_id_val = product_id.val();

    let address = $('input[name="address"]', this);
    let address_val = address.val();

    let formData = new FormData();

    formData.append('headline', headline_val);
    formData.append('price', price_val);
    formData.append('car_model', car_model_val);
    formData.append('description', description_val);
    formData.append('body_type', body_type_val);
    formData.append('rudder', rudder_val);
    formData.append('year_of_issue', year_of_issue_val);
    formData.append('transmission', transmission_val);
    formData.append('product_id', product_id_val);
    formData.append('_token', token);
    formData.append('address', address_val);

    $.ajax({
        url: "bowy.ru/BowyLaravel/public/announcement_update",
        // url: "/announcement_update",
        type: 'POST',
        data: formData,
        cache: false,
        processData: false,
        contentType: false,
        success: function (data) {
            console.log(data);
            // $('.alert-success-status').css('display', 'none');
            if (data.success) {
                $('.alert-success-status').css('display', 'block');
                setTimeout(function () {
                    $('.alert-success-status').css('display', 'none');
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
        url: `bowy.ru/BowyLaravel/public/products/${$(this).data('id')}`,
        // url: `/products/${$(this).data('id')}`,
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

$(document).on("click", ".remove-favourites", function () {

    var thisis = $(this);
    var product_id = thisis.data('id');
    $.ajax({
        url: `bowy.ru/BowyLaravel/public/profile/favourites-delete/${product_id}`,
        // url: `/favourites-delete/${product_id}`,
        type: 'GET',
        processData: false,
        contentType: false,
        success: function (response) {
            $(`#${product_id}`).css("display", "none");
            thisis.css("display", "none");
            $(".delete_favorite_show").css("display", "block");
        },
        error: function (err) {
            console.log(err);
        }
    })
})

$(".call").on("click", function (event) {

    event.preventDefault();

    var thisis = $(this);
    var product_id = thisis.data('id');

    $.ajax({
        url: `bowy.ru//BowyLaravel/public/profile/announcement-unlogged/${product_id}`,
        // url: `/announcement-unlogged/${product_id}`,
        type: 'GET',
        processData: false,
        contentType: false,
        success: function (response) {
            $('.calss_count_data').text(response.callsCount);
            location.href = "tel:" + response.phone_number;

        },
        error: function (err) {
            console.log(err);
        }
    })
})



