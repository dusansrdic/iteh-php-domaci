<?php
include 'konekcija.php';
$telefoni = $db->vratiTelefonePoPretrazi($_POST['pretraga'],$_POST['sort']);
?>
<table class="table table-hover" >
    <thead>
    <tr>
        <th style="color:beige" >Model</th>
        <th style="color:beige" >Tekst</th>
        <th style="color:beige" >Proizvodjac</th>
        <th style="color:beige" >Cena karte</th>
        <th style="color:beige" >Obriši</th>
    </tr>
    </thead>
    <tbody>

    <?php

    foreach ($telefoni as $telefon){
        ?>
        <tr>
            <td style="color:beige" ><?= $telefon->getModel(); ?></td>
            <td style="color:beige" ><?= $telefon->getTekst(); ?></td>
            <td style="color:beige" ><?= $telefon->getProizvodjac()->getNazivProizvodjaca(); ?></td>
            <td style="color:beige" ><?= $telefon->getCena(); ?></td>
            
            <td><button class="btn btn-primary" style="background-color:  rgb(204, 100, 100);" onclick="obrisi(<?= $telefon->getTelefonID(); ?>)"><i class="fa fa-trash"></i> Obriši</button> </td>
        </tr>

        <?php
    }
    ?>
    </tbody>
</table>
