<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <title>Quản lý danh sách người đăng kí hiến máu</title>

</head>
<body>
    <header class="p-3 bg-dark text-write">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                    <svg class="bi me-2" width="30" height="30" role="img" aria-label="Bootstrap">
                        <use xlink:href="#bootstrap"></use>
                    </svg>
                </a>
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                    <li><a href="#" class="nav-link px-2 text-secondary text-white"><i class="fas fa-home"></i>Trang chủ</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Giới thiệu</a></li>
                    <li><a href="#" class="nav-link px-2 text-white">Liên hệ</li>
                </ul>
                <form class="col-12 col-lg-auto mb-12 mb-lg-2 me-lg-3">
                    <div style="display: inline-block;">
                        <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
                    </div>
                    <button>Tìm kiếm</button>

                </form>
            </div>
        </div>
    </header>
</body>
<main>
<div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Danh bạ các cán bộ nhân viên tại trường ĐHTL</h1>
                    <?php include('config/db.php'); ?>
                    <div class="table">
                        <?php

                        $host = "localhost";
                        $user = "root";
                        $pass = "";
                        $data = "qlmau";
                        $conn = mysqli_connect($host, $user, $pass, $data);
                        mysqli_set_charset($conn, 'UTF8');

                        $sql = "SELECT * FROM bloods_donor";
                        $result = mysqli_query($conn, $sql);

                        echo "<h4>Bảng thông tin người đăng kí hiến máu</h4>";
                        echo "<table>";
                        echo "<tr>
                        <th>Mã </th>
                        <th>Họ và tên</th>
                        <th>Giới tính</th>
                        <th>Nhóm máu</th>
                        <th>Ngày đăng kí</th>
                        <th>Điện thoại</th>
                        </tr>";
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $row['bd_id'] . '</td>';
                            echo "<td>" . $row['bd_name'] . '</td>';
                            echo "<td>" . $row['bd_sex'] . '</td>';
                            echo "<td>" . $row['bd_bgroup'] . '</td>';
                            echo "<td>" . $row['bd_reg_date'] . '</td>';
                            echo "<td>" . $row['bd_phno'] . '</td>';
                            echo "</tr>";
                        }
                        echo "</table>";
                        ?>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </main>
</main>
</html>