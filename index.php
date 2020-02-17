<?php
  //as this is a dev site, this is to try and bypass Cloudflares overzealous cache
  $site = file_get_contents('dev.html');
  $site = str_replace('css/main.css', 'css/main.css?t=' . time(), $site);
  $site = str_replace('js/main.js', 'js/main.js?t=' . time(), $site);
  echo($site);
?>