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

        <div class="pt-5">
            <div class="container">
                <h1 class="text-dark fw-bolder text-center">Contact us</h1>
            </div>
        </div>

        <div class="py-4">
            <div class="container">
                <p class="text-center text-gray-600">If you have questions or comments about our services, we’d like to hear from you.</p>
            </div>
        </div>

        <section class="bg-f5">
            <div class="container">
                <div class="d-flex flex-wrap justify-content-between">
                    <div class="col-md-3 mt-4 mb-md-5">
                        <h2 class="mt-2 mb-3">Our locations:</h2>
                        <ul class="list-unstyled">
                        <li class="mb-3"><p class="text-gray-500 m-0"><i class="bi bi-geo-alt-fill text-gray-800 me-2"></i></i>411 W Church St #200, Orlando, FL 32802</p><a href="#" class="text-orange text-decoration-none"><i class="bi bi-telephone-fill text-gray-800 me-2"></i>+1 800 559 6580</a></li>
                        <li class="mb-3"><p class="text-gray-500 m-0"><i class="bi bi-geo-alt-fill text-gray-800 me-2"></i></i>66/3 Silver Ct, Orlando, FL 32801</p><a href="#" class="text-orange text-decoration-none"><i class="bi bi-telephone-fill text-gray-800 me-2"></i>+1 800 559 6580</a></li>
                        <li class="mb-3 mb-md-5 pb-3 pb-md-5"><p class="text-gray-500 m-0"><i class="bi bi-geo-alt-fill text-gray-800 me-2"></i></i>40/12 Curry Ford Rd, Orlando, FL 32800</p><a href="#" class="text-orange text-decoration-none"><i class="bi bi-telephone-fill text-gray-800 me-2"></i>+1 800 559 6580</a></li>
                        </ul>
                    </div>
                    <iframe class="col-md-8 mx-md-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d35476.53201043598!2d42.114853157321285!3d56.238618255197146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x414e7f7c4a41dbf5%3A0xf68c57631793d7a1!2z0JLRj9C30L3QuNC60LgsINCS0LvQsNC00LjQvNC40YDRgdC60LDRjyDQvtCx0Lsu!5e0!3m2!1sru!2sru!4v1638188611289!5m2!1sru!2sru" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </section>

        <div class="py-5 mb-5">
            <h1 class="text-gray-700 text-center fw-bolder mb-4">Live a reply</h1>
            <div class="container d-flex justify-content-center">
                <form class="mt-2 text-center contact-form" action="#" method="post">
                    <div class="d-flex flex-wrap justify-content-between">
                        <input type="text" name="" id="" class="col-md-5 col-12 border-0 border-bottom py-1 px-2 me-md-3" placeholder="Enter your name*" required>
                        <input type="email" name="" id="" class="col-md-5 col-12 border-0 border-bottom py-1 px-2 ms-md-3" placeholder="Enter your email*" required>
                    </div>
                    <textarea name="" id="" cols="30" rows="10" class="w-100 border-0 border-bottom py-1 px-2" placeholder="Your message"></textarea>
                    <button type="button" class="btn py-3 px-4 border-0 text-capitalize float-start mt-4 animate-button">send</button>
                </form>
            </div>
        </div>

        
        
    @endsection

    @extends('inc.header')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e21e861c03.js" crossorigin="anonymous"></script>
</body>
</html>