<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-commerce</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    {{ View::make('header') }}
        @yield('content')
    {{ View::make('footer') }}
</body>
<style>
    
    .custom-login{
        height: 500px;
        margin-top: 100px;
    }

    img.slider-img{
        height: 500px !important;
        width: 100% !important;
    }

    .custom-product{
        height: 600px;
    }

    .slider_btn{
        color: #35443585 !important;
    }

    .search-box{
        width: 500px !important;
    }
</style>
</html>