<?php

	$mysqli = new mysqli("localhost", "root", "", "timelineclarin");
	
	$query = 'select * from event';
	
        $result = $mysqli->query($query);
        
        echo '<textarea rows="50" cols="200">';
        
        echo'{"timeline":{
"headline":"Tapas de Clarin",
"type":"default",
"text":"Tapas de Clarin por eventos",
"asset": {
"media":"clarin.jpg",
"credit":"Clarin",
"caption":"Clarin"
},
"date": [';
        
        while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            $day = $row['day'];
            $month = $row['month'];
            $year = $row['year'];
            $title = $row['title'];
            $text = $row['text'];
            echo '{"startDate":"'.$year.','.$month.','.$day.'",
                "endDate":"'.$year.','.$month.','.$day.'",
                "headline":"'.$title.'",
                "text":"'.$text.'",
                "asset": {"media":"http://tapas.clarin.com/tapa/'.$year.'/'.$month.'/'.$day.'/'.$year.''.$month.''.$day.'_thumb.jpg",
                "credit":"Clarin","caption":"<a target=\'_blank\' href=\'http://tapas.clarin.com/tapa/'.$year.'/'.$month.'/'.$day.'/'.$year.''.$month.''.$day.'.jpg\'>Ampliar</a>"}},';
        }
        echo ']}}';
        echo '</textarea>';        
?>