<?php
include "konekcija.php";

$proizvodjaci = $baza->vratiSveProizvodjace();

foreach ($proizvodjaci as $proizvodjac){
    ?>
    <option value="<?= $proizvodjac->getProizvodjacID() ?>"><?= $proizvodjac->getNazivProizvodjaca() ?></option>
<?php
}