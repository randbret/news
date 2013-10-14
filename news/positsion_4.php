<?php

include "template_4.html";
include "xml_search.php";

/*
  Search category a 'technology' news.
*/

$mpx = xmlSearch("20-megapixel");
$bluray = xmlSearch("Blu-ray");
$dell = xmlSearch("dell");
$gadgets = xmlSearch("Gadgets");
$mobile = xmlSearch("Mobile");
$cloud = xmlSearch("Cloud");

print $mpx; 
print $bluray; 
print $dell; 
print $gadgets; 
print $mobile; 
print $cloud; 

?>