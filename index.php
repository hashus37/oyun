           <?php
            include('partials/_header.php');
           ?>

           <?php 
           include('partials/_three-js.php');
           ?>
        
            <!-- navbar section start -->
           <?php
              include('partials/_navbar.php');
           ?>
            <!-- navbar section end -->

             <!-- loader start    -->
            <?php 
               include('partials/_loader.php');
            ?>
             <!-- loader end   -->

            <!-- header section start -->
            <section id="header">
                <div class="container ">
                    <div class="row">
                        <div class="col-md-5 ">
                            <div class="header-content mt-5">
                                <h2 class="text-danger fw-bold display-2" >KENDİ </h2>
                                <h1 class="text-warning fw-bold display-3">OYUNUNU YAŞA</h1>
                                <p class="text-white">Kendi oyununu yaşamak için adım at, gerçek bir oyuncunun heyecanını keşfet. Etkileyici stratejiler kur, yeteneklerini geliştir ve zafere giden yolda kendi hikayeni yaz.</p>
                                <a href="#" class="text-decoration-none text-success fs-3"><i class="fa fa-play" aria-hidden="true"></i> Oyun Videosu</a>   
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
                            <img src="img/strateji.avif" class="img-fluid">
                        </div>
                        <div class="content">
                            <div class="details">
                                <h2>Strateji</h2>
                                <p>Kendi stratejik hamlelerinizle oyunu kontrol altına alın!</p>
                                <a href="index.php#contact" class="btn btn-outline-success">Satın AL</a>
                            </div>
                        </div >
                    </div>
                    <div class="services-card">
                        <div class="lines"></div>
                        <div class="imgBx">
                            <img src="img/talent.jpg">
                        </div>
                        <div class="content">
                            <div class="details">
                                <h2>Yetenek</h2>
                                <p>Yeteneklerinizi ve stratejinizi konuşturarak masanın hakimi olun!</p>
                                <a href="index.php#contact" class="btn btn-outline-success">Satın Al</a>
                            </div>
                        </div >
                    </div>
                    <div class="services-card">
                        <div class="lines"></div>
                        <div class="imgBx">
                            <img src="img/hedef.jpg">
                        </div>
                        <div class="content">
                            <div class="details">
                                <h2>Hedef</h2>
                                <p>Zafere giden yolda adımlarınızı belirleyerek kazanan olun!</p>
                                <a href="index.php#contact" class="btn btn-outline-success">Satın Al</a>
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
                                <p class="text-white">GoalRush, masaüstü futbol oyunlarında öncü bir marka olarak ilerliyor. Sunduğumuz oyunlar, kalite, dayanıklılık ve eğlenceyi bir araya getirerek aileleri, arkadaşları ve iş arkadaşlarını bir araya getirmeyi daha keyifli hale getiriyor.
                                <br><br>
                                Misyonumuz, insanlara dijital dünyadan biraz uzaklaşma fırsatıtanıyarak, fiziksel oyun deneyimini keşfetmelerini sağlamak. GoalRusholarak, masaüstü futbol oyunlarıyla insanların etkileşimini artırarakgüçlü bağlar kurmalarına katkı sağlıyoruz.
                                <br><br>
                                Oyunlarımız, sadece eğlenceli bir zaman geçirmenin ötesine geçerek, aynı zamanda sosyal bağları güçlendirmek adına bir araç görevi görüyor. GoalRush, insanların bir araya gelerek keyifli anlar yaşamalarını ve unutulmaz deneyimler biriktirmelerini amaçlayan bir platformdur.
                                </p>
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
                                    <p class="text-danger fs-4 fw-bold"> bm.gozdeyavuz@gmail.com</p>
                                </div>
                            </div>
                            <div class="contact-item d-flex mb-3">
                                <div class="icon text-danger fs-4">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="text ms-4">
                                    <h3 class="fs-5 text-warning">Telefon</h3>
                                    <p class="text-danger fs-4 fw-bold">0 541 506 26 44</p>
                                </div>
                            </div>
                            <div class="contact-item d-flex mb-3">
                                <div class="icon text-danger fs-4">
                                    <i class="fas fa-map-marker-alt "></i>
                                </div>
                                <div class="text ms-4">
                                    <h3 class="fs-5 text-warning">Adres</h3>
                                    <p class="text-danger fs-4 fw-bold">Antalya/Türkiye</p>
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
                                    <div class="form-group mb-3">
                                        <div class="g-recaptcha"            data-sitekey="6LcLuUApAAAAAPuzP2havi5Z1eOQVL8VZA8QiT7X"></div>
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

            <!-- footer section start  -->
             <?php
                include('partials/_footer.php')
             ?>
        
            <!-- footer section end  -->

            <script>
    if (window.location.hash) {
        var hash = window.location.hash.substring(1);
        var element = document.getElementById(hash);
        if (element) {
            element.scrollIntoView();
        }
    }
</script>

        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
        <script src="js/rotateimg.js"></script>
        <script src="js/three.js"></script>
        <script src="js/scene.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
    
    </body>
    </html>