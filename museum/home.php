<!DOCTYPE html>
<html>

<head>
    <title>Historical Museum</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">


</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="http://localhost/museumx/index.php"><h3>MuseumX</h3></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.php">Historical Museum</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="events.php">Events</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="artifacts.php">Artifacts</a>
                    </li>
                </ul>

                <ul class="nav nav-pills">
  <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="http://localhost/museumx/login.php">Login</a>
  </li>

                </ul>


            </div>
        </div>
    </nav>



    <div id="demo" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#demo" data-slide-to="0" class="active"></li>
            <li data-target="#demo" data-slide-to="1"></li>
            <li data-target="#demo" data-slide-to="2"></li>
        </ul>

        <div class="carousel-inner">
            <div class="carousel-item active">
                     <img src="images/cc4.jpg" alt="American Museum" width="1100" height="500">
                <div class="carousel-caption">
                     <h3>"It's not a museum"</h3> 
                </div>
            </div>


            <div class="carousel-item">
                    <img src="images/aa2.jpg" alt="Vatican Museums" width="1100" height="500">
                <div class="carousel-caption">
                     <h3>"It's not a place of artifacts"</h3> 
                </div>
            </div>

            <div class="carousel-item">
                    <img src="images/bb3.jpg" alt="British Museum" width="1100" height="500">
                <div class="carousel-caption">
                     <h3>"It's a place of ideas"</h3> 
                </div>
            </div>
        </div>

        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
    </div>

  <section class="my-5 "> 
      <div class="py-5">
        <h2 class="text-center">About Museum</h2>
      </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 md-6 col-12">
              <img src="images/123.jpg" class="img-fluid rounded">
            </div>
             
            <div class="col-lg-6 md-6 col-12">
              <p class="py-5">
                Museum,institution dedicated to preserving and interpreting the 
                primary tangible evidence of humankind and the environment.
                Historical Museum is part of the Museum of Cultural History.
                The museum's main task is to do research, conservation and outreach on our history through our 
                academic environments in areas such as archaeology, ethnography and numismatics. 
              </p>
                <a href="about.php">Check more</a>
            </div>
          </div> 
  </section>







    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>