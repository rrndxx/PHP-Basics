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

<body>
    <?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $dbname = "sampledatabase";

    $db = "mysql:host=$host;dbname=$dbname";

    $connection = new PDO($db, $user, $pass);
    $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    ?>
    <div class="container-fluid">
        <div class="row g-3 mb-3">
            <div class="col">
                <label for="firstname" class="form-label">First Name</label>
                <input type="firstname" class="form-control" id="inputfirstname">
            </div>
            <div class="col">
                <label for="lastname" class="form-label">Last Name</label>
                <input type="lastname" class="form-control" id="inputlastname">
            </div>
            <div class="col">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputemail">
            </div>
        </div>
        <div class="row g-3 mb-4">
            <div class="col">
                <label for="inputState" class="form-label">Gender</label>
                <select id="inputState" class="form-select">
                    <option selected>Choose...</option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Dog</option>
                </select>
            </div>
            <div class="col">
                <label for="birthdate" class="form-label">Birthdate</label>
                <input type="date" class="form-control" id="inputbirthdate">
            </div>
            <div class="col">
                <label for="address" class="form-label">Address</label>
                <input type="address" class="form-control" id="inputaddress">
            </div>
        </div>
        <div class="col ms-auto">
            <button type="submit" class="btn btn-primary">Add</button>
        </div>
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
                $stmnt = $connection->query("SELECT * FROM students_table");
                while ($row = $stmnt->fetch()) {
                    echo "
                    <tr>
                    <td>" . $row["id"] . "</td>
                    <td>" . $row["first_name"] . "</td>
                    <td>" . $row["last_name"] . "</td>
                    <td>" . $row["email"] . "</td>
                    <td>" . $row["gender"] . "</td>
                    <td>" . $row["birthdate"] . "</td>
                    <td>" . $row["address"] . "</td>
                    <td>
                        <button type=\"button\" class=\"btn btn-warning\">Edit</button>
                        <button type=\"button\" class=\"btn btn-danger\">Remove</button>
                    </td>
                    </tr>";
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
