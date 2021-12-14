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
        <div id="CarouselSlider" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
            <button type="button" data-bs-target="#CarouselSlider" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#CarouselSlider" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
            <button type="button" data-bs-target="#CarouselSlider" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true"></button>
            </div>
            <div class="carousel-inner">
            <div class="carousel-item" style="background: center url('/images/slider/slider_1.jpg');">
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>What exactly is Transloading?</h1>
                        <p>Transloading works for many different types of commoditiess</p>
                        <a href="/about"><button type="button" class="btn border-0 animate-button"><p class="m-0 text-uppercase px-2 py-1">read more</p></button></a>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="background: center url('/images/slider/slider_2.jpg');">
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>What exactly is Transloading?</h1>
                        <p>Transloading works for many different types of commoditiess</p>
                        <a href="/about"><button type="button" class="btn border-0 animate-button"><p class="m-0 text-uppercase px-2 py-1">read more</p></button></a>
                    </div>
                </div>
            </div>
            <div class="carousel-item active" style="background: center url('/images/slider/slider_3.jpg');">
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>What exactly is Transloading?</h1>
                        <p>Transloading works for many different types of commoditiess</p>
                        <a href="/about"><button type="button" class="btn border-0 animate-button"><p class="m-0 text-uppercase px-2 py-1">read more</p></button></a>
                    </div>
                </div>
            </div>
            </div>
            <div class="container">
                <button class="carousel-control-prev p-2" type="button" data-bs-target="#CarouselSlider" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next p-2" type="button" data-bs-target="#CarouselSlider" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <section class="advantage">
            <div class="container">
                <h1 class="text-capitalize text-white">Основные преимущества</h1>
                <div class="d-flex flex-wrap justify-content-between">
                    <div class="d-flex col-lg-3 col-md-6 col-sm-12 mb-3">
                        <div class="col-1 text-white"><i class="bi bi-arrow-clockwise fs-5"></i></div>
                        <div class="col-11">
                            <h3 class="mb-3 text-white">Универсальный ассортимент</h3>
                            <p class="m-0 text-white">С нашими грузовиками, от обычных большегрузных до специализированных, с особыми условиями для специальных грузов, мы можем доставить все это!</p>
                        </div>
                    </div>
                    <div class="d-flex col-lg-3 col-md-6 col-sm-12 mb-3">
                        <div class="col-1 text-white"><i class="bi bi-truck fs-5"></i></div>
                        <div class="col-11">
                            <h3 class="mb-3 text-white">Приправленные грузовики</h3>
                            <p class="m-0 text-white">Каждый член команды нашей автотранспортной компании - опытный водитель грузовика, преодолевший десятки тысяч миль!</p>
                        </div>
                    </div>
                    <div class="d-flex col-lg-3 col-md-6 col-sm-12 mb-3">
                        <div class="col-1 text-white"><i class="bi bi-clipboard fs-5"></i></div>
                        <div class="col-11">
                            <h3 class="mb-3 text-white">С учетом расписания</h3>
                            <p class="m-0 text-white">Мы понимаем, насколько важен график доставки, поэтому мы никогда не теряем время на пустые руки и в 99% случаев мы прибываем впереди графика!</p>
                        </div>
                    </div>
                    <div class="d-flex col-lg-3 col-md-6 col-sm-12 mb-3">
                        <div class="col-1 text-white"><i class="bi bi-star fs-5"></i></div>
                        <div class="col-11"><h3 class="mb-3 text-white">Доступная цена</h3>
                        <p class="m-0 text-white">Мы стремимся сделать наши услуги максимально доступными по цене, позволяя нескольким предприятиям малого и среднего бизнеса использовать наши грузоперевозки для хорошей доставки!</p>
                    </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="cooperate-companies py-5">
            <div class="container">
                <h1 class="fw-bolder mb-5 text-gray-700">Companies we cooperate with</h1>
                <div class="d-flex flex-md-wrap justify-content-between align-items-center flex-md-row flex-column">
                    <img class="" src="/images/companies/compania-1.webp" alt="">
                    <img class="" src="/images/companies/compania-2.webp" alt="">
                    <img class="" src="/images/companies/compania-3.webp" alt="">
                    <img class="" src="/images/companies/compania-4.webp" alt="">
                    <img class="" src="/images/companies/compania-5.webp" alt="">
                    <img class="" src="/images/companies/compania-6.webp" alt="">
                </div>
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

        <section class="promo">
            <div class="container">
                <div class="d-flex flex-column bg-promo mx-md-4 px-sm-5">
                    <div class="col-md-6 col-sm-12">
                        <h1 class="fw-bolder text-gray-700">10% OFF for 1st Time Clients!</h1>
                        <h3 class="mb-4">Hutty up, the offer is valid only through the end of this month!</h3>
                        <a class="position-relative bottom-0" href="#"><button type="button" class="btn border-0 animate-button"><p class="m-0 text-uppercase px-2 py-1">Request Pricing</p></button></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-block my-5">
            <div class="container">
                <div class="d-flex flex-wrap justify-content-between">
                    <iframe class="col-lg-7 col-md-6 col-sm-12 mx-md-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d35476.53201043598!2d42.114853157321285!3d56.238618255197146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x414e7f7c4a41dbf5%3A0xf68c57631793d7a1!2z0JLRj9C30L3QuNC60LgsINCS0LvQsNC00LjQvNC40YDRgdC60LDRjyDQvtCx0Lsu!5e0!3m2!1sru!2sru!4v1638188611289!5m2!1sru!2sru" allowfullscreen="" loading="lazy"></iframe>
                    <div class="grey-block d-flex flex-column col-md-4 col-sm-12 mx-md-3 pt-5 px-4 pb-3">
                        <h1 class="text-gray-700 mb-5 fw-bolder">Contact Us</h1>
                        <form class="contact-form-home" action="#" method="post" id="">
                            <input class="w-100 border-0 fs-5 bg-transparent border-bottom py-1 px-2 mb-1" type="text" name="Name" id="contact-name" placeholder="Name" required>
                            <input class="w-100 border-0 fs-5 bg-transparent border-bottom py-1 px-2 mb-1" type="email" name="Email" id="contact-mail" placeholder="Email" required>
                            <textarea class="w-100 border-0 fs-5 bg-transparent border-bottom py-1 px-2 mb-4" name="Message" id="contact-message" cols="30" rows="10" placeholder="Message"></textarea>
                            <button type="submit" class="btn border-0 animate-button rounded-0"><p class="m-0 text-uppercase px-3 py-2">Send</p></button>
                        </form>
                        
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