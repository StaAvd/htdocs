<?php 

$database = "artiklarDB"; //Databasen
$password = "MySQL";


try {
		$dbh = new PDO('mysql:host=localhost;dbname='.$database, 'root', $password); //Försöker ansluta
} catch (PDOExeption $exeption) {
		echo "Connection error: " . $exeption->getMessage();
}



if (!empty($_POST['search'])) { //Om sökrutan inte är tom
    $name = $_POST["search"];
    if ($name != '*')
        $sql = "SELECT * FROM books WHERE author LIKE '%$name%' OR title LIKE '%$name%' OR genre LIKE '%$name%'";
    else
        $sql = "SELECT * FROM books";
}
else{                       //Om sökrutan är tom
    $sql = "";
}


$smtp = $dbh -> prepare($sql); //Förbereder att utföra SQL.

$smtp -> execute(); //Kör SQL

	  

foreach($smtp as $heroData){
     echo '<tbody>';
     echo '<tr style="border-bottom: 1px solid red;">';
     echo '<th scope="row" class="text-center"><img class="img img-thumbnail text-center" src="img/', $heroData['image'], '" alt="Sports"></th>';         
     echo '<td>',$heroData['author'],'</td>';    
     echo '<td>',$heroData['title'],'</td>';          
     echo '<td>',$heroData['genre'],'</td>';
     echo '<td class="text-right">', $heroData['price'],' kr</td>';
     echo '<td class="text-center">', $heroData['yearpublish'],'</td>';                  
     echo '<td>',$heroData['description'],'</td>';
     echo '</tr>';   
     echo '</tbody>';                       
}        