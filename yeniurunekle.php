<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<link href="adminpanel.css" rel="stylesheet" stype="text/css">

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="sumit kumar">
    <title>admin-template</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <script src="https://use.fontawesome.com/07b0ce5d10.js"></script>
  

</head>

<body>
    <!--=============================
                                             NAVIGATION
                                   =============================-->
    <!--top nav start=======-->
    <nav class="navbar navbar-inverse top-bar navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button> <span class="menu-icon" id="menu-icon"><i class="fa fa-times" aria-hidden="true"
                        id="chang-menu-icon"></i></span>

            </div>
            <div class="collapse navbar-collapse navbar-right" id="myNavbar">
                <form class="navbar-form navbar-left">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit">
                                <i class="glyphicon glyphicon-search"></i> </button>
                        </div>
                    </div>
                </form>
                <ul class="nav navbar-nav">


                    <li class=""><a href="#"><i class="fa fa-envelope"></i> <span class="badge">5</span></a> </li>
                    <li class=""><a href="#"><i class="fa fa-bell"></i> <span class="badge">9</span></a> </li>
                    <li class="">
                        <a href="adminprofil.php" class="user-profile"> <span class=""><img class="img-responsive"
                                    src="https://lh3.googleusercontent.com/-HxSAl6WJSI0/WM-dbkQ1ONI/AAAAAAAADuY/RsjaXC3tg4oBozCUYyLr12ZjZ1_Cl91mACJoC/w424-h319-p-rw/sumit.png"></span>
                        </a>
                    </li>
                    <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="#">Profilim
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu">

                            <li> <a href="adminprofil.php"><i class="fa fa-cog"></i> Ayarlar</a> </li>
                            <li> <a href="musteriarayuz.php"><i class="fa fa-power-off"></i> Çıkış</a> </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    
    <!--    top nav end===========-->
    <div class="wrapper" id="wrapper">
        <div class="left-container" id="left-container">
            <!-- begin SIDE NAV USER PANEL -->
            <div class="left-sidebar" id="show-nav">
                <ul id="side" class="side-nav">

                    <li class="panel">
                        <a id="panel5" href="urunlistele.php" data-toggle="collapse" data-target="#edit"> <i
                                class="fa fa-list"></i> Ürün Listele
                            <i class="fa fa fa-chevron-left pull-right" id="arow5"></i>
                        </a>
                        <ul class="collapse nav" id="edit">
                            <li> <a href="#"><i class="fa fa-angle-double-right"></i> Flot Charts</a> </li>
                            <li> <a href="#"><i class="fa fa-angle-double-right"></i> Morris.js</a> </li>
                        </ul>
                    </li>

                    <li class="panel">
                        <a id="panel5" href="yeniurunekle.php" data-toggle="collapse" data-target="#edit"> <i
                                class="fa fa-plus"></i> Ürün Ekle
                            <i class="fa fa fa-chevron-left pull-right" id="arow5"></i>
                        </a>
                        <ul class="collapse nav" id="edit">
                            <li> <a href="#"><i class="fa fa-angle-double-right"></i> Flot Charts</a> </li>
                            <li> <a href="#"><i class="fa fa-angle-double-right"></i> Morris.js</a> </li>
                        </ul>
                    </li>


                </ul>
            </div>
            <!-- END SIDE NAV USER PANEL -->
        </div>
        <div class="right-container" id="right-container">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="breadcrumb">
                            <li><i class="fa fa-home"></i><a href="adminpaneli.php"> Anasayfa</a></li>





                            <form class="form-horizontal">
                                <fieldset>

                                    <!-- Form Name -->

                                    <br>

                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="product_name">Ürün Adı</label>
                                        <div class="col-md-4">
                                            <input id="product_name" name="product_name" placeholder=""
                                                class="form-control input-md" required="" type="text">

                                        </div>
                                    </div>





                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="adedi">Adedi</label>
                                        <div class="col-md-4">
                                            <input id="adedi" name="adedi" placeholder="0" class="form-control input-md"
                                                required="" type="number">

                                        </div>
                                    </div>

                                    <!-- Text input-->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="fiyati">Fiyat</label>
                                        <div class="col-md-4">
                                            <input id="fiyati" name="fiyati" placeholder="0"
                                                class="form-control input-md" required="" type="number">

                                        </div>
                                    </div>

                                    <!-- Select Basic -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="platform">Platform</label>
                                        <div class="col-md-4">
                                            <select id="platform" name="platform" class="form-control">
                                            </select>
                                        </div>
                                    </div>
                                    <!-- Select Basic -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="tur">Tür</label>
                                        <div class="col-md-4">
                                            <select id="tur" name="tur" class="form-control">
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Textarea -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="product_description">Ürün
                                            Açıklaması</label>
                                        <div class="col-md-4">
                                            <textarea class="form-control" id="product_description"
                                                name="product_description"></textarea>
                                        </div>
                                    </div>


                                    <!-- File Button -->
                                    <div class="form-group">
                                        <label class="col-md-4 control-label" for="filebutton">Resim</label>
                                        <div class="col-md-4">
                                            <input id="filebutton" name="filebutton" class="input-file" type="file">
                                        </div>
                                    </div>


                                    <!-- Button -->
                                    <div class="form-group">

                                        <button id="singlebutton" name="singlebutton"
                                            class="btn btn-success">Ekle</button>
                                        <button id="singlebutton" onClick="location.href='adminpaneli.php'" name="singlebutton"
                                            class="btn btn-danger">İptal</button>

                                        <div class="col-md-4">

                                        </div>
                                    </div>

                                </fieldset>
                            </form>









                        </ul>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="main-header">

                        </div>
                    </div>
                </div>




            </div>
        </div>
    </div>
    <script src="js/jquery-3.1.1.js"></script>
    <script src="js/bootstrap.js"></script>

    <script type="text/javascript">
    $(document).ready(function() {
        $("#panel1").click(function() {
            $("#arow1").toggleClass("fa-chevron-left");
            $("#arow1").toggleClass("fa-chevron-down");
        });

        $("#panel2").click(function() {
            $("#arow2").toggleClass("fa-chevron-left");
            $("#arow2").toggleClass("fa-chevron-down");
        });

        $("#panel3").click(function() {
            $("#arow3").toggleClass("fa-chevron-left");
            $("#arow3").toggleClass("fa-chevron-down");
        });

        $("#panel4").click(function() {
            $("#arow4").toggleClass("fa-chevron-left");
            $("#arow4").toggleClass("fa-chevron-down");
        });

        $("#panel5").click(function() {
            $("#arow5").toggleClass("fa-chevron-left");
            $("#arow5").toggleClass("fa-chevron-down");
        });

        $("#panel6").click(function() {
            $("#arow6").toggleClass("fa-chevron-left");
            $("#arow6").toggleClass("fa-chevron-down");
        });

        $("#panel7").click(function() {
            $("#arow7").toggleClass("fa-chevron-left");
            $("#arow7").toggleClass("fa-chevron-down");
        });

        $("#panel8").click(function() {
            $("#arow8").toggleClass("fa-chevron-left");
            $("#arow8").toggleClass("fa-chevron-down");
        });

        $("#panel9").click(function() {
            $("#arow9").toggleClass("fa-chevron-left");
            $("#arow9").toggleClass("fa-chevron-down");
        });

        $("#panel10").click(function() {
            $("#arow10").toggleClass("fa-chevron-left");
            $("#arow10").toggleClass("fa-chevron-down");
        });

        $("#panel11").click(function() {
            $("#arow11").toggleClass("fa-chevron-left");
            $("#arow11").toggleClass("fa-chevron-down");
        });

        $("#menu-icon").click(function() {
            $("#chang-menu-icon").toggleClass("fa-bars");
            $("#chang-menu-icon").toggleClass("fa-times");
            $("#show-nav").toggleClass("hide-sidebar");
            $("#show-nav").toggleClass("left-sidebar");

            $("#left-container").toggleClass("less-width");
            $("#right-container").toggleClass("full-width");
        });



    });
    </script>


</body>

</html>