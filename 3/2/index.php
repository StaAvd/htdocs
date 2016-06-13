<!DOCTYPE html>
<html>
	<head>
    	<meta charset="utf-8">
    	<title>Koppla till databas</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<!--     <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css"> -->
<!--     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css"> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> 
    <link href="css/bootstrap-glyphicons.css" rel="stylesheet">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- START Custom styles for this template -->
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/pulse-animation.css" rel="stylesheet">
    <link href="css/flip-animation.css" rel="stylesheet">
    <link href="css/ui.totop.css" rel="stylesheet" media="screen,projection" />
    <!-- //.Custom styles for this template -->

    <!-- Include Modernizr in the head, before any other Javascript -->
  <script src="js/modernizr-2.8.3.min.js"></script>


  </head>
  <body>
    <form method="post">
      <div>
        <p>Search by Name</p>
        <input type="text" id="searchBox" name="Box" value="">
        <input type="submit" value="Search" class="search_button"><br>
      </div>
    </form>

  <!-- <button class="btn btn-info btn-lg" type="button" data-toggle="modal" data-target="#myModal">Показать всплывающее окно</button> -->
  <div id="myModal" class="modal fade">
  <div class="modal-dialog">
  <div class="modal-content">
  <div class="modal-header"><button class="close" type="button" data-dismiss="modal">×</button>
    <h4 class="modal-title">Заголовок окна</h4>
  </div>

  <div class="modal-body">sdgjdhfkdhghkhmj</div>
  <div class="modal-footer"><button class="btn btn-default" type="button" data-dismiss="modal">Закрыть</button></div>
  </div>
  </div>
  </div>

      <!-- START SEARCH RESULTS -->
      <div class="row">
      <div class="col-md-12">
        <div class="table-responsive">
            <table class="table table-bordered table-hover">
              <thead style="color: red">
              <tr class="table-header-row">
                <th style="text-align: center">ID</th>
                <th style="text-align: center">NAME</th>
                <th style="text-align: center">PRODUSER</th>
                <th style="text-align: center">STOCK</th>
                <th class="book-cover">IMAGE</th>      
              </tr>
              </thead>
              <?php include "show_table.php";?>
            </table>
          </div><!-- /.table-responsive -->
      </div>
    </div>

<!-- <script type="text/javascript">

    $(document).ready(function(){

      $('tr').click(function(){

        alert(this.rowIndex);

      });

    });

  </script> -->

  </body>
    
</html>
