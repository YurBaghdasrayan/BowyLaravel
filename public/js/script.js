

$(document).on("click", ".find_transport_form_select_title_wrapper", function(){
    $(".find_transport_form_select_hidden_wrapper").removeClass("open");
    $(this).parent().find(".find_transport_form_select_hidden_wrapper").addClass("open");
})


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