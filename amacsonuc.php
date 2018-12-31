<?php require("ustbilgi.php"); ?>

<main role="main"  >
  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron" align="center" style="background: #e6e6e6">
    <div class="container">
      <h2 class="display-3"><img src="resimler/jumbutron.png"  width="10%" height="70" >AMAÇ-SONUÇ CÜMLELERİ</h2>
      
      
    </div>
  </div> </main>
  <div class="container" >
    
    <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-1"> </div>
      <div class="col-md-10">
        
        <h1><?php echo       $arrKonular[2]["konu_adi"]; ?></h1>
        <p><?php echo nl2br($arrKonular[2]["konu_tanimi"]); ?></p>
        <p><?php echo nl2br($arrKonular[2]["konu_ornekleri"]); ?></p>
        
        <br>&nbsp;
        <div class="container">
          <!-- Example row of columns -->
          <div class="row">
            
            <div class="col-md-3">
              <!--<h2>Neden-sonuç ( sebep - sonuç) cümleleri</h2>-->
            <img src="resimler/para.jpg" class="rounded-circle img-thumbnail" width="100%" height="300"   > </a>
            <p><br><b>Parayı göndermek </b> üzere bankaya gitti.</p>
            <?php
            function SecimleriHazirla($c1, $c2, $c3, $Dogru, $Key) {
            return "<select name='cevap' onchange='KontrolEt(this.value, $Dogru, $Key)'>
              <option value='0'>** SEÇ **</option>
              <option value='1'>$c1</option>
              <option value='2'>$c2</option>
              <option value='3'>$c3</option>
            </select>
            ";
            } // function ara($Aranan)
            $arrSorular = file("nedensoru.txt");
            echo "<ul>";
              foreach ($arrSorular as $key => $value) {
              list($c1, $c2, $c3, $Dogru, $Cumle)  = explode("|", $value);
              list($CumleBasi, $CumleSonu) = explode("{}", $Cumle);
              $INPUTUM = SecimleriHazirla($c1, $c2, $c3, $Dogru, $key);
              
              echo "\n<li id='$key'>$CumleBasi $INPUTUM $CumleSonu<br>&nbsp;</li>\n";
              }
            echo "</ul>";
            ?>
            <script>
            function KontrolEt(Cevap, Dogru, Key) {
            if(Cevap == 0) {
            document.getElementById(Key).style.color = "#000000"
            return;
            };
            if(Cevap == Dogru) {
            document.getElementById(Key).style.color = "#07C707"
            $('#SONUC_OLDU').toggle('slow').delay(2000).toggle('slow');
            } else {
            document.getElementById(Key).style.color = "#FF0000"
            $('#SONUC_OLMADI').toggle('slow').delay(2000).toggle('slow');
            }
            }
            </script>
            <br>&nbsp;
          </div>
        <div class="col-md-3">
          <img src="resimler/calisma.jpg" class="rounded-circle img-thumbnail" width="100%" height="300"   > </a>
          <p><br><b>Para kazanmak amacıyla </b>İstanbul’a gitti.</p>
          <br>&nbsp;          
        </div>
        <div class="col-md-3">
          <img src="resimler/polis.jpg" class="rounded-circle img-thumbnail" width="100%" height="300"   > </a>
          <p><br><b> İfadesi alınmak üzere </b> karakola götürüldü.</p>
          <br>&nbsp;
        </div>
    </div></div>
    <br>
    
    <h1><?php echo      $arrKonular[11]["konu_adi"]; ?></h1>
    <p><?php echo nl2br($arrKonular[11]["konu_tanimi"]); ?></p>
    <p><?php echo nl2br($arrKonular[11]["konu_ornekleri"]); ?></p>

    <div class="bs-example">
      <div class="panel-group" id="accordion">
        <div class="panel panel-info">
          <div class="panel-heading">
            <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Örnek Bir Soru Çözelim Mi?</a>
            </h4>
          </div>
          <div id="collapseOne" class="panel-collapse collapse ">
            <div class="panel-body">
            <p><?php echo nl2br($arrKonular[2]["konu_ornekleri"]); ?></p>
            </div>
          </div>
        </div>
        <br>&nbsp;
        <div class="row">
          <div class="col-md-12">
            <!--<h2>Neden-sonuç ( sebep - sonuç) cümleleri</h2>-->
            <div class="alert alert-warning" align="center">
              <h2> <strong> Hadi örnek bir video izleyelim...</strong></h2>
            </div>            
          </div>
        </div>
        <div class="col-md-4"></div>
        <p align="center">
          <video controls="controls" src="videolar/EBA-1.mp4" style="width: 100%" ></video>
        </p>
       <div class="col-md-4"></div>
        <br>&nbsp;        
      </div>
    </div>
  </div>
</div>

<?php require("altbilgi.php"); ?>
