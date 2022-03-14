$(document).on("click", ".badge", function () {

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
$(document).on("submit", ".update_place_an_ad", function (event) {
    event.preventDefault();

    var token = $('meta[name="csrf-token"]').attr('content');

    var ClientName = $('input[name="ClientName"]', this);
    var ClientName_val = ClientName.val();

    var Email = $('input[name="Email"]', this);
    var Email_val = Email.val();

    var Surname = $('input[name="Surname"]', this)
    var Surname_val = Surname.val;

    var Number = $('input[name="Number"]', this)
    var Number_val = Number.val;

    var City = $('input[name="City"]', this);
    var City_val = City.val();

    formData.append('ClientName', ClientName_val);
    formData.append('Email', Email_val);
    formData.append('car_model', car_model_val);
    formData.append('Surname', Surname_val);
    formData.append('Number', Number_val);
    formData.append('City', City_val);
    $.ajaxSetup({

        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });


    $.ajax({
        url: "/update-users",
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
