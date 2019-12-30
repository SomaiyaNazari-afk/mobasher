
     src="{{asset('js/app.js')}}"

    <script>
    $('#EditModal').on('show.bs.modal', function (event) {

        var button = $(event.relatedTarget)

        var firstname = button.data('myfirst')
        var lastname = button.data('mylast')
        var gender = button.data('mygender')
        var email = button.data('myemail')
        var country = button.data('mycountry')
        var city = button.data('mycity')
        var address = button.data('myaddress')
        var department_id = button.data('department')

        var modal = $(this);

        modal.find('.modal-body #firstname').val(firstname);
        modal.find('.modal-body #lastname').val(lastname);
        modal.find('.modal-body #gender').val(gender);
        modal.find('.modal-body #email').val(email);
        modal.find('.modal-body #country').val(country);
        modal.find('.modal-body #city').val(city);
        modal.find('.modal-body #address').val(address);
        modal.find('.modal-body #department_id').val(department_id);
    })
