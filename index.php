<html>
<head>
<meta charset="utf-8">
<title>Księga uczniów</title>
<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="content">

<?php

error_reporting(E_ALL ^ E_NOTICE);

$pole1 = trim($_POST['pole1']);
$pole2 = trim($_POST['pole2']);
$pole3 = trim($_POST['pole3']);
$pole4 = trim($_POST['pole4']);
$pole5 = trim($_POST['pole5']);

if( empty($pole1) && empty($pole2) && empty($pole3) && empty($pole4) && empty($pole5) ) {

echo '
    <form action="" method="post">
        <input type="text" name="pole1" placeholder="Podaj swoję imię">
        <input type="text" name="pole2" placeholder="Podaj swoję nazwisko">
        <input type="text" name="pole3" placeholder="Z jakiej szkoły jesteś ?">
        <input type="text" name="pole4" placeholder="Gdzie mieszkasz ?">
        <input type="text" name="pole5" placeholder="Podaj nam swój adres e-mail">
        <input type="submit" value="Zapisz się do bazy danych" />
    </form>';
}

else {
    
    $dane = $pole1."`".$pole2."`".$pole3."`".$pole4."`".$pole5."\n";
   
    $file = "baza.txt";
    
    $fp = fopen($file, "a");
    
    flock($fp, 2);
    
    fwrite($fp, $dane);
    
    flock($fp, 3);
    
    fclose($fp);
    
    echo '
        <div class="success-form">
            <p>Twoje dane zostały dodane do naszej bazy odwiedzających!</p>
            <a href="podglad.php">Zobacz całą księgę.</a>';
}

?> 

</div>

</body>
</html>
