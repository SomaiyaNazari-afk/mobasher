$(document).ready(function () {

    $('#register_pharmacy').on('submit', function (event) {
        event.preventDefault();
        $.ajax({

        url:"http://127.0.0.1:8000/pharmacies",
        method: "POST",
            data: new FormData(this),
            dataType: 'JSON',
            contentType: false, //used when data is sent to server
            cache: false,
            processData: false,
            success: function (data)//this request is called when request is done successfuly
        {
            $('#message').css('display', 'block');
            $('#message').html(data.message);
            $('#message').addClass(data.class_name);
            $('#uploaded_image').html(data.uploaded_image);

        }
    });
    });
});



// $(document).ready(function (e) {
//
//         $.ajaxSetup({
//             headers: {
//                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//             }
//         });
//
//         $('#image').change(function(){
//
//             let reader = new FileReader();
//             reader.onload = (e) => {
//                 $('#image_preview_container').attr('src', e.target.result);
//             }
//             reader.readAsDataURL(this.files[0]);
//
//         });
//
//         $('#upload_image_form').submit(function(e) {
//             e.preventDefault();
//
//             var formData = new FormData(this);
//
//             $.ajax({
//                 type:'POST',
//                 url: "{{ url('save-photo')}}",
//                 data: formData,
//                 cache:false,
//                 contentType: false,
//                 processData: false,
//                 success: (data) => {
//                     this.reset();
//                     alert('File has been uploaded successfully');
//                 },
//                 error: function(data){
//                     console.log(data);
//                 }
//             });
//         });
//     });

