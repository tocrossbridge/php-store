<?php

require_once __DIR__."\config.php";
require_once SITE_ROOT."\config.php";

try{
    // TODO: eventualmente faço :D
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
?>