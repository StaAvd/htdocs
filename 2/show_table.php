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

      }

    else {$s='';}     
         

          try {
                $dbh = new PDO('mysql:host='.$host.';dbname='.$databasename, $user, $pass); 
              } catch (PDOExeption $exeption) {
                    echo "Connection error: " . $exeption->getMessage();
              }

              $sql = "select g.id as id, g.full_name as name, g.img_link as imagename, pr.pname as producer,stock.stock_name as stockname from goodies g inner join producer  pr on g.producer=pr.id inner join stock on g.stock=stock.stock_id ".$s;


              $smtp = $dbh -> prepare($sql); 

              $smtp -> execute(); 
             
             foreach ($smtp->fetchAll(PDO::FETCH_NUM) as $row) 
              {
                $varid=$row[0];
            echo '<td><a class="td_link" id="td_id_'.$varid.'" href=# data-toggle="modal">',$row[0],'</a></td>'; 

            echo '<td><a class="td_link" id="td_nm_'.$varid.'" href=# data-toggle="modal">',$row[1],'</a></td>';
            
            echo '<td><a class="td_link" id="td_pr_'.$varid.'" href=# data-toggle="modal">',$row[3],'</a></td>';
            echo '<td><a class="td_link" id="td_st_'.$varid.'" href=# data-toggle="modal">',$row[4],'</a></td>';
            echo '<td scope="row" class="text-center"><img class="img img-thumbnail text-center" src="img/', $row[2], '" alt="Goodies"></td>';
            echo '</tr>';  
              }

  ?>