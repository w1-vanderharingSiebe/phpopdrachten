<?php
//Haal de formulier gegevens op
//include hieronder "lesopdracht_function.php" die de naam van de docent terug geeft.
include 'lesopdracht_functions53.php';

//ophalen formulier gegevens
//isset(), empty(), Functions gebruiken
require "";

if (!empty($_GET['firstname']))
{
    echo"<tr><td>Voornaam</td><td>" . $_GET['firstname'] . "</td></tr>";
}
if (!empty($_GET['tussenvoegsel']))
{
    echo"<tr><td>Voornaam</td><td>" . $_GET['tussenvoegsel'] . "</td></tr>";
}

if (!empty($_GET['lastname']))
{
    echo"<tr><td>Voornaam</td><td>" . $_GET['lastname'] . "</td></tr>";
}

?>
<table>
    <tr>
        <td>Voornaam</td>
        <td>*Toon hier de ingevulde naam*</td>
    </tr>
    <!-- Begin: Toon dit alleen als er een tussenvoegsel is ingevuld! -->
    <tr>
        <td>Tussenvoegsel</td>
        <td>*Toon hier tussenvoegsel als deze bestaat *</td>
    </tr>
    <!-- Einde: Toon dit alleen als er een tussenvoegsel is ingevuld! -->
    <tr>
        <td>Achternaam</td>
        <td>*Toon hier de ingevulde achternaam*</td>
    </tr>
    <tr>
        <td>Meer informatie</td>
        <td>*Laad hier de functie die de naam van de juiste docent toont*</td>
    </tr>
</table>