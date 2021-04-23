<!DOCTYPE html>
<html>
<body>

<h1>Pert4_BagianF</h1>
<?php
echo"Perintah break jika digunakan untuk 'mengentikan paksa'proses perulangan yang berlangsung,perintah continue hanya akan menghentikan perulangan yang saat ini terjadi 1 iterasi saja.menurut saya yang membedakan perintah break dan continue adalah, continue digunakan untuk men-interupsi perulangan dalam PHP, namun jika Break digunakan untuk menghentikan perulangan, maka perintah continue hanya akan menghentikan perulangan untuk 1 iterasi saja, proses perulangan akan dilanjutkan.";
?>
<br /><br />
<?php
$bil1= 12;
for ($b = 15; $b<= 45; $b+=2){
	$total=$bil1*$b;
	echo"<p> $bil1 x $b = $total";
}
?>

</body>
</html>