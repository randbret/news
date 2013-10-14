<?php

include "template_3.html";
include "xml_search.php";

/*
  Search category a 'Cloud'.
*/

$cloud = xmlSearch("Cloud");

print $cloud; 

?>