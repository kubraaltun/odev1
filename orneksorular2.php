<?php require("ustbilgi.php"); ?>

<main role="main"  >
  <div class="jumbotron"  align="center" style="background: #e6e6e6" >
    <div class="container"  >
      <h3 class="display-3"><img src="resimler/jumbutron.png"  width="10%" height="70" >Hadi birazcık öğrendiğimiz konularda egzersiz yapalım!!!</h3>
      <p>KONULAR: cümle konusu, cümlenin ana fikri, cümleden cıkarılaçak yargı ve cıkarılmayacak yargı ile ilgili sorular</p>
      
      
    </div>
  </div>
</main>
<div class="container">
  <div class="row">
    <div class="col-md-1"> </div>
    <div class="col-md-10">
      <div class="alert alert-warning">
        <h4>Aşağı soruları dikkatli bir şekilde okuyun ve paragrafların konusunu işaretleyin.</h4>
      </div>
    </div>
  </div>
</div>
<div class="container" id='SONUC_OLDU' style='display:none;'>
  <div class="row">
    <div class="col-md-4"> </div>
    <div class="col-md-4">
      <div class="alert alert-success">
        <center>
        <h1>TEBRİKLER DOĞRU !!!</h1>
        </center>
      </div>
    </div>
  </div>
</div>
<div class="container" id='SONUC_OLMADI' style='display:none;'>
  <div class="row">
    <div class="col-md-4"> </div>
    <div class="col-md-4">
      <div class="alert alert-danger">
        <center>
        <h1>OLMADI TEKRAR DENE !!!</h1>
        </center>
      </div>
    </div>
  </div>
</div>
<div class="container">
  <div class="row">
    <div class="col-md-1"> </div>
    <div class="col-md-10">
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
      $arrSorular = file("sorular2.txt");
      //echo "<ul>";
        foreach ($arrSorular as $key => $value) {
        list($c1, $c2, $c3, $Dogru, $Cumle)  = explode("|", $value);
        list($CumleBasi, $CumleSonu) = explode("{}", $Cumle);
        $INPUTUM = SecimleriHazirla($c1, $c2, $c3, $Dogru, $key);
        
        echo "\n<div id='$key'>$CumleBasi $INPUTUM $CumleSonu<br>&nbsp;</div><br><br>\n";
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
      <!--<h2>Neden-sonuç ( sebep - sonuç) cümleleri</h2>-->
      
      <p align='left'><a class=" btn-lg btn btn-warning" href="orneksorular.php" role="button">GERİ  &raquo;</a></p>
      
      
      
    </div></div></div>

<?php require("altbilgi.php"); ?>
