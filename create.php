<?php
$id ="";
$name="";
$email="";
$address="";

$erorrMessage = "";
$success = "";
// check if the data has been transmeted correctaly

if($_SERVER['REQUEST_METHOD'] == 'post'){
    $id = $_post[id];
    $name = $_post["name"];
    $email = $_post["email"];
    $address = $_post["address"];

    do{
        if(empty($id) | empty($name) | empty($email) | empty($address)){
            $erorrMessage = "All field are required!!";
            break;

        }
        // a new  person has been added
        $id ="";
       $name="";
       $email="";
       $address="";
       $success = 'added correctaly !!!';
    }while(FALSE);

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert a new person</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

</head>
<body>
    <div class="container mt-5">
        <h2>Welcome to add a New.</h2>
        <?php

        if(!empty($erorrMessage)){
            echo "
            // <div class='alert alert-warning' >
            // <strong>$erorrMessage</strong>
            // </div>
            <h2>$erorrMessage</h2>


            ";

        }
        ?>
        <form method="post">
            <div class="row mb-3">
                <label for="" class="col-sm-3 col-form-label">ID:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="id" value="<?php echo $id ?>">
                </div>

            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-3 col-form-label">Name:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" value="<?php echo $name ?>">
                </div>

            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-3 col-form-label">Gmail:</label>
                <div class="col-sm-6">
                    <input type="Email" class="form-control" name="email" value="<?php echo $email ?>">
                </div>

            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-3 col-form-label">Address:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="address" value="<?php echo $address ?>">
                </div>

            </div>
            <?php

            if(!empty($success)){
                echo"
                <div class='row mb-3 col-sm-6'>
                <div class='offset-sm-3 col-sm-6'>
                <div class='alert alert-success alert-dismissible fade show' rol='alert'>
                <strong>$success</strong>
                <button class='btn btn-close'></button>
                </div>
                </div>
                </div>
                ";
            }

            ?>
            <div class="row mb-5">
            <div class="offset-sm-3 col-sm-3 d-grid">
                <button class="btn btn-outline-primary" type="submit">Submit</button>
            </div>
            <div class="col-sm-3 d-grid">
                <a href="index.php" class="btn btn-outline-primary" role="button">Cancel</a>
            </div>
</div>
        </form>
    </div>
    
</body>
</html>