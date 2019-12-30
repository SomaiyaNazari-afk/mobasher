

$(document).ready(function(){

    $('#btn_owner_details').click(function(){

        var error_email = '';
        var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

        if($.trim($('#email').val()).length == 0)
        {
            error_email = 'Email is required';
            $('#error_email').text(error_email);
            $('#email').addClass('has-error');
        }
        else {
            if (!filter.test($('#email').val())) {
                error_email = 'Invalid Email';
                $('#error_email').text(error_email);
                $('#email').addClass('has-error');
            } else {
                error_email = '';
                $('#error_email').text(error_email);
                $('#email').removeClass('has-error');
            }}
            });

    $('#btn_owner_details').click(function(){
        var error_first_name = '';
        var error_last_name = '';

        if($.trim($('#first_name').val()).length == 0)
        {
            error_first_name = 'First Name is required';
            $('#error_first_name').text(error_first_name);
            $('#first_name').addClass('has-error');
        }
        else
        {
            error_first_name = '';
            $('#error_first_name').text(error_first_name);
            $('#first_name').removeClass('has-error');
            //removeClass method is an inbuilt method in jQuery which is used to
            // remove one or more class names from the selected element
        }

        if($.trim($('#last_name').val()).length == 0)
        {
            error_last_name = 'Last Name is required';
            $('#error_last_name').text(error_last_name);
            $('#last_name').addClass('has-error');
        }
        else
        {
            error_last_name = '';
            $('#error_last_name').text(error_last_name);
            $('#last_name').removeClass('has-error');
        }

        if(error_first_name != '' || error_last_name != '')
        {
            return false;
        }
        else
        {
            $('#list_owner_details').removeClass('active active_tab1');
            $('#list_owner_details').removeAttr('href data-toggle');
            $('#pharmacy_details').removeClass('active');
            $('#list_owner_details').addClass('inactive_tab1');
            $('#list_pharmacy_details').removeClass('inactive_tab1');
            $('#list_pharmacy_details').addClass('active_tab1 active');
            $('#list_pharmacy_details').attr('href', '#contact_details');
            $('#list_pharmacy_details').attr('data-toggle', 'tab');
        }
    });

    $('#previous_btn_pharmacy_details').click(function(){
        $('#list_pharmacy_details').removeClass('active active_tab1');
        $('#list_pharmacy_details').removeAttr('href data-toggle');
        $('#list_owner_details').removeClass('inactive_tab1');
        $('#list_owner_details').addClass('active_tab1 active');
        $('#list_owner_details').attr('href', '#personal_details');
        $('#owner_details').attr('data-toggle', 'tab');
    });

    $('#btn_pharmacy_details').click(function(){
        var error_address = '';
        var error_mobile_no = '';
        var mobile_validation = /^\d{10}$/;
        if($.trim($('#address').val()).length == 0)
        {
            error_address = 'Address is required';
            $('#error_address').text(error_address);
            $('#address').addClass('has-error');
        }
        else
        {
            error_address = '';
            $('#error_address').text(error_address);
            $('#address').removeClass('has-error');
        }

        if($.trim($('#mobile_no').val()).length == 0)
        {
            error_mobile_no = 'Mobile Number is required';
            $('#error_mobile_no').text(error_mobile_no);
            $('#mobile_no').addClass('has-error');
        }
        else
        {
            if (!mobile_validation.test($('#mobile_no').val()))
            {
                error_mobile_no = 'Invalid Mobile Number';
                $('#error_mobile_no').text(error_mobile_no);
                $('#mobile_no').addClass('has-error');
            }
            else
            {
                error_mobile_no = '';
                $('#error_mobile_no').text(error_mobile_no);
                $('#mobile_no').removeClass('has-error');
            }
        }
        if(error_address != '' || error_mobile_no != '')
        {
            return false;
        }
        else
        {
            $('#btn_pharmacy_details').attr("disabled", "disabled");
            $(document).css('cursor', 'progress');
            $("#register_form").submit();
        }

    });

});

