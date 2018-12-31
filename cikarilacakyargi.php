<?php require("ustbilgi.php"); ?>
<main role="main"  >
  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron" align="center" style="background: #e6e6e6">
    <div class="container">
      <h2 class="display-3"><img src="resimler/jumbutron.png"  width="10%" height="70" >CÜMLEDEN ÇIKARILACAK YARGI</h2>
      
      
    </div>
  </div>
</main>

  <div class="container">
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-1"> </div>
      <div class="col-md-10">
        
        <h1><?php echo      $arrKonular[9]["konu_adi"]; ?></h1>
        <p><?php echo nl2br($arrKonular[9]["konu_tanimi"]); ?></p>
        <p><?php echo nl2br($arrKonular[9]["konu_ornekleri"]); ?></p>
        
      </div>
      <div class="col-md-1"> </div>
    </div>
  </div>

<?php require("altbilgi.php"); ?>

