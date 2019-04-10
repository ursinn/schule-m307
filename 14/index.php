<?php
$error = false;
$msg = "";
if (isset($_POST['anrede'])) {
  if (!empty($_POST['anrede'])) {
    if (isset($_POST['vorname']) && !empty($_POST['vorname'])) {
      if (isset($_POST['nachname']) && !empty($_POST['nachname'])) {
        if (isset($_POST['email']) && !empty($_POST['email'])) {
          $anrede = $_POST['anrede'];
          $vorname = $_POST['vorname'];
          $nachname = $_POST['nachname'];
          $mail = $_POST['email'];

          if (strlen($vorname) > 2 && strlen($nachname) > 2) {
            if (strpos($mail, '@') != 0 && strpos($mail, '.') != 0) {
              $pos = strrpos($mail, '@');
              $pos2 = strrpos($mail, '.');
              if ($pos < $pos2-1) {
                if (isset($_POST['Bewerben'])) {
                  $msg = "Herzlichen Dank, {$anrede} {$nachname}, für ihre Bewerbungsanfrage. Unsere <br> Personalabteilung wird per Mail - an ihre Adresse {$mail} - Kontakt zu <br> Ihnen aufnehmen.";
                } else if (isset($_POST['Newsletter'])) {
                  $msg = "Sie werden nun den Newsletter per Mail an {$mail} erhalten";
                } else if (isset($_POST['Info'])) {
                  $msg = "Sie werden nun Infomaterial per Mail an {$mail} erhalten.";
                } else {
                  $error = true;
                  $msg = "Unbekannter Fehler!";
                }
              } else {
                $error = true;
                $msg = "E-Mail Adresse Ungültig!";
              }
            } else {
              $error = true;
              $msg = "E-Mail Adresse Ungültig!";
            }
          } else {
            $error = true;
            $msg = "Vorname oder Nachname zu kurz";
          }
        } else {
          $error = true;
          $msg = "E-Mail Adresse Vergessen!";
        }
      } else {
        $error = true;
        $msg = "Nachname Vergessen!";
      }
    } else {
      $error = true;
      $msg = "Vorname Vergessen!";
    }
  } else {
    $error = true;
    $msg = "Anrede Vergessen!";
  }
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Bewerbung, Newsletter oder Infomaterial</h2>
    <p>Bitte nennen sie uns ihr Anliegen:</p>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <p>Anrede:
        <input type="radio" name="anrede" value="Herr" <?php if(isset($_POST['anrede']) && $_POST['anrede'] == "Herr") echo "checked"; ?>>Herr
        <input type="radio" name="anrede" value="Frau" <?php if(isset($_POST['anrede']) && $_POST['anrede'] == "Frau") echo "checked"; ?>>Frau</p>
      <p>Vorname <input type="text" name="vorname" value="<?php if(isset($_POST['vorname'])) echo $_POST['vorname']; ?>"></p>
      <p>Nachname <input type="text" name="nachname" value="<?php if(isset($_POST['nachname'])) echo $_POST['nachname']; ?>"></p>
      <p>Mailadresse <input type="email" name="email" value="<?php if(isset($_POST['email'])) echo $_POST['email']; ?>"></p>
      <p>
        <input type="submit" name="Bewerben" value="bei ihnen bewerben">
        <input type="submit" name="Newsletter" value="Newsletter abonieren">
        <input type="submit" name="Info" value="Infomaterial anfordern">
      </p>
      <?php
        if (!$error)
          echo $msg;
        else
          echo "Es ist folgender Fehler aufgetreten: {$msg}";
      ?>
    </form>
  </body>
</html>
