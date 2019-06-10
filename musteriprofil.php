<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<link href="musteriarayuz.css" rel="stylesheet" type="text/css">
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
                        <span class="badge badge-light">1</span>
                    </a>
                </div>
                <div class="input-group input-group-sm">

                    <div class="dropdown">
                        <button type="button" class="btn btn-info dropdown-toggle btn-sm ml-3" data-toggle="dropdown">
                            Profilim
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="musteriprofil.php"><i class="fa fa-cog"></i> Ayarlar</a>
                            <a class="dropdown-item" href="musteriarayuz.php"><i class="fa fa-sign-out"></i> Çıkış</a>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</nav>
<br>

<div class="container" style="padding-top: 60px;">
    <h1 class="page-header">Profili Güncelle</h1>
    <div class="row">
        <!-- left column -->
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="text-center">
                <img src="http://lorempixel.com/200/200/people/9/" class="avatar img-circle img-thumbnail" alt="avatar">

                <input type="file" class="text-center center-block well well-sm">
            </div>
        </div>
        <!-- edit form column -->
        <div class="col-md-8 col-sm-6 col-xs-12 personal-info">


            <form class="form-horizontal" role="form">
                <div class="form-group">
                    <label class="col-lg-3 control-label">Adı:</label>
                    <div class="col-lg-8">
                        <input class="form-control" value="" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Soyadı:</label>
                    <div class="col-lg-8">
                        <input class="form-control" value="" type="text">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">Doğum Tarihi:</label>
                    <div class="col-lg-8">
                        <input class="form-control" value="" type="number">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-lg-3 control-label">*Email:</label>
                    <div class="col-lg-8">
                        <input class="form-control" value="" type="text">
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-md-3 control-label">*Şifre:</label>
                    <div class="col-md-8">
                        <input class="form-control" value="" type="password">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label">*Tekrar Şifre:</label>
                    <div class="col-md-8">
                        <input class="form-control" value="" type="password">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label"></label>
                    <div class="col-md-8">
                        <input class="btn btn-warning" value="Güncelle" type="button">
                        <span></span>
                        <input class="btn btn-danger" onClick="location.href='musterigirisarayuz.php'" value="İptal"
                            type="button">
                    </div>
                </div>
            </form>
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
                        href="https://t-php.fr/43-theme-ecommerce-bootstrap-4.html"><i>php</i></a> | <span>v. 1.0</span>
                </p>
            </div>
        </div>
    </div>
</footer>