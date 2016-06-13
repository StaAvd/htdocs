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
  $test='TEST_TEST_TEST';
  $tab='';
  $tab2='';

$tab1='<div class="row">'.
      '<div class="col-md-12">'.
      '<div class="table-responsive">'.
      '<table class="table table-bordered table-hover">'.
      '<thead style="color: red">'.
      '<tr class="table-header-row">'.
      '<th style="text-align: center">ID</th>'.
      '<th style="text-align: center">NAME</th>'.
      '</tr>'.
      '</thead>'.'
      <tbody style="text-align: center">'.
      '<tr>';

$tab3='</tr></tbody></table></div></div></div>';              


/*if (isset($_GET['width']) AND isset($_GET['height'])) {
        // Здесь пишем код, который выполнится, если переменные
        // $width и $height существуют. Их, например, можно записать в
        // текстовый файл или добавить в базу данных
}
else {
        // Здесь пишем код, который выполнится, если переменные не 
        // существуют или можно вообще не использовать else {}
}
*/

if (isset($_POST['query'])) 
  {       
          $sql=$_POST['query'];
          //echo $sql;
  $sql="select * from stock";

try {
  $pdo = new PDO('mysql:host=localhost;dbname=db1','root','mysql',[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
  $cnt = $pdo->query($sql);
 foreach ($cnt as $row) {
    $tab2=$tab2.'<td>'.$row[0].'   '.$row[1].'</td>';
 
  }
$tab=$tab1.$tab2.$tab3;

} catch (PDOException $e) {
  echo "Ошибка выполнения запроса: " . $e->getMessage();
}          
}
echo $tab;
  ?>