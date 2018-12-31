<?php require("ustbilgi.php"); ?>
<main role="main"  >
  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron" align="center" style="background: #e6e6e6">
    <div class="container">
      <h2 class="display-3"><img src="resimler/jumbutron.png"  width="10%" height="70" >CÜMLENİN ANA FİKRİ</h2>
    </div>
  </div>
</main>


  <div class="container">
    <div class="row">
      <div class="col-md-1"> </div>
      <div class="col-md-10">
        
        <h1><?php echo      $arrKonular[8]["konu_adi"]; ?></h1>
        <p><?php echo nl2br($arrKonular[8]["konu_tanimi"]); ?></p>
        <p><?php echo nl2br($arrKonular[8]["konu_ornekleri"]); ?></p>
      
      </div>
      <div class="col-md-1"> </div>
    </div>


        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-8">
            <div class="alert alert-warning" align="center">
              <h2> <strong> Hadi örnek bir video izleyelim...</strong></h2>
            </div>
          </div>
          <div class="col-md-2"></div>
        </div>
        <div class="row">
          <div class="col-md-3"> </div>
          <div class="col-md-6">
            <video controls="controls" src="videolar/konuveanafikir.mp4" width="100%"></video>
          </div>
        </div>
      </div>

<?php require("altbilgi.php"); ?>
