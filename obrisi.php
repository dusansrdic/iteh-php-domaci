<?php
include 'konekcija.php';

$id = $_GET['id'];

$obrisano = $db->obrisiTelefon($id);

if($obrisano){
    ?>
    <div class="alert alert-success" role="alert">
        Uspešno obrisan izabrani telefon!
    </div>
    <?php
}else{
    ?>
    <div class="alert alert-danger" role="alert">
        Neuspešno brisanje izabranog telefona!
    </div>
    <?php
}