<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- My CSS-->
   <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <!--Start Navbar-->
  <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">Mi Amor</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!--End Navbar-->

<!--Start Jumbotron-->
<div class="jumbotron text-center">
  <img src="img/Kamisato Ayato.png" alt="Mi Amor" width="200" class="rounded-circle img-thumbnail" />
  <h1 class="display-4">Ngeng!</h1>
  <p class="lead">testing testing.</p>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#f3f4f5" fill-opacity="1" d="M0,32L20,74.7C40,117,80,203,120,224C160,245,
    200,203,240,176C280,149,320,139,360,165.3C400,192,440,256,480,256C520,256,560,192,600,
    181.3C640,171,680,213,720,240C760,267,800,277,840,261.3C880,245,920,203,960,154.7C1000,
    107,1040,53,1080,48C1120,43,1160,85,1200,133.3C1240,181,1280,235,1320,245.3C1360,256,1400,
    224,1420,208L1440,192L1440,320L1420,320C1400,320,1360,320,1320,320C1280,320,1240,320,1200,
    320C1160,320,1120,320,1080,320C1040,320,1000,320,960,320C920,320,880,320,840,320C800,320,760,320,720,320C680,320,640,320,600,320C560,320,520,320,480,320C440,320,400,320,360,320C320,320,280,320,240,320C200,320,160,320,120,320C80,320,40,320,20,320L0,320Z">
  </path>
</svg>
</div>
<!-- End Jumbotron-->

<!-- start about-->
<!-- Start About -->
<section class="About">
    <div class="container">
        <div class="row text-center mb-3">
            <div class="col">
                <h2>About Me</h2>
            </div>
        </div>
        <div class="row justify-content-center fs-5 text-center">
            <div class="col-4">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Praesentium fugiat placeat fugit esse voluptatum voluptate,
                    sequi natus, saepe autem libero asperiores voluptatem rem
                    reiciendis quidem sunt porro doloremque quos officiis?</p>
            </div>
            <div class="col-4">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    Sit tempore aperiam similique minus eligendi! Qui mollitia
                    sunt at ipsam nihil dolore nam quia. Ab dolor magni saepe!
                    Esse, atque laboriosam.</p>
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#e2edff" fill-opacity="1" d="M0,192L40,197.3C80,203,160,213,240,
            197.3C320,181,400,139,480,144C560,149,640,203,720,197.3C800,192,
            880,128,960,117.3C1040,107,1120,149,1200,181.3C1280,213,1360,235,
            1400,245.3L1440,256L1440,320L1400,320C1360,320,1280,320,1200,320C1120,
            320,1040,320,960,320C880,320,800,320,720,320C640,320,
            560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path>
    </svg>
</section>
<!-- End About -->
<!-- Start Projects -->
<section Class="Projects">
  
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <h2>My Projects</h2>
          </div>
        </div>
        
        <div class="row">
          <div class="col-md-4">
          <div class="card" style="width: 18rem;">
  <img src="img/Projects/1.jpg" class="card-img-top" alt="first pict">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
</div>
  <div class="col-md-4">
<div class="card" style="width: 18rem;">
  <img src="img/Projects/2.jpg" class="card-img-top" alt="2nd img">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
      </div>
    </div>
  </div>
</div>
    </section>
    <!-- End Projects -->  

    <!-- Start Form-->
    <section id="Contact">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2>Contact Me</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name" aria-describedby="name" />
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="email" />
                        </div>
    
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
     </section>
<!-- Start Footer -->
<footer class="bg-primary text-white text-center pb-5">
      <p>Created with <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-magnet" viewBox="0 0 16 16">
  <path d="M8 1a7 7 0 0 0-7 7v3h4V8a3 3 0 0 1 6 0v3h4V8a7 7 0 0 0-7-7m7 11h-4v3h4zM5 12H1v3h4zM0 8a8 8 0 1 1 16 0v8h-6V8a2 2 0 1 0-4 0v8H0z"/>
</svg> by <a href="https://statistics.uii.ac.id" class="text-white fw-bold">Muhammad Muhajir</a></p>
    </footer>
    <!-- End Footer -->


    </body>
</html>