<?php require("ustbilgi.php"); ?>
 <main role="main"  >

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron" align="center" style="background: #e6e6e6">
        <div class="container">
          <h2 class="display-3"><img src="resimler/jumbutron.png"  width="10%" height="70" >CÜMLENİN KONUSU</h2>
          
          
        </div>
      </div> </main>
<div class="container">
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-1"> </div>
    
     <div class="row">
     <div class="col-md-10">     
      <?php 

        require_once("baglanti.php");
       
        $sql_cumlesi= "SELECT * FROM konular WHERE konu_id = '7'";

        $sql_cevabi = mysqli_query($baglanti, $sql_cumlesi);

        $satir = mysqli_fetch_assoc($sql_cevabi);

      ?>

  
          <p><?php echo $satir["konu_tanimi"]; ?></p>
          <p><?php echo nl2br($satir["konu_ornekleri"]); ?></p>

 <div class="row">

             <div class="col-md-12">
            <!--<h2>Neden-sonuç ( sebep - sonuç) cümleleri</h2>-->


        <div class="alert alert-warning" align="center">
          <h2> <strong> Hadi örnek bir video izleyelim...</strong></h2>
        </div>    
            
            </div>
            </div>



          <video controls="controls" src="konuveanafikir.mp4" style="width: 50%" style="height: 50%" style="align-content: center;"></video>



        </div>
      </div>

  </div>
</div>


