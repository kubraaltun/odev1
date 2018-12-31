<?php require("ustbilgi.php"); ?>


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
                  $SORULAR1 = "";
                  foreach ($arrSorular as $key => $value) {
                  list($c1, $c2, $c3, $Dogru, $Cumle)  = explode("|", $value);
                  list($CumleBasi, $CumleSonu) = explode("{}", $Cumle);
                  $INPUTUM   = SecimleriHazirla($c1, $c2, $c3, $Dogru, $key);    
                  $SORULAR1 .= "\n<p id='$key'>$CumleBasi $INPUTUM $CumleSonu<br>&nbsp;</p>\n";
                  }
                //echo "</ul>";
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


<main role="main"  >
  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron" align="center" style="background: #e6e6e6">
    <div class="container">
      <h2 class="display-3"><img src="resimler/jumbutron.png"  width="10%" height="70" >NEDEN (SEBEP)-SONUÇ CÜMLELERİ</h2>
    </div>
  </div>
</main>


<div class="container" >
    <div class="row">
      <div class="col-md-1"> </div>
      <div class="col-md-10">
        <h1><?php echo      $arrKonular[1]["konu_adi"]; ?></h1>
        <p><?php echo nl2br($arrKonular[1]["konu_tanimi"]); ?></p>
        <p><?php echo nl2br($arrKonular[1]["konu_ornekleri"]); ?></p>

        <br>&nbsp;
      </div>
      <div class="col-md-1"> </div>
    </div>



    <div class="row">            
      <div class="col-md-4">
        <img src="resimler/yagmur1.jpg" class="rounded-circle img-thumbnail" width="100%" height="300"   > </a>
        <p><br><b>Yağmurda ıslandığı için</b> hasta oldu.</p>
        <?php echo $SORULAR1; ?>
        <br>&nbsp;            
      </div>
      <div class="col-md-4">
          <img src="resimler/odev.jpg" class="rounded-circle img-thumbnail" width="100%" height="300"   > </a>
          <p><br><b>Ödevini yapmadığı için</b> zayıf aldı</p>
          <br>&nbsp;          
      </div>
      <div class="col-md-4">
        <img src="resimler/neden1.jpg" class="rounded-circle img-thumbnail" width="100%" height="300"   > </a>
        <p><br><b>Elektrikler kesilince</b> ödev yapamadı</p>
        <br>&nbsp;        
      </div>
    </div>


  <div class="row">            

      <div class="col-md-1"></div>
      <div class="col-md-10">
        <h1><?php echo      $arrKonular[11]["konu_adi"]; ?></h1>
        <p><?php echo nl2br($arrKonular[11]["konu_tanimi"]); ?></p>
        <p><?php echo nl2br($arrKonular[11]["konu_ornekleri"]); ?></p>
      </div>
      <div class="col-md-1"></div>
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
      <div class="col-md-2"></div>
      <div class="col-md-8">
        <video controls="controls" src="videolar/EBA-1.mp4" style="width: 100%"></video>
      </div>
      <div class="col-md-2"></div>
  </div>

</div>

<?php require("altbilgi.php"); ?>
