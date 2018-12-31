<?php require("ustbilgi.php"); ?>

<main role="main"  >
  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron" align="center" style="background: #e6e6e6">
    <div class="container">
      <h2 class="display-3"><img src="resimler/jumbutron.png"  width="10%" height="70" >CÜMLEDE ANLAM İLİŞKİLERİ</h2>
    </div>
  </div> 
</main>


  <div class="container">
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-2"> </div>
      <div class="col-md-10">
          
        <h1><?php echo      $arrKonular[4]["konu_adi"]; ?></h1>
        <p><?php echo nl2br($arrKonular[4]["konu_tanimi"]); ?></p>
        <p><?php echo nl2br($arrKonular[4]["konu_ornekleri"]); ?></p>

        <h1><?php echo      $arrKonular[5]["konu_adi"]; ?></h1>
        <p><?php echo nl2br($arrKonular[5]["konu_tanimi"]); ?></p>
        <p><?php echo nl2br($arrKonular[5]["konu_ornekleri"]); ?></p>
        
        </div>
    </div>
  </div>




    <div class="container">
      <div class="row">
        
        <div class="col-md-4">
          <img src="resimler/yuz1.jpg" class="rounded-circle img-thumbnail" width="100%" height="300"   > </a>
          <br>&nbsp;
          <p>Konu Anlatımı </p>
        </div>

        <div class="col-md-4">
          <img src="resimler/yuzkisi.jpg" class="rounded-circle img-thumbnail" width="100%" height="300"   > </a>
          <br>&nbsp;
          <p >Konu Anlatımı </p>
        </div>

        <div class="col-md-4">
          <img src="resimler/yuzme.jpg" class="rounded-circle img-thumbnail" width="100%" height="300"   > </a>
          <br>&nbsp;
          <p >Konu Anlatımı </p>
        </div>
      </div>
    </div>




  <div class="container">
    <div class="row">
      <div class="col-md-2"> </div>
      <div class="col-md-10">
        <h1><?php echo      $arrKonular[6]["konu_adi"]; ?></h1>
        <p><?php echo nl2br($arrKonular[6]["konu_tanimi"]); ?></p>
        <p><?php echo nl2br($arrKonular[6]["konu_ornekleri"]); ?></p>
          <br><br><br>
      </div>
  </div>


  <div class="container">
    <div class="row">
      
      <div class="col-md-4">
        <img src="resimler/genc.jpg" class="rounded-circle img-thumbnail" width="100%" height="300"> </a>
        <br>&nbsp;
        <p>Konu Anlatımı </p>
      </div>

      <div class="col-md-4">
        <img src="resimler/hizli.jpg" class="rounded-circle img-thumbnail" width="100%" height="500%"> </a>
        <br>&nbsp;
        <p >Konu Anlatımı </p>
      </div>
    
      <div class="col-md-4">
        <img src="resimler/temiz.jpg" class="rounded-circle img-thumbnail" width="100%" height="300"> </a>
        <br>&nbsp;
        <p >Konu Anlatımı </p>
      </div>
    
    </div>
  </div>


<?php require("altbilgi.php"); ?>


