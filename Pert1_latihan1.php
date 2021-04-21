<html>
<head><title>Variabel Global dan Local</title></head>
<body><h1>Variabel Global dan Local</h1>
<?php 
$A = 123 ; // variable global
function Test() { 
$A = "Test"; // variable local
echo"Nilai A dalam fungsi = $A \n"; 
} 
Test(); 
echo"Nilai A luar fungsi = $A \n"; 
?>
</body>
</html> 