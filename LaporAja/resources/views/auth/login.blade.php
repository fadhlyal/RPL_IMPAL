<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-widt initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700;800&display=swap" rel="stylesheet">

        <title>LaporAja</title>
        
    </head>
    <body>
        <section class="login d-inline-flex p-2 bd-highlight ">
            <div class="login-left w-50 h-100">
                <div class="row justify-content-center align-item-center h-10">
                    <div class="col-6">
                        <div class="header">
                            <h1>Masuk</h1>
                            <p class="d-inline">
                                Belum punya akun? <a href="/register" class="d-inline text text-decoration-none">Daftar</a>
                            </p>
                        </div>       
        
                        <div class="login-form">
                          <form method="POST" action="/login">
                            {{ csrf_field() }}
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email">
            
                            <input type="password" class="form-control" id="password" name="password" placeholder="Kata sandi">
            
                            <a href="#" class="text-decoration-none">Lupa kata sandi?</a>
            
                            <div class="masuk">
                              <button style="cursor:pointer" type="submit" class="btn btn-outline-secondary border-">Masuk</button>
                            </div>
                          </form>

                          <!-- <p>atau</p>

                            <div class="container text-center">
                                <div class="row justify-content-center align-item-center">
                                  <div class="col">
                                    <a class="signin-google" href="#"> <img src="images\icongoogle.png" alt=""></a>
                                  </div>
                                  <div class="col">
                                    <a class="signin-fb" href="#"> <img src="images\iconfb.png" alt=""></a>
                                  </div>
                                </div>
                                
                              </div> -->
                            <!-- <a class="signin-google" href="#"> <img src="icongoogle.png" alt=""></a>
        
                            <a class="signin-fb" href="#"> <img src="iconfb.png" alt=""></a> -->
                        </div>
                    </div>
                </div>
            
            </div>                              
            <div class="login-right w-50 h-100">
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img src="images\loginimg.png" class="d-block w-100 h-200" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="images\login2.jpg" class="d-block w-100" alt="...">
                      </div>
                      <div class="carousel-item">
                        <img src="images\login3.jpg" class="d-block w-100" alt="...">
                      </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="visually-hidden">Next</span>
                    </button>
                  </div>
            </div>
        </section>            
        
    </body>
</html>