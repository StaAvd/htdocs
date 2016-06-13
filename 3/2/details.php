<?php 
/*  $user='u152143763_db1';
  $databasename='u152143763_db1';
  $host='mysql.hostinger.se';
  $pass='Evian09102006';*/
  $user='root';
  $databasename='db1';
  $host='localhost';
  $pass='mysql';
  $sql='';





  $x=$s=''; 
    if (!empty($_POST['Box'])) $x=$_POST["Box"];

    if ($x != '')
     {
      $s="WHERE g.full_name LIKE '%$x%' or pr.pname LIKE '%$x%'";
      //echo '<h2>',$s,'</h2>';
     }
    else {$s='';}     

          try {
                $dbh = new PDO('mysql:host='.$host.';dbname='.$databasename, $user, $pass); 
              } catch (PDOExeption $exeption) {
                    echo "Connection error: " . $exeption->getMessage();
              }

              $sql = "select g.id as id, g.full_name as name from goodies g inner join producer  pr on g.producer=pr.id inner join stock on g.stock=stock.stock_id";


              $smtp = $dbh -> prepare($sql); //Förbereder att utföra SQL.

              $smtp -> execute(); //Kör SQL
              $colcount = $smtp->columnCount();
              
              /*while ($result = $smtp->fetch(PDO::FETCH_NUM))
              {
              print_r($result);
              print("\n");
              }*/
        
             
             foreach ($smtp->fetchall(PDO::FETCH_NUM) as $row) 
              {/*print $row;*/
              /*echo $row[0].'  '.$row[1].'<br>';*/
              } 

  ?>