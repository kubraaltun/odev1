<?php require("ustbilgi.php"); ?>
 <main role="main"  >

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron" align="center">
        <div class="container">
          <h2 class="display-3">AMAÇ-SONUÇ CÜMLELERİ</h2>
          
          
        </div>
      </div> </main>
<div class="container">
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-1"> </div>
    <div class="col-md-10">
     
      <?php 

        require_once("baglanti.php");
       
        $sql_cumlesi= "SELECT * FROM konular WHERE konu_id = '2'";

        $sql_cevabi = mysqli_query($baglanti, $sql_cumlesi);

        $satir = mysqli_fetch_assoc($sql_cevabi);

      ?>

   
          <p><?php echo $satir["konu_tanimi"]; ?></p>
          <p><?php echo nl2br($satir["konu_ornekleri"]); ?></p>

<?php 

        require_once("baglanti.php");
       
        $sql_cumlesi= "SELECT * FROM konular WHERE konu_id = '11'";

        $sql_cevabi = mysqli_query($baglanti, $sql_cumlesi);

        $satir = mysqli_fetch_assoc($sql_cevabi);

      ?>

  <h3><p><?php echo $satir["konu_adi"]; ?></p></h3>
          <p><?php echo $satir["konu_tanimi"]; ?></p>
          <p><?php echo nl2br($satir["konu_ornekleri"]); ?></p>



          <video controls="controls" src="EBA.mp4" style="width: 50%" style="height: 50%" style="align-content: center;">
    Your browser does not support the HTML5 Video element.

          <p><a class="btn btn-primary btn-lg" href="#" role="button">Diğer Örnekler...</a></p>



        </div>
      </div>

  </div>
</div>


