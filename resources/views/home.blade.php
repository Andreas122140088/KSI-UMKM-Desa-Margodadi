<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UMKM Desa Margodadi</title>
  <link rel="stylesheet" href="/css/homepage.css">
</head>
<body>
  <div class="container">
    <div class="navbar">
      <div class="navbar-left">
        <img src="/img/logo.gif" alt="Logo Margodadi" class="logo">
        <span class="site-name">
          <p><em>UMKM</em></p>
          <p><em>DESA MARGODADI</em></p>
        </span>
      </div>
      <div class="navbar-center">
        <a href='about'>ABOUT</a>
        <a href='product'>PRODUCT</a>
        <a href='contact'>CONTACT</a>
      </div>
      <div class="dropdown">
        <button class="dropdown-btn"><img src="/img/menu_icon.png" width="30" height="30"></button>
        <nav class="dropdown-menu">
            <a href='about'>ABOUT</a>
            <a href='product'>PRODUCT</a>
            <a href='contact'>CONTACT</a>
        </nav>
      </div>
    </div>
  
    <div class="main-section">
      <div class="main-content">
        <h2>PRODUK UMKM</h2>
        <h2>DESA MARGODADI</h2>
        <p>Selamat Datang Di Website UMKM Desa Margodadi, Selamat Berbelanja.</p>
        <button class="view-more-button" onclick="window.location.href='product'">View More</button>
        <button class="learn-more-button" onclick="window.location.href='home'">UMKM</button>
      </div>
    
      <div class="overlay-box">
      <div class="purple-box">
        <!-- Left Arrow -->
        <div class="left-arrow" onclick="prevImage()">
          <img src="/img/prev.png" class="left-arrow" />
        </div>
    
        <!-- Carousel Image -->
        <img src="/img/rengginang.jpeg" class="image1" id="carousel-image" />
    
        <!-- Right Arrow -->
        <div class="right-arrow" onclick="nextImage()">
          <img src="/img/next.png" class="right-arrow" />
        </div>
    
        <!-- Overlay Box -->
      </div>
     </div>
    </div>
    
    <script>
      const images = [
        "/img/rengginang.jpeg",
        "/img/gambar3.jpg",
        "/img/gambar2.jpg" 
      ];
      let currentIndex = 0;
  
      // Fungsi untuk menampilkan gambar sebelumnya
      function prevImage() {
        currentIndex = (currentIndex === 0) ? images.length - 1 : currentIndex - 1;
        document.getElementById('carousel-image').src = images[currentIndex];
      }
  
      // Fungsi untuk menampilkan gambar berikutnya
      function nextImage() {
        currentIndex = (currentIndex === images.length - 1) ? 0 : currentIndex + 1;
        document.getElementById('carousel-image').src = images[currentIndex];
      }
  
      function startAutoSlide() {
        setInterval(nextImage, 5000);
      }
  
      // Mulai otomatis geser ketika halaman dimuat
      window.onload = startAutoSlide;
    </script>
  
    <section class="product-grid">
      @foreach ($products as $product)
      <div class="product-card">
        <a href="/product/{{$product->id}}">
          @if($product->image_url)
            <img src={{ Storage::url($product->image_url) }} class="product">
          @else
            <span>No Image</span>
          @endif
          <h2>{{$product->title}}</p></h2>
          <p>{{$product->category}}</p>
        </a>
      </div>
      @endforeach
    </section>
    
    <footer class="footer">
      <div class="footer-container">
        <div class="footer-links">
          <h3>QUICK LINKS</h3>
          <ul>
            <li><a href='home'>Home</a></li>
            <li><a href='about'>About</a></li>
            <li><a href='contact'>Contact</a></li>
          </ul>
        </div>
        <div class="footer-service">
          <h3>SERVICES</h3>
            <ul>
              <li><a href="https://www.margodadi.id" target="_blank">Profile Desa</a></li>
              <li><a href='home'>UMKM</a></li>
            </ul>
        </div>
        <div class="footer-social">
          <h4>CONTACT & FOLLOW US</h4>
            <div class="social-icons">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="call" viewBox="0 0 16 16">
                <path d="M13.601 2.326A7.85 7.85 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.9 7.9 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.9 7.9 0 0 0 13.6 2.326zM7.994 14.521a6.6 6.6 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.56 6.56 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592m3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.73.73 0 0 0-.529.247c-.182.198-.691.677-.691 1.654s.71 1.916.81 2.049c.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232"/>
              </svg><p>Phone: (62+)-821-7502-5224</p>
              </div>
             
            <div class="social-icons">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="envelope" viewBox="0 0 16 16">
                <path d="M2 2a2 2 0 0 0-2 2v8.01A2 2 0 0 0 2 14h5.5a.5.5 0 0 0 0-1H2a1 1 0 0 1-.966-.741l5.64-3.471L8 9.583l7-4.2V8.5a.5.5 0 0 0 1 0V4a2 2 0 0 0-2-2zm3.708 6.208L1 11.105V5.383zM1 4.217V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v.217l-7 4.2z"/>
                <path d="M14.247 14.269c1.01 0 1.587-.857 1.587-2.025v-.21C15.834 10.43 14.64 9 12.52 9h-.035C10.42 9 9 10.36 9 12.432v.214C9 14.82 10.438 16 12.358 16h.044c.594 0 1.018-.074 1.237-.175v-.73c-.245.11-.673.18-1.18.18h-.044c-1.334 0-2.571-.788-2.571-2.655v-.157c0-1.657 1.058-2.724 2.64-2.724h.04c1.535 0 2.484 1.05 2.484 2.326v.118c0 .975-.324 1.39-.639 1.39-.232 0-.41-.148-.41-.42v-2.19h-.906v.569h-.03c-.084-.298-.368-.63-.954-.63-.778 0-1.259.555-1.259 1.4v.528c0 .892.49 1.434 1.26 1.434.471 0 .896-.227 1.014-.643h.043c.118.42.617.648 1.12.648m-2.453-1.588v-.227c0-.546.227-.791.573-.791.297 0 .572.192.572.708v.367c0 .573-.253.744-.564.744-.354 0-.581-.215-.581-.8Z"/>
              </svg><p>Email: desamargodadijatiagungls@gmail.com</p>
            </div>
        </div>
      </div>
  
  
      <div class="footer-bottom">
      <p>&copy; KSI-Kel 6 Copyright 2024 - All Right Reserved.</p>
      </div>
    </footer>

  

</body>
</html>
