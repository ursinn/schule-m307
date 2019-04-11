<?php
//Ursin Filli & Roman Strickler
if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['text'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $text = $_POST['text'];
  if (!empty($name) && !empty($email) && !empty($text)) {
    $file = fopen('guestbook.txt', 'a');
    fwrite($file, "{$name}%{$email}%{$text}\n");
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
    <title>Gästebuch</title>
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
          echo "<p>Vielen Dank {$name} für den Eintrag ins Gästebuch, wir haben folgende Daten Gespeichert:</p>";
          echo "<p>Name / Vorname: {$name}</p>";
          echo "<p>E-Mail: {$email}</p>";
          echo "<p>Message: {$text}</p>";
          ?>
        </article>
      </div>
    </div>
  </body>
</html>
