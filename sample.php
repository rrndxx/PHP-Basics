<?php
require_once('connection.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>zeus</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
</head>
<style>
    body {
        padding: 30px;
    }
</style>

<body>
    <div class="container-fluid">
        <form method="POST" action="add.php">
            <div class="row g-3 mb-3">
                <div class="col">
                    <label for="inputfirstname" class="form-label">First Name</label>
                    <input type="text" class="form-control" id="inputfirstname" name="firstname" required>
                </div>
                <div class="col">
                    <label for="inputlastname" class="form-label">Last Name</label>
                    <input type="text" class="form-control" id="inputlastname" name="lastname" required>
                </div>
                <div class="col">
                    <label for="inputemail" class="form-label">Email</label>
                    <input type="email" class="form-control" id="inputemail" name="email" required>
                </div>
            </div>
            <div class="row g-3 mb-4">
                <div class="col">
                    <label for="inputState" class="form-label">Gender</label>
                    <select id="inputState" class="form-select" name="gender" required>
                        <option selected disabled>Choose...</option>
                        <option>Male</option>
                        <option>Female</option>
                        <option>Dog</option>
                        <option>Other</option>
                    </select>
                </div>
                <div class="col">
                    <label for="inputbirthdate" class="form-label">Birthdate</label>
                    <input type="date" class="form-control" id="inputbirthdate" name="birthdate" required>
                </div>
                <div class="col">
                    <label for="inputaddress" class="form-label">Address</label>
                    <input type="text" class="form-control" id="inputaddress" name="address" required>
                </div>
            </div>
            <div class="col">
                <button type="submit" class="btn btn-primary mb-4 mt-1" style="float:right">Add</button>
            </div>
        </form>
    </div>

    <br><br>

    <div class="container-fluid">
        <table class="table table-dark table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Birthdate</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $connection = $newConnection->openConnection(); // Get connection
                $stmnt = $connection->prepare("SELECT * FROM students_table"); // Prepare statement
                $stmnt->execute(); // Execute query
                $result = $stmnt->fetchAll(); // Fetch results of the query

                // If true, loop the results
                if ($result) {
                    foreach ($result as $row) {
                ?>
                        <tr>
                            <td><?php echo $row->id; ?></td>
                            <td><?php echo $row->first_name; ?></td>
                            <td><?php echo $row->last_name; ?></td>
                            <td><?php echo $row->email; ?></td>
                            <td><?php echo $row->gender; ?></td>
                            <td><?php echo $row->birthdate; ?></td>
                            <td><?php echo $row->address; ?></td>
                            <td>
                                <button type="button" class="btn btn-warning">Edit</button>
                                <button type="button" class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>

</html>
