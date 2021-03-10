<h2>Usunięto pozycję</h2>

<?PHP
$link = mysqli_connect("localhost", "anowicka", "spinowickabaza", "anowicka") or die ("Nie mozna polaczyc sie z baza");

if($link===0) echo "Nie polaczono z baza";
?>


<?PHP
if(isset($_POST['usun']))
{

   $zapytanie = "DELETE FROM budzet 
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