<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <script src="./js/script.js"></script>
</head>

<body>

    <?php include './components/header.php'; ?>
    <div class="d-flex">
        <?php include './components/sidebar.php'; ?>

        <div class="container main-container">
            <h2>
                <?php 
                if(isset($_SESSION['user_name'])) {
                    echo "<span>welcome " . $_SESSION['user_name'] . ",</span>";
                }
            ?>
                Welcome to the Homepage
            </h2>

            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQanYd1yUVJ5J8xtlc1Uf6pXXML8q4sZa8xgQ&usqp=CAU"
                            class="slider-img">
                    </div>
                    <div class="carousel-item">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTxA75ow25GALEJ4n3Vlhtu6UlCcD1FvAJr9uQwvGd0qiBkeV7N0-wTIiSSjjfvXMzxImo&usqp=CAU"
                            class="slider-img">
                    </div>
                    <div class="carousel-item">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTISqARgaS7voS2MxrPe_dTzjCG6UzhCKQw7ljpdbdZYdXr42gfKrCa9_LHjVfraBDrUU&usqp=CAU"
                            class="slider-img">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <?php include './components/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>