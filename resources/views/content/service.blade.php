<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AURORA</title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="/css/app.css">
</head>
<body class="bg-white ">
    @section('page-content')

    <section class="service-info mt-5 pb-3 mb-4">
        <div class="container position-relative text-center px-0">
                <img class="@if($title!=='trucking') w-100 @endif col-lg-auto col-md-12 col-sm-12 col-12" src="/img/services/{{ $title }}.jpg" alt="">
            <div class="service-overflow"></div>
        </div>
    </section>

    <div class="name-title"><h1 id="raplace" class="text-gray-700 text-capitalize fw-bolder text-center">{{ $title }}</h1><div class="title-border-bottom my-4 mx-auto"></div></div>

    <div class="container">
        <h5 class="text-gray-600 mt-3">
            Need a locomotive to be transported? No problem, we’ve done that multiple times! All in all,  our truckies are highly trained and experienced in heavy hauling. Combined with a large variety of specialized trucking equipment, we can handle the most demanding heavy haul.
        </h5>
        <h5 class="text-gray-600">
            Acknowledging the importance of climate-controlled conditions for some sorts of freight goods, we offer the best refrigerated trucking services on the market.
        </h5>
        <h5 class="text-gray-600">
            We are carefully transporting commodities that require refrigerated transport, such as:
        </h5>

        <ul class="ps-3 mt-5 mb-4">
            <li class="text-orange"><h5 class="text-gray-600 pt-1 pb-2 m-0">dairy products</h5></li>
            <li class="text-orange"><h5 class="text-gray-600 pt-1 pb-2 m-0">produce</h5></li>
            <li class="text-orange"><h5 class="text-gray-600 pt-1 pb-2 m-0">chilled foods</h5></li>
            <li class="text-orange"><h5 class="text-gray-600 pt-1 pb-2 m-0">meats</h5></li>
            <li class="text-orange"><h5 class="text-gray-600 pt-1 pb-2 m-0">fish</h5></li>
            <li class="text-orange"><h5 class="text-gray-600 pt-1 pb-2 m-0">poultry products</h5></li>
            <li class="text-orange"><h5 class="text-gray-600 pt-1 pb-2 m-0">pharmaceuticals</h5></li>
        </ul>


        <h5 class="text-gray-600">
            …etc.
        </h5>
        <h5 class="text-gray-600">
            With all of trucks enhanced by a state-of-the-art equipment and industry-leading technology from OrbComm, we are able to track, monitor and control all electronic components of a refrigerated trailer in real-time.
        </h5>
        <h5 class="text-gray-600">
            The temperature inside of the truck or a trailer can be set anywhere from -10 to 45 degrees (Fahrenheit).
        </h5>
        <h5 class="text-gray-600 mb-5">
            Temperature-sensitive freight is under complete control whether products require ambient, cool, frozen, or “Protect from Freezing” conditions.
        </h5>
    </div>



    @endsection

    @extends('inc.header')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e21e861c03.js" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function() {
            $("#raplace").text($('#raplace').text().replace(/-/g, " "));
        });
    </script>
</body>
</html>
