<?php
/**
 *user: Siebe van der Haring
 *Date: 5-2-2020
 *Time: 13:30
 *File: Index.php
 */
/**Taak 1*/
$trafficLightColor = "groen";
$ambulanceComing = true;
$driveOn = true;
/**Taak 2*/
$countryName = "";
$currentAge = 17;

?>

<!DOCTYPE.html>

<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="opdracht x">
    <meta name="keywords" content="keyword 1, keyword 2">
    <link href="css/style.css" type="text/css" rel="stylesheet">
    <title>
        Template
    </title>
</head>
<body>
<header>
    <h1><?php echo "Uitwerking van PHP-opdrachten"; ?></h1>
</header>
<aside>
    <h1>Menu</h1>
    <ul>
        <li>Hoofdstuk 2
            <ul>
                <li>
                    <a href="../hoofdstuk2/opdracht_2-1.php">Opdracht 2.1</a>
                </li>
                <li>
                    <a href="/hoofdstuk2/opdracht_2-2.php">Opdracht 2.2</a>
                </li>
            </ul>
        </li>
        <li>Hoofdstuk 3
            <ul>
                <li>
                    <a href="/hoofdstuk3/opdracht_3-1.php">Opdracht 3.1</a>
                </li>
                <li>
                    <a href="/hoofdstuk3/opdracht_3-2.php">Opdracht 3.2</a>
                </li>
                <li>
                    <a href="/hoofdstuk3/opdracht_3-3.php">Opdracht 3.3</a>
                </li>
            </ul>
        </li>
        <li>Hoofdstuk 4
            <ul>
                <li>
                    <a href="hoofdstuk2/opdracht_4-1.php">Opdracht 4.1</a>
                </li>
                <li>
                    <a href="hoofdstuk2/opdracht_4-2.php">Opdracht 4.2</a>
                </li>
                <li>
                    <a href="hoofdstuk2/opdracht_4-4.php">Opdracht 4.4</a>
                </li>
                <li>
                    <a href="hoofdstuk2/opdracht_4-5.php">Opdracht 4.5</a>
                </li>
            </ul>
        </li>
        <li>Hoofdstuk 5
            <ul>
                <li>
                    <a href="hoofdstuk2/opdracht_5-1.php">Opdracht 5.1</a>
                </li>
                <li>
                    <a href="hoofdstuk2/opdracht_5-2.php">Opdracht 5.2</a>
                </li>
                <li>
                    <a href="hoofdstuk2/opdracht_5-4.php">Opdracht 5.4</a>
                </li>
                <li>
                    <a href="hoofdstuk2/opdracht_5-5.php">Opdracht 5.4</a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
<main id="wrapper">
    <h2>Uitwerkingen:</h2>
    <p>
        <?php
        if ($ambulanceComing == true){
        $driveOn = false;
        echo "U moet stoppen";
        }
        else if ($trafficLightColor == groen){

        $driveOn = true;
        echo "u mag doorrijden";
        }
        else{
        echo "U moet stoppen";
        }

        ?>
    </p>
    <p>
        <?php
        if ($countryName == "België" && $currentAge == 16){
            echo "Je woont in België en je bent ". $currentAge ." en je mag zwakke dranken drinken";
        }
        else if ($countryName == "Cyprus" && $currentAge == 17){
            echo "Je woont in Cyprus en je bent". $currentAge ." en u mag elke soort drank drinken";
        }
        else {
            echo " Je woont in Nederland en je bent ". $currentAge ."en je mag geen alcohol drinken";
        }
        ?>
    </p>
</main>
</body>
</html>
