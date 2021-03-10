

<!DOCTYPE html >
<html>
<head>

<title>Miesięczny budżet domowy - Agata Nowicka</title>

  <meta http-equiv="content-type" content="text/html; charset=UTF-8">
  <meta http-equiv="content-language" content="pl">
  <meta name ="description" content="Formularz budżetu domowego">
  <meta name="author" content="Agata Nowicka">
<link rel="stylesheet" href="styles.css">


</head>
<body>
    <header><h1>Budżet domowy</h1></header>
    <aside class="menu">
           <a class="menu_l active" href="index.php?id=1">Strona główna</a>
           <a class="menu_l" href="index.php?id=2">Pokaż dotychczasowe wydatki</a>
           <a class="menu_l" href="index.php?id=3">Dodaj nową pozycję</a>
  	<a class="menu_l" href="index.php?id=4">Edytuj</a>        
    </aside>
    <main>
	
	
<?PHP
    if(empty($_GET["id"])) $_GET["id"]=1;
    if($_GET["id"]==1) include("main.php");
    if($_GET["id"]==2) include("show.php");
    if($_GET["id"]==3) include("add.php");
    if($_GET["id"]==4) include("edit.php"); 
    if($_GET["id"]==31) include("odbieram.php"); 
   if($_GET["id"]==41) include("edycja_po.php");

?>
	</main>   
    <footer>Agata Nowicka <br/>
    ZLI 2021
    </footer>

</body>
</html>