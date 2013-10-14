<?php

/*
  Search category, view a title, categories and description.
*/

function xmlSearch($search) {
 
  $url = "http://88.196.48.87:8888/solr/select?q=*:*&rows=20&wt=xml&indent=true";
  $xml = simplexml_load_file($url);

  $output = "";
  $xsearchs = $xml->xpath('//arr[str="'. $search .'"]/parent::*');

  foreach ($xsearchs as $xsearch) {
  
   foreach ($xsearch as $str) {
   
    $output .= "<table width='1000' align='center'>
            <tr>";
    
      switch ($str['name']) {
        case "title":
          $output .= "<td><h3><b>".$str." </b></h3></td>
                  </tr>";
        break;
        $output .= "<tr>";
        case "description":
          $output .= "<td>".$str." </td>
                  </tr>";
        break;
        $output .= "<tr>";
        case "category":
          $output .= "<td><b>Category: </b></td>";
          foreach ($str as $category) {
            $output .= "<td>".$category.", </td>";
          }
        break;   
        $output .= "</tr>";    
      }
    
    }
    
  }
  
  return $output;
  
}

print "</table>";

?>