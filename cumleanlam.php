<?php require("ustbilgi.php"); ?>
 <main role="main"  >

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron" align="center" style="background: #e6e6e6">
        <div class="container">
          <h2 class="display-3">CÜMLEDE ANLAM İLİŞKİLERİ</h2>
          
          
        </div>
      </div> </main>
<div class="container">
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-1"> </div>
    <div class="col-md-10">
     
      <?php 

        require_once("baglanti.php");
       
        $sql_cumlesi= "SELECT * FROM konular WHERE konu_id = '4'";

        $sql_cevabi = mysqli_query($baglanti, $sql_cumlesi);

        $satir = mysqli_fetch_assoc($sql_cevabi);

      ?>

   <h2 class="display-3"><p><?php echo $satir["konu_adi"]; ?></p></h2>
          <p><?php echo $satir["konu_tanimi"]; ?></p>

 <p><?php echo nl2br($satir["konu_ornekleri"]); ?></p>

       
         




         

           <?php 

        require_once("baglanti.php");
       
        $sql_cumlesi= "SELECT * FROM konular WHERE konu_id = '5'";

        $sql_cevabi = mysqli_query($baglanti, $sql_cumlesi);

        $satir = mysqli_fetch_assoc($sql_cevabi);

      ?>

  <h2 class="display-3"><p><?php echo $satir["konu_adi"]; ?></p></h2>
          <p><?php echo $satir["konu_tanimi"]; ?></p>
          <p><?php echo nl2br($satir["konu_ornekleri"]); ?></p>


 <div class="row">
          

          <div class="col-md-3">

            <!--<h2>Neden-sonuç ( sebep - sonuç) cümleleri</h2>-->
            <img src="resimler/yuz1.jpg" class="rounded-circle img-thumbnail" width="100%" height="300"   > </a>
            <br>&nbsp;
            <p>Konu Anlatımı </p>
            </div>


<div class="col-md-3">

            <!--<h2>Neden-sonuç ( sebep - sonuç) cümleleri</h2>-->
            <img src="resimler/yuzkisi.jpg" class="rounded-circle img-thumbnail" width="100%" height="300"   > </a>
            <br>&nbsp;
            <p >Konu Anlatımı </p>
            </div>

<div class="col-md-3">

            <!--<h2>Neden-sonuç ( sebep - sonuç) cümleleri</h2>-->
            <img src="resimler/yuzme.jpg" class="rounded-circle img-thumbnail" width="100%" height="300"   > </a>
            <br>&nbsp;
            <p >Konu Anlatımı </p>
            </div>

      </div>

<?php 

        require_once("baglanti.php");
       
        $sql_cumlesi= "SELECT * FROM konular WHERE konu_id = '6'";

        $sql_cevabi = mysqli_query($baglanti, $sql_cumlesi);

        $satir = mysqli_fetch_assoc($sql_cevabi);

      ?>
 <br>

&nbsp;
  <h2 class="display-3"><p><?php echo $satir["konu_adi"]; ?></p></h2>
          <p><?php echo $satir["konu_tanimi"]; ?></p>
          <p><?php echo nl2br($satir["konu_ornekleri"]); ?></p>

<div class="container">

 <div class="row">
          

          <div class="col-md-3">

            <!--<h2>Neden-sonuç ( sebep - sonuç) cümleleri</h2>-->
            <img src="resimler/genc.jpg" class="rounded-circle img-thumbnail" width="100%" height="300"   > </a>
            <br>&nbsp;
            <p>Konu Anlatımı </p>
            </div>


<div class="col-md-3">

            <!--<h2>Neden-sonuç ( sebep - sonuç) cümleleri</h2>-->
            <img src="resimler/hizli.jpg" class="rounded-circle img-thumbnail" width="100%" height="500"   > </a>
            <br>&nbsp;
            <p >Konu Anlatımı </p>
            </div>

<div class="col-md-3">

            <!--<h2>Neden-sonuç ( sebep - sonuç) cümleleri</h2>-->
            <img src="resimler/temiz.jpg" class="rounded-circle img-thumbnail" width="100%" height="300"   > </a>
            <br>&nbsp;
            <p >Konu Anlatımı </p>
            </div>

      </div>
</div>

        </div>
      </div>

  </div>
</div>


