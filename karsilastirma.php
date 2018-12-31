<?php require("ustbilgi.php"); ?>

<main role="main"  >
  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron" align="center" style="background: #e6e6e6">
    <div class="container">
      <h2 class="display-3"><img src="resimler/jumbutron.png"  width="10%" height="70" >KARŞILAŞTIRMA CÜMLELERİ</h2>
    </div>
  </div>
</main>

  <div class="container">
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-1"> </div>
      <div class="col-md-11">
        
        <h1><?php echo      $arrKonular[3]["konu_adi"]; ?></h1>
        <p><?php echo nl2br($arrKonular[3]["konu_tanimi"]); ?></p>
        <p><?php echo nl2br($arrKonular[3]["konu_ornekleri"]); ?></p>

        <br><br>
      </div>
    </div>
          
    <div class="row">
        <div class="col-md-4">
          <img src="resimler/aslan.jpg" claaass="rounded-circle img-thumbnail" width="100%" height="300"> </a>
          <p>Aslan fareden <b>daha</b> güçlüdür.</p>
          <br>&nbsp;            
        </div>
        <div class="col-md-4">
          <img src="resimler/uzun.jpg" clasaas="rounded-circle img-thumbnail" width="100%" height="300"> </a>
          <p>Ceren'in Eren <b>kadar </b> boyu vardır.</p>
          <br>&nbsp;
        </div>
        <div class="col-md-4">
          <img src="resimler/elbise.jpg" claaass="rounded-circle img-thumbnail" width="100%" height="300"> </a>
          <p>Bu elbise size <b>daha</b> çok yakıştı.</p>
          <br>&nbsp;
        </div>
    </div>
  </div>


<?php require("altbilgi.php"); ?>


