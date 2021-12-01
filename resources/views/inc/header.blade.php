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

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
 
    <div class="collapse navbar-collapse ms-auto align-items-lg-baseline" id="navbarHeader">
      <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item @if($page=='home') active @endif"><a class="nav-link text-center" href="/">Главная</a></li>
        <li class="nav-item @if($page=='about') active @endif"><a class="nav-link text-center" href="/about">О нас</a></li>
        <li class="nav-item @if($page=='services') active @endif"><a class="nav-link text-center" href="#">Сервисы</a></li>
        <li class="nav-item @if($page=='contact') active @endif"><a class="nav-link text-center" href="/contact">Контакты</a></li>
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