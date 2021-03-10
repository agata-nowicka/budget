<p><b>Następujacy wydatek zostanie dodany do bazy:</b></p>

<table border="1" style="margin: 0 auto">
<tr><td width="120"><b>Zakup</b> </td><td width="200"><?php echo $_POST["zakup"]; ?></td></tr>
<tr><td width="120"><b>Koszt</b> </td><td width="200"><?php echo $_POST["koszt"];?></td></tr>
<tr><td width="120"><b>Data</b> </td><td width="200"><?php echo $_POST["data"];?></td></tr>
<tr><td width="120"><b>Kategoria</b> </td><td width="200"><?php echo $_POST["kategoria"];?> </td></tr>
</table>

<br>

<?PHP
$link = mysqli_connect("localhost", "anowicka", "spinowickabaza", "anowicka") or die ("Nie mozna polaczyc sie z baza");

if($link===0) echo "Nie polaczono z baza";
?>

<?PHP
   $zapytanie = "INSERT INTO budzet(zakup,koszt,data,kategoria)
                     VALUES(
                     '".$_POST["zakup"]."',
                     '".$_POST["koszt"]."',
                     '".$_POST["data"]."',
                     '".$_POST["kategoria"]."')";                     




        $wynik = mysqli_query($link, $zapytanie);

        if($wynik)
        {
            echo "Dane zostaly zapisane.<br>";
        }
        else
        {    
              echo "Dane nie zostaly zapisane.<br>";
        }
mysqli_close($link);
?>