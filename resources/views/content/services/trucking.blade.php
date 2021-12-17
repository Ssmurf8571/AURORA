<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AURORA</title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="/css/basic.css">
</head>
<body class="bg-white ">
    @section('page-content')
        
    <section class="service-info mt-5 pb-3 mb-4">
        <div class="container position-relative text-center px-0">
            <img class="" src="/images/services/trucking.jpg" alt="">
            <div class="service-overflow"></div>
        </div>
    </section>

    <div class="name-title"><h1 id="raplace" class="text-gray-700 text-capitalize fw-bolder text-center">trucking</h1><div class="title-border-bottom my-4 mx-auto"></div></div>
        
    @endsection

    @extends('inc.header')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e21e861c03.js" crossorigin="anonymous"></script>
    
    <script>
        $("#raplace").text($('#raplace').text().replace(/-/g," "));
    </script>
</body>
</html>
