<!-- Ursin Filli & Roman Strickler -->
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
          if (file_exists('guestbook.txt')) {
            $lines = file('guestbook.txt', FILE_IGNORE_NEW_LINES);
            if (count($lines) != 0) {
              foreach ($lines as $line_num => $line) {
                  $data = explode('%', $line, 3);

                  $name = htmlspecialchars($data[0]);
                  $email = htmlspecialchars($data[1]);
                  $text = htmlspecialchars($data[2]);

                  echo "Name: {$name} <br>";
                  echo "E-Mail: {$email} <br>";
                  echo "Message: {$text} <br>";
                  echo "<hr>";
              }
            } else {
              echo "Keine Einträge Gefunden.";
            }
          } else {
            echo "Keine Einträge Gefunden.";
          }
          ?>
        </article>
      </div>
    </div>
  </body>
</html>
