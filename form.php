<?php
  if (isset($_GET['mode']))  {

    $mode = $_GET['mode'];

    $title = '';

      if ($mode == 'add') {

        $title = 'Inserisci un nuovo evento';

      } elseif ($mode == 'edit') {

          $title = 'Modifica l\'evento';
      }

  } else {
    header('Location: 404.html');
  }

 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
      <?php
      include('./commons/head.php')
       ?>
    </head>
    <body class="sb-nav-fixed">
      <?php
        include('./commons/navbar.php');
        ?>
        <div class="card my-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>DataTable Example</div>
            <div class="card-body">
            <h1><?php echo $title
             ?></h1>
            </div>
        </div>
        <?php
          include('./commons/scripts.php')
          ?>
    </body>
</html>
