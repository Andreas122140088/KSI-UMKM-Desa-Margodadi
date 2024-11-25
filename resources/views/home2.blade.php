<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UMKM Desa Margodadi</title>
  <link rel="stylesheet" href="/css/homepage2.css">
</head>
<body>

  <div class="navbar">
    <div class="navbar-left">
        <img src="/img/logo.gif" alt="Logo Margodadi" class="logo">
      <span class="site-name">UMKM DESA MARGODADI</span>
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

  <section class="product-grid">
    <div class="product-card">
      <img src="/img/rengginang.jpeg" class="product">
      <img src="/img/favorite_icon.png" class="heart">
      <h2>Batik</p></h2>
      <p>Description</p>
    </div>
    <div class="product-card">
      <img src="/img/rengginang.jpeg" class="product">
      <img src="/img/favorite_icon.png" class="heart">
      <h2>Rengginang</p></h2>
      <p>Description</p>
    </div>
    <div class="product-card">
      <img src="/img/rengginang.jpeg" class="product">
      <img src="/img/favorite_icon.png" class="heart">
      <h2>Kerajinan Tangan</h2>
      <p>Product Description</p>
    </div>
    <div class="product-card">
      <img src="/img/rengginang.jpeg" class="product">
      <img src="/img/favorite_icon.png" class="heart">
      <h2>Batik</h2>
      <p>Description</p>
    </div>
    <div class="product-card">
      <img src="/img/rengginang.jpeg" class="product">
      <img src="/img/favorite_icon.png" class="heart">
      <h2>Batik</h2>
      <p>Description</p>
    </div>
    <div class="product-card">
      <img src="/img/rengginang.jpeg" class="product">
      <img src="/img/favorite_icon.png" class="heart">
      <h2>Batik</h2>
      <p>Description</p>
    </div>
    <div class="product-card">
      <img src="/img/rengginang.jpeg" class="product">
      <img src="/img/favorite_icon.png" class="heart">
      <h2>Batik</h2>
      <p>Description</p>
    </div>
    <div class="product-card">
      <img src="/img/rengginang.jpeg" class="product">
      <img src="/img/favorite_icon.png" class="heart">
      <h2>Batik</h2>
      <p>Description</p>
    </div>
    <div class="product-card">
      <img src="/img/rengginang.jpeg" class="product">
      <img src="/img/favorite_icon.png" class="heart">
      <h2>Batik</p></h2>
      <p>Description</p>
    </div>
    <div class="product-card">
      <img src="/img/rengginang.jpeg" class="product">
      <img src="/img/favorite_icon.png" class="heart">
      <h2>Rengginang</p></h2>
      <p>Description</p>
    </div>
    <div class="product-card">
      <img src="/img/rengginang.jpeg" class="product">
      <img src="/img/favorite_icon.png" class="heart">
      <h2>Kerajinan Tangan</h2>
      <p>Product Description</p>
    </div>
    <div class="product-card">
      <img src="/img/rengginang.jpeg" class="product">
      <img src="/img/favorite_icon.png" class="heart">
      <h2>Batik</h2>
      <p>Description</p>
    </div>
    <div class="product-card">
      <img src="/img/rengginang.jpeg" class="product">
      <img src="/img/favorite_icon.png" class="heart">
      <h2>Batik</h2>
      <p>Description</p>
    </div>
    <div class="product-card">
      <img src="/img/rengginang.jpeg" class="product">
      <img src="/img/favorite_icon.png" class="heart">
      <h2>Batik</h2>
      <p>Description</p>
    </div>
    <div class="product-card">
      <img src="/img/rengginang.jpeg" class="product">
      <img src="/img/favorite_icon.png" class="heart">
      <h2>Batik</h2>
      <p>Description</p>
    </div>
    <div class="product-card">
      <img src="/img/rengginang.jpeg" class="product">
      <img src="/img/favorite_icon.png" class="heart">
      <h2>Batik</h2>
      <p>Description</p>
    </div>
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
    </div>

    <div class="footer-bottom">
    <p>&copy; KSI-Kel 6 Copyright 2024 - All Right Reserved.</p>
    </div>
  </footer>

  <script>
    document.addEventListener("scroll", function() {
      const navbarLinks = document.querySelectorAll(".navbar-center a");
      const sections = document.querySelectorAll("section, .main-section");
      let currentSection = "";
  
      sections.forEach(section => {
        const sectionTop = section.offsetTop - 100;
        if (window.scrollY >= sectionTop) {
          currentSection = section.getAttribute("id");
        }
      });
  
      navbarLinks.forEach(link => {
        link.classList.remove("active");
        if (link.getAttribute("href") === `#${currentSection}`) {
          link.classList.add("active");
        }
      });
    });
  </script>

</body>
</html>
