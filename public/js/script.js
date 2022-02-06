
$(".password_visibility").on('click', function () {
    if ($("#passwordInp").hasClass('showPass') ) {
        $(".show_icon").addClass("active_show_icon")
        $(".hide_icon").removeClass("active_show_icon")
        $("#passwordInp").removeClass('showPass')
        $('#passwordInp').attr('type','password')
    }else {
        $(".hide_icon").addClass("active_show_icon")
        $(".show_icon").removeClass("active_show_icon")
        $("#passwordInp").addClass('showPass')
        $('#passwordInp').attr('type','text')
    }

})
$(document).on("click", ".find_transport_form_select_title_wrapper", function(){
    var thisis = $(this);
    if (thisis.parent().find(".find_transport_form_select_hidden_wrapper").hasClass("open")){

        thisis.parent().find(".find_transport_form_select_hidden_wrapper").removeClass("open");

    }else{

        $(".find_transport_form_select_hidden_wrapper").removeClass("open");
        $(this).parent().find(".find_transport_form_select_hidden_wrapper").addClass("open");
    }
});


$(document).on("click", ".find_transport_form_select_hidden_info", function(){
   var datainfo = $(this).data("info");
   $(this).parent().parent().find(".find_transport_form_select_title").html(datainfo);
   $(".find_transport_form_select_hidden_wrapper").removeClass("open");

})



$(document).on("click", ".sort_btn", function(){

    var data_id = $(this).data("id");
    $(".sort_btn").removeClass("active");
    $(this).addClass("active");



    $(".recent_announcements_item").removeClass("open");
    $("#" + data_id).addClass("open");
  });


  $(document).on("click", ".hamburger_menu", function(){
      $(".mobile_version").addClass("open");
    $("body").addClass("hidden_body");
    $(this).addClass("open");
});



$(document).on("click", ".mobile_version_close", function(){
    $(".mobile_version").removeClass("open");
    $("body").removeClass("hidden_body");
    $(".hamburger_menu").removeClass("open");
});





$(document).on("click", ".active_inactive_ads_second_item_sorts_btn", function(){

    var data_id = $(this).data("id");
    $(".active_inactive_ads_second_item_sorts_btn").removeClass("active");
    $(this).addClass("active");



    $(".active_inactive_ads_second_items_wrapper").removeClass("open");
    $("#" + data_id).addClass("open");
  });





  $(document).on("click",".inactive_type_btn", function(){
       $(".active_inactive_ads_second_item_child_link").addClass("inactive");
       $(".active_type_btn").removeClass("active");
       $(".inactive_type_btn").addClass("active");

  });



  $(document).on("click",".active_type_btn", function(){
    $(".active_inactive_ads_second_item_child_link").removeClass("inactive");
    $(".inactive_type_btn").removeClass("active");
    $(".active_type_btn").addClass("active");
});

$(document).on("click", ".active_inactive_ads_second_item_child_edit_link_delete_btn", function(){
    $(this).parent().parent().parent().hide();
})



$(document).on('change','#fileinput_form2',function () {

  var value         = $(this).val();
  var arr           = value.split('\\');
  var fileExtension = ['jpeg', 'jpg', 'png', 'gif', 'bmp'];
  var span          = $(this).closest(".registration_input_type_files_wrapper").find(".file_span");

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


$(document).on("click", ".registration_input-type_file_img_delete_btn", function(){
     $("#fileinput_form2").val("");
     $(this).closest(".registration_input-type_file_img_wrapper").fadeOut();
})




$(document).on("click", ".profile_settings_form_textarea_icon",function(){
  $(this).parent().find(".profile_settings_form_input_field").removeAttr("readonly");
  $(this).parent().find(".profile_settings_form_input_field").focus();
})



$(document).on("click", ".notification_delete_btn", function(){
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


$(document).on("click", ".open_users_chat", function(){
    $(".chat_popup").toggleClass("open");
    $("body").toggleClass("hidden_body");

})


$(document).on("click", ".announcement_edit_btn2", function(){
    // var value = $(this).parent().(".announcement_second_item_title").val();
    let val = $(this).parent().find('.announcement_second_item_title').data('info');
    $(this).parent().parent().find(".announcement_second_item_title_edit_btn_wrapper").hide();
    $(this).parent().parent().find(".announcement_second_item_input_icon_wrapper").addClass("open").find('.announcement_second_item_input_field').val(val);
})


$(document).on("click", ".check_mark_icon", function() {

    var val2 = $(this).parent().find(".announcement_second_item_input_field").val();
    console.log(val2)
    $(".announcement_second_item_title_edit_btn_wrapper").show();
     $(this).parent().parent().find(".announcement_second_item_title").html(val2);
        $(this).parent().parent().find(".announcement_second_item_input_icon_wrapper").removeClass("open");
        $(this).closest(".announcement_second_item_title_edit_btn_input_wrapper").find(".announcement_second_item_title").data('info',val2);
})



$(document).on("click", ".announcement_edit_btn3", function(){

     let val3 = $(this).closest(".announcement_second_item_title_edit_btn_input_wrapper").find('.announcement_second_item_car_info_details_text').data('info');
    $(this).closest(".announcement_second_item_title_edit_btn_input_wrapper").find('.announcement_second_item_car_info_details_text').hide();
     $(this).closest(".announcement_second_item_title_edit_btn_input_wrapper").find('.announcement_second_item_input_icon_wrapper').addClass("open").find('.announcement_second_item_input_field2').val(val3);

})


$(document).on("click", ".check_mark_icon", function() {

    let val2 = $(this).closest(".announcement_second_item_title_edit_btn_input_wrapper").find(".announcement_second_item_input_field2").val();
    $(this).closest(".announcement_second_item_title_edit_btn_input_wrapper").find('.announcement_second_item_car_info_details_text').show();
     $(this).closest(".announcement_second_item_title_edit_btn_input_wrapper").find('.announcement_second_item_car_info_details_text').html(val2);
        $(this).closest(".announcement_second_item_title_edit_btn_input_wrapper").find('.announcement_second_item_input_icon_wrapper').removeClass("open");
        $(this).closest(".announcement_second_item_title_edit_btn_input_wrapper").find('.announcement_second_item_car_info_details_text').data('info',val2);
})


$(document).on("click", ".announcement_edit_btn4", function(){
    let val4 = $(this).closest(".announcement_second_item_specifications_wrapper").find('.announcement_second_item_specifications_info').data('info');
    $(this).closest(".announcement_second_item_specifications_wrapper").find('.announcement_second_item_specifications_info').hide();
      $(this).closest(".announcement_second_item_specifications_wrapper").find('.announcement_second_item_specifications_input_icon_wrapper').addClass("open").find('.announcement_second_item_specification_input_field2').val(val4);

})

$(document).on("click", ".check_mark_icon", function() {
    let val5 = $(this).closest(".announcement_second_item_specifications_wrapper").find(".announcement_second_item_specification_input_field2").val();
    $(this).closest(".announcement_second_item_specifications_wrapper").find('.announcement_second_item_specifications_info').show();
    $(this).closest(".announcement_second_item_specifications_wrapper").find('.announcement_second_item_specifications_info').html(val5);
    $(this).closest(".announcement_second_item_specifications_wrapper").find('.announcement_second_item_specifications_input_icon_wrapper').removeClass("open");
    $(this).closest(".announcement_second_item_specifications_wrapper").find('.announcement_second_item_specifications_info').data('info',val5);
})
$("#button").click(function() {
    $("#fn").show();
    $("#ln").show();
});


