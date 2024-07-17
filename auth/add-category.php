<?php

session_start();

if(isset($_SESSION["username"])){

    require_once('admin-header.php');
    require_once('admin-sidebar.php');
    require_once('admin-topbar.php');
  ?>


<div class="content-wrapper">
    <div class="content">

        <form action="category-save.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="form-group col-md-12 mb-4">
                    <input type="text" class="form-control input-lg" name="name" id="name" aria-describedby="nameHelp"
                        placeholder="Category Name">
                </div>


                <div class="form-group col-md-12 mb-4">
                    <input type="file" class="form-control input-lg" name="cat_image" id="image"
                        aria-describedby="imageHelp" placeholder="Category Image">
                </div>




                <button type="submit" class="btn btn-primary btn-pill mb-4">Save</button>


            </div>
    </div>
    </form>

</div>
</div>


<?php
    require_once('admin-footer.php');

?>

<?php
}
else{
    $mes =  "Please login";
    header("location: login.php?message=$mes");
    
}




?>