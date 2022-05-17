<?php
include('authentication.php');
include('includs/header.php');
include('includs/navbar.php');
include('includs/saidbar.php');
include('config/dbcon.php');
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
   

  <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Add Users</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="code.php" method="POST">
      <div class="modal-body">
        <div class="form-group">
            <label for="">User Name</label>
            <input type="text" name="UserName"class="form-control" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <span class="email_error"></span>
            <input type="email" name="email" class="form-control email_id" placeholder="email">
        </div>
       
        <div class="row">
          <div class="col-md-6">
          <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" class="form-control" placeholder="password">
        </div>
          </div>
          <div class="col-md-6">
          <div class="form-group">
            <label for="">Conform Password</label>
            <input type="password" name="Cpassword" class="form-control" placeholder="conform password">
        </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="addUser" class="btn btn-primary">Save </button>
      </div>
    </div>
  </div>
</div>
</form>


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
               
              
                <?php
                if(isset($_SESSION['status']))
                {
                    echo"<h4>".$_SESSION['status']."</h4>";
                    unset($_SESSION['status']);
                }
                ?>


               <div class="card">
                 <div class="card-header">
                   <h3 class="card-title">Registered User</h3>
                   <a href="#" data-toggle="modal" data-target="#exampleModal" class="btn btn-primary float-right">Add User</a>
               </div>
            <!-- /.card-header -->
               <div class="card-body">
                 <table id="example1" class="table table-bordered table-striped">
                   <thead>
                    <tr>
                   
                    <th>ID</th>
                    <th>UserName</th>
                    <th>Email</th>
                    <th>status</th>
                    </tr>
                 </thead>
                 <tbody>
                <!--makw function for inter data using form in table-->
                <?php
                $query = "SELECT * FROM signup";
                $query_run = mysqli_query($conn,$query);

                if(mysqli_num_rows($query_run) > 0)
                  {
                    foreach($query_run as $row)
                     {
                       ?>
                       <tr>
                           <td><?php echo $row['id']?></td>
                           <td><?php echo $row['UserName']?></td>
                           <td><?php echo $row['email']?></td>
                           <td>
                               <a href="registerEdit.php?userId=<?php echo $row['id'];?>" class="btn btn-info ">Edit</a>
                               <form action="code.php" method="POST">
                               <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                              <button type="submit" name="delete_btn"class="btn btn-danger btn-sm" data-inline="true" >Delete</button>

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
    
<?php include('includs/script.php');?>

<?php include('includs/footer.php');?>