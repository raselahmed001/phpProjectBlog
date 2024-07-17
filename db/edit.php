<?php
require_once('config.php');

if(isset($_GET['id'])){
    $id =  $_GET['id'];

    $query = "SELECT * FROM user WHERE id = $id";
    // var_dump($query);
    // exit();
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
    //var_dump($rows);
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<!-- <div class="container ">
    <div class="row justify-content-center">
        <div class="col-6">
            <form>
                <div class="col-sm-12 col-form-label">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3 col-sm-12">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div> -->
<div class="container">
    <div class="row justify-content-center align-items-center" style="min-height: 100vh;">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Updated</h5>
                    <form action="update.php?id=<?php echo $row['id'];?>" method="post">
                    <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">User Name</label>
                            <input type="text" name="username" value="<?php echo $row['username'];?>" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" name="email" value="<?php echo $row['email'];?>"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



</body>
</html>