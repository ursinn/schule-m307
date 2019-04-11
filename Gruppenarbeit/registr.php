<?php
//Ursin Filli & Roman Strickler
$error = false;
if (isset($_POST['anrede'])) {
  if (!empty($_POST['anrede'])) {
    $anrede = $_POST['anrede'];
    if ($anrede == "default") {
      unset($anrede);
      $error = true;
      $error_anrede = true;
    }
  } else {
    unset($anrede);
    $error = true;
    $error_anrede = true;
  }
}
if (isset($_POST['vorname'])) {
  if (!empty($_POST['vorname'])) {
    $vorname = $_POST['vorname'];
    if (strlen($vorname) >= 2) {
      if (preg_match('/[^A-Za-z ]/', $vorname)) {
        unset($vorname);
        $error = true;
        $error_vorname = true;
      }
    } else {
      unset($vorname);
      $error = true;
      $error_vorname = true;
    }
  } else {
    unset($vorname);
    $error = true;
    $error_vorname = true;
  }
}
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
if (isset($_POST['tel'])) {
  if (!empty($_POST['tel'])) {
    $tel = $_POST['tel'];
    if (preg_match('/[^0-9\+\(\) ]/', $tel)) {
      unset($tel);
      $error = true;
      $error_tel = true;
    }
  } else {
    unset($tel);
    $error = true;
    $error_tel = true;
  }
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
            if ($error) {
              echo "<p>Es sind ein oder mehrer Fehler aufgetreten: </p>";
              if (isset($error_anrede)) {
                echo "<p>Die Anrede Fehlt</p>";
              }
              if (isset($error_vorname)) {
                echo "<p>Der Vorname Fehlt oder ist Ungültig</p>";
              }
              if (isset($error_name)) {
                echo "<p>Der Name Fehlt oder ist Ungültig</p>";
              }
              if (isset($error_tel)) {
                echo "<p>Die Telefon Nummer Fehlt oder ist Ungültig</p>";
              }
            }
          ?>
          <form class="" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <p>Anrede: <select class="" name="anrede">
              <option value="default" <?php if(!isset($andere)) echo "selected"; ?>>Bitte Wählen</option>
              <option value="Herr" <?php if(isset($anrede)) { if($anrede == "Herr") echo 'selected'; } ?>>Herr</option>
              <option value="Frau" <?php if(isset($anrede)) { if($anrede == "Frau") echo 'selected'; } ?>>Frau</option>
            </select>
            <p>Vorname: <input type="text" name="vorname" value="<?php if(isset($vorname)) echo $vorname; ?>"></p>
            <p>Name: <input type="text" name="name" value="<?php if(isset($name)) echo $name; ?>"></p>
            <p>Telefon: <input type="text" name="tel" value="<?php if(isset($tel)) echo $tel; ?>"></p>
            <input type="submit" name="" value="Regestrieren">
          </form>
          <?php
          if (isset($anrede) && isset($vorname) && isset($name) && isset($tel)) {
          //-------------- Code von https://stackoverflow.com/a/5576700
          ?>
          <form id="add" action="adduser.php" method="post">
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
        </article>
      </div>
    </div>
  </body>
</html>
