<!DOCTYPE html>
<html lang="en">

<head>
    <title>Arayüz</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<style>
footer {
    background-color: #f2f2f2;
    padding: 25px;
}

.carousel-inner img {
    width: 100%;
    max-height: 350px;
}

@media (max-width: 600px) {
    .carousel-caption {
        display: none;
    }
}
</style>

<body>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">

            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Anasayfa</a></li>
                <li><a href="#">Hakkımızda</a></li>
                <li><a href="#">İletişim</a></li>
              
            </ul>
            <form class="navbar-form navbar-left" action="/action_page.php">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search" name="search">
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
            </form>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <div class="row">
                    <div class="col-md-12">
                        <div class="col-md-5">
                            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Giriş Yap</a></li>
                        </div>
                        <div class="col-md-7">
                            <button type="submit" class="btn btn-warning "><span
                                    class="glyphicon glyphicon-plus"></span>
                                Sepete Ekle</button>
                            </i>
                        </div>

                    </div>
                </div>
            </ul>
        </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Her slayt için bir işaret -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Slaytlar buraya gelecek -->
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <img src="http://www.btdersleri.com/ornek_resimleri/bs21.jpg">
                            <div class="carousel-caption">
                                <h3>Başlık 1</h3>
                                <p>Açıklama 1</p>
                            </div>
                        </div>

                        <div class="item">
                            <img src="http://www.btdersleri.com/ornek_resimleri/bs22.jpg">
                            <div class="carousel-caption">
                                <h3>Başlık 2</h3>
                                <p>Açıklama 2</p>
                            </div>
                        </div>

                        <div class="item">
                            <img src="http://www.btdersleri.com/ornek_resimleri/bs23.jpg">
                            <div class="carousel-caption">
                                <h3>Başlık 3</h3>
                                <p>Açıklama 3</p>
                            </div>
                        </div>
                    </div>

                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Önceki</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Sonraki</span>
                    </a>
                </div>
            </div>

        </div>
        <hr>
    </div>





    <div class="container text-center">
        <h3>Ürünler</h3>
        <br>
        <div class="row">
            <div class="col-sm-3">
                <img src="http://www.btdersleri.com/ornek_resimleri/bs24.jpg" class="img-responsive" style="width:100%"
                    alt="Image">
                <p>Kutu4</p>
            </div>
            <div class="col-sm-3">
                <img src="http://www.btdersleri.com/ornek_resimleri/bs24.jpg" class="img-responsive" style="width:100%"
                    alt="Image">
                <p>Kutu5</p>
            </div>
            <div class="col-sm-3">
                <div class="well">
                    <p>Kutu6</p>
                </div>
                <div class="well">
                    <p>Kutu7</p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="well">
                    <p>Kutu8</p>
                </div>
                <div class="well">
                    <p>Kutu9</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container text-center">
        <div class="row">
            <div class="col-sm-2">
                <img src="http://www.btdersleri.com/ornek_resimleri/bs24.jpg" class="img-responsive" style="width:100%"
                    alt="Image">
                <p>Kutu10</p>
            </div>
            <div class="col-sm-2">
                <img src="http://www.btdersleri.com/ornek_resimleri/bs24.jpg" class="img-responsive" style="width:100%"
                    alt="Image">
                <p>Kutu11</p>
            </div>
            <div class="col-sm-2">
                <img src="http://www.btdersleri.com/ornek_resimleri/bs24.jpg" class="img-responsive" style="width:100%"
                    alt="Image">
                <p>Kutu12</p>
            </div>
            <div class="col-sm-2">
                <img src="http://www.btdersleri.com/ornek_resimleri/bs24.jpg" class="img-responsive" style="width:100%"
                    alt="Image">
                <p>Kutu13</p>
            </div>
            <div class="col-sm-2">
                <img src="http://www.btdersleri.com/ornek_resimleri/bs24.jpg" class="img-responsive" style="width:100%"
                    alt="Image">
                <p>Kutu14</p>
            </div>
            <div class="col-sm-2">
                <img src="http://www.btdersleri.com/ornek_resimleri/bs24.jpg" class="img-responsive" style="width:100%"
                    alt="Image">
                <p>Kutu15</p>
            </div>
        </div>
    </div><br>

    <footer class="container-fluid text-center">

    </footer>

</body>

</html>