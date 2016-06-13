<?php 
/*  $user='u152143763_db1';
  $databasename='u152143763_db1';
  $host='mysql.hostinger.se';
  $pass='Evian09102006';*/
  $user='root';
  $databasename='db1';
  $host='localhost';
  $pass='MySQL';
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

        /*      $sql = "select g.id as id, g.full_name as name, g.img_link as imagename, pr.pname as producer,stock.stock_name as stock from goodies g inner join producer  pr on g.producer=pr.id inner join stock on g.stock=stock.stock_id ".$s;*/
        $sql = "select * from heroes";


              $smtp = $dbh -> prepare($sql); 

              $smtp -> execute(); 
              $colcount = $smtp->columnCount();
              
             
             foreach ($smtp->fetchAll(PDO::FETCH_NUM) as $row) 
              {
                $id=$row[0];
              echo '<tbody style="text-align: center">';
              echo '<tr style="border-bottom: 1px solid red;">';
              echo '<td><a id="td_id_'.$id.'" href=# onclick="displayData(this.id,'.$id.')" data-toggle="modal" data-target="#myModal">',$row[0],'</a></td>'; 
              echo '<td><a id="td_nm_'.$id.'" href=# onclick="displayData(this.id,'.$id.')" data-toggle="modal" data-target="#myModal">',$row[1],'</a></td>';
              echo '<td><a id="td_pr_'.$id.'" href=# onclick="displayData(this.id,'.$id.')" data-toggle="modal" data-target="#myModal">',$row[3],'</a></td>';
              echo '<td><a id="td_st_'.$id.'" href=# onclick="displayData(this.id,'.$id.')" data-toggle="modal" data-target="#myModal">',$row[4],'</a></td>';
     echo '<th scope="row" class="text-center"><img class="img img-thumbnail text-center" src="img/', $row[2], '" alt="Goodies"></th>';
              echo '</tr>';  
              echo '</tbody>'; 
                     
              } 

 function displayData($el_id,$var_id)
  {
    echo '<h1>bla-bla</h1>';
  }


  ?>