<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
</head>
<body>
    {{View::make('header')}}

    @yield('content')

    {{View::make('footer')}}
</body>
<style>
    a{
        text-decoration:none;
        color:black;
    }
    .product{
        height:91vh !important;
    }
    .product-caption{
        background-color:black;
    }
    .login{
        height:75vh;
    }
    .footer a{
        text-decoration:none;
        color:white;
    }
    .footer a:hover{
        color:lightgreen;
    }
    .search-box{
        width:70%;
        justify-content:center;
    }
    .search-box input[type=search]{
        width:80%;
    }
    .details{
        height:75vh;
    }
    .search-page{
        min-height:75vh;
    }
    .cartlist,.order-now{
        min-height:75vh;
    }

    .logo-img{
        width:100%;
    }
    .logo-link{
        width:70px;
    }
</style>
</html>