<?php require("ustbilgi.php"); ?>
 
<div class="container">
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-2"></div>
    <div class="col-md-8">
     
      <?php 

        require_once("baglanti.php");
        $KONUID = $_GET["id"];
        $sql_cumlesi= "SELECT * FROM konular WHERE konu_id = $KONUID";

        $sql_cevabi = mysqli_query($baglanti, $sql_cumlesi);

        $satir = mysqli_fetch_assoc($sql_cevabi);

      ?>

          <h1 class="display-3"><?php echo $satir["konu_adi"]; ?></h1>
          <p><?php echo $satir["konu_tanimi"]; ?></p>
          <p><?php echo nl2br($satir["konu_ornekleri"]); ?></p>




          <video controls="controls" src="EBA.mp4" style="width: 50%" style="height: 50%" style="align-content: center;">
    Your browser does not support the HTML5 Video element.

          <p><a class="btn btn-primary btn-lg" href="#" role="button">Diğer Örnekler...</a></p>



        </div>
      </div>

  </div>
</div>


