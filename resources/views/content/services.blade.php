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
        <div class="about-title py-5">
            <div class="container my-5">
                <h1 class="text-white fw-bolder text-center">See which kind of transporting services you can order today!</h1>
            </div>
        </div>


        <section class="service-list">
            <div class="d-flex flex-wrap">
                        
                <a href="services/trucking" class="position-relative col-lg-3 col-md-6 col-sm-12">
                    <div class="img-wrap position-absolute"><h2 class="text-white position-absolute">Trucking</h2></div>
                    <img class="w-100" src="/images/services/service-1-685x440.jpg" alt="">
                </a>

                <a href="services/express-delivery" class="position-relative col-lg-3 col-md-6 col-sm-12">
                    <div class="img-wrap position-absolute"><h2 class="text-white position-absolute">Express Delivery</h2></div>
                    <img class="w-100" src="/images/services/service-6-685x440.jpg" alt="">
                </a>
                
                <a href="services/heavy-haul" class="position-relative col-lg-3 col-md-6 col-sm-12">
                    <div class="img-wrap position-absolute"><h2 class="text-white position-absolute">Heavy Haul</h2></div>
                    <img class="w-100" src="/images/services/service-5-685x440.jpg" alt="">
                </a>
                
                <a href="services/specialized-retail-delivery" class="position-relative col-lg-3 col-md-6 col-sm-12">
                    <div class="img-wrap position-absolute"><h2 class="text-white position-absolute">Specialized Retail Delivery</h2></div>
                    <img class="w-100" src="/images/services/service-4-685x440.jpg" alt="">
                </a>

                <a href="services/warehousing" class="position-relative col-lg-3 col-md-6 col-sm-12">
                    <div class="img-wrap position-absolute"><h2 class="text-white position-absolute">Warehousing</h2></div>
                    <img class="w-100" src="/images/services/service-3-685x440.jpg" alt="">
                </a>

                <a href="services/refrigerated-trucks" class="position-relative col-lg-3 col-md-6 col-sm-12">
                    <div class="img-wrap position-absolute"><h2 class="text-white position-absolute">Refrigerated Trucks</h2></div>
                    <img class="w-100" src="/images/services/service-2-685x440.jpg" alt="">
                </a>    

                <a href="services/cross-boarder" class="position-relative col-lg-3 col-md-6 col-sm-12">
                    <div class="img-wrap position-absolute"><h2 class="text-white position-absolute">Cross Border</h2></div>
                    <img class="w-100" src="/images/services/service-7-685x440.jpg" alt="">
                </a>  

                <a href="services/flatbed" class="position-relative col-lg-3 col-md-6 col-sm-12">
                    <div class="img-wrap position-absolute"><h2 class="text-white position-absolute">Flatbed</h2></div>
                    <img class="w-100" src="/images/services/service-8-685x440.jpg" alt="">
                </a>  

            </div>
        </section>

        <section class="blog-comment py-5">
            <div class="container">
                <h1 class="text-gray-700 fw-bolder mb-5">Businesses Love Our Transportation Services!</h1>
                <div class="d-flex flex-wrap justify-content-between">
                    <div class="col-md-4 col-sm-12 px-md-4 px-sm-0 mb-3">
                        <div class="comment-item py-4 ps-5 pe-3">
                            <h6>Transporting my goods from Idaho to Colorado is one of the most critical parts of my business operations. That means that throughout that ride I need a reliable transportation partner to rely upon, in all seasons of weather… Aurora Express is just like that!</h6>
                        </div>
                        <h5 class="text-gray-700 text-capitalize mt-4 mb-2">Ryan Banies</h5>
                        <p class="text-capitalize">Male <span>from</span> United States</p>
                    </div>
                    <div class="col-md-4 col-sm-12 px-md-4 px-sm-0 mb-3">
                        <div class="comment-item py-4 ps-5 pe-3">
                            <h6>Transporting my goods from Idaho to Colorado is one of the most critical parts of my business operations. That means that throughout that ride I need a reliable transportation partner to rely upon, in all seasons of weather… Aurora Express is just like that!</h6>
                        </div>
                        <h5 class="text-gray-700 text-capitalize mt-4 mb-2">Ted Christiansen</h5>
                        <p class="text-capitalize">Male <span>from</span> United States</p>
                    </div>
                    <div class="col-md-4 col-sm-12 px-md-4 px-sm-0 mb-3">
                        <div class="comment-item py-4 ps-5 pe-3">
                            <h6>Transporting my goods from Idaho to Colorado is one of the most critical parts of my business operations. That means that throughout that ride I need a reliable transportation partner to rely upon, in all seasons of weather… Aurora Express is just like that!</h6>
                        </div>
                        <h5 class="text-gray-700 text-capitalize mt-4 mb-2">John Vattiano</h5>
                        <p class="text-capitalize">Female <span>from</span> United States</p>
                    </div>
                </div>
            </div>
        </section>
        
    @endsection

    @extends('inc.header')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e21e861c03.js" crossorigin="anonymous"></script>
</body>
</html>