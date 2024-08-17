<x-app>
<head>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<h1 class="custom-title">Tentang Toko Ilya Montor</h1>

<section class="about-section">
    <p class="about-description">
        Selamat datang di Toko Ilya Montor, destinasi utama bagi para pecinta otomotif yang menginginkan motor berkualitas tinggi dengan harga yang bersaing. Sejak kami berdiri pada tahun 2024, kami telah melayani ribuan pelanggan dengan pengalaman berbelanja yang memuaskan dan tanpa kendala. Kami menawarkan berbagai macam motor, mulai dari skuter klasik hingga motor sport modern, semuanya diseleksi dengan cermat untuk memastikan kepuasan dan keselamatan Anda.
    </p>
    <p class="about-description">
        Dengan layanan pelanggan yang ramah dan profesional, Toko Ilya Montor berkomitmen untuk membantu Anda menemukan motor yang sesuai dengan kebutuhan dan gaya hidup Anda. Nikmati kenyamanan berbelanja bersama kami dan jadilah bagian dari komunitas Ilya Montor. Terima kasih telah mempercayakan kebutuhan otomotif Anda kepada kami!
    </p>
</section>

<div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="{{ asset('assets/img/montor_vespa.jpeg') }}" class="d-block w-50 mx-auto" alt="Montor Vespa" >
    </div>
    <div class="carousel-item">
        <img src="{{ asset('assets/img/montor_vario.jpeg') }}" class="d-block w-50 mx-auto" alt="Montor Vario" >
    </div>
    <div class="carousel-item">
        <img src="{{ asset('assets/img/montor_aerox.jpeg') }}" class="d-block w-50 mx-auto" alt="Montor Aerox" >
    </div>
    <div class="carousel-item">
        <img src="{{ asset('assets/img/montor_xsr.jpeg') }}" class="d-block w-50 mx-auto" alt="Montor XSR" >
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>


</x-app>
