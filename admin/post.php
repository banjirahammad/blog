<?php

  require_once('../function/admin.php');
  $page_content->getSection('header');




 ?>
 <!-- Begin Page Content -->
 <div class="container-fluid">

   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
     <h1 class="h3 mb-0 text-gray-800">Posts</h1>
   </div>
   <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header bg-primary text-white">
            Add new Posts
          </div>
          <div class="card-body pt-5">
            <form action="" method="post">
              <div class="form-group row">
                <label for="post_title" class="col-sm-3 col-form-label">Post Title</label>
                <div class="col-sm-9">
                  <input type="text" name="post_title" class="form-control" id="post_title" placeholder="Write here Post Title" >
                </div>
              </div>
              <div class="form-group row">
                <label for="post_category" class="col-sm-3 col-form-label">Post Category</label>
                <div class="col-sm-9">
                  <select class="form-control" name="post_category" id="post_category">

                    <option value="" >Select Category</option>
                    <?php
                      $query = "SELECT * FROM category ";
                      $result = $db->select($query);

                      while ($category = mysqli_fetch_array($result)) {
                    ?>


                    <option value="<?=$category['category_name'] ?>"><?=$category['category_name'] ?></option>

                    <?php } ?>



                  </select>
                  <!-- <input type="text" name="postcategory" class="form-control" id="postcategory" placeholder="Write here Post Category" > -->
                </div>
              </div>
              <div class="form-group row">
                <label for="post_details" class="col-sm-3 col-form-label">Post Details</label>
                <div class="col-sm-9">
                  <textarea type="text" name="post_details" class="form-control" id="post_details" placeholder="Write here Post details" ></textarea>
                </div>
              </div>
              <div class="form-group row">
                <label for="post_image" class="col-sm-3 col-form-label">Post Image</label>
                <div class="col-sm-9">
                  <input type="file" name="post_image" class="form-control" id="post_image" >
                </div>
              </div>
              <div class="form-group row">
                <label for="post_author" class="col-sm-3 col-form-label">Author Name</label>
                <div class="col-sm-9">
                  <input type="text" name="post_author" class="form-control" id="post_author" placeholder="Write here The Post Author Name" >
                </div>
              </div>


              <div class="form-group text-center">
                  <input type="submit" class=" btn btn-primary"  value="Add Category">
              </div>
            </form>
          </div>
        </div>
      </div>

   </div>

 </div>
 <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php
  $page_content->getSection('footer');

?>
