<?php
// Database SQL - Van de Wetering,
// Javascript - Van de Wetering,
// Rekenen - Van Meer,
// Nederlands, Rijswijk
// L&B - Lambregts,
// PHP - Evers,
// ASP - Gijsbrechts,
// Modelleren - Gijsbrechts,
// Digtale vaardigheden - Pielage
// Computertekenen - Van den Berg
// Engels - Mitrovic
$courseName = "PHP";

switch ($courseName)
{
    case "Rekenen":
        echo "voor het vak Rekenen heb je docent: Van Meer";
        break;
    case "L&B":
        echo " voor het vak L&B heb je docent: Lambrechts";
        break;
    case "Modelleren":
    case "ASP":
        echo "voor het vak ASP heb je docent: Gijsbrechts";
        break;
    case "Computertekenen":
        echo " voor het vak Computertekenen heb je docent: Van den Berg";
        break;
    case "Engels":
        echo "voor het vak Engels heb je docent: Mitrovix";
        break;
    case "Javascript":
    case "Database SQL":
        echo "voor het vak Database SQL heb je docent: Van de Wetering";
        break;
    case "Nederlands":
        echo "voor het vak Nederlands heb je docent: Rijswijk";
        break;
    case "Digitale vaardigheden":
        echo "voor het vak Digitale vaardigheden heb je docent: Pielage";
        break;
    case "PHP":
        echo "voor het vak PHP heb je docent: Evers";
        break;
}
?>