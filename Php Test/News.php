<html>

   <body>
      
      <?php
		$jsondata = file_get_contents("data.json");
		$json = json_decode($jsondata,true);
		$output = "<ul>";
		usort($json,function($a,$b) {return strnatcasecmp($a['title'],$b['title']);});
		
		foreach($json as $new){
            $output .= "<h2>".$new["title"]."</h2>";
            foreach ($new["link"] as $url) {
                if (!preg_match("/^urn:/", $url)) {
                    $output .= "<a href=".$url.">Read More</a>";
                    break;
                }
            }
            $output .= "<p>".$new["description"]."</p>";
            $output .= date('<\i>l</\i> <\i>jS</\i> <\i>\of</\i> <\i>F</\i> <\i>Y</\i> <\i>h</\i>:<\i>i</\i>:<\i>s</\i> <\i>A</\i>',strtotime($new["pubDate"]));
        }
		$output .= "</ul>";
		echo $output;
      ?>
      
   </body>
</html>