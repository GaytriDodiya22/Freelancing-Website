<?php
include('authentication.php');
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
              <li class="breadcrumb-item active">Edit - Registered User</li>
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
                   <h3 class="card-title">Registered User</h3>
                   <a href="registered.php"  class="btn btn-danger float-right">BACK</a>
               </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                    <form action="code.php" method="POST">
        <div class="modal-body">
            <?php
            if(isset($_GET['userId']))
            {
            $userId = $_GET['userId'];
            $query = "SELECT * FROM signup WHERE id='$userId' LIMIT 1";
            $query_run = mysqli_query($conn,$query);
            
            if(mysqli_num_rows($query_run) > 0)
            {
                foreach($query_run as $row)
                {
                    ?>
                    <input type="hidden" name="id" value="<?php echo $row['id']?>">
                    <div class="form-group">
                    <label for="">User Name</label>
                    <input type="text" name="UserName" value="<?php echo $row['UserName']?>" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" name="email" value="<?php echo $row['email']?>"  class="form-control" placeholder="email">
                     </div>
                    <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" name="password" value="<?php echo $row['password']?>" class="form-control" placeholder="password">
                    </div>
                    <?php
                }
            }
            else
            {
               echo"<h4>Record not found</h4>";
            }
        }
            ?>
        
      </div>
      <div class="modal-footer">
        <button type="submit" name="UpdateUser" class="btn btn-info">Update </button>
      </div>
    </div>
  </div>
</div>
</form>
                    </div>
                </div>
            </table>
        </div>
    </div> 
</div>
</div>
</div>
</div>
</div>
<?php
include('includs/script.php');
?>   
<?php
include('includs/footer.php');
?>