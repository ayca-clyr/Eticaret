<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>


<link href="musteriarayuz.css" rel="stylesheet" type="text/css">

<body>
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
                        <input type="text" class="form-control" aria-label="Small"
                            aria-describedby="inputGroup-sizing-sm" placeholder="Search...">
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

                    <div class="input-group input-group-sm">

                        <div class="dropdown">
                            <button type="button" class="btn btn-info dropdown-toggle btn-sm ml-3"
                                data-toggle="dropdown">
                                <i class="fa fa-smile-o"></i> Profilim
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

    <div class="container">



        <div class="tab-pane active" id="checkout-tab" aria-expanded="true" role="tablist" aria-labelledby="checkout">
            <div class="row">
                <div class="col-md-4 order-md-2 mb-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Sepetin</h4>
                        </div>
                        <div class="card-content">
                            <ul class="list-group">

                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">Product Name Dada x 1</h6>
                                        <small class="text-muted">Brief description</small>
                                    </div>
                                    <span class="text-muted">124,90 €</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">Product Name Toto x 1</h6>
                                        <small class="text-muted">Brief description</small>
                                    </div>
                                    <span class="text-muted">33,90 €</span>
                                </li>
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0">Product Name Titi x 1</h6>
                                        <small class="text-muted">Brief description</small>
                                    </div>
                                    <span class="text-muted">70,00 €</span>
                                </li>

                                <li class="list-group-item d-flex justify-content-between">
                                    <span class="product-name success">Toplam</span>
                                    <span class="product-price">228,80 €</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="col-md-8 order-md-1">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Fatura Bilgileri</h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="needs-validation" novalidate="">
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="firstName">Adı </label>
                                            <input type="text" class="form-control" id="firstName" placeholder=""
                                                value="" required="">
                                            <div class="invalid-feedback">
                                                Valid first name is required.
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="lastName">Soyadı</label>
                                            <input type="text" class="form-control" id="lastName" placeholder=""
                                                value="" required="">
                                            <div class="invalid-feedback">
                                                Valid last name is required.
                                            </div>
                                        </div>
                                    </div>



                                    <div class="mb-3">
                                        <label for="email">Email <span class="text-muted">(İsteğe Bağlı)</span></label>
                                        <input type="email" class="form-control" id="email"
                                            placeholder="you@example.com">
                                        <div class="invalid-feedback">
                                            Please enter a valid email address for shipping updates.
                                        </div>
                                    </div>


                                    <div class="mb-3">
                                        <label for="tel">Telefon Numarası</label>
                                        <input type="tel" class="form-control" name="phone" id="phone"
                                            pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" placeholder="" required>
                                        <span>Format: 537-123-1234</span>
                                    </div>

                                    <div class="mb-3">
                                        <label for="address">Adres</label>
                                        <input type="text" class="form-control" id="address" placeholder="1234 Main St"
                                            required="">
                                        <div class="invalid-feedback">
                                            Please enter your shipping address.
                                        </div>
                                    </div>



                                    <div class="row">
                                        <div class="col-md-5 mb-3">
                                            <label for="country">İl</label>
                                            <select class="custom-select d-block w-100" id="country" required="">
                                                <option value="">Seçiniz...</option>
                                                <option>İstanbul</option>
                                                <option>Ankara</option>
                                            </select>
                                            <div class="invalid-feedback">
                                                Please select a valid country.
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="state">İlçe</label>
                                            <select class="custom-select d-block w-100" id="state" required="">
                                                <option value="">Seçiniz...</option>
                                                <option>Avcılar</option>
                                                <option>Levent</option>

                                            </select>
                                            <div class="invalid-feedback">
                                                Please provide a valid state.
                                            </div>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                            <label for="zip">Posta Kodu</label>
                                            <input type="number" class="form-control" id="zip" placeholder=""
                                                required="">
                                            <div class="invalid-feedback">
                                                Zip code required.
                                            </div>
                                        </div>
                                    </div>


                                    <h4 class="mb-1">Ödeme</h4>

                                    <div class="d-block my-2">
                                        <div class="custom-control custom-radio">
                                            <input id="credit" name="paymentMethod" type="radio"
                                                class="custom-control-input" checked="" required="">
                                            <label class="custom-control-label" for="credit">Kredi Kartı</label>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 mb-3">
                                            <label for="cc-name">Kart Üzerindeki Ad Soyad</label>
                                            <input type="text" class="form-control" id="cc-name" placeholder=""
                                                required="">

                                            <div class="invalid-feedback">
                                                Name on card is required
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="cc-number">Kart Numarası</label>
                                            <input type="number" class="form-control" id="cc-number" placeholder=""
                                                required="">
                                            <div class="invalid-feedback">
                                                Credit card number is required
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-7 mb-3">
                                            <label for="cc-expiration">Son Kulanma Tarihi</label>
                                            <input type="month" class="form-control" id="cc-expiration" placeholder=""
                                                required="">
                                            <div class="invalid-feedback">
                                                Expiration date required
                                            </div>
                                        </div>
                                        <div class="col-md-2 mb-3">
                                            <label for="cc-expiration">CVV</label>
                                            <input type="number" class="form-control" id="cc-cvv" placeholder=""
                                                required="">
                                            <div class="invalid-feedback">
                                                Security code required
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-12  col-md-6">
                                            <button class="btn btn-danger btn-lg btn-block"
                                                onclick="location.href='musterigirisarayuz.php'"
                                                type="button">Vazgeç</button>
                                        </div>
                                        <div class="col-sm-12 col-md-6 text-right">
                                            <button class="btn btn-success btn-block btn-lg" type="submit">Alışverişi
                                                Tamamla<i class="fa fa-check"></i></button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
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
                            1.0</span>
                    </p>
                </div>
            </div>
        </div>
    </footer>

</body>