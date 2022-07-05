<? $item_id = $_GET['item_id'];
require_once($_SERVER['DOCUMENT_ROOT'] . '/includes/connecting_db.php');

// $projects_data_q = mysqli_query($connection, "SELECT * FROM `projects` ");
// $proj = mysqli_fetch_assoc($projects_data_q)
//  $project_desc = array();
// 	while ($proj = mysqli_fetch_assoc($projects_data_q)) {
// 		$project_desc[] = $proj;
//         $img = $proj['image'];
//         print_r($img);
// 	}








$desc_form = mysqli_query($connection, "SELECT * FROM `projects` WHERE `id` = " . $item_id);
if ($desc_form == null) {
    return;
}
$proj = mysqli_fetch_array($desc_form);
?>
<div class="description_body">
    <div class="description_content">
        <h1><? echo $proj['name-project'] ?></h1>
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