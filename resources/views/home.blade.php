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
          <p><em>Desa Margodadi</em></p>
        </span>
      </div>
      <div class="navbar-center">
        <a href="/about">ABOUT</a>
        <a href="/product">PRODUCT</a>
        <a href="/contact">CONTACT</a>
      </div>
      <div class="dropdown">
        <button class="dropdown-btn"><img src="/img/menu_icon.png" width="30" height="30"></button>
        <nav class="dropdown-menu">
            <a href="/about">ABOUT</a>
            <a href="/product">PRODUCT</a>
            <a href="/contact">CONTACT</a>
        </nav>
      </div>
    </div>
  
    <div class="main-section">
      <div class="main-content">
        <h2>PRODUK UMKM</h2>
        <h2>DESA MARGODADI</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
        <button class="view-more-button">View More</button>
        <button class="learn-more-button">UMKM</button>
      </div>
      
      <div class="purple-box">
        <div class="left-arrow" onclick="prevImage()">
          <img src="/img/prev.png" class="left-arrow">
        </div>
        <img src="/img/rengginang.jpeg" class="image1" id="carousel-image">
        <div class="right-arrow" onclick="nextImage()"> 
          <img src="/img/next.png" class="right-arrow">
        </div>
      </div>
      <div class="overlay-box"></div> 
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
      <div class="product-card">
        <img src="/img/rengginang.jpeg" class="product">
        <h2>Batik</p></h2>
        <p>Description</p>
      </div>
      <div class="product-card">
        <img src="/img/rengginang.jpeg" class="product">
        <h2>Rengginang</p></h2>
        <p>Description</p>
      </div>
      <div class="product-card">
        <img src="/img/rengginang.jpeg" class="product">
        <h2>Kerajinan Tangan</h2>
        <p>Product Description</p>
      </div>
      <div class="product-card">
        <img src="/img/rengginang.jpeg" class="product">
        <h2>Batik</h2>
        <p>Description</p>
      </div>
      <div class="product-card">
        <img src="/img/rengginang.jpeg" class="product">
        <h2>Batik</h2>
        <p>Description</p>
      </div>
      <div class="product-card">
        <img src="/img/rengginang.jpeg" class="product">
        <h2>Batik</h2>
        <p>Description</p>
      </div>
      <div class="product-card">
        <img src="/img/rengginang.jpeg" class="product">
        <h2>Batik</h2>
        <p>Description</p>
      </div>
      <div class="product-card">
        <img src="/img/rengginang.jpeg" class="product">
        <h2>Batik</h2>
        <p>Description</p>
      </div>
      <button class="all-produk" onclick="window.location.href='/home2'">Lihat Semua</button>
    </section>
    
    <footer class="footer">
      <div class="footer-container">
        <div class="footer-links">
          <h3>QUICK LINKS</h3>
            <ul>
              <li><a href="/home">Home</a></li>
              <li><a href="/about">About</a></li>
              <li><a href="/contact">Contact</a></li>
              <li><a href="/product">Product</a></li>
            </ul>
        </div>
        <div class="footer-service">
          <h3>SERVICES</h3>
            <ul>
              <li><a href="/profile">Profile Desa</a></li>
              <li><a href="/umkm">UMKM</a></li>
            </ul>
        </div>
  
  
      <div class="footer-social">
        <h4>CONTACT & FOLLOW US</h4>
        <div class="social-icons">
          <img src="/img/phone-call.png">000000000000
        </div>
          <div class="social-icons">
          <img src="/img/gmail.png">Email.com
        </div>
      </div>
    </div>
    <div class="footer-bottom">
      <p>&copy; KSI-Kel 6 Copyright 2024 - All Right Reserved.</p>
    </div>
    </footer>
  </div>
  

</body>
</html>
