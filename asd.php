<form action="kaydet.php" method="POST">
	<input type="text" name="">	
</form>

				
<?php 



$cekilecekid = $_GET["id"];
$vericekme = $dbbaglanti->prepare("SELECT * FROM vericektablosu");
$vericekme->execute(array($cekilecekid));
$ad = $vericekme["ad"];
$soyad = $vericekme["soyad"];
$telefon = $vericekme["telefon"];
$sehir = $vericekme["sehir"];

?>
<form action="kaydet.php" method="POST">
	<input type="text" name="ad" value="<?php echo $ad ?>">	
	<input type="text" name="soyad" value="<?php echo $soyad ?>">	
	<input type="text" name="telefon" value="<?php echo $telefon ?>">	
	<input type="text" name="sehir" value="<?php echo $sehir ?>">	
	
	<input type="kaydet" name="verikaydet">
</form>
			