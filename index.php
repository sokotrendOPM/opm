<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online product management</title>
    <!--bootstrap CCS link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!--frontawesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--css file -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!--navbar -->
    <div class="container-fluid">
        <!--first child -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <div class="container-fluid">
    <img src="./images/logo3.png"  alt="" class="logo">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Register</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fa-sharp fa-solid fa-cart-shopping"></i><sup>1</sup></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Total price</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"/>
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<!--second child -->
<div class="row">
  <div class="col-md-6">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
       <ul class="navbar-nav me-auto d-flex flex-column">
    <li class="nav-item">
      <h1 class="display-5 fw-bold mb-3">jukwaa letu La<br>kimataifa kwa <br>Wauzaji Wa<br>Kitanzania</h1>
           
    </li>
    <li class="nav=item">
      <p class="lead mb-4">Discover a powerful multi-vendor e-commerce<br>
platform designed for Tanzania’s growth.<br>
Effortlessly manage your inventory and analyze<br>
market trends with advanced charts.<br>
Get an unlimited product catalog and connect<br>
with customers through integrated real-time messaging.<br>
Join our community and scale your business globally.</p>
    </li>
    <li class="nav-item">
      <a href="#" class="btn btn-primary btn-lg">REGISTER NOW AS A SELLER</a>
    </li>
  </ul> 
      
    </nav>
  </div>


  <div class="col-md-6">
    <div class="col-lg-6 d-done d-lg-block">
      <img src="./images/iso.jpg">
    </div>


  </div>

</div>


<!--third child -->
<h1 class="text-center mt-4 mb-3 text-uppercase fw-bold">See how it works</h1>
<div class="row justify-content-center g-3 px-2 bg-secondary">
  <div class="col-md-4">
    <div class="card border-0 shadow-sm h-100">
      <div class="card-body text-center p-4">
        <div class="text-primary fs-1 mb-2"><i class="fa-solid fa-list-check"></i></div>
        <img src="./images/products.jpg" class="img-fluid rounded-3 how-work-image mb-3" alt="List your products">
        <h5 class="card-title fw-bold">List Your Products</h5>
        <p class="card-text text-muted small mb-0">Add products, images and prices in minutes.</p>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card border-0 shadow-sm h-100">
      <div class="card-body text-center p-4">
        <div class="text-primary fs-1 mb-2"><i class="fa-solid fa-chart-line"></i></div>
        <img src="./images/market.jpg" class="img-fluid rounded-3 how-work-image mb-3" alt="Analyze market trends">
        <h5 class="card-title fw-bold">Analyze Market Trends</h5>
        <p class="card-text text-muted small mb-0">Track demand and improve your strategy.</p>
      </div>
    </div>
  </div>

  <div class="col-md-4">
    <div class="card border-0 shadow-sm h-100">
      <div class="card-body text-center p-4">
        <div class="text-primary fs-1 mb-2"><i class="fa-solid fa-comments"></i></div>
        <img src="./images/chart.jpg" class="img-fluid rounded-3 how-work-image mb-3" alt="Chat with seller">
        <h5 class="card-title fw-bold">Chat with Seller</h5>
        <p class="card-text text-muted small mb-0">Talk directly with buyers and sellers.</p>
      </div>
    </div>
  </div>
</div>

<!-- Mafanikio ya Wauzaji -->
<div class="container my-4 px-2">
  <h2 class="text-center text-white fw-bold mb-2" style="letter-spacing: .5px;">Mafanikio ya Wauzaji</h2>
  <p class="text-center text-white-50 mb-4">Beauty results, stronger sales, and growing businesses.</p>

  <div class="row g-3">
    <div class="col-md-4">
      <div class="card border-0 shadow-sm h-100">
        <div class="card-body">
          <div class="d-flex align-items-center gap-2 mb-2">
            <div class="rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center" style="width:42px;height:42px;">
              <img src="./images/card1.jpg" class="img-fluid rounded-circle" width="150" height="150" alt="image">
            </div>
            <div class="fw-bold">Godfather samwel Godfather</div>
          </div>
          <p class="mb-0">“It helps me reach customers faster and manage my inventory easily.”</p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card border-0 shadow-sm h-100">
        <div class="card-body">
          <div class="d-flex align-items-center gap-2 mb-2">
            <div class="rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center" style="width:42px;height:42px;">
              <img src="./images/card2.jpg" class="img-fluid rounded-circle" width="150" height="150" alt="image">
            </div>
            <div class="fw-bold">Amina Bahati Kalonge</div>
          </div>
          <p class="mb-0">“The market insights are great. I can price products smarter.”</p>
        </div>
      </div>
    </div>

    <div class="col-md-4">
      <div class="card border-0 shadow-sm h-100">
        <div class="card-body">
          <div class="d-flex align-items-center gap-2 mb-2">
            <div class="rounded-circle bg-secondary text-white d-flex align-items-center justify-content-center" style="width:42px;height:42px;">
              <img src="./images/card1.jpg" class="img-fluid rounded-circle" width="150" height="150" alt="image">
            </div>
            <div class="fw-bold">Daniel kenzo Lwangwa</div>
          </div>
          <p class="mb-0">“Customer chat makes it easier to close deals quickly.”</p>
        </div>
      </div>
    </div>
  </div>
</div>

<!--last chld -->
<div class="bg-secondary p-3 text-center">
  <div class="container">
    <div class="row g-3 align-items-start">
      <div class="col-md-4 text-md-start">
        <h4 class="text-dark text-uppercase mb-2">Contact Us</h4>
        <p class="mb-1 text-dark"><i class="fa-solid fa-phone me-2"></i>+255 265 8730</p>
        <p class="mb-1 text-dark"><i class="fa-solid fa-envelope me-2"></i>email@gmail.com</p>
        <p class="mb-0 text-dark"><i class="fa-solid fa-location-dot me-2"></i>Location in Tanzania</p>
      </div>

      <div class="col-md-4">
        <h4 class="text-dark text-uppercase mb-2">Quick Links</h4>
        <ul class="list-unstyled d-flex flex-column gap-2 mb-0">
          <li><a href="#" class="text-decoration-none text-dark">Home</a></li>
          <li><a href="#" class="text-decoration-none text-dark">Products</a></li>
          <li><a href="#" class="text-decoration-none text-dark">Register</a></li>
          <li><a href="#" class="text-decoration-none text-dark">contact</a></li>
          <li><a href="#" class="text-decoration-none text-dark">Total price</a></li>
        </ul>
      </div>

      <div class="col-md-4 text-md-end">
        <div class="d-grid gap-2">
          <a href="#" class="btn btn-primary">LOGIN </a>
          <a href="#" class="btn btn-outline-dark">register as seller</a>
        </div>
      </div>
    </div>

    <p class="mt-4 mb-0">All rights reserved</p>
  </div>
</div>
    </div>

 <!--bootstrap  js link-->  
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>