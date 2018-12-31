<?php require("ustbilgi.php"); ?>

<script type="text/javascript">
function cevapla()
{
	var soruSayisi=10;
	var gelenCevap = new Array();
	var dogruCevap = new Array("B","C","D","C","D","B","D","C","A","D");
	var dogru=0;
	var yanlis=0;
	var cevap=0;
	var rapor="";
	for(i=1; i <= soruSayisi; i++){
		var secenekler=document.getElementsByName("s"+i);
		for(j=0; j < secenekler.length; j++){
			if(secenekler[j].checked){
			if(secenekler[j].value==dogruCevap[i-1]){
				cevap=1;
			}else{
		cevap=0;
			if(cevap){
				rapor +=i+". Soru için cevabınız: "+secenekler[j].value+", Doğru <br />";
			}else{
				rapor +=i+". Soru için cevabınız: "+secenekler[j].value+", YANLIŞ, Doğru Cevap: "+dogruCevap[i-1]+"<br />";
			}
			gelenCevap.push(secenekler[j].value);
			}
		}
	}
	for(k=0; k < soruSayisi; k++){
		if(gelenCevap[k]==dogruCevap[k]){
			dogru++;
		}else{
			yanlis++;
		}
	}
	rapor +="Sonuç: "+dogru+" Doğru, "+yanlis+" Yanlış"+"<br />";
	document.getElementById('rapor').innerHTML=rapor;
}
</script>


<main role="main"  >
	<!-- Main jumbotron for a primary marketing message or call to action -->
	<div class="jumbotron" style="background: #e6e6e6" >
		<div class="container">
			<h2 class="display-3"><img src="resimler/degerlendirme.jpg"  width="10%" height="100" >Değerlendirme Bölümümüze Hoşgeldiniz!!!</h2>
		</div>
	</div>
</main>


</div>  </div>
<br> </br>
<div class="container">
<div id="rapor"></div>
<form name="formTest">
	<br><br><fieldset class="radiogroup">
		<legend>Soru 1: <strong>"Verilen iki yargıdan biri diğerinin sebebi ise bu tür cümlelere ................. denir. "
			</strong><p>Yukarı verilen ifadede noktalı yere hangisi gelmelidir ? </p> </legend>
			<ul class="radio" style="list-style:none">
				<li> <input type="radio" name="s1" value="A" /><label>Karşılaştırma</label>  </li>
				<li> <input type="radio" name="s1" value="B" /><label>sebep sonuç</label></li>
				<li> <input type="radio" name="s1" value="C" /><label>öznel nesnel</label></li>
				<li> <input type="radio" name="s1" value="D" /><label>zamirler</label></li>
			</ul>
		</fieldset>
		<br><br><fieldset class="radiogroup">
			<legend>Soru 2: Aşağıdakilerden hangisinde <strong>sebep - sonuç</strong> anlamı yoktur ? </legend>
			<ul class="radio" style="list-style:none">
				<li> <input type="radio" name="s2" value="A" /><label>Başı ağrıdığı için erkenden yattı.</label></li>
				<li> <input type="radio" name="s2" value="B" /><label>Çok bilgisayara baktığından dolayı gözleri bozulmuş.</label></li>
				<li> <input type="radio" name="s2" value="C" /><label>Bu yemek çok lezzetli olmuş.</label></li>
				<li> <input type="radio" name="s2" value="D" /><label>Ödevlerini yapmadığı için babası ona kızdı.</label></li>
			</ul>
		</fieldset>
		<br><br><fieldset class="radiogroup">
			<legend>Soru 3:  <strong>"Birbirleriyle ilişkili iki varlık, iki kavram ya da herhangi iki şeyi, ortak yada farklı olan yönleriyle anlatan cümlelere ............. denir. "</strong><p>Yukarıda verilen metinde noktalı yere hangisi gelmelidir ?</p></legend>
			<ul class="radio" style="list-style:none">
				<li> <input type="radio" name="s3" value="A" /><label>zamir</label></li>
				<li> <input type="radio" name="s3" value="B" /><label>Amaç sonuc cümleleri </label></li>
				<li> <input type="radio" name="s3" value="C" /><label>Sebep - sonuç cümleleri</label></li>
				<li> <input type="radio" name="s3" value="D" /><label>Karşılaştırma cümleleri</label></li>
			</ul>
		</fieldset>
		<br><br><fieldset class="radiogroup">
			<legend>Soru 4:	Aşağıdaki cümlelerin hangisinde karşılaştırma  <strong>yapılmamıştır?</strong></legend>
			<ul class="radio" style="list-style:none">
				<li> <input type="radio" name="s4" value="A" /><label>Kışın Sivas, İstanbul' dan daha soğuktur.</label></li>
				<li> <input type="radio" name="s4" value="B" /><label>Mehmet, gezmeyi çok sever, Sude ise kitap okumayı.</label></li>
				<li> <input type="radio" name="s4" value="C" /><label>Çaldığın o kalbi yerine koy lütfen.</label></li>
				<li> <input type="radio" name="s4" value="D" /><label>Takımın en iyi oyuncusu Burak Yılmaz' dır.</label></li>
			</ul>
		</fieldset>
		<br><br><fieldset class="radiogroup">
			<legend>Soru 5: Aşağıdaki kelime çiftlerinin hangisi  <strong>eş anlamlıdır ?</strong></legend>
			<ul class="radio" style="list-style:none">
				<li> <input type="radio" name="s5" value="A" /><label>Açıkgöz - Kurnaz</label></li>
				<li> <input type="radio" name="s5" value="B" /><label>İleri - Geri</label></li>
				<li> <input type="radio" name="s5" value="C" /><label>Uzun - Kısa</label></li>
				<li> <input type="radio" name="s5" value="D" /><label>sOĞUK-SICAK</label></li>
			</ul>
		</fieldset>
		<br><br><fieldset class="radiogroup">
			<legend>Soru 6: <strong>"Doğum günümde babam bana <u>hediye</u> aldı. "</strong><p>Yukarıda verilen cümlesinde <strong>altı çizili</strong> kelimenin <strong>eş anlamıaşağıdakilerden hangisidir ?</strong> </p></legend>
			<ul class="radio" style="list-style:none">
				<li> <input type="radio" name="s6" value="A" /><label>Güzel</label></li>
				<li> <input type="radio" name="s6" value="B" /><label>fakir</label></li>
				<li> <input type="radio" name="s6" value="C" /><label>sevecen</label></li>
				<li> <input type="radio" name="s6" value="D" /><label>Armağan</label></li>
			</ul>
		</fieldset>
		<br><br><fieldset class="radiogroup">
			<legend>Soru 7:<strong> " iyi - genç - özgürlük - aşağı " </strong><br>Yukarıdaki sözcüklerin hangisinin <strong>karşıt anlamlısı</strong> aşağıdaki cümlelerde verilmemiştir ?  </legend>
			<ul class="radio" style="list-style:none">
				<li> <input type="radio" name="s7" value="A" /><label>Dedem savaşta iki yıl esir düşmüş.</label></li>
				<li> <input type="radio" name="s7" value="B" /><label>Dün geceki rüyam çok kötüydü.</label></li>
				<li> <input type="radio" name="s7" value="C" /><label>Onların evi yukarı mahallededir.</label></li>
				<li> <input type="radio" name="s7" value="D" /><label>Dört delikanlı bize doğru koştu.</label></li>
			</ul>
		</fieldset>
		<br><br><fieldset class="radiogroup">
			<legend>Soru 8: Aşağıdaki atasözlerinin hangisinde <strong>zıt anlamlı</strong> sözcükler yoktur ? </legend>
			<ul class="radio" style="list-style:none">
				<li> <input type="radio" name="s8" value="A" /><label>Akıllı düşman, akılsız dosttan hayırlıdır</label></li>
				<li> <input type="radio" name="s8" value="B" /><label>Akşamın işini sabaha bırakma</label></li>
				<li> <input type="radio" name="s8" value="C" /><label>Aslan yattığı yerden belli olur</label></li>
				<li> <input type="radio" name="s8" value="D" /><label>Aza kanaat etmeyen çoğu bulamaz</label></li>
			</ul>
		</fieldset>
		<br><br><fieldset class="radiogroup">
			<legend>Soru 9: Aşağıdaki cümlelerin hangisinde <strong>"amaç"</strong> belirtilmemiştir. </legend>
			<ul class="radio" style="list-style:none">
				<li> <input type="radio" name="s9" value="A" /><label>Ders çalışmak üzere arkadaşını çağırdı.</lazbel></li>
				<li> <input type="radio" name="s9" value="B" /><label>Defter almak üzere kırtasiyeye gitti.</label></li>
				<li> <input type="radio" name="s9" value="C" /><label>Dışarı çıkmak üzere üstüne giydi.</label></li>
				<li> <input type="radio" name="s9" value="D" /><label>Tüm ışıkları kapat.</label></li>
			</ul>
		</fieldset>
		<br><br><fieldset class="radiogroup">
			<legend>Soru 10: "Şair,şiirinde herkes anlasın diye sade bir dil kullanmış."" 
				<br><strong>Cümlesinin anlamca türü</strong> aşağıdakilerden hangisidir?</legend>
			<ul class="radio" style="list-style:none">
				<li> <input type="radio" name="s10" value="A" /><label>Karşılaştırma</label></li>
				<li> <input type="radio" name="s10" value="B" /><label>Amaç</label></li>
				<li> <input type="radio" name="s10" value="C" /><label>Neden</label></li>
				<li> <input type="radio" name="s10" value="D" /><label>Emir</label></li>
			</ul>
		</fieldset>
		<input type="button" value="Cevapla" onclick="cevapla()" />
	</form>
</div>

<?php require("altbilgi.php"); ?>

