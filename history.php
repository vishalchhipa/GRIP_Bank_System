<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>SPARKS BANK</title>
    <link rel="stylesheet" href="css/style3.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Nav bar -->
    <nav class="navbar py-2 navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
        <a class="navbar-brand" href="#">SPARKS BANK <img src="logos/logo.webp" alt="Bank" width="50" height="50"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-8 mb-lg-0">
                    <li class="nav-item py-3">
                        <a class="nav-link" aria-current="page" href="index.php"><strong>Home</strong></a>
                    </li>
                    <li class="nav-item dropdown py-3">
                        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Actions
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item py-3" href="money.php">Money Transfer</a></li>
                            <li><a class="dropdown-item py-3" href="#">Transaction History</a></li>
                        </ul>
                    </li>
                    <li class="nav-item py-3">
                        <a class="nav-link" href="index.php">About</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>
<class class="welcome">
        <h2>
            <img src="logos/t1.png" alt="Bank" width="75" height="75" style="font-weight: bold;"> <strong>Transaction History</strong> <img
                src="logos/t2.webp" alt="Bank" width="75" height="75">
        </h2>
    </class>
 
        <!-- options -->
<div class="d-grip gap-2 col-6 mx-auto text-center p-3 mb-2">
    <a href="money.php"><button type="button" class="btn btn-warning btn-lg mb-3">Click Here to Transfer Money</button></a>
</div>


<!-- Table -->
       <div class="table-responsive-sm">
    <table class="table table-hover table-striped">
        <thead style="color : black;" class="table-danger">
            <tr>
                <th class="text-center">S.No.</th>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount</th>
                <th class="text-center">Date & Time</th>
            </tr>
        </thead>
        <tbody>
        <?php

include 'connect.php';

$sql ="SELECT * FROM transaction";

$query =mysqli_query($conn, $sql);

while($rows = mysqli_fetch_assoc($query))
{
?>
<tr style="color : black;">
            <td class="text-center py-2"><?php echo $rows['sno']; ?></td>
            <td class="text-center py-2"><?php echo $rows['sender']; ?></td>
            <td class="text-center py-2"><?php echo $rows['receiver']; ?></td>
            <td class="text-center py-2"><?php echo $rows['balance']; ?> </td>
            <td class="text-center py-2"><?php echo $rows['datetime']; ?> </td>
                
        <?php
}

        ?>
        </tbody>
    </table>

    </div>
</div>

    <!-- footer -->

  


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>