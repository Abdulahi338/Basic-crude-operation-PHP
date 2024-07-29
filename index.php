<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2>Lis of people</h2>
        <a href="create.php" class="btn btn-primary">Add New</a><br>
        <table class="table">
            <thead>

                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gmail</th>
                    <th>Address</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                     $connection = new mysqli("localhost","root","","addmin sys");
                     if($connection->connect_error){
                         echo "connection filed: ". $connection->connect_error; // to display the error/to exit
                     
                     }
                     $select = "select * from  register";
                     $result =$connection->query($select);
                     if(!$result){
                         echo'inviled Query'. $connection->error;
                     
                     }
                     while($row = $result->fetch_assoc()){
                        echo"
                        <tr>
                       
                            <td>$row[id]</td>
                            <td>$row[name]</td>
                            <td>$row[email]</td>
                            <td>$row[address]</td>
                    <td>
                        <a href='update.php?id=$row[id]' class='btn btn-primary'>Edit</a>
                        <a href='delete.php?id=$row[id]' class='btn btn-danger'>Delete</a>

                    </td>
                </tr>


                        ";

                     }
                     
                ?>
                
            </tbody>

        </table>
    </div>
</body>

</html>