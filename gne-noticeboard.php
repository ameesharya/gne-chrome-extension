<link href="gndec-extension.css" rel="stylesheet" type="text/css"/>
<body>
<?php
  // new dom object
  $dom = new DOMDocument();
  //load the html
  $html = @$dom->loadHTMLFile("http://gndec.ac.in/noticeboard/news.php?userid=19");
  //discard white space 
  $dom->preserveWhiteSpace = false; 
  //the table by its tag name
  $tables = $dom->getElementsByTagName('table'); 
for ($i = 3; $i <= 21; $i++)
{
  //get all rows from the table
  $rows = $tables->item($i)->getElementsByTagName('tr'); 
  echo "<div class='postheading'><a href='http://gndec.ac.in/noticeboard/news.php?userid=19' target='_blank'>";
  // loop over the table rows
  foreach ($rows as $row) 
  {
   // get each column by tag name
      $cols = $row->getElementsByTagName('td'); 
   // echo the values  
      echo '<div class="content">'.$cols->item(0)->nodeValue.'</a></div></div>'; 
    }
	$i++;
	echo '<div class="newpost"></div>';
}
?>
</body>