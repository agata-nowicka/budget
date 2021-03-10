<h2> Dotychczasowe wydatki </h2>

<?PHP
$baza = mysqli_connect("localhost", "anowicka", "spinowickabaza", "anowicka") or die ("Nie mozna polaczyc sie z baza");

        
if($baza===0) echo "Nie polaczono z baza<br>";
    
$lista='select * from budzet';
$wynik = mysqli_query($baza, $lista);
?>


<table border="1" style="width:80%; margin: 0 auto">
<tr>
<td><b>ID</b></td>
<td><b>Zakup</b> </td>
<td><b>Koszt</b> </td>
<td><b>Data</b> </td>
<td><b>Kategoria</b> </td>
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
                  
                   </tr>";
          }
mysqli_close($baza);
?>
</table>
