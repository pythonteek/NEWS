<?php
include("functions.php");

if(isset($_POST['news_title'])){
    $title = $_POST['news_title'];
    $tags = $_POST['tags'];
    $text = $_POST['text'];
    
    if($_FILES['img']['tmp_name'] != ''){
		$img = strtotime(date('y-m-d H:i')).'_'.$_FILES['img']['name'];
		$move = move_uploaded_file($_FILES['img']['tmp_name'],'assets/uploads/'. $fname);
	}
	
	echo $title . " " . $tags . " " . $text . " " . $img;
}


?>
