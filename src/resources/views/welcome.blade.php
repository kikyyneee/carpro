<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Small Business - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('styles.css')}}" rel="stylesheet" />
        <link href="{{asset('style-page.css')}}" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container px-5">
                <a class="navbar-brand" href="#!">Luky Mobil</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Kontak</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Pesan</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Content-->
        <div class="container px-4 px-lg-5">
            <!-- Heading Row-->
            <div class="row gx-4 gx-lg-5 align-items-center my-5">
                <div class="col-lg-7"><img class="img-fluid rounded mb-4 mb-lg-0" src="{{ asset('img/car1.jpg') }}" alt="..." /></div>
                <div class="col-lg-5">
                    <h1 class="font-weight-light">Beli Mobil Baru Mu Disini</h1>
                    <p>This is a template that is great for small businesses. It doesn't have too much fancy flare to it, but it makes a great use of the standard Bootstrap core components. Feel free to use this template for any project you want!</p>
                    <a class="btn btn-primary" href="#!">Pesan</a>
                </div>
            </div>
            <!-- Call to Action-->
            <div class="card text-white bg-secondary my-5 py-4 text-center">
                <div class="card-body"><p class="text-white m-0">Pilih Mobil Impian mu</p></div>
            </div>
            <!-- Content Row-->
            <div class="row gx-4 gx-lg-5">
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="image-holder" style="background-image: url({{asset('img/car2.jpg')}});" >
                        </div>
                        <div class="card-body">
                            <h2 class="card-title">Mobil 1</h2>
                            <p class="card-text price">RP.100.000.000</p>
                            <p class="card-text tenor">2jt an per bulan</p>
                            <p class="card-text">DP mulai dari 30jt an</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">Pesan disini</a></div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="image-holder" style="background-image: url({{asset('img/car1.jpg')}});" >
                        </div>
                        <div class="card-body">
                            <h2 class="card-title">Mobil 1</h2>
                            <p class="card-text price">RP.100.000.000</p>
                            <p class="card-text tenor">2jt an per bulan</p>
                            <p class="card-text">DP mulai dari 30jt an</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">Pesan disini</a></div>
                    </div>
                </div>
                <div class="col-md-4 mb-5">
                    <div class="card h-100">
                        <div class="image-holder" style="background-image: url({{asset('img/car3.jpg')}});" >
                        </div>
                        <div class="card-body">
                            <h2 class="card-title">Mobil 1</h2>
                            <p class="card-text price">RP.100.000.000</p>
                            <p class="card-text tenor">2jt an per bulan</p>
                            <p class="card-text">DP mulai dari 30jt an</p>
                        </div>
                        <div class="card-footer"><a class="btn btn-primary btn-sm" href="#!">Pesan disini</a></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container px-4 px-lg-5"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
