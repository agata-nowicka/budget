<h2>Edytuj lub usuń pozycję</h2>

<?PHP
$link = mysqli_connect("localhost", "anowicka", "spinowickabaza", "anowicka") or die ("Nie mozna polaczyc sie z baza");

if($link===0) echo "Nie polaczono z baza";
?>


<?PHP
if(isset($_POST['wyslij']))
{

   $zapytanie = "UPDATE budzet SET                    
                     zakup = '".$_POST["zakup"]."',
                     koszt = '".$_POST["koszt"]."',
                     data = '".$_POST["data"]."',
                     kategoria = '".$_POST["kategoria"]."'
                     WHERE id=".$_POST["id"];

        echo "<pre>$zapytanie</pre>";


        $wynik = mysqli_query($link, $zapytanie);

        if($wynik)
        {
            echo "<b>Dane zostaly zapisane.</b><br>";
        }
        else
        {    
              echo "<b>Dane nie zostaly zapisane.</b><br>";
        }    
}
mysqli_close($link);
?>