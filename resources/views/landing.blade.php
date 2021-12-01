<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AURORA</title>


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">

    <link rel="stylesheet" href="css/basic.css">
</head>
<body class="bg-white ">
    <div class="container-fluid bg-dark">
        <div class="d-sm-flex justify-content-around">
            <p class="text-gray-500 m-0 text-center">г. Вязники</p>
            <p class="text-gray-500 m-0 text-center"><i class="bi bi-clock"></i>  ПН - ПТ: 8:00 - 20:00</p>
            <p class="text-white m-0 text-center"><i class="bi bi-telephone"></i>  +7(900) 999 99-99</p>
        </div>
    </div>

        <header class="navbar navbar-expand-md navbar-light pt-4 px-4">
            <div class="container">
                <a href="/" class="col-md-3 mb-2 mb-md-0 w-auto">
                <img src="images/logo.png" alt="Aurora">
                </a>

                <div class="end-section mb-2 ms-md-3 d-lg-flex align-items-center text-center">
                    <div class="ms-md-auto me-md-2 mb-2 d-flex align-items-md-center justify-content-center social">
                        <a href="https://www.facebook.com" class="py-1 px-2"><i class="fab fa-facebook-f text-gray-500"></i></a>
                        <a href="https://twitter.com" class="py-1 px-2"><i class="fab fa-twitter text-gray-500"></i></a>
                        <a href="https://www.pinterest.ru" class="py-1 px-2"><i class="fab fa-pinterest text-gray-500"></i></a>
                        <a href="https://www.instagram.com" class="py-1 px-2"><i class="fab fa-instagram text-gray-500"></i></a>
                    </div>
                    <a href="#contact-form"><button type="button" class="btn align-items-sm-center py-3 border-0 animate-button">Запросить цену</button></a>
                </div>
            </div>
        </header>

        <div id="CarouselSlider" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
            <button type="button" data-bs-target="#CarouselSlider" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#CarouselSlider" data-bs-slide-to="1" aria-label="Slide 2" class=""></button>
            <button type="button" data-bs-target="#CarouselSlider" data-bs-slide-to="2" aria-label="Slide 3" class="active" aria-current="true"></button>
            </div>
            <div class="carousel-inner">
            <div class="carousel-item" style="background: center url('images/slider/slider_1.jpg');">
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>Что такое грузоперевозка?</h1>
                        <p>Грузоперевозка работает с разными типами товаров.</p>
                        <a href="#advantage"><button type="button" class="btn border-0 animate-button"><p class="m-0 text-uppercase px-2 py-1">Преимущества</p></button></a>
                    </div>
                </div>
            </div>
            <div class="carousel-item" style="background: center url('images/slider/slider_2.jpg');">
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>Что такое грузоперевозка?</h1>
                        <p>Грузоперевозка работает с разными типами товаров.</p>
                        <a href="#advantage"><button type="button" class="btn border-0 animate-button"><p class="m-0 text-uppercase px-2 py-1">Преимущества</p></button></a>
                    </div>
                </div>
            </div>
            <div class="carousel-item active" style="background: center url('images/slider/slider_3.jpg');">
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1>Что такое грузоперевозка?</h1>
                        <p>Грузоперевозка работает с разными типами товаров.</p>
                        <a href="#advantage"><button type="button" class="btn border-0 animate-button"><p class="m-0 text-uppercase px-2 py-1">Преимущества</p></button></a>
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

        <section class="service-list">
            <div class="d-flex flex-wrap">
                <div class="position-relative col-lg-4 col-md-6 col-sm-12" style="cursor: pointer;">
                    <div class="img-wrap position-absolute"><h2 class="text-white position-absolute">Грузоперевозки</h2></div>
                    <img class="w-100" src="images/services/service-1-685x440.jpg" alt="">
                </div>
                <div class="position-relative col-lg-4 col-md-6 col-sm-12" style="cursor: pointer;">
                    <div class="img-wrap position-absolute"><h2 class="text-white position-absolute">Рефрижераторы</h2></div>
                    <img class="w-100" src="images/services/service-2-685x440.jpg" alt="">
                </div>
                <div class="position-relative col-lg-4 col-md-6 col-sm-12" style="cursor: pointer;">
                    <div class="img-wrap position-absolute"><h2 class="text-white position-absolute">Складирование</h2></div>
                    <img class="w-100" src="images/services/service-3-685x440.jpg" alt="">
                </div>
                <div class="position-relative col-lg-4 col-md-6 col-sm-12" style="cursor: pointer;">
                    <div class="img-wrap position-absolute"><h2 class="text-white position-absolute">Специализированная розничная доставка</h2></div>
                    <img class="w-100" src="images/services/service-4-685x440.jpg" alt="">
                </div>
                <div class="position-relative col-lg-4 col-md-6 col-sm-12" style="cursor: pointer;">
                    <div class="img-wrap position-absolute"><h2 class="text-white position-absolute">Тяжелая транспортировка</h2></div>
                    <img class="w-100" src="images/services/service-5-685x440.jpg" alt="">
                </div>
                <div class="position-relative col-lg-4 col-md-6 col-sm-12" style="cursor: pointer;">
                    <div class="img-wrap position-absolute"><h2 class="text-white position-absolute">Экспресс-доставка</h2></div>
                    <img class="w-100" src="images/services/service-6-685x440.jpg" alt="">
                </div>
            </div>
        </section>

        <section class="advantage" id="advantage">
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
                <h1 class="fw-bolder mb-5 text-gray-700">Компании, с которыми мы сотрудничаем</h1>
                <div class="d-flex flex-md-wrap justify-content-between align-items-center flex-md-row flex-column">
                    <img class="" src="images/companies/compania-1.webp" alt="">
                    <img class="" src="images/companies/compania-2.webp" alt="">
                    <img class="" src="images/companies/compania-3.webp" alt="">
                    <img class="" src="images/companies/compania-4.webp" alt="">
                    <img class="" src="images/companies/compania-5.webp" alt="">
                    <img class="" src="images/companies/compania-6.webp" alt="">
                </div>
            </div>
        </section>

        <section class="blog-comment py-5">
            <div class="container">
                <h1 class="text-gray-700 fw-bolder mb-5">Компании любят наши транспортные услуги!</h1>
                <div class="d-flex flex-wrap justify-content-between">
                    <div class="col-md-4 col-sm-12 px-md-4 px-sm-0 mb-3">
                        <div class="comment-item py-4 ps-5 pe-3">
                            <h6>Перевозка моих товаров из Айдахо в Колорадо - одна из самых важных частей моей деловой деятельности. Это означает, что на протяжении всей поездки мне нужен надежный партнер по транспортировке, на которого можно будет положиться в любое время года… Aurora Express именно такой!</h6>
                        </div>
                        <h5 class="text-gray-700 text-capitalize mt-4 mb-2">Райан Бэйнс</h5>
                        <p class="text-capitalize">Мужчина <span>из</span> США</p>
                    </div>
                    <div class="col-md-4 col-sm-12 px-md-4 px-sm-0 mb-3">
                        <div class="comment-item py-4 ps-5 pe-3">
                            <h6>Перевозка моих товаров из Айдахо в Колорадо - одна из самых важных частей моей деловой деятельности. Это означает, что на протяжении всей поездки мне нужен надежный партнер по транспортировке, на которого можно будет положиться в любое время года… Aurora Express именно такой!</h6>
                        </div>
                        <h5 class="text-gray-700 text-capitalize mt-4 mb-2">Тед Кристиансен</h5>
                        <p class="text-capitalize">Мужчина <span>из</span> США</p>
                    </div>
                    <div class="col-md-4 col-sm-12 px-md-4 px-sm-0 mb-3">
                        <div class="comment-item py-4 ps-5 pe-3">
                            <h6>Перевозка моих товаров из Айдахо в Колорадо - одна из самых важных частей моей деловой деятельности. Это означает, что на протяжении всей поездки мне нужен надежный партнер по транспортировке, на которого можно будет положиться в любое время года… Aurora Express именно такой!</h6>
                        </div>
                        <h5 class="text-gray-700 text-capitalize mt-4 mb-2">Джон Ваттиано</h5>
                        <p class="text-capitalize">Мужчина <span>из</span> США</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="promo">
            <div class="container">
                <div class="d-flex flex-column bg-promo mx-md-4">
                    <div class="col-md-6 col-sm-12">
                        <h1 class="fw-bolder text-gray-700">СКИДКА 10% для клиентов впервые!</h1>
                    <h3 class="mb-4">Предложение действительно только до конца этого месяца!</h3>
                    <a class="position-relative bottom-0" href="#contact-form"><button type="button" class="btn border-0 animate-button"><p class="m-0 text-uppercase px-2 py-1">Запросить цену</p></button></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact-block my-5" id="contact-form">
            <div class="container">
                <div class="d-flex flex-wrap justify-content-between">
                    <iframe class="col-lg-7 col-md-6 col-sm-12 mx-md-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d35476.53201043598!2d42.114853157321285!3d56.238618255197146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x414e7f7c4a41dbf5%3A0xf68c57631793d7a1!2z0JLRj9C30L3QuNC60LgsINCS0LvQsNC00LjQvNC40YDRgdC60LDRjyDQvtCx0Lsu!5e0!3m2!1sru!2sru!4v1638188611289!5m2!1sru!2sru" allowfullscreen="" loading="lazy"></iframe>
                    <div class="grey-block d-flex flex-column col-md-4 col-sm-12 mx-md-3 pt-5 px-4 pb-3">
                        <h1 class="text-gray-700 mb-5 fw-bolder">Contact Us</h1>
                        <form class="contact-form-home" action="/" method="get" id="">
                            @csrf
                            <input class="w-100 border-0 fs-5 bg-transparent border-bottom py-1 px-2 mb-1" type="text" name="Name" id="contact-name" placeholder="Имя" required>
                            <input class="w-100 border-0 fs-5 bg-transparent border-bottom py-1 px-2 mb-1" type="email" name="Email" id="contact-mail" placeholder="Почта" required>
                            <textarea class="w-100 border-0 fs-5 bg-transparent border-bottom py-1 px-2 mb-4" name="Message" id="contact-message" cols="30" rows="10" placeholder="Сообщение"></textarea>
                            <button type="submit" class="btn border-0 animate-button rounded-0"><p class="m-0 text-uppercase px-3 py-2">Отправить</p></button>
                        </form>
                        
                    </div>
                </div>
            </div>
        </section>

        <footer class="bg-dark pt-5 pb-4">
            <div class="container">
                <div class="d-flex flex-wrap justify-content-between">
                    <div class="mb-4 text-gray-500 col-lg-3 col-md-6 col-12 px-3">
                        <p class="text-uppercase fw-bold text-white">о нас</p>
                        <p>Благодаря нашему автопарку, состоящему из нескольких десятков обычных грузовиков, тяжелых грузовиков, грузовиков с регулируемой температурой и рефрижераторов, мы являемся лучшим поставщиком автомобильных перевозок в стране!</p>
                        <p>Будь ваш груз опасным, хрупким или скоропортящимся предметом - будьте уверены, мы доставим его из пункта А в пункт Б!</p>
                    </div>

                    <div class="mb-4 text-white col-lg-3 col-md-6 col-12 px-3">
                        <p class="text-uppercase fw-bold text-white">мы находимся</p>
                        <ul class="list-unstyled">
                            <li class="mb-3"><p class="text-gray-500 m-0"><i class="bi bi-geo-alt-fill text-orange me-2"></i></i>411 W Church St #200, Orlando, FL 32802</p><a href="/" class="text-gray-500 text-decoration-none"><i class="bi bi-telephone-fill text-orange me-2"></i>+1 800 559 6580</a></li>
                            <li class="mb-3"><p class="text-gray-500 m-0"><i class="bi bi-geo-alt-fill text-orange me-2"></i></i>66/3 Silver Ct, Orlando, FL 32801</p><a href="/" class="text-gray-500 text-decoration-none"><i class="bi bi-telephone-fill text-orange me-2"></i>+1 800 559 6580</a></li>
                            <li class="mb-3"><p class="text-gray-500 m-0"><i class="bi bi-geo-alt-fill text-orange me-2"></i></i>40/12 Curry Ford Rd, Orlando, FL 32800</p><a href="/" class="text-gray-500 text-decoration-none"><i class="bi bi-telephone-fill text-orange me-2"></i>+1 800 559 6580</a></li>
                        </ul>
                    </div>
                    <div class="mb-4 text-white col-lg-3 col-md-6 col-12 px-3">
                        <p class="text-uppercase fw-bold text-white">мы открыты</p>
                        <div class="d-grid">
                            <p class="text-white text-uppercase m-0">понедельник</p>
                            <p class="text-gray-500 text-uppercase">8:00 - 20:00</p>
                            <p class="text-white text-uppercase m-0">вторник</p>
                            <p class="text-gray-500 text-uppercase">8:00 - 20:00</p>
                            <p class="text-white text-uppercase m-0">среда</p>
                            <p class="text-gray-500 text-uppercase">8:00 - 20:00</p>
                            <p class="text-white text-uppercase m-0">четверг</p>
                            <p class="text-gray-500 text-uppercase">8:00 - 20:00</p>
                            <p class="text-white text-uppercase m-0">пятница</p>
                            <p class="text-gray-500 text-uppercase">8:00 - 20:00</p>
                            <p class="text-white text-uppercase m-0">суббота</p>
                            <p class="text-gray-500 text-uppercase">выходной</p>
                            <p class="text-white text-uppercase m-0">воскресенье</p>
                            <p class="text-gray-500 text-uppercase">выходной</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container d-sm-grid text-center text-sm-start">
                <a href="/" class="mb-2">
                    <img src="images/logo.png" alt="Aurora">
                </a>
                <div class="d-flex justify-content-center justify-content-sm-end align-items-end social">
                    <a class="mx-1" href="https://www.facebook.com"><i class="fab fa-facebook-f text-white"></i></a>
                    <a class="mx-1" href="https://twitter.com"><i class="fab fa-twitter text-white"></i></a>
                    <a class="mx-1" href="https://www.pinterest.ru"><i class="fab fa-pinterest text-white"></i></a>
                    <a class="mx-1" href="https://www.instagram.com"><i class="fab fa-instagram text-white"></i></a>
                </div>
                <p class="text-gray-500 m-0">Ssmurf8571 © Alterra Corporation {{ now()->year }}</p>
            </div>
        </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/e21e861c03.js" crossorigin="anonymous"></script>
</body>
</html>