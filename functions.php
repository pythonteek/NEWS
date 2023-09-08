<?php
class NEWS{
    
    function save_news($title, $tags, $text, $img){
        
        include("db_connect.php");
        include("jdf.php");
        
        if (preg_match('/\p{Arabic}/u', $title) || preg_match('/\p{Arabic}/u', $text)) {
            $language = "fr";
            $date_created = jdate("Y-m-d");
        } else {
            $language = "en";
            $date_created = date("Y-m-d");
        }
		
		
		$sql = "INSERT INTO news (title, tags, text, date_created, cover_img)
        VALUES ('$title', '$tags', '$text', '$date_created', '$img')";
        
        if ($conn->query($sql) === TRUE) {
          return 1;
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }


    }
    
}

?>
