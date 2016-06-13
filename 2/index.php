<!DOCTYPE html>
<html>
	<head>
    	<meta charset="utf-8">
    	<title>Koppla till databas</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script> 
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css"> 
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
<!--     <link href="css/flip-animation.css" rel="stylesheet"> -->
<!--     <link href="css/ui.totop.css" rel="stylesheet" media="screen,projection" /> -->
    <!-- //.Custom styles for this template -->

    <!-- Include Modernizr in the head, before any other Javascript -->
  <!-- <script src="js/modernizr-2.8.3.min.js"></script> -->


  </head>
  <body>

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
              <tbody style="text-align: center">
              <?php include "show_table.php";?>
              </tbody>
            </table>
          </div><!-- /.table-responsive -->
      </div>
    </div>

  <!-- <button class="btn btn-info btn-lg" type="button" data-toggle="modal" data-target="#myModal">Показать всплывающее окно</button> -->
  <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog">
  <div class="modal-content">
  <div class="modal-header"><button class="close" type="button" data-dismiss="modal">×</button>
    <h4 class="modal-title">Заголовок окна</h4>
  </div>
  <div class="modal-body"><?php include "details.php";?></div>
  <div class="modal-footer"><button class="btn btn-default" type="button" data-dismiss="modal">Закрыть</button></div>
  </div>
  </div>
  </div>


 <script>

    $(document).ready(function(){

      $('a.td_link').click(function()
      {
        var $td_fullname=$(this).attr('id');
        var $td_id=$td_fullname.slice(6);
        var $td_name=$td_fullname.slice(0,6);
        
        if ($td_name=='td_id_')
          { 
            $q="select g.id as id, g.full_name as name from goodies g where g.id=" + $td_id;
          }
        else if ($td_name=='td_st_'){
          $q="select stock.stock_id as st_id, stock.stock_name as stockname from goodies g inner join stock on g.stock=stock.stock_id where g.id=" + $td_id;
        }  
        else $q='';
        
        // $.get('details.php',{query:'1'});
        
       
        $.ajax({
        url: 'details.php',
        data :'query="'+ $q +'"',
        //data :'query="'+$q+'"',
        //data :'query="select stock_id, stock_name FROM stock"',
        type : "POST",
        success: function (data)
         {
          //alert (data);
           $(".modal-body").html(data);
        }
         ,
        error: function(){alert ("No PHP script: ");} 
         });
        
        



          
          $('#myModal').modal({
        //установим модальному окну следующие параметры:
          backdrop: 'static',
          keyboard: true
          });

      });

      $('#myModal').on('show.bs.modal', function (event) {
         var modal = $(this);
         //modal.find('.modal-body').text();
      })

    });

  </script>

  </body>
    
</html>
