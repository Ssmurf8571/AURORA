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
      <img src="/img/logo.png" alt="Aurora">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse ms-auto align-items-lg-baseline" id="navbarHeader">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item inactive @if ($title == 'home') active @endif"><a class="nav-link text-center" href="{{ url('/home') }}">Главная</a></li>
          <li class="nav-item inactive @if ($title == 'about') active @endif"><a class="nav-link text-center" href="{{ url('/about') }}">О нас</a></li>
        <button class="btn btn-toggle align-items-center collapsed d-md-none d-block" data-bs-toggle="collapse" data-bs-target="#servises-collapse" aria-expanded="false">
          <li class="nav-item inactive @if ($title == 'services') active @endif"><a class="nav-link text-center" href="{{ url('/services') }}">Сервисы</a>
            <ul class="dropdown-menu" id="services-collapse">
              <li class="inactive"><a href="{{ url('/services/trucking') }}" class="dropdown-item text-capitalize nav-link link-dark px-2">Trucking</a></li>
              <li class="inactive"><a href="{{ url('/services/express-delivery') }}" class="dropdown-item text-capitalize nav-link link-dark px-2">Express Delivery</a></li>
              <li class="inactive"><a href="{{ url('/services/heavy-haul') }}" class="dropdown-item text-capitalize nav-link link-dark px-2">Heavy Haul</a></li>
              <li class="inactive"><a href="{{ url('/services/specialized-retail-delivery') }}" class="dropdown-item text-capitalize nav-link link-dark px-2">Specialized Retail Delivery</a></li>
              <li class="inactive"><a href="{{ url('/services/warehousing') }}" class="dropdown-item text-capitalize nav-link link-dark px-2">Warehousing</a></li>
              <li class="inactive"><a href="{{ url('/services/refrigerated-trucks') }}" class="dropdown-item text-capitalize nav-link link-dark px-2">Refrigerated Trucks</a></li>
              <li class="inactive"><a href="{{ url('/services/cross-boarder') }}" class="dropdown-item text-capitalize nav-link link-dark px-2">cross-boarder</a></li>
              <li class="inactive"><a href="{{ url('/services/flatbed') }}" class="dropdown-item text-capitalize nav-link link-dark px-2">Flatbed</a></li>
            </ul>
          </li>
        </button>

        <li class="nav-item d-md-block d-none inactive"><a class="nav-link text-center" href="{{ url('/services') }}">Сервисы</a>
          <ul class="dropdown-menu">
            <li class="inactive"><a href="{{ url('/services/trucking') }}" class="dropdown-item text-capitalize nav-link link-dark px-2">Trucking</a></li>
            <li class="inactive"><a href="{{ url('/services/express-delivery') }}" class="dropdown-item text-capitalize nav-link link-dark px-2">Express Delivery</a></li>
            <li class="inactive"><a href="{{ url('/services/heavy-haul') }}" class="dropdown-item text-capitalize nav-link link-dark px-2">Heavy Haul</a></li>
            <li class="inactive"><a href="{{ url('/services/specialized-retail-delivery') }}" class="dropdown-item text-capitalize nav-link link-dark px-2">Specialized Retail Delivery</a></li>
            <li class="inactive"><a href="{{ url('/services/warehousing') }}" class="dropdown-item text-capitalize nav-link link-dark px-2">Warehousing</a></li>
            <li class="inactive"><a href="{{ url('/services/refrigerated-trucks') }}" class="dropdown-item text-capitalize nav-link link-dark px-2">Refrigerated Trucks</a></li>
            <li class="inactive"><a href="{{ url('/services/cross-boarder') }}" class="dropdown-item text-capitalize nav-link link-dark px-2">cross-boarder</a></li>
            <li class="inactive"><a href="{{ url('/services/flatbed') }}" class="dropdown-item text-capitalize nav-link link-dark px-2">Flatbed</a></li>
          </ul>
        </li>

        <li class="nav-item inactive @if ($title == 'contact') active @endif"><a class="nav-link text-center" href="/contact">Контакты</a></li>
      </ul>


      <div class="end-section mb-2 ms-md-3 d-lg-flex align-items-center text-center">
        <div class="ms-md-auto me-md-2 mb-2 d-flex align-items-md-center justify-content-center social">
          <a href="https://www.facebook.com" class="py-1 px-2"><i class="fab fa-facebook-f text-gray-500"></i></a>
          <a href="https://twitter.com" class="py-1 px-2"><i class="fab fa-twitter text-gray-500"></i></a>
          <a href="https://www.pinterest.ru" class="py-1 px-2"><i class="fab fa-pinterest text-gray-500"></i></a>
          <a href="https://www.instagram.com" class="py-1 px-2"><i class="fab fa-instagram text-gray-500"></i></a>
        </div>
        <a href="#"><button type="button" class="btn align-items-sm-center py-3 border-0 animate-button">Запросить цену</button></a>
      </div>
    </div>
  </div>
</header>

@yield('page-content')

@extends('inc.footer')
