 
<?php require("ustbilgi.php"); ?>

<main role="main"  >

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron"  align="center" style="background: #e6e6e6">
        <div class="container"  >
          <h3 class="display-3"><img src="resimler/jumbutron.png"  width="10%" height="70" >Hadi birazcık öğrendiğimiz konularda egzersiz yapalım!!!</h3>
          <p>KONULAR: Neden- Sonuç, Amaç-Sonuç, karşılaştırma Cümleleri ve Cümle Anlam İlişkileri ile ilgili sorular</p>
          
          
        </div>
      </div>

</main>


<div class="container">
  <!-- Example row of columns -->
  <div class="row">
    <div class="col-md-1"> </div>
    <div class="col-md-10">
        <div class="alert alert-warning">
          <h4>Aşağı soruları neden-sonuç cümlesi ise neden, amaç-sonuç cümlesi ise amac, karşılaştırma cümlesi ise,karşelaştırma olarak işaretleyin.</h4>
        </div>  
    </div>
  </div>
</div>      



<div class="container" id='SONUC_OLDU' style='display:none;'>
  <!-- Example row of columns -->
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
  <!-- Example row of columns -->
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


    $arrSorular = file("sorular.txt");

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



            <!--<h2>Neden-sonuç ( sebep - sonuç) cümleleri</h2>-->
           <p align='right'> 
            <a class=" btn-lg btn btn-warning" href="orneksorular2.php" role="button">cümle yorumlama örnek sorular &raquo;</a></p>
            
        



</div></div></div>
