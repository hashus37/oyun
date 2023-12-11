   <?php 
   session_start();
   ?>
   
   <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="stylesheet" href="style.css">
        <script type="module">
            import * as THREE from 'https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.module.js';
        
            // script.js dosyasını ekleyin
            import './script.js';
        
            // Bu kısmı ekleyerek Three.js'i modül olarak ekleyebilirsiniz.
        </script>
        

    </head>
    <body>

        <div id="threejs-container">    </div>
        
            <!-- navbar section start -->
            <section id="navbar">
                <nav class="navbar navbar-expand-lg shadow-sm">
                    <div class="container py-2">
                    <a class="navbar-brand text-danger fw-bold fs-2 anime-bottom" href="#">
                        <img src="img/logo-removebg-preview-copy.png" alt="" style="height: 50px;">
                    </a>
                    <button class="navbar-toggler text-danger bg-danger" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav ms-auto fs-5  ">
                        <a class="nav-link fw-bold ms-3" aria-current="page" href="#home">Ana Sayfa</a>
                        <a class="nav-link fw-bold ms-3" href="#services">Hizmetlerimiz</a>
                        <a class="nav-link fw-bold ms-3" href="#about">Hakkımızda</a>
                        <a class="nav-link fw-bold ms-3" href="#portfolio">Portfolyomuz</a>
                        <a class="nav-link fw-bold ms-3" href="#contact">İletişim</a>
                        </div>
                    </div>
                    </div>
                </nav>
            </section>
            <!-- navbar section end -->

            <!-- header section start -->
            <section id="header">
                <div class="container ">
                    <div class="row">
                        <div class="col-md-5 ">
                            <div class="header-content mt-5">
                                <h2 class="text-danger fw-bold display-2" >KENDİ </h2>
                                <h1 class="text-warning fw-bold display-3">OYUNUNU YAŞA</h1>
                                <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci incidunt et aperiam corporis ratione laudantium! Nostrum, cumque! Cumque blanditiis earum totam, sint odit pariatur voluptates assumenda? Vero blanditiis molestiae pariatur.</p>
                                <a href="#" class="text-decoration-none text-success fs-3"><i class="fa fa-play" aria-hidden="true"></i> Oyun Oynanış Videosu</a>
                            </div>
                        </div>
                        <div class="col-md-7 mb-5">
                            <div class="image-container" onmousemove="rotateImage(event)">
                                <img src="img/header-image.png" alt="" class="img-fluid" id="interactive-image">
                            </div>
                        </div>
                    </div>
                </div>
            </section>    
            <!-- header section end -->

            <!-- services section start -->
            <section id="services">
                <div class="container">
                    <div class="row">
                        <div class="section-title text-center mb-5">
                                <h1 class="text-danger display-3 fw-bold">Hizmetlerimiz</h1>
                        </div>
                    </div>
                </div>
                <div class="services-container">
                    <div class="services-card">
                        <div class="lines"></div>
                        <div class="imgBx">
                            <img src="img/creativity.png">
                        </div>
                        <div class="content">
                            <div class="details">
                                <h2>Design</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi numquam vel fugit, voluptate nobis sit.</p>
                                <a href="#">Read More</a>
                            </div>
                        </div >
                    </div>
                    <div class="services-card">
                        <div class="lines"></div>
                        <div class="imgBx">
                            <img src="img/coding.png">
                        </div>
                        <div class="content">
                            <div class="details">
                                <h2>Launch</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi numquam vel fugit, voluptate nobis sit.</p>
                                <a href="#">Read More</a>
                            </div>
                        </div >
                    </div>
                    <div class="services-card">
                        <div class="lines"></div>
                        <div class="imgBx">
                            <img src="img/rocket.png">
                        </div>
                        <div class="content">
                            <div class="details">
                                <h2>Design</h2>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nisi numquam vel fugit, voluptate nobis sit.</p>
                                <a href="#">Read More</a>
                            </div>
                        </div >
                    </div>
                </div>
            </section>
            <!-- services section end -->

            <!-- about-me section start  -->
            <section id="about">
                <div class="container ">
                    <div class="row">
                        <div class="section-title text-center mb-5 mt-5">
                                <h1 class="text-danger display-3 fw-bold">Hakkımızda</h1>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 mt-5">
                          <div class="image-container" >
                            <img src="img/astronot.png" alt="" class="img-fluid"  style="height:450px;">
                          </div>
                        </div>
                        <div class="col-md-7 mb-5 ">
                            <div class="header-content mt-5">
                                <h2 class="text-warning fw-bold display-2" >Biz Kimiz </h2>
                                <p class="text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci incidunt et aperiam corporis ratione laudantium! Nostrum, cumque! Cumque blanditiis earum totam, sint odit pariatur voluptates assumenda? Vero blanditiis molestiae pariatur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos nulla quo itaque voluptatem doloribus iste earum facilis laborum harum labore a totam, explicabo et dolorem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Est assumenda nobis libero dignissimos iure velit earum ut ipsa consectetur veniam.Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci incidunt et aperiam corporis ratione laudantium! Nostrum, cumque! Cumque blanditiis earum totam, sint odit pariatur voluptates assumenda? Vero blanditiis molestiae pariatur. Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos nulla quo itaque voluptatem doloribus iste earum facilis laborum harum labore a totam, explicabo et dolorem. Lorem ipsum dolor sit amet consectetur adipisicing elit. Est assumenda nobis libero dignissimos iure velit earum ut ipsa consectetur veniam.</p>
                                <a href="#" class="btn btn-outline-success text-white px-5 py-2 fs-3 fw-bold"> Satın Al</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- about-me section end  -->
            
            <!-- portfolyo start -->
            <section id="portfolio">
                <!-- kodlar buraya yazılacak  -->
            </section>
            <!-- portfolyo end -->

            
            <!-- contact section start  -->
            <section class="contact py-5" id="contact">
                <div class="container-lg py-4">
                    <div class="row">
                        <div class="section-title text-center mb-5 mt-5">
                                <h1 class="text-danger display-3 fw-bold">İletişim</h1>
                        </div>
                    </div>
                    <div class="row">
                        <?php if(isset($_SESSION["alert"])){ ?>
                            <div class="alert alert-<?php echo $_SESSION["alert"]["type"];?> text-center opacity-75" role="alert">
                                <?php echo $_SESSION["alert"]["message"];?>
                            </div>
                            <?php unset($_SESSION["alert"]);?>
                        <?php } ?> 
                        <div class="col-md-5 anime-left">
                            <div class="contact-item d-flex mb-3">
                                <div class="icon text-danger fs-4">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="text ms-4">
                                    <h3 class="fs-5 text-warning">Email</h3>
                                    <p class="text-danger fs-4 fw-bold">hashus5021@gmail.com</p>
                                </div>
                            </div>
                            <div class="contact-item d-flex mb-3">
                                <div class="icon text-danger fs-4">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="text ms-4">
                                    <h3 class="fs-5 text-warning">Telefon</h3>
                                    <p class="text-danger fs-4 fw-bold">05373932449</p>
                                </div>
                            </div>
                            <div class="contact-item d-flex mb-3">
                                <div class="icon text-danger fs-4">
                                    <i class="fas fa-map-marker-alt "></i>
                                </div>
                                <div class="text ms-4">
                                    <h3 class="fs-5 text-warning">Adres</h3>
                                    <p class="text-danger fs-4 fw-bold">Afyonkarahisar</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 mt-3 mt-md-0">
                            <div class="contact-form anime-right">
                                <form action="send_email.php" method="post">
                                    <div class="row">
                                        <div class="col-lg-6 mb-4">
                                            <input type="text" placeholder="Adınız" name="fullname" class="form-control form-control-lg fs-6 border-0 shadow-sm" required>
                                        </div>
                                        <div class="col-lg-6 mb-4">
                                            <input type="text" placeholder="Mail Adresiniz" name="email" class="form-control form-control-lg fs-6 border-0 shadow-sm" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 mb-4">
                                            <input type="text" placeholder="Konu" name="subject" class="form-control form-control-lg fs-6 border-0 shadow-sm" required>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 mb-4">
                                            <textarea placeholder="Mesajınız" rows="5" name="message" class="form-control form-control-lg fs-6 border-0 shadow-sm" required ></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12 ">
                                            <button type="submit" class="btn btn-outline-success px-4 py-2">Mail Gönder</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact section end  -->
        


    <script>
        function rotateImage(event) {
        var image = document.getElementById("interactive-image");

        var containerWidth = event.currentTarget.clientWidth;
        var containerHeight = event.currentTarget.clientHeight;

        var x = (event.offsetX - containerWidth / 2) / containerWidth; // -0.5 ile 0.5 arasında değer
        var y = (event.offsetY - containerHeight / 2) / containerHeight; // -0.5 ile 0.5 arasında değer

        var rotationX = y * 30; // X ekseni için 30 derece döndürme (isteğe bağlı)
        var rotationY = x * 30; // Y ekseni için 30 derece döndürme (isteğe bağlı)
        var rotationZ = (x + y) * 30; // Z ekseni için 30 derece döndürme (isteğe bağlı)

        image.style.transform = "rotateX(" + rotationX + "deg) rotateY(" + rotationY + "deg) rotateZ(" + rotationZ + "deg)";
    }
    </script>
        <script src="three.js"></script>
        <script src="script.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

   
        
        
    
    
        
        
    
    </body>
    </html>