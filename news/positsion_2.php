<?php

include "template_2.html";
include "xml_search.php";

/*
  Search category a 'marketing' news.
*/

$business = xmlSearch("Business");
$enterpreneur = xmlSearch("Entrepreneur");

print $business; 
print $enterpreneur; 

?>