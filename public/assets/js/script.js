$(document).on("click", ".delete-users-btn", function () {

    var thisis = $(this);

    $.ajax({
        url: `/admin/users-destroy/${$(this).data('id')}`,
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
            console.log(err)
        }
    })
})
$(document).on("click", ".delete-products-btn", function () {

    var thisis = $(this);

    $.ajax({
        url: `/admin/products-destroy/${$(this).data('id')}`,
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
            console.log(err)
        }
    })
})
$(document).on("submit", ".admin-update-users", function (event) {
    event.preventDefault();

    var token = $('meta[name="csrf-token"]').attr('content');

    var ClientName = $('input[name="ClientName"]', this);
    var ClientName_val = ClientName.val();

    var Email = $('input[name="Email"]', this);
    var Email_val = Email.val();

    var Surname = $('input[name="Surname"]', this)
    var Surname_val = Surname.val();

    var Number = $('input[name="Number"]', this)
    var Number_val = Number.val();

    var City = $('input[name="City"]', this);
    var City_val = City.val();

    var user_id = $('input[name="user_id"]', this).val();

    let formData = new FormData();

    formData.append('ClientName', ClientName_val);
    formData.append('Email', Email_val);
    formData.append('Surname', Surname_val);
    formData.append('Number', Number_val);
    formData.append('City', City_val);
    formData.append('user_id', user_id);

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $.ajax({
        url: "/admin/update-users/",
        type: 'POST',
        data: formData,
        cache: false,
        processData: false,
        contentType: false,
        success: function (data) {
            console.log(data);
            if (data.success) {
                console.log(data)
            }
        },
        error: function (error) {
            console.log(error);
        }
    });
})
