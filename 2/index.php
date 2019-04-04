<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <form class="" action="#" method="post">
      <fieldset>
        <label>Anrede </label>
        <label for="frau">
          <input type="radio" name="anrede" id="frau" value="frau"> Frau
        </label>
        <label for="herr">
          <input type="radio" name="anrede" id="herr" value="herr"> Herr
        </label>
        <br>
        <label for="vorname"> Vorname</label>
        <input type="text" name="vorname" id="vorname">
        <br>
        <label for="nachname">Nachname </label>
        <input type="text" name="nachname" id="nachname">
        <br>
        <label for="adresse">Adresse </label>
        <textarea name="adresse" rows="5" cols="50" id="adresse"></textarea>
      </fieldset>
      <fieldset>
        <label for="sprache">Muttersprache </label>
        <select name="sprache" id="sprache">
          <option value="DE">Deutsch</option>
          <option value="EN" selected>Englisch</option>
          <option value="FR">Französisch</option>
          <option value="IT">Italienisch</option>
          <option value="SP">Spanisch</option>
        </select>
      </fieldset>
      <input type="submit" value="Absenden">
      <input type="reset" value="Reset">
    </form>
  </body>
</html>
