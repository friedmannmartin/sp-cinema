<?php
  //spustíme práci se session
  session_start();

  //zrušíme aktuální session
  session_destroy();

  //přesměrování na homepage
  header('Location: index.php');
