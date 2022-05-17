<?php
session_start();
include('includs/header.php');
include('includs/navbar.php');
include('includs/saidbar.php');
include('config/dbcon.php');
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Registered User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!--code for check user is register or not in table thorw status-->
                <div class="card">
                 <div class="card-header">
                   <h3 class="card-title">Contact Table</h3>
                   
               </div>
            <!-- /.card-header -->
               <div class="card-body">
                 <table class="table table-bordered table-striped">
                   <thead>
                    <tr>
                   
                    <th>Id</th>
                    <th>Name</th>
                    <th>functionType</th>
                    <th>Location</th>
                    <th>Contact Number</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Status</th>
                    </tr>
                 </thead>
                 <tbody>
                <!--makw function for inter data using form in table-->
                <?php
                $query = "SELECT * FROM contact";
                $query_run = mysqli_query($conn,$query);

                if(mysqli_num_rows($query_run) > 0)
                  {
                    foreach($query_run as $row)
                     {
                       ?>
                       <tr>
                           <td><?php echo $row['Id']?></td>
                           <td><?php echo $row['Name']?></td>
                           <td><?php echo $row['FunctionType']?></td>
                           <td><?php echo $row['Location']?></td>
                           <td><?php echo $row['Contact']?></td>
                           <td><?php echo $row['StartDate']?></td>
                           <td><?php echo $row['EndDate']?></td>
                           
                           
                           <td>
                           <form action="code.php" method="POST">
                               <input type="hidden" name="Id" value="<?php echo $row['Id'];?>">
                              <button type="submit" name="delete_btn"class="btn btn-danger btn-sm" data-inline="true" >Delete</button>

                              </form>
                     </td>
                              </form>
                       </tr>
                      <?php
                     }
                  }
                  else
                  {
                ?>
                
                <tr>
                  <td>no record found</td>
                </tr>
                <?php
                  }
                  ?>
                  <!--end function-->
                </tbody>
                </table>
        </div>
    </div> 
</div>
</div>
</div>
</div>