<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

<link href="iletisim.css" rel="stylesheet" type="text/css">
<link href="musteriarayuz.css" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="musteriarayuz.php">BenimCD</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
            aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
            <ul class="navbar-nav m-auto">
                <li class="nav-item">
                    <a class="nav-link" href="musteriarayuz.php">Anasayfa</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="hakkimizda2.php">Hakkımızda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="iletisim.php">İletişim</a>
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0">
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm"
                        placeholder="Search...">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-secondary btn-number">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
                <div class="input-group input-group-sm">

                    <a class="btn btn-success btn-sm ml-3" href="sepetim.php">
                        <i class="fa fa-shopping-cart"></i> Sepetim
                        <span class="badge badge-light">3</span>
                    </a>
                </div>
                <a class="btn btn-success btn-sm ml-3" href="giris.php">
                <span class="fa fa-sign-in"></span> Giriş

                </a>
            </form>
        </div>
    </div>
</nav>
<br>

<div class="container">

    <div class="container animated fadeIn">

        <h1 class="header-title"> İLETİŞİM</h1>
        <hr>
        <div class="row">

            <div class="col-sm-6" id="parent">
                <iframe width="100%" height="320px;" frameborder="0" style="border:0"
                    src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJaY32Qm3KWTkRuOnKfoIVZws&key=AIzaSyAf64FepFyUGZd3WFWhZzisswVx2K37RFY"
                    allowfullscreen></iframe>
            </div>

            <div class="col-sm-6">
                <form action="form.php" class="contact-form" method="post">

                    <div class="form-group">
                        <input type="text" class="form-control" id="name" name="nm" placeholder="*Adı" required=""
                            autofocus="">
                    </div>


                    <div class="form-group form_left">
                        <input type="email" class="form-control" id="email" name="em" placeholder="*Email" required="">
                    </div>

                    <div class="form-group">
                        <input type="text" class="form-control" id="phone"
                            onkeypress="return event.charCode >= 48 && event.charCode <= 57" maxlength="10"
                            placeholder="Telefon No." required="">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control textarea-contact" rows="5" id="comment" name="FB"
                            placeholder="*Mesajınızı Yazınız..." required=""></textarea>
                        <br>
                        <button class="btn btn-default btn-send"> <span class="glyphicon glyphicon-send"></span>
                            Gönder </button>
                    </div>
                </form>
            </div>

        </div>

        <div class="container second-portion">
            <div class="row">
                <!-- Boxes de Acoes -->
                <div class="col-xs-12 col-sm-6 col-lg-4">
                    <div class="box">
                        <div class="icon">
                            <div class="image"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                            <div class="info">
                                <h3 class="title">EMAIL & WEBSITE</h3>
                                <p>
                                    <i class="fa fa-envelope" aria-hidden="true"></i> &nbsp gondhiyahardik6610@gmail.com
                                    <br>
                                    <br>
                                    <i class="fa fa-globe" aria-hidden="true"></i> &nbsp www.hardikgondhiya.com
                                </p>

                            </div>
                        </div>
                        <div class="space"></div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-lg-4">
                    <div class="box">
                        <div class="icon">
                            <div class="image"><i class="fa fa-mobile" aria-hidden="true"></i></div>
                            <div class="info">
                                <h3 class="title">TELEFON</h3>
                                <p>
                                    <i class="fa fa-mobile" aria-hidden="true"></i> &nbsp (+91)-9624XXXXX
                                    <br>
                                    <br>
                                    <i class="fa fa-mobile" aria-hidden="true"></i> &nbsp (+91)-756706XXXX
                                </p>
                            </div>
                        </div>
                        <div class="space"></div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-lg-4">
                    <div class="box">
                        <div class="icon">
                            <div class="image"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                            <div class="info">
                                <h3 class="title">ADRES</h3>
                                <p>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i> &nbsp 15/3 Junction Plot
                                    "Shree Krishna Krupa", Rajkot - 360001.
                                </p>
                            </div>
                        </div>
                        <div class="space"></div>
                    </div>
                </div>
                <!-- /Boxes de Acoes -->

                <!--My Portfolio  dont Copy this -->

            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-lg-4 col-xl-3">
                    <h5>Hakkımızda</h5>
                    <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                    <p class="mb-0">
                        Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant
                        impression.
                    </p>
                </div>

                <div class="col-md-4 col-lg-3 col-xl-3">
                    <h5>İletişim</h5>
                    <hr class="bg-white mb-2 mt-0 d-inline-block mx-auto w-25">
                    <ul class="list-unstyled">
                        <li><i class="fa fa-home mr-2"></i> My company</li>
                        <li><i class="fa fa-envelope mr-2"></i> email@example.com</li>
                        <li><i class="fa fa-phone mr-2"></i> + 33 12 14 15 16</li>
                        <li><i class="fa fa-print mr-2"></i> + 33 12 14 15 16</li>
                    </ul>
                </div>
                <div class="col-12 copyright mt-3">

                    <p class="text-right text-muted">Ayça Calayır <i class="fa fa-heart"></i> by <a
                            href="https://t-php.fr/43-theme-ecommerce-bootstrap-4.html"><i>php</i></a> | <span>v.
                            1.0</span></p>
                </div>
            </div>
        </div>
    </footer>