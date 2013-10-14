<?php

include "template_1.html";

/*
  Sorted news last to first and view last 4 news a title, categories and 
  description
*/

$url = "http://88.196.48.87:8888/solr/select?q=*:*&rows=20&wt=xml&indent=true";
$xml = simplexml_load_file($url);

$n = 0;
$dates = array();

foreach ($xml->result as $result) {

  foreach ($result->doc as $doc) {
    
     $dates[] = $doc;
  
  }

}

//sorted news last to first

usort($dates, function ($a, $b) {

  return strtotime($a->date)<strtotime($b->date);
  
});

//view last 4 news the title, categories and description

foreach ($dates as $date) {

  if (++$n <= 4) {
    
    foreach ($date as $str) {
    
    print "<table width='1000' align='center'>
            <tr>";
    
      switch ($str['name']) {
        case "title":
          print "<td><h3><b>".$str." </b></h3></td>
                  </tr>";
        break;
        print "<tr>";
        case "description":
          print "<td>".$str." </td>
                  </tr>";
        break;
        print "<tr>";
        case "category":
          print "<td><b>Category: </b></td>";
          foreach ($str as $category) {
            print "<td>".$category.", </td>";
          }
        break;   
        print "</tr>";    
      }
    
    }
    
  }
  
}

print "</table>";

?>