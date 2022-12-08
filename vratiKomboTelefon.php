<?php
include "konekcija.php";

$telefoni = $db->vratiSveTelefone();
foreach ($telefoni as $telefon){
    ?>
    <option value="<?= $telefon->getTelefonID() ?>"><?= $telefon->getmodel() ?></option>
<?php
}