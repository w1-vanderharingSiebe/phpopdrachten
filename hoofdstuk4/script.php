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
        $teacherName = "Van Meer";
        break;
    case "L&B":
        $teacherName = "Lambrechts";
        break;
    case "Computertekenen":
        $teacherName = "Van den Berg";
        break;
    case "Modelleren":
    case "ASP":
        $teacherName = "Gijsbrechts";
        break;
    case "Digitale vaardigheden":
        $teacherName ="Pielage";
        break;
    case "Nederlands":
        $teacherName = "Rijswijk";
        break;
    case "Engels":
        $teacherName = "Mitrovix";
        break;
    case "Javascript":
    case "Database SQL":
        $teacherName = "Van de Wetering";
        break;
    case "PHP":
        $teacherName = "Evers";
        break;
}
echo  "voor het vak:".$courseName."Heb ik de leraar:". $teacherName;
?>