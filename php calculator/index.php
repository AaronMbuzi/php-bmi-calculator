<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" href="https://classless.de/classless.css">-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/water.min.css">

    <title>Document</title>
</head>
<body>

    <h1>
        Aaron Mbuzi Simple PHP BMI Calculator
    </h1>

        <form action="index.php" method="get">
            <h2>weight(KG)</h2><input type="number" step="any" min="0" name="firstnumber">
            <br>
            <h2>Hight(M)</h2><input type="number" step="any" min="0" name="thesecondnumber">
            <input type="submit">
        </form>
    <hr>
    <h2>Results:
    <?php
    $weight = $_GET['firstnumber']; 
    $hight = $_GET['thesecondnumber'];
    $bmi = $weight / ($hight * $hight);
    echo $bmi;
    
    ?>
    </h2>
</body>
</html>