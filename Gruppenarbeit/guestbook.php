<?php
//Ursin Filli & Roman Strickler
$error = false;
if (isset($_POST['name'])) {
  if (!empty($_POST['name'])) {
    $name = $_POST['name'];
    if (strlen($name) >= 2) {
      if (preg_match('/[^A-Za-z ]/', $name)) {
        unset($name);
        $error = true;
        $error_name = true;
      }
    } else {
      unset($name);
      $error = true;
      $error_name = true;
    }
  } else{
    unset($name);
    $error = true;
    $error_name = true;
  }
}
if (isset($_POST['email'])) {
  if (!empty($_POST['email'])) {
    $email = $_POST['email'];
    if (strlen($email) >= 2) {
      if (preg_match('/[^A-Za-z0-9\.\@]/', $email)) {
        unset($email);
        $error = true;
        $error_email = true;
      }
    } else {
      unset($email);
      $error = true;
      $error_email = true;
    }
  } else{
    unset($email);
    $error = true;
    $error_email = true;
  }
}
if (isset($_POST['text'])) {
  if (!empty($_POST['text'])) {
    $text = $_POST['text'];
  } else {
    unset($text);
    $error = true;
    $error_text = true;
  }
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
          <h1>Gästebuch</h1>
          <?php
            if ($error) {
              echo "<p>Es sind ein oder mehrer Fehler aufgetreten: </p>";
              if (isset($error_name)) {
                echo "<p>Der Name Fehlt oder ist Ungültig</p>";
              }
              if (isset($error_email)) {
                echo "<p>Die E-Mail Fehlt oder ist Ungültig</p>";
              }
              if (isset($error_text)) {
                echo "<p>Die Message Fehlt</p>";
              }
            }
          ?>
          <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <p>Name / Vorname: <input type="text" name="name" value="<?php if(isset($name)) echo $name; ?>"></p>
            <p>E-Mail: <input type="text" name="email" value="<?php if(isset($email)) echo $email; ?>"></p>
            <p>Message: <textarea name="text" rows="8" cols="80"><?php if(isset($text)) echo $text; ?></textarea></p>
            <p><input type="submit" name="" value="eintragen"> <input type="reset" name="" value="löschen"></p>
          </form>
          <?php
          if (isset($name) && isset($email) && isset($text)) {
          //-------------- Code von https://stackoverflow.com/a/5576700
          ?>
          <form id="add" action="addentry.php" method="post">
            <?php
            foreach ($_POST as $a => $b) {
              echo '<input type="hidden" name="'.htmlentities($a).'" value="'.htmlentities($b).'">';
            }
            ?>
          </form>
          <script type="text/javascript">
            document.getElementById('add').submit();
          </script>
          <?php
          //-------------
          }
          ?>
          <p>[<a href="guestbook_read.php">Gästebuch lessen</a>]</p>
        </article>
      </div>
    </div>
  </body>
</html>
