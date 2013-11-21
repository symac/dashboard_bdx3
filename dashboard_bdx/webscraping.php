<?php
$html = file_get_contents('http://babordplus.univ-bordeaux.fr/notice.php?q=pour%20les%20nuls&spec_expand=1&sort_de	fine=&sort_order=&rows=&start=1'); //get the html returned from the following url
$babord_doc = new DOMDocument();
//preg_replace_all('/\/\*[^]*?\*\//g', '', $html);
libxml_use_internal_errors(TRUE); //disable libxml errors


if(!empty($html)){ //if any html is actually returned

  $babord_doc->loadHTML($html);
  libxml_clear_errors(); //remove errors for yucky html
  
  $babord_xpath = new DOMXPath($babord_doc);

  $babord_row = $babord_xpath->query('//h5');
	
  if($babord_row->length > 0){
      foreach($babord_row as $row){
		echo $row->nodeValue;
      }
  }
}

?>