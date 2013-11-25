<?php
  require_once("simple_html_dom.php");
  $html = file_get_html('http://babordplus.univ-bordeaux.fr/notice.php?q=pour%20les%20nuls&spec_expand=1&sort_define=&sort_order=&rows=&start=1&ct=bx3_ws');
  
  $title = getZone("h1[class=book_title]");
  $creator = getZone("dd[class=auteur_principal]");
  
  print($title)."\n";
  print($creator)."\n";
  
  
  
  function getZone($search)
  {
    global $html;
    if ($html->find($search))
    {
      return trim($html->find($search, 0)->plaintext);
    }
    else
    {
      return "";
    }
  }
  
?>
