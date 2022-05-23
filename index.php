<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    session_start();
    $host = 'localhost';
    $database = 'books';
    $username = 'root';
    $password = 'root';
    $liste = '';
    $id =$_SESSION['id']; //setzt $id = session id


    $conn = new mysqli($host, $username, $password, $database);
    $sql = "SELECT title FROM buecher WHERE verkauft = 0";
    $result = $conn->query($sql);
    $listen = mysqli_fetch_all($result, MYSQLI_ASSOC);
    ?>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Home</title>
</head>
<body>
    <nav class="navbar bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="smart.png" alt="" width="30" height="30"class="d-inline-block align-text-top">
                Smart Capital
            </a>

            <a class="nav-link" aria-current="page" href="#">Home</a>
            <a class="nav-link" href="#">Link</a>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <h1 class="display-1 text-center">Home</h1>
    <p1>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p1>
    <?php foreach($listen as $liste){ ?>
       <!-- <div style="margin-left:20px">
            <label for="Title">Title</label>
            <br>
            <span name="Title" class="align-baseline"><?php //echo htmlspecialchars($liste['title']);?> </span>


        </div> !-->

    <?php } ?>
</body>
</html>