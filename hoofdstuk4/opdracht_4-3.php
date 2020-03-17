<?php
/**
 *user: Siebe van der Haring
 *Date: 5-2-2020
 *Time: 13:30
 *File: Index.php
 */
?>

    <!DOCTYPE.html>

    <html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="opdracht x">
    <meta name="keywords" content="keyword 1, keyword 2">
    <link href="../css/style.css" type="text/css" rel="stylesheet">
    <title>
        Template
    </title>
</head>
<body>
<?php
include '../includes/header.php';
include '../includes/aside.php';
?>

<main id="wrapper">
    <h2>Uitwerkingen:</h2>
    <p>
        <?php
        include 'includes/script2.php';
        echo $task2 ."<br>";
        echo $task3."<br>";
        echo $task4."<br>";
        echo $table."<br>";
        echo $task6."<br>";
        echo $task7;
        ?>

     </p>
</main>
<?php
include '../includes/footer.php';
?>
</body>
    </html>
