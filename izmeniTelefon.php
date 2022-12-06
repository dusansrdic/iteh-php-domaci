<?php
include 'konekcija.php';

$telefonID = strip_tags($_POST['telefonID']);
$tekst = strip_tags($_POST['tekst']);
$cena = strip_tags($_POST['cena']);
//proveriti putanju do biblioteke!!!

$izmenjeno = $db->izmeniTelefon($telefonID,$tekst,$cena);

if($izmenjeno){
    ?>
    <div class="alert alert-success" role="alert">
        Uspešno izmenjeni podaci o telefonu!
    </div>
<?php
}else{
    ?>
    <div class="alert alert-danger" role="alert">
        Neuspešno izmenjeni podaci o telefonu!
    </div>
<?php
}