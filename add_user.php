<?php
    include('./app/init.php');
    $userController = new UserController(new UserModel($db));
    $data = $userController->getUser();
    if(isset($_POST['save_student']))
    {
        $userController->saveUser($_POST);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <title>Data Creation in student Ensert</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-4">
                <div class="card">
                    <div class="card-header">
                        <h3>Data Creation in student Insert
                            <a href="index.php" class="btn btn-danger float-end">Back</a>
                        </h3>
                    </div>
                    <div class="card-body">

                        <form action="" method="post">
                            <div class="mb-3">
                                <label>Full Name</label>
                                <input type="text" name="name" class="form-control"/>
                            </div>
                            <div class="mb-3">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control"/>
                            </div>
                            <div class="mb-3">
                                <label>Phone</label>
                                <input type="text" name="phone" class="form-control"/>
                            </div>
                            <div class="mb-3">
                                <label>course</label>
                                <input type="text" name="course" class="form-control"/>
                            </div>
                            <div class="mb-3">
                               <button type="submit" name="save_student" class="btn btn-primary">Save Student</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>