@extends('layout/front')

@section('title')
    @lang('Contact')
@endsection


@section('content')

    <section class="breadcrumb-outer text-center">
        <div class="container">
            <div class="breadcrumb-content">
                <h2>@lang('Contact')</h2>
                <nav aria-label="breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">@lang('Home')</a></li>
                        <li class="breadcrumb-item active"><a href="{{ route('contact') }}">@lang('Contact')</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="section-overlay"></div>
    </section>

    <section class="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div id="contact-form" class="contact-form">
                        <div id="contactform-error-msg"></div>
                        <form method="post" action="{{ route('contact.store') }}">
                            @method("PUT")
                            @csrf
                            <div class="row">
                                <div class="form-group col-lg-12">
                                    <label>@lang('Name'):</label>
                                    <input type="text" name="name" class="form-control" id="Name"
                                           placeholder="Ism & Familiya" required>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>@lang('Email'):</label>
                                    <input type="email" name="email" class="form-control" id="email"
                                           placeholder="exmple@gmail.com" required>
                                </div>
                                <div class="form-group col-lg-6 col-left-padding">
                                    <label>@lang('Phone Number')</label>
                                    <input type="text" name="phone" class="form-control" id="phnumber"
                                           placeholder="XXX-XX-XXX-XX-XX" required>
                                </div>
                                <div class="textarea col-lg-12">
                                    <label>@lang('Message')</label>
                                    <textarea name="massage" placeholder="Xabar" required></textarea>
                                </div>
                                <div class="col-lg-12">
                                <div class="comment-btn">
                                    <button type="submit" 
                                            class="btn-blue " 
                                            style="background-color: #ec3237; color: white; padding: 10px 20px; border: none; border-radius: 5px; cursor: pointer;">
                                        @lang('Send Message')
                                    </button>
                                </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
               <div class="col-lg-4">
                    <div class="contact-about footer-margin">
                        <div class="about-logo">
                            <img src="{{$logo ?? '/assets/images/samiritravel/logo.png'}}" alt="banner" height="80" style="object-fit: contain; width: 50%;">
                        </div>
                        <h4>@lang('Travel With Us')</h4>
                        <p>{{ $description }}</p>
                        <div class="contact-location">
                            <ul>
                                <li><i class="flaticon-maps-and-flags" aria-hidden="true"></i>Адрес: г. Ташкент, Яккасарайский район, ул. Абдулла Каххар 42А</li>
                                <li><i class="flaticon-phone-call"></i>+998-97-777-98-11</li>
                                <li><i class="flaticon-mail"></i> <a href="mailto:ldgexpressuz@gmail.com">ldgexpressuz@gmail.com</a></li>
                                <!-- Mas’ul shaxs qo‘shildi -->
                                <li><i class="fa fa-user-circle" aria-hidden="true"></i> Mas’ul shaxs: Maxmudov Doniyor Abdurazzoq o'g'li</li>
                            </ul>
                        </div>
                        <div class="footer-social-links">
                            <ul>
                                <li class="social-icon"><a href="https://t.me/Samira_travel"><i class="fa fa-telegram" aria-hidden="true"></i></a></li>
                                <li class="social-icon"><a href="https://www.instagram.com/samiratravel2025/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                                <!-- <li class="social-icon"><a href="{{$youtube}}"><i class="fa fa-youtube" aria-hidden="true"></i></a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <div class="map">
     <!-- Leaflet CSS -->
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

<!-- Xarita konteyneri -->
<div class="map-container" style="max-width: 80%; height: 350px; margin: 20px auto; border-radius: 10px; overflow: hidden; box-shadow: 0 4px 8px rgba(0,0,0,0.2);">
    <div id="map" style="width: 100%; height: 100%;"></div>
</div>

<!-- Leaflet JS -->
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<script>
  // Xarita markazi: Toshkent
  var map = L.map('map').setView([41.278171, 69.261913], 16);

  // OpenStreetMap layer
  L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 19,
      attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a>'
  }).addTo(map);

  // Marker va popup
  L.marker([41.278171, 69.261913]).addTo(map)
      .bindPopup('<strong>CHINA-TRAVEL</strong><br>Sayohat markazi')
      .openPopup();
</script>

    </div>

@endsection