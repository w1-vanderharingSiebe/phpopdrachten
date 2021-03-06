<?php
/**
 *user: Siebe van der Haring
 *Date: 5-2-2020
 *Time: 13:30
 *File: Index.php
 */
// Declareer de variablen met logische namen.
//string
$event ="elfstedentocht";
//string
$translate = " Alvestêdetocht";
//int
$distance = 200;
//string
$tour = "schaatstocht";
//string
$ice = "natuurijs";
//string
$association = " Koninklijke Vereniging De Friesche Elf Steden";
//string
$place = "leeuwarden,";
//string
$province = "Friesland";
//int
$times = 15;
//int
$year = 1909;
//int
$timesperyear = 1;
//verhaal waar de variablen achter elkaar gezet worden;
$story = "De " .$event . " (Fries: " .$translate .") is een " .$distance . " kilometer
lange " .$tour ." over " .$ice ." die wordt georganiseerd door
de " .$association .". " .$place . " de hoofdstad van " .$province . ", is start- en aankomstplaats. De " .$event
." is inmiddels  " .$times ." maal verreden en werd voor het
eerst in " .$year . " gereden en wordt maximaal " .$timesperyear . " keer per winter
gehouden. ";
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
                    <a href="hoofdstuk2/opdracht_3-2.php">Opdracht 3.2</a>
                </li>
                <li>
                    <a href="hoofdstuk2/opdracht_3-3.php">Opdracht 3.3</a>
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
        zin 1: <br>
        <?php
        echo $story;
        ?>
        <br><br>zin 2:
    </p>
    <?php
    echo "<p>". "De " .$event . " (Fries: " .$translate .") is een " .$distance . " kilometer ". "<br>" .
"lange " .$tour ." over " .$ice ." die wordt georganiseerd door ". "<br>" . "
de " .$association .". " .$place . "<br>". " de hoofdstad van " .$province . ", is start- en aankomstplaats. De " ."<br>".$event
        ." is inmiddels  " .$times ." maal verreden en werd voor het
eerst ". "<br>" . " in " .$year . " gereden en wordt maximaal " .$timesperyear . " keer per winter "."<br>" ."
gehouden. " . "</p>";
    ?>
</main>
</body>
</html>