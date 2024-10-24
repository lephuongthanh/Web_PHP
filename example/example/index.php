<?php
session_start();

if (isset($_POST['submit'])) {
    // Lấy thông tin kết nối từ session
    $server = $_SESSION['server'];
    $database = $_SESSION['db_lethiphuongthanh'];
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];

    // Kết nối đến cơ sở dữ liệu sử dụng cổng 3307
    $conn = new mysqli($server . ':3307', $username, $password, $db_lethiphuongthanh);

    // Kiểm tra kết nối
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Thực hiện truy vấn để lấy danh sách khóa học từ bảng "course"
    $sql = "SELECT id, title, description, imageUrl FROM course";
    $result = $conn->query($sql);

    if ($result) {
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<tr>
                    <td><img src="' . $row['imageUrl'] . '" alt="' . $row['title'] . '" style="width: 100px;"></td>
                    <td>' . $row['title'] . '</td>
                    <td>' . $row['description'] . '</td>
                </tr>';
            }

            echo '<div class="alert alert-success" role="alert">
                    Courses loaded successfully
                </div>';
        } else {
            echo '<div class="alert alert-warning" role="alert">
                    No courses found in the database
                </div>';
        }
    } else {
        echo '<div class="alert alert-danger" role="alert">
                Error executing query: ' . $conn->error . '
            </div>';
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">PHP Example</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                    aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                        <a class="nav-link" href="connect.php">Connect MySQL</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <div class="container my-3">
        <nav class="alert alert-primary" style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Index</li>
            </ol>
        </nav>

        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Title</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="images/laravel.png" alt="Laravel Programming" style="width: 100px;"></td>
                    <td>Laravel Programming</td>
                    <td>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</td>
                </tr>
                <tr>
                    <td><img src="images/dot-net.png" alt=".NET Programming" style="width: 100px;"></td>
                    <td>.NET Programming</td>
                    <td>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</td>
                </tr>
                <tr>
                    <td><img src="images/spring-boot.png" alt="Spring Boot Programming" style="width: 100px;"></td>
                    <td>Spring Boot Programming</td>
                    <td>This is a longer card with supporting text below as a natural lead-in to additional content.</td>
                </tr>
                <tr>
                    <td><img src="images/angular.png" alt="Angular Programming" style="width: 100px;"></td>
                    <td>Angular Programming</td>
                    <td>This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</td>
                </tr>
            </tbody>
        </table>

        <?php
        session_start();


        ?>
        <hr>
        <form class="row" method="POST" enctype="multipart/form-data">
            <div class="col">
                <div class="form-floating mb-3">
                    <input value="data" type="text" class="form-control" id="server" placeholder="File name" name="filename">
                    <label for="data">File name</label>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Write file</button>
            </div>
            <div class="col">
            </div>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>