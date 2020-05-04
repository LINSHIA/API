<?php
$covidDataJSONString = file_get_contents('https://api.covid19api.com/summary');

$covidDataObject = json_decode($covidDataJSONString);

$covidDataGlobal = $covidDataObject->Global;
$covidData = $covidDataObject->Countries;  

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coronavirus COVID19-Summary</title>
</head>

<body>
    <h1>Coronavirus COVID19-Summary</h1>
    <h2>Covid Data CountryWise</h2>
    <dl>
        <dd>Global : </dd>
        <dd>Total Confirmed : <?php echo $covidDataGlobal->TotalConfirmed; ?></dd>
        <dd>Total Deaths : <?php echo $covidDataGlobal->TotalDeaths; ?></dd>
    <dd>NewRecovered :<?php echo $covidDataGlobal->NewRecovered; ?></dd>
    </dl>

    <?php foreach ($covidData as $i) { ?>
        <dl>
            <dd>Country: <?php echo $i->Country; ?></dd>
            <dd>Total Confirmed : <?php echo $i->TotalConfirmed; ?></dd>
            <dd>Total TotalDeaths : <?php echo $i->TotalTotalDeaths; ?></dd>
        <dd>Date:<?php echo $i->Date; ?></dd>
        
        </dl>
    <?php  } ?>
</body>
</html>