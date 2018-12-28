-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 26 Ara 2018, 18:43:11
-- Sunucu sürümü: 10.1.36-MariaDB
-- PHP Sürümü: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `cumledeanlam`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `konular`
--

CREATE TABLE `konular` (
  `konu_id` int(11) NOT NULL,
  `konu_adi` varchar(500) COLLATE utf32_turkish_ci NOT NULL,
  `konu_tanimi` varchar(1000) COLLATE utf32_turkish_ci NOT NULL,
  `konu_ornekleri` varchar(2000) COLLATE utf32_turkish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_turkish_ci;

--
-- Tablo döküm verisi `konular`
--

INSERT INTO `konular` (`konu_id`, `konu_adi`, `konu_tanimi`, `konu_ornekleri`) VALUES
(1, '<b>Neden-Sonuç (Sebep-Sonuç) Cümleleri</b>', 'Bir eylemin hangi gerekçeyle veya hangi sebeple yapıldığını bildiren cümlelere neden-sonuç (sebep-sonuç) cümleleri denir. Bu cümlelerin yüklemine “niçin?” , “neden?” soruları sorulduğunda bu sorular cevapsız kalmaz. Neden-sonuç cümleleri iki bölümden oluşur: Birinci bölüm neden (sebep), ikinci bölüm ise sonuç bildirir. Genellikle “için, -den, -diğinden, ile” gibi ekler ve edatlar kullanılır.&nbsp;&nbsp;', '<b>Örnek(ler)</b>\r\n» <b>Hasta olduğu için</b> okula gelememiş.\r\nYukarıdaki cümlede yükleme “<b>neden</b> gelememiş?” sorusunu yönelttiğimizde “hasta olduğu için” cevabını alıyoruz. Yüklemin yapılış sebebi bildirildiği için bu cümle sebep-sonuç cümlesidir.\r\n» <b>Okulların açılmasıyla</b> masraflar arttı.\r\n» <b>Seni uyandırmayalım diye</b> radyoyu açmadık.\r\n» <b>Yağmur yağınca </b>maç iptal oldu.\r\n» <b>Malzeme yetersizliğinden</b> inşaat yarım kaldı.\r\n'),
(2, 'Amaç-Sonuç İlişkili Cümleler', 'Eylemin hangi amaca bağlı olarak gerçekleştiğinin belirtildiği cümlelerdir. Bu tür cümlelerde de “için, diye, üzere” gibi edatlardan yararlanılır. Amaç – sonuç cümleleri, eyleme sorulan “hangi amaçla?” sorusuna cevap verir.', '<b>Örnek(ler) </b>\r\n» <b>Sınavı kazanmak için</b> çok çalışmış.\r\nYukarıdaki cümlede koyu renkle yazılmış bölüm, eylemin yapılış amacını belirtmektedir.\r\n»<b> Bildiklerini anlatmak üzere</b> karakola başvurdu.\r\n» <b>Kilo vereyim diye</b> spor yapıyor.\r\n» Yazar, <b>eleştirmene şirin görünmek maksadıyla</b> iki yüzlü davranıyor.\r\n» Ona sık sık öğüt verirdi; </b>iyi bir insan olsun diye.\r\n'),
(3, 'Karşılaştırma Cümleleri', 'Birden fazla varlık, kavram ya da durumun karşılaştırıldığı cümlelerdir. Karşılaştırmada benzerlik, farklılık, üstünlük gibi değişik durumlar ifade edilir. Karşılaştırma ilgisi “gibi, kadar, en, daha, çok, göre, fazla” gibi sözcüklerle kurulur.\r\n', 'Örnek(ler)\r\n» Kışın Sivas, İstanbul’dan daha soğuktur.\r\n» Televizyon da sinema kadar etkilidir.\r\n» Köyün en güzel çileği bahçemizde yetişir.\r\n» Yeni şiirler eski şiirlere göre daha anlaşılır bir dille yazılıyor.\r\n» Selim, gezmeyi çok sever, Elif ise kitap okumayı.'),
(4, '1. Eş Anlamlı Cümleler', 'Aynı konu ve düşüncenin, farklı sözcükler ve söz dizimiyle dile getirildiği cümlelerdir.', 'Örnek(ler)\r\n» Belirli bir hedefi olmayan insana kimse yardımcı olamaz.\r\n» Bir insan hangi limana yelken açtığını bilmiyorsa hiçbir rüzgar işine yaramaz.\r\n» Bu bardağın yarısı su ile dolu.\r\n» Bu bardağın yarısında su yok.\r\n» Yaşam, içinde siyah da bulunan bir gökkuşağıdır.\r\n» Yaşam, tüm güzelliklerinin yanında olumsuzlukları da barındırır.\r\n'),
(5, '2. Eş Sesli (Sesteş) Kelimeler', 'Yazılış ve okunuşları aynı olan; ama anlamları birbirinden farklı olan sözcüklere eş sesli (sesteş) sözcükler denir. Bunlar yalın hâlde olabildikleri gibi ek almış hâlde de olabilirler.', 'Örnek(ler)\r\nYol\r\n» Bu yolu takip etmemiz gerek. (yol: Bir yerden bir yere ulaşmak için üzerinde yürüdüğümüz yer) » Kardeşimle birlikte bahçedeki otları yolduk. (yolmak: Çekip koparmak)\r\nYüz\r\n» Yüzü bana dönüktü. (yüz: Çehre, surat, sima)\r\n» Düğününe yüz kişi gelmiş. (yüz: Doksan dokuzdan sonra gelen sayı)\r\n» Kıyıda iki çocuk yüzüyordu. (yüzmek: Suda ilerlemek)\r\n» Koyunun derisini yüzdüler. (yüzmek: Derisini çıkarmak, soymak)\r\n\r\nEl\r\n» Telefonu bütün gün elinden bırakmadı. (el: İnsanın tutmaya ve iş görmeye yarayan organı)\r\n» Eller ne derse desin, önemli değil. (el: Yabancı)'),
(6, '3. Karşıt (Zıt) Anlamlı Cümleler', 'Anlamca birbirine zıt olan, birbiriyle çelişen cümlelerdir. Bu tür cümlelerde konu genellikle aynıdır; fakat konuya bakış açısı farklıdır.', 'Örnek(ler)\r\n» Sanayileşme, çevreye zarar vermektedir.\r\n» Gelişmek isteyen toplumlar, sanayiye önem vermelidir.\r\nBu cümlelerde konu sanayileşmedir. İlk cümlede sanayileşmenin kötü yönü, diğerinde ise iyi yönü anlatılmaktadır.\r\n» Sanatçı, hayatı kendi yorumuyla vermelidir.\r\n» Sanatçı, hayatı anlatırken ayna görevi üstlenmelidir.'),
(7, 'Cümlenin Konusu', 'Cümlede üzeride durulan kavramlar cümlenin konusunu verir. Sorularda bir cümle verilir ve bu cümlede neyin anlatıldığı, yani cümlenin konusu sorulur.\r\n\r\nYapılması gereken, verilen cümleyi yorumlayarak anlatılanı bir iki söz ile ifade etmektir. Bunun için cümleye “Bu cümle neyi anlatıyor?” sorusu sorulur ve sorunun cevabı aranır. Alınan cevap cümlenin konusu olacaktır.', 'Örnek(ler)\r\n» Öğretmen bir toplumun yapı taşıdır.\r\nBu cümlede öğretmen, “yapı taşı”na benzetilmiş. Taştan yapılan binalarda temel malzeme taş olduğuna göre, bu malzeme olmadan bina yapılamaz. Öğretmen için toplumun yapı taşı dendiğine göre, toplumun ortaya çıkması için öğretmene ihtiyaç var demektir. Öyleyse toplumun oluşmasında öğretmen çok önemlidir. Yani bu cümlenin konusu, anlatmak istediği, “öğretmenin önemi”dir.\r\n\r\n» Gelecek nesillere yaşanır bir dünya bırakmak için çevreyi korumalıyız.\r\n\r\nBu cümlede çevrenin korunması gelecek nesillere sağlıklı bir dünya bırakma gerekçesine bağlanıyor. Öyleyse bu cümlede “çevrenin korunmasının gerekliliğini” anlatıyor diyebiliriz.'),
(8, 'Cümlenin Ana Fikri (Ana Düşüncesi)', 'Bir cümlede asıl anlatılmak istenen fikir veya cümlede verilmek istenen mesaja ana fikir denmektedir.', 'Örnek(ler)\r\n» Eğer bir romancı yazdığı eserlerin geniş kitleler tarafından okunmasını, beğenilmesini arzu ediyorsa yapacağı ilk iş seslendiği halkın anlayabileceği bir dil kullanmak olmalıdır.\r\nBu cümlede anlatılmak istenen düşünceyi “Yalın bir dil kullanan sanatçı, daha fazla okunur.” şeklinde öz olarak ifade edebiliriz. Bu da cümlenin ana düşüncesi olur.\r\n\r\n» Gerçek şair; halkının dağlarını, çobanlarını, kuzularını, acı ve sevinçlerini anlatandır.\r\n\r\nBu cümlede anlatılmak isteneni ise “Şair, milletini anlatan kimsedir.” şeklinde belirtebiliriz.'),
(9, 'Cümleden Çıkarılabilecek Yargı', 'Bir cümle verilir ve bu cümlede anlatılmak istenenin veya cümleden çıkarılabilecek yargının ne olduğu sorulur.\r\n\r\nBu tip soruların çözümünde yapılması gereken, verilen cümleyi yorumlayarak cümlenin söyleniş sebebinin bulunmasıdır. Çünkü hiçbir cümle boş yere söylenmez, her cümlenin bir söyleniş amacı vardır. İşte bu tip sorularda bize düşen onu bulmaktır. Biz buna cümlenin ana düşüncesi de diyebiliriz.\r\n\r\n\r\n \r\n“Bu cümlede yazar bize ne demek istedi?” sorusuyla anlatılmak isteneni bulabiliriz.', 'Örnek(ler)\r\n» Yazar, eserlerinde günlük hayatta olan şeyleri olduğu gibi, hiçbir abartmaya gitmeden anlatmıştır.\r\nBu cümlede yazar, eserlerinde günlük hayatı olduğu gibi anlatmışsa toplumun yaşamını işlemiş demektir. Öyleyse bu cümlede anlatılmak isteneni “Yazar, eserlerinde içinde yaşadığı toplumu anlatmıştır.” şeklinde ifade edebiliriz.\r\n\r\n» İnsan, bazı şeyleri söylemeyi seçtiği için değil; onları belli bir biçimde söylemeyi seçtiği için ‘yazar’dır.\r\n\r\nBu cümlede, “bazı şeyleri söyleme” sözüyle, konu; “belli bir biçimde söyleme” sözüyle, üslup kastedilmiştir. Bu sözlerden hareketle cümlede, bir insanı yazar yapan şeyin işlediği konunun değil, üslubunun olduğu anlatılmak istenmiştir. Dolayısıyla bu cümlede anlatılmak isteneni “Bir yazarın neyi söylediğinden çok, nasıl söylediği önemlidir.” şeklinde ifade edebiliriz.'),
(10, 'Cümleden Çıkarılamayacak Yargı', 'Bir cümle verilir ve bu cümleden çıkarılamayan ya da cümlenin anlamıyla çelişen yargıları bulmamız istenir.\r\n\r\nYapılacak iş verilen cümleyi yorumlayarak cümleden çıkarılabilecek yargıları bulmaktır. Sorular dört seçenekten oluştuğuna göre, seçeneklerin üçündeki yargılar, verilen cümleden çıkarılabilecek niteliktedir. Dolayısıyla cümleden çıkarılabilecek yargılar belirlenince, cümleden çıkarılamayacak yargı kendiliğinden ortaya çıkacaktır. Bu süreçte cümle çok iyi okunmalı, hangi ifadeden nasıl bir sonuç çıkarılabileceği iyi tespit edilmelidir.', 'Örnek(ler)\r\n» Mehmet’in kardeşi dün de okula gitmedi.\r\nBu cümleden çıkarılabilecek ve çıkarılamayacak anlamları bulalım:\r\n\r\n1.   “Mehmet evin tek çocuğu değildir.”\r\n2.   “Mehmet ‘in kardeşi 0-6 yaş arasında değil.”\r\n3.   “Mehmet ‘in kardeşi bugün de okula gitmemiş.”\r\n4.   “Mehmet kardeşinden başarılıdır.”\r\n\r\n\r\n \r\nYukarıdaki cümlelere baktığımızda 1. cümle kardeş, 2. cümle okul, 3. cümle dün de sözcüklerinden çıkar. 4. cümleyi verilen cümleden çıkaramıyoruz.'),
(11, 'Neden-Sonuç Cümleleri ile Amaç-Sonuç Cümleleri Arasındaki Fark', 'Neden-sonuç ile amaç-sonuç cümleleri birbirine çok benzemekte bu yüzden sık sık karıştırılmaktadır. Sebep-sonuç cümleleri ile amaç-sonuç cümlelerini ayırt etmek için şu yolu izlemeliyiz:\r\n\r\nNeden-sonuç ile amaç sonuç cümlelerinin karıştırılmasının en büyük sebebi iki tür cümlenin de “neden?” sorusuna cevap verebilmesidir. Eğer bir soruda birden fazla seçenekte “neden?” sorusuna cevap alabiliyorsak, öncelikle “hangi amaçla?” sorusunu sorup eleme yapmalıyız. “Hangi amaçla?” sorusunun cevabı bize amaç-sonuç cümlesini verecektir.', 'Örnek Soru\r\nAşağıdaki cümlelerin hangisinde neden-sonuç ilişkisi vardır?\r\nA) Bu akşam eve geç geldim.\r\nB) İyi not alabilmek için çok çalışıyordu.\r\nC) Düşmemek için kardeşinden destek alıyordu.\r\nD) Öfkelendiği için doğru düşünemiyordu.\r\n\r\nÇözüm\r\nSeçenekleri incelediğimiz b,c ve d seçeneklerinde “neden?” sorusuna cevap alabildiğimizi görüyoruz:\r\n\r\nA) Bu akşam eve geç geldim. (neden geldim? → cevap yok)\r\nB) İyi not alabilmek için çok çalışıyordu. (neden çalışıyordu? → iyi not alabilmek için)\r\nC) Düşmemek için kardeşinden destek alıyordu. (neden destek alıyordu? → düşmemek için)\r\nD) Öfkelendiği için doğru düşünemiyordu. (neden doğru düşünemiyordu? → öfkelendiği için)\r\n\r\nOysaki bizden neden-sonuç cümlesini bulmamızı istediğine göre seçeneklerden yalnız bir tanesi neden-sonuç ilişkisi içermekte. O halde “hangi amaçla?” sorusunu sorup seçeneklerdeki amaç-sonuç cümlelerini belirleyelim:\r\n\r\nA) Bu akşam eve geç geldim. (hangi amaçla geldim? → cevap yok)\r\nB) İyi not alabilmek için çok çalışıyordu. (hangi amaçla  çalışıyordu? → iyi not alabilmek için) \r\nC) Düşmemek için kardeşinden destek alıyordu. (hangi amaçla destek alıyordu? → düşmemek için)\r\nD) Öfkelendiği için doğru düşünemiyordu. (hangi amaçla doğru düşünemiyordu? → öfkelendiği için) (neden doğru düşünemiyordu? → öfkelendiği için) \r\n\r\nGörüldüğü üzere neden-sonuç cümleleri “hangi amaçla?” sorusuna cevap içermiyor, “neden?” sorusuna ise cevap alabiliyoruz. Dolayısıyla eğer bir soruda “neden?” sorusuna birden çok seçenekte cevap alıyorsak, “hangi amaçla?” sorusunu sorup amaç-sonuç cümlelerini elemeliyiz.\r\n\r\nCevap D');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `konular`
--
ALTER TABLE `konular`
  ADD PRIMARY KEY (`konu_id`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `konular`
--
ALTER TABLE `konular`
  MODIFY `konu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
