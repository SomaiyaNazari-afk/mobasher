<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
{{--    <link rel="icon" href="{{ url('public/image/w3path-favicon.png') }}" sizes="32x32" />--}}
    <style>
        .container{
            padding: 0.5%;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
    <a class="navbar-brand" href="{{ url('/') }}">Logo</a>
</nav>
<div class="container mt-4">
    <div class="row">
        <div class="col-sm-12">
            <h4>Upload file using ajax</h4>
        </div>
    </div>
    <hr />

    <form method="POST" enctype="multipart/form-data" id="upload_image_form" action="javascript:void(0)" >

        <div class="row">
            <div class="col-md-12 mb-2">
                <img id="image_preview_container" src="{{ asset('public/image/image-preview.png') }}"
                     alt="preview image" style="max-height: 150px;">
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <input type="file" name="image" placeholder="Choose image" id="image">
                    <span class="text-danger">{{ $errors->first('title') }}</span>
                </div>
            </div>


            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
