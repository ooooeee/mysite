<? $item_id = $_GET['item_id']; ?>
<!DOCTYPE html>
<html lang="en">
<? include './includes/connecting_db.php' ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title><? echo $config['title']; ?></title> -->
    <title><? echo $item_id ?></title>
    <link rel="stylesheet" type="text/css" href="../_sourse/demo.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@400;500;600;700;800;900&family=Ubuntu:wght@300;400;500;700&display=swap" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.color-animation/1/mainfile"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.1/jquery-ui.min.js"></script>
    <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css"> -->
    <script src="./jquery.easing.js"></script>
</head>

<body>
    <?
    $projects_data_q = mysqli_query($connection, "SELECT * FROM `projects` ");
    $proj = mysqli_fetch_assoc($projects_data_q)
    //  $project_desc = array();
    // 	while ($proj = mysqli_fetch_assoc($projects_data_q)) {
    // 		$project_desc[] = $proj;
    //         $img = $proj['image'];
    //         print_r($img);
    // 	}

    ?>



<?
$item_id = 
$desc_form = mysqli_query($connection, "SELECT * FROM `projects` WHERE `id` = " . $item_id); 
?>
    <div id="description" class="description open">
        <div class="description_body">
            <div class="description_content">
                <i href="#header" class="description__close close-desc"></i>
                <img src="../img/<?php echo $proj['image']; ?>" alt="">
                <div class="desc-text">
                    <div>
                        <h1><? echo $proj['short-URL']; ?></h1>
                        <hr>
                        <p><? echo $proj['description']; ?></p>
                        <hr>
                    </div>
                    <div>
                        <h2>Что было сделано мной:</h2>
                        <p><? echo $proj['what-was-done-by-me']; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>