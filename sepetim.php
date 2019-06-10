<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link href="musteriarayuz.css" rel="stylesheet" type="text/css">


<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="musteriarayuz.php">BenimCD</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
            <ul class="navbar-nav m-auto">
                <li class="nav-item m-auto">
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
                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder="Search...">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-secondary btn-number">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
                <a class="btn btn-success btn-sm ml-3" href="sepetim.php">
                    <i class="fa fa-shopping-cart"></i> Sepetim
                    <span class="badge badge-light">3</span>
                </a>
                <a class="btn btn-success btn-sm ml-3" href="giris.php">
                    <i class="fa fa-sign-in"></i> Giriş
                  
                </a>
            </form>
        </div>
    </div>
</nav>
<br>

<div class="container mb-4">
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col"> </th>
                            <th scope="col">Ürün Adı</th>
                            <th scope="col">Tür</th>
                            <th scope="col" class="text-center">Adedi</th>
                            <th scope="col" class="text-right">Fiyat</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                            <td>Product Name Dada</td>
                            <td>Tür</td>
                            <td><input class="form-control" type="text" value="1" /></td>
                            <td class="text-right">124,90 €</td>
                            <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                        </tr>
                        <tr>
                            <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                            <td>Product Name Toto</td>
                            <td>Tür</td>
                            <td><input class="form-control" type="text" value="1" /></td>
                            <td class="text-right">33,90 €</td>
                            <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                        </tr>
                        <tr>
                            <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                            <td>Product Name Titi</td>
                            <td>Tür</td>
                            <td><input class="form-control" type="text" value="1" /></td>
                            <td class="text-right">70,00 €</td>
                            <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                        </tr>
                       
                     
                        <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td><strong>Toplam</strong></td>
                            <td class="text-right"><strong>228,80 €</strong></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col mb-2">
            <div class="row">
                <div class="col-sm-12  col-md-6">
                    <button class="btn btn-lg btn-block btn-danger" onClick="location.href='musteriarayuz.php'">Vazgeç</button>
                </div>
                <div class="col-sm-12 col-md-6 text-right">
                    <button onClick="location.href='alisverisedevam.php'" class="btn btn-lg btn-block btn-success text-uppercase">Alışverişi Tamamla<i class="fa fa-arrow-right"></i></button>
                </div>
            </div>
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
                    Le Lorem Ipsum est simplement du faux texte employé dans la composition et la mise en page avant impression.
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
               
                <p class="text-right text-muted">Ayça Calayır <i class="fa fa-heart"></i> by <a href="https://t-php.fr/43-theme-ecommerce-bootstrap-4.html"><i>php</i></a> | <span>v. 1.0</span></p>
            </div>
        </div>
    </div>
</footer>