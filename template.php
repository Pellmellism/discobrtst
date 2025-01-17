
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Product example · Bootstrap v5.0</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/product/">

    

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <!-- Favicons -->
    <meta name="theme-color" content="#7952b3">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      
      .container {
        max-width: 960px;
      }

      /*
       * Custom translucent site header
       */

      .site-header {
        
/*         background-color: rgba(0, 0, 0, .85);
        -webkit-backdrop-filter: saturate(180%) blur(20px);
        backdrop-filter: saturate(180%) blur(20px); */
      }
      .site-header a {
        color: #8e8e8e;
        transition: color .15s ease-in-out;
      }
      .site-header a:hover {
        color: #fff;
        text-decoration: none;
      }

      /*
       * Dummy devices (replace them with your own or something else entirely!)
       */

      .product-device {
        position: absolute;
        right: 25%;
        bottom: -30%;
        width: 300px;
        height: 540px;
        background-color: #333;
        border-radius: 21px;
        transform: rotate(30deg);
      }

      .product-device::before {
        position: absolute;
        top: 10%;
        right: 10px;
        bottom: 10%;
        left: 10px;
        content: "";
        background-color: rgba(255, 255, 255, .1);
        border-radius: 5px;
        background-image:url('img-2.jpg');
        background-position:center center;
        background-repeat:no-repeat;
        background-size:cover;
        z-index: -1;
      }

      .product-device-2 {
        top: -25%;
        right: auto;
        bottom: 0;
        left: 5%;
        background-color: #e5e5e5;
      }


      /*
       * Extra utilities
       */

      .flex-equal > * {
        flex: 1;
      }
      @media (min-width: 768px) {
        .flex-md-equal > * {
          flex: 1;
        }
      }
      @media (min-width: 1200px) {
        
      }
      
      .form-card{
        max-width: 400px;
      }
      
      .font-weight-xtra-bold{
        font-weight:900;
      }
      .main-top-container{
        max-width:1400px;
      }
      .top-parent-container{
        background-image:url('img-2.jpg');
        background-position:center center;
        background-repeat:no-repeat;
        background-size:cover;
        
      }
      .card-top-circle{
        width: 150px;
        height: 150px;
        position: absolute;
        left: calc(50% - 75px);
        top: -75px;
        background-position:center center;
        background-repeat:no-repeat;
        background-size:cover;
      }
      .bg-image-style{
        background-position:center center;
        background-repeat:no-repeat;
        background-size:cover;
        min-height:400px;
      }
      
    </style>

    
    <!-- Custom styles for this template -->
  </head>
  <body>
    
<header class="site-header py-2">
  <nav class="container d-flex flex-column flex-md-row justify-content-between">
    <a class="py-2" href="#" aria-label="Product">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
    </a>
    <span class="py-2 h5 mb-0 d-none d-md-inline-block font-weight-bold">Questions? Call (888) 888-8888 <a  href="#"></a></span>
    
  </nav>
</header>

<main>
<!--   <div class="position-relative overflow-hidden p-3 p-md-5 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h1 class="display-4 fw-normal">Punny headline</h1>
      <p class="lead fw-normal">And an even wittier subheading to boot. Jumpstart your marketing efforts with this example based on Apple’s marketing pages.</p>
      <a class="btn btn-outline-secondary" href="#">Coming soon</a>
    </div>
  </div> -->
  <div class="top-parent-container">
  <div class="container-fluid position-relative p-lg-5 main-top-container">
    <div class="row px-0 py-5 px-xl-5">
      <div class="col-12 col-md-7 col-lg-8 position-relative" style="min-height:500px;">
        <div class="my-3 py-3 position-relative" style="z-index:9;">
          <div class="display-1 fw-bold text-white">Another headline</div>
          <div class="h3 text-white text-uppercase">And an even wittier subheading.</div>
        </div>
        <div class="product-device shadow-sm"></div>
<!--         <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div> -->
      </div>
      <div class="col-12 col-md-5 col-lg-4">
        <div class="card form-card mx-auto shadow">
          <div class="card-header">
            TIME SENSITIVE OFFER
          </div>
          <div class="card-body px-5 py-4">
            <div class="form-container">
              <h5 class="card-title">Special title treatment</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Have you ever been to Branson before?</label>
                <select class="form-select" aria-label="Default select example">
                  <option selected>Open this select menu</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">When Are You Planning to Travel?</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              </div>
              <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Do you already have lodging booked?</label>
                <select class="form-select" aria-label="Default select example">
                  <option selected>Open this select menu</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
              <div class="w-100 px-3">
                <button type="button" class="btn btn-primary w-100 rounded-pill">GET STARTED!</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  <div class="container-fluid bg-white px-0 position-relative">
    <div class="my-slider">
      <div class="py-2 px-1"><img src="img-2.jpg" class="w-100" alt=""></div>
      <div class="py-2 px-1"><img src="img-2.jpg" class="w-100" alt=""></div>
      <div class="py-2 px-1"><img src="img-2.jpg" class="w-100" alt=""></div>
      <div class="py-2 px-1"><img src="img-2.jpg" class="w-100" alt=""></div>
      <div class="py-2 px-1"><img src="img-2.jpg" class="w-100" alt=""></div>
      <div class="py-2 px-1"><img src="img-2.jpg" class="w-100" alt=""></div>
      <div class="py-2 px-1"><img src="img-2.jpg" class="w-100" alt=""></div>
      <div class="py-2 px-1"><img src="img-2.jpg" class="w-100" alt=""></div>
      <div class="py-2 px-1"><img src="img-2.jpg" class="w-100" alt=""></div>
      <div class="py-2 px-1"><img src="img-2.jpg" class="w-100" alt=""></div>
      <div class="py-2 px-1"><img src="img-2.jpg" class="w-100" alt=""></div>
      <div class="py-2 px-1"><img src="img-2.jpg" class="w-100" alt=""></div>
      <div class="py-2 px-1"><img src="img-2.jpg" class="w-100" alt=""></div>
    </div>
    <!-- or ul.my-slider > li -->
  </div>
  
  <div class="container-fluid bg-primary text-center py-4">
    <div class="h4 mb-0 font-weight-bold text-white">Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</div>
  </div>
  
  <div class="container-fluid bg-white text-center py-4 mb-5">
    <div class="h3 mb-0 font-weight-bold">Lorem Ipsum is simply dummy text:</div>
  </div>
  <div class="container-fluid py-5" style="max-width:1140px;">
    <div class="row">
      <div class="col-12 col-sm-6 col-lg-4 pb-5">
        <div class="card form-card mx-auto shadow mb-5 mb-lg-0">
          <div class="card-body text-center">
            <div class="rounded-circle border card-top-circle bg-white shadow-sm" style="background-image:url('img-2.jpg');"></div>
            <div class="form-container px-4">
              <h5 class="card-title font-weight-xtra-bold mt-5 pt-5">BRANSON TRAVEL PDF</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <div class="w-100 px-3">
                <button type="button" class="btn btn-primary w-100 text-uppercase">Lorem Ipsum</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-lg-4 pb-5">
        <div class="card form-card mx-auto shadow mb-5 mb-lg-0">
          <div class="card-body text-center">
            <div class="rounded-circle border card-top-circle bg-white shadow-sm" style="background-image:url('img-2.jpg');"></div>
            <div class="form-container px-4">
              <h5 class="card-title font-weight-xtra-bold mt-5 pt-5">BRANSON MAP</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <div class="w-100 px-3">
                <button type="button" class="btn btn-primary w-100 text-uppercase">Lorem Ipsum</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 offset-sm-3 col-lg-4 offset-lg-0 pb-5">
        <div class="card form-card mx-auto shadow mb-5 mb-md-0">
          <div class="card-body text-center">
            <div class="rounded-circle border card-top-circle bg-white shadow-sm" style="background-image:url('img-2.jpg');"></div>
            <div class="form-container px-4">
              <h5 class="card-title font-weight-xtra-bold mt-5 pt-5">DISCOUNT COUPONS</h5>
              <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
              <div class="w-100 px-3">
                <button type="button" class="btn btn-primary w-100 text-uppercase">Lorem Ipsum</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    
    </div>
  </div>
  <div class="container-fluid bg-white text-center py-4 mb-5">
    <div class="h3 mb-0 font-weight-bold">Lorem Ipsum is simply dummy text:</div>
  </div>
  
  <div class="container shadow px-0 mb-5">

    <div class="d-md-flex flex-md-equal w-100">
      <div class="bg-light">
        <div class="h-100 p-4 p-md-5">
          <div class="h2 fw-bold">Entertainment &<br> Travel Info</div>
          <div class="h5 text-muted">This Travel Guide contains everything you need to know about Branson. From show schedules and attraction operating hours to a full-color map of the city, this guide is essential to any getaway in Branson.</div>
          <button type="button" class="btn btn-lg btn-warning text-uppercase text-white mt-4 fw-bold"><i class="fa-solid fa-download"></i> Lorem Ipsum</button>
        </div>
      </div>
      <div class="bg-primary bg-image-style" style="background-image:url('img-2.jpg');">
      </div>
    </div>

    <div class="d-md-flex flex-md-equal w-100">
      <div class="bg-primary bg-image-style" style="background-image:url('img-2.jpg');">

      </div>
      <div class="bg-light">
        <div class="h-100 p-4 p-md-5">
          <div class="h2 fw-bold">Entertainment &<br> Travel Info</div>
          <div class="h5 text-muted">This Travel Guide contains everything you need to know about Branson. From show schedules and attraction operating hours to a full-color map of the city, this guide is essential to any getaway in Branson.</div>
          <button type="button" class="btn btn-lg btn-warning text-uppercase text-white mt-4 fw-bold"><i class="fa-solid fa-download"></i> Lorem Ipsum</button>
        </div>
      </div>
    </div>

    <div class="d-md-flex flex-md-equal w-100">
      <div class="bg-light">
        <div class="h-100 p-4 p-md-5">
          <div class="h2 fw-bold">Entertainment &<br> Travel Info</div>
          <div class="h5 text-muted">This Travel Guide contains everything you need to know about Branson. From show schedules and attraction operating hours to a full-color map of the city, this guide is essential to any getaway in Branson.</div>
          <button type="button" class="btn btn-lg btn-warning text-uppercase text-white mt-4 fw-bold"><i class="fa-solid fa-download"></i> Lorem Ipsum</button>
        </div>
      </div>
      <div class="bg-primary bg-image-style" style="background-image:url('img-2.jpg');">
      </div>
    </div>
    
  </div>
  
  
</main>


<!--     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/tiny-slider.css">
<!--[if (lt IE 9)]><script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.4/min/tiny-slider.helper.ie8.js"></script><![endif]-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tiny-slider/2.9.2/min/tiny-slider.js"></script>
<!-- NOTE: prior to v2.2.1 tiny-slider.js need to be in <body> -->

<!--     <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    
    <script type="module">
      var slider = tns({
        container: ".my-slider",
        items: 5,
        slideBy: "page",
        mouseDrag: true,
        swipeAngle: false,
        speed: 400,
        controls: false,
        nav: false,
      });
    </script>
  </body>
</html>
