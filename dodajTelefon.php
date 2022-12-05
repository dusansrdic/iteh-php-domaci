<?php
include 'konekcija.php';

$model= strip_tags($_POST['model']);
$tekst = strip_tags($_POST['tekst']);
$proizvodjac =  strip_tags($_POST['proizvodjac']);
$cena = strip_tags($_POST['cena']);


$telefon = new Telefon(null,$model, $tekst, new Proizvodjac($proizvodjac,null), $cena, null);
$sacuvano = $db->dodajTelefon($telefon);

if($sacuvano){
    ?>
    <div class="alert alert-success" role="alert">
        Uspešno unesena telefon!
    </div>
<?php
}else{
    ?>
    <div class="alert alert-danger" role="alert">
        Neuspešno unesena telefon!
    </div>
<?php
}