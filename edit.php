<h2> Edytuj pozycję </h2>
<style>
	td a:link {
		font-weight: bold;
  color: #ddc9b4;
  background-color: transparent;
  text-decoration: none;
}

td a:visited {
  color: #ddc9b4;
  background-color: transparent;
  text-decoration: none;
}

td a:hover {
  color: #ddc9b4;
  background-color: transparent;
  text-decoration: underline;
}

td a:active {
  color: #ddc9b4;
  background-color: transparent;
  text-decoration: underline;
}
</style>

<?PHP
$link = mysqli_connect("localhost", "anowicka", "spinowickabaza", "anowicka") or die ("Nie mozna polaczyc sie z baza");

?>

<?PHP
if(isset($_GET["zakup"]))
{  
    $zapytanie = "SELECT *  
                  FROM budzet 
                  where id=".$_GET["zakup"]."";        
    
    $wyniki = mysqli_query($link, $zapytanie);
    if (!mysqli_num_rows($wyniki))
    {
        echo '<b>Brak takiego zakupu</b>.';
        exit;
    }
    
    $wiersz = mysqli_fetch_assoc($wyniki); 
    
   echo '
    <form action="index.php?id=41" method="POST">
    <input type="hidden" name="id" value="'.$_GET['zakup'].'"/>
     <label for="zakup">Co kupiłaś/kupiłeś?</label><br>
  <input type="text" id="zakup" name="zakup" value="'.$wiersz['zakup'].'"><br>
  <label for="koszt">Ile  kosztowało? [zł]</label><br>
  <input type="text" id="koszt" name="koszt" value="'.$wiersz['koszt'].'"><br>
  <label for="data">Birthday:</label><br>
  <input type="date" id="data" name="data" value="'.$wiersz['data'].'"><br>
 
  <label for="kategoria">Wybierz kategorię</label><br>
  <select id="kategoria" name="kategoria">
  <option value="---">---</option>
    <option value="jedzenie">Jedzenie</option>
    <option value="kosmetyki">Kosmetyki</option>
    <option value="oplaty">Opłaty</option>
    <option value="osobiste">Wydatki osobiste </option>
	<option value="przyjemnosci">Przyjemności</option>
  </select><br><br>
   <input type="submit" name="wyslij" value="Zmiana danych">
    </form>
   ';         
   die();
}
?>


<?PHP
    $zapytanie="select * FROM budzet";
    $wynik = mysqli_query($link, $zapytanie);
?>

<table border="1" style="margin: 0 auto">
<tr>
<td width="40"><b>ID</b></td>
<td width="90"><b>Zakup</b> </td>
<td width="90"><b>Koszt</b> </td>
<td width="120"><b>Data</b> </td>
<td width="80"><b>Kategoria</b> </td>
<td><b>Edytuj:</b></td>
</tr>

<?PHP
         while ($line = mysqli_fetch_array($wynik))
          {
             echo "<tr>
               <td align=\"center\">".$line['id']."</td>
                   <td align=\"center\">".$line['zakup']."</td>
                   <td align=\"center\">".$line['koszt']."</td>
                   <td align=\"center\">".$line['data']."</td>
                   <td align=\"center\">".$line['kategoria']."</td>                 
                   <td align=\"center\"><a href=\"index.php?id=4&zakup=".$line['id']."\">Edytuj</a></td>
				   </tr>";
          }
mysqli_close($link);
?>
</table>