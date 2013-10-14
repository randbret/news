<?php

include "template_5.html";
include "xml_search.php";

/*
  Search category a 'Gadgets' news.
*/

$gadgets = xmlSearch("Gadgets");

print $gadgets; 

?>