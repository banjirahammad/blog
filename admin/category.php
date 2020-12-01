<?php

  require_once('../function/admin.php');
  $page_content->getSection('header');

  if (isset($_POST['categorynane'])) {

    $category_name = $_POST['categorynane'];
    $query = "INSERT INTO category (category_name) VALUES ('$category_name') ";
    $search = "SELECT * FROM category WHERE category_name = '$category_name' ";
    $alredy_exist = $db->select($search);
    if ($alredy_exist) {
      echo "This Category Already Exist";
    }
    else {
      $insert = $db->insert($query);
      if ($insert) {
        echo "New Category Add Successfull";
      }
      else {
        echo "New Category Add Faild!";
      }
    }

  }


  if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $query = "DELETE FROM `category` WHERE `category_id` = $id";
    $result = $db->delete($query);
  }


 ?>
 <!-- Begin Page Content -->
 <div class="container-fluid">

   <!-- Page Heading -->
   <div class="d-sm-flex align-items-center justify-content-between mb-4">
     <h1 class="h3 mb-0 text-gray-800">Category</h1>
   </div>
   <div class="row">
      <div class="col-md-7">
        <div class="card">
          <div class="card-header bg-primary text-white">
            Add new Category
          </div>
          <div class="card-body pt-5">
            <form action="" method="post">
              <div class="form-group row">
                <label for="categorynane=" class="col-sm-4 col-form-label">Category Name</label>
                <div class="col-sm-8">
                  <input type="text" name="categorynane" class="form-control" id="categorynane" placeholder="please type new category name">
                </div>
              </div>
              <div class="form-group text-right">
                  <input type="submit" class=" btn btn-primary"  value="Add Category">
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="col-md-5">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
          <thead>
            <tr>
              <th>#</th>
              <th>Category Name</th>
              <th>Action</th>
            </tr>
          </thead>
          <!-- <tfoot>
            <tr>
              <th>#</th>
              <th>Category Name</th>
              <th>Action</th>
            </tr>
          </tfoot> -->
          <tbody>

            <?php
              $query = "SELECT * FROM category ";
              $result = $db->select($query);
              $i = 1;

              while ($category = mysqli_fetch_array($result)) {
            ?>

            <tr>
              <td><?=$i;$i++; ?></td>
              <td><?=$category['category_name'] ?></td>
              <td>
                <a href="editcategory.php?id=<?=$category['category_id'] ?>"title="Edit" class="text-primary" > <i class="fas fa-edit"></i> </a>
                <a href="?delete=<?=$category['category_id'] ?>"title="Delete" class="text-danger" > <i class="fas fa-trash"></i> </a>

              </td>
            </tr>

          <?php } ?>


          </tbody>
        </table>

      </div>

   </div>

 </div>
 <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php
  $page_content->getSection('footer');

?>
