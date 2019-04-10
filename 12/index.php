<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>Bitte füllen Sie das Formular komplett aus</h2>
    <h4>Persönliche Daten</h4>
    <form action="validate.php" method="post">
      <p>Vorname: <input type="text" name="vorname" value=""></p>
      <p>Nachname: <input type="text" name="nachname" value=""></p>
      <p>Wohnort: <input type="text" name="ort" value=""></p>
      <h4>Was Wir wissen wollen</h4>
      <p>Wie wohnen Sie?
        <input type="radio" name="wohn" value="Einfamilienhaus">Einfamilienhaus
        <input type="radio" name="wohn" value="Eigentumswohnung">Eigentumswohnung
        <input type="radio" name="wohn" value="Mehrfamilienhaus">Mehrfamilienhaus</p>
      <p>Welche TV-Sendungen sehen Sie gern?
        <input type="checkbox" name="tv[]" value="Dokumentationen">Dokumentationen
        <input type="checkbox" name="tv[]" value="Nachrichten">Nachrichten
        <input type="checkbox" name="tv[]" value="Spielfilme">Spielfilme
        <input type="checkbox" name="tv[]" value="Sport">Sport</p>
      <p>Haben Sie noch eine Nachricht für uns? <textarea name="msg" rows="8" cols="80"></textarea></p>
      <p><input type="submit"> <input type="reset"></p>
    </form>
  </body>
</html>
