<?php
//Ursin Filli & Roman Strickler
if (isset($_POST['anrede']) && isset($_POST['vorname']) && isset($_POST['name']) && isset($_POST['tel'])) {
  $anrede = $_POST['anrede'];
  $vorname = $_POST['vorname'];
  $name = $_POST['name'];
  $tel = $_POST['tel'];
  if (!empty($anrede) && !empty($vorname) && !empty($name) && !empty($tel)) {
    $file = fopen('user.txt', 'a');
    fwrite($file, "{$anrede}%{$vorname}%{$name}%{$tel}\n");
    fclose($file);
  } else {
    echo "<h1>Error 500<h1><h2>Internal Server Error!<h2>";
    die();
  }
} else {
  echo "<h1>Error 500<h1><h2>Internal Server Error!<h2>";
  die();
}
?>
<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <title>Registrieren</title>
    <meta name="description" content="description">
    <meta name="keywords" content="keywords">
    <meta name="robots" content="index, follow">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  </head>
  <body>
    <div id="wrapper">
      <div id="top">
        <div class="toptext">PHP-GMBH</div>
      </div>
      <header>
        <div id="headerleft"><img src="tomcat.gif" alt="tomcat.gif"></div>
        <div id="headerright">
        </div>
        <div class="clear">&nbsp;</div>
      </header>
     <div class="clear">&nbsp;</div>
     <main>
      <div id="main-inner">
        <div id="subtitle"><img src="banner.gif" alt="banner.gif"></div>
        <aside>
          <h2>Navigation</h2>
          <nav>
            <ul>
              <li><a title="Home" href="index.html">Home</a></li>
              <li><a title="Gästebuch" href="guestbook.php">Gästebuch</a></li>
              <li><a title="Registrieren" href="registr.php">Regestrieren</a></li>
            </ul>
          </nav>
        </aside>
        <article>
          <?php
          echo "<p>Vielen Dank für die Regestrierung {$anrede} {$name}, wir haben folgende Daten Gespeichert: </p>";
          echo "<p>Anrede: {$anrede}</p>";
          echo "<p>Vorname: {$vorname}</p>";
          echo "<p>Name: {$name}</p>";
          echo "<p>Tel: {$tel}</p>";
          ?>
      </div>
    </div>
  </body>
</html>
