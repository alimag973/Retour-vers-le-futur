
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Retour vers le futur</title>
</head>
<body>
    <?php
    $presentTime = new DateTime('now');
    $destinationTime = new DateTime('2022-05-27 16:30');

    $difference = $presentTime->diff($destinationTime);
    ?>
    
    <img src="/assets/images/backto.png">

    <h2><?= $destinationTime->format('M d Y h A g:i'); ?> <br></h2>
    <h2><?= $presentTime->format('M d Y h A g:i'); ?><br></h2>
    <h2><?= $difference->format('%yans %mmois %djours %hheures et %iminutes'); ?><br></h2>
    
</body>
</html>