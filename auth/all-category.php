<?php

session_start();

if(isset($_SESSION["username"])){

    require_once('admin-header.php');
    require_once('admin-sidebar.php');
    require_once('admin-topbar.php');
  ?>


<!-- ====================================
        ——— CONTENT WRAPPER
        ===================================== -->
<div class="content-wrapper">
    <div class="content">
        <!-- For Components documentaion -->
        <div class="card card-default">
            <div class="px-6 py-4">
                <h1>
                    <?php
                    if(isset($_GET['msg'])){
                        echo $_GET['msg'];
                    }
                  
                    // ?>
                </h1>
            </div>
        </div>

        <!-- Products Inventory -->
        <div class="card card-default">
            <div class="card-header">
                <h2>Products Inventory</h2>

                <a class="btn mdi mdi-code-tags" data-toggle="collapse" href="#collapse-data-tables" role="button"
                    aria-expanded="false" aria-controls="collapse-data-tables"> </a>

            </div>
            <div class="card-body">
                <div class="collapse" id="collapse-data-tables">
                    <pre class="language-html mb-4">

      </pre>
                </div>
                <table id="productsTable" class="table table-hover table-product" style="width:100%">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Product Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                    
                    require_once('../db/config.php');
                    //save
                    $query = "SELECT * FROM category";
                    $sql = $conn->prepare($query);

                    // Execute the query
                    $sql->execute();
                    $result = $sql->get_result();

                    // Check if there are any results
                    if ($result->num_rows > 0) {
                      
                        while ($row = $result->fetch_assoc()) {

                          
                          ?>

                        <tr>
                            <td class="py-0">
                                <img class ='py-1' src="<?PHP echo $row['image']; ?>" alt="Product Image">
                            </td>
                            <td>
                                <?PHP echo $row['name']; ?>
                            </td>
                            <td>
                                <a class="btn btn-sm btn-info" href="show.php?id=<?php echo $rows['id']; ?>">
                                    <i class="fas fa-eye">View</i>
                                </a>

                                <a class="btn btn-sm btn-warning" href="edit.php?id=<?php echo $rows['id']; ?>">
                                    <i class="fas fa-edit">Update</i>
                                </a>

                                <a class="btn btn-sm btn-danger" href="delete.php?id=<?php echo $rows['id']; ?>"
                                    onClick="return confirm('Are you sure to Delete?')">
                                    <i class="fas fa-trash"></i>
                                    Delete</a>

                            </td>

                        </tr>

                        <?php 
                        }
                        
                    } else {
                        echo "<p>No data found.</p>";
                    }

                    // Close the statement
                    $sql->close();
                    ?>

                        <!-- Optional: Closing the database connection -->
                        <?php
                         $conn->close();
  
                    ?>

                        </td>
                        </tr>

                    </tbody>
                </table>

            </div>
        </div>
    </div>

</div>


<?php
    require_once('admin-footer.php');

?>

<?php
}
else{
    $mes =  "Please login first.";
    header("location: login.php?message=$mes");
    
}




?>