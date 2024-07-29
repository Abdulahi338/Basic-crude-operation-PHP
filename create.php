<?php

$connection = new mysqli("localhost","root","","addmin sys");
$id ="";
$name="";
$email="";
$address="";

$erorrMessage = "";
$success = "";
// check if the data has been transmeted correctaly

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['id'];
    $name = $_POST["name"];
    $email = $_POST["email"];
    $address = $_POST["address"];

    do{
        if(empty($id) | empty($name) | empty($email) | empty($address)){
            $erorrMessage = "All field are required!!";
            break;

        }
        // a new  person has been added
        $insert = "INSERT INTO  register VALUES($id,'$name','$email','$address')";
        $result = $connection->query($insert);
        if(!$reset){
            $erorrMessage = "invalid Query!!". $connection->erorr;
            

        }
        $id ="";
       $name="";
       $email="";
       $address="";
       $success = "added correctaly !!!";
       header("location: /addming system/index.php");
       exit;
    }while(TRUE);

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert a new person</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


</head>
<body>
    <div class="container mt-5">
        <h2>Welcome to add a New.</h2>
        <?php

        if(!empty($erorrMessage)){
            echo "
           <div class='alert alert-warning alert-dismissible fade show' role='alert'>
            <h2 class='warning'>$erorrMessage</h2>
            <button class='btn btn-close' data-bs-dismiss='alert' areia-label='close'></button>
            </div>


            ";

        }
        ?>
        <form method="POST">
            <div class="row mb-3">
                <label for="" class="col-sm-3 col-form-label">ID:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="id" value="<?php echo $id; ?>">
                </div>

            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-3 col-form-label">Name:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="name" value="<?php echo $name; ?>">
                </div>

            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-3 col-form-label">Gmail:</label>
                <div class="col-sm-6">
                    <input type="Email" class="form-control" name="email" value="<?php echo $email; ?>">
                </div>

            </div>
            <div class="row mb-3">
                <label for="" class="col-sm-3 col-form-label">Address:</label>
                <div class="col-sm-6">
                    <input type="text" class="form-control" name="address" value="<?php echo $address; ?>">
                </div>

            </div>
            <?php

            if(!empty($success)){
                echo"

                <h2>$success</h2>
               
               
                ";
            }

            ?>
            <div class="row mb-5">
            <div class="offset-sm-3 col-sm-3 d-grid">
                <button type="submit" class="btn btn-outline-primary" >Submit</button>
            </div>
            <div class="col-sm-3 d-grid">
                <a href="index.php" class="btn btn-outline-primary" role="button">Cancel</a>
            </div>
</div>
        </form>
    </div>
    
</body>
</html>