<?php
include('header.php');
include('side.php');
?>

<!--main-container-part-->
<div id="content">
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a></div>
    <h1><a href="#exampleModal" data-toggle="modal" class="btn btn-primary">ADD USER</a></h1>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
  <div class="container-fluid">
  <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Data table</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>Entry Date</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
              <?php
              include('connection.php');
              $sql = 'SELECT * FROM tbl_users';
              $res = $conn->query($sql);
              $no = 0;
              while ($row = $res->fetch_assoc()){
                $no++;
              
              ?>
                <tr class="gradeX">
                  <td><?php echo $no; ?></td>
                  <td><?php echo $row['first_name']; ?></td>
                  <td><?php echo $row['last_name']; ?></td>
                  <td><?php echo $row['entry_date'];?></td>
                  <td>
                  <a href="" class="btn btn-primary">Edit</a>
                  <a href="" class= "btn btn-danger">Delete</a>
                  </td>
                </tr>
              <?php } ?>
                             </tbody>
            </table>
          </div>
        </div>
     </div>
</div>

<!--end-main-container-part-->

<?php include('footer.php'); ?>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form action="process.php" method="post">
<div class="form-group">
<label for="first_name">First Name</label>
<input type="text" class="form-control" id="first_name" name="first_name" required>
</div>
<div class="form-group">
<label for="last_name">Last Name</label>
<input type="text" class="form-control" id="last_name" name="last_name" required>
</div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <!-- <button type="button" name="save" class="btn btn-primary">Save changes</button> -->
        <input type="submit" value="Submit" name="save" class="btn btn-primary">
      </div>
      </form>
    </div>
  </div>
</div>