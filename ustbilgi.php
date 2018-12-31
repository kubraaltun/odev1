<?php
    require_once("baglanti.php");
    $arrKonular = array();
    $sql_cumlesi= "SELECT * FROM konular";
    $sql_cevabi = mysqli_query($baglanti, $sql_cumlesi);
    $c=0;
    while( $satir = mysqli_fetch_assoc($sql_cevabi) ) {
        $c++;
        $arrKonular[ $c ] = $satir;
    }
    // echo "<pre>"; print_r($arrKonular);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>4. Sınıf Cümlede Anlam</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
    .navbar{
        margin-top: 0px;
    }
    
    .carousel{
        background: write;
        margin-top: 10px;
    }
    .carousel .item{
        min-height: 300px;
        min-width: 300px; /* Prevent carousel from being distorted if for some reason image doesn't load */
    }
    .carousel .item img{
        margin: 0 auto; /* resimlerin yüksekliği */
        min-height: 300px;
        min-width: 300px;
    }
    .bs-example{
        margin: 50px;
    }
    </style>
</head>

<body style="background-color: #f2f2f2">
    <div class="container-flued">
        <nav class="navbar navbar-inverse" >
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header" >
                
                <a href="index.php" class="navbar-brand"><img src="resimler/logo.jpg"  height="40" style="margin-top:-10px" ></a>
            </div>
            <!-- Collection of nav links, forms, and other content for toggling -->
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="index.php">Ana Sayfa</a></li>
                    
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">Cümlede Anlam <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="nedensonuc.php">Neden-sonuç (Sebep - Sonuç) Cümleleri</a></li>
                            <li><a href="amacsonuc.php">Amaç-Sonuç Cümleleri</a></li>
                            <li><a href="karsilastirma.php">Karşılaştırma Cümleleri</a></li>
                            <li><a href="cumleanlam.php">Cümlede Anlam İlişkisi</a></li>
                            <li class="divider"></li>
                            <li><a href="cumlekonusu.php">Cümlenin Konusu</a></li>
                            <li><a href="anafikir.php">Cümlenin Ana Fikri</a></li>
                            <li><a href="cikarilacakyargi.php">Cümleden Çıkarılacak yargı </a></li>
                            <li><a href="cikarilmayacakyargi.php">Cümleden çıkarılmayacak Yargı</a></li>
                            <li><a href="orneksorular.php">Örnek Sorular</a></li>
                            <li><a href="degerlendirme.php">Değerlendirme</a></li>
                        </ul>
                    </li>
                    <li><a href="hakkimizda.php">Hakkımızda</a></li>
                    <li><a href="iletisim.php">İletişim</a></li>
                    <li><a href="yardim.php">Yardım</a></li>
                </ul>
                
            </div>
        </nav>
    </div>