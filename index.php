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
        <div class="card mb-4">
            <div class="card-header"><i class="fas fa-table mr-1"></i>DataTable Example</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Event Name</th>
                                <th>Position</th>
                                <th>Hour</th>
                                <th>Date</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Fuzz</td>
                                <td>Edinburgh</td>
                                <td>18:00</td>
                                <td>2011/04/25</td>
                            </tr>
                            <tr>
                                <td>Garrettown</td>
                                <td>Tokyo</td>
                                <td>17:00</td>
                                <td>2011/07/25</td>
                            </tr>
                            <tr>
                                <td>City Cox</td>
                                <td>San Francisco</td>
                                <td>14:00</td>
                                <td>2009/01/12</td>
                            </tr>
                            <tr>
                                <td>Cedric Beach</td>
                                <td>Edinburgh</td>
                                <td>17:00</td>
                                <td>2012/03/29</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php
          include('./commons/scripts.php')
          ?>
    </body>
</html>
