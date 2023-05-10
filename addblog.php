<?php
    include 'header.php';
    include 'sidebar.php';
?>
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
        
          <div class="col-sm-10">
            <h1 class="text-center font-weight-bold">Add Blogs</h1>
          </div>
          <form name="myform" method="post">
        
          </div>
         
          <div class="container">
          <div class="mb-3">
          <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" required>
          </div>

          <div class="mb-3">
          <label for="Image" class="form-label">Image</label>
                <input type="file" name="images[]" multiple required>
          </div>

          <div class="mb-3">
          <label for="description" class="form-label">Description</label>
                <textarea class="form-control" name="description" rows="3" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          </div>
</form>
      </div><!-- /.container-fluname -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    
    <!-- /.content -->
  </div>
  <?php
  include 'footer.php';
  ?>