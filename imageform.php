<?php
include('includs/header.php');
include('includs/navbar.php');
include('includs/saidbar.php');

?>

<div class="section">
    
  <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5 my-5">
                <div class="card-body">
                       
                       <form action="imageupload.php" method="POST" enctype="multipart/form-data">
                           <div class="form-group">
                               <label  >upload image</label>
                               <input type="file" name="image"  class="form-control">
                           </div>
                           <div class="form-group">
                              <button type="submit" name="submit" value="update"class="btn btn-primary btn-block">Upload</button>
                           </div>
                       </form>
                   </div>
               </div>
           </div>
       </div>
   </div>
</div>
</section>
<?php
include('includs/script.php');
?>
<?php
include('includs/footer.php');
?>