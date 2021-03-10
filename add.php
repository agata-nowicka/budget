<h2> Dodaj pozycję do listy wydatków </h2>



<form action="index.php?id=31" method="POST">
  <label for="zakup">Co kupiłaś/kupiłeś?</label><br>
  <input type="text" id="zakup" name="zakup" required><br>
  <label for="koszt">Ile  kosztowało? [zł]</label><br>
  <input type="text" id="koszt" name="koszt" required><br>
  <label for="data">Kiedy?</label><br>
  <input type="date" id="data" name="data" required><br>
 
  <label for="kategoria">Wybierz kategorię</label><br>
  <select id="kategoria" name="kategoria" required>
  <option value="---">---</option>
    <option value="jedzenie">Jedzenie</option>
    <option value="kosmetyki">Kosmetyki</option>
    <option value="opłaty">Opłaty</option>
    <option value="osobiste">Wydatki osobiste </option>
	<option value="przyjemnosci">Przyjemności</option>
  </select><br><br>
   <input type="submit" value="Dodaj">
</form>