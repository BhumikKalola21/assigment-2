<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    < script src = "https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity = "sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin = "anonymous" >
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <section class="layout-container-content d-flex flex-fill flex-column">
        <header role="heading" class="layout-header">
            <span>Header</span>
        </header>

        <section class="d-flex flex-fill">
            <aside role="complementary" class="layout-sidebar">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                </ul>
            </aside>

            <main role="main" class="layout-main flex-fill">
                <div class="container">
                    <h2>Carousel Example</h2>
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQanYd1yUVJ5J8xtlc1Uf6pXXML8q4sZa8xgQ&usqp=CAU"
                                    alt="Los Angeles" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTxA75ow25GALEJ4n3Vlhtu6UlCcD1FvAJr9uQwvGd0qiBkeV7N0-wTIiSSjjfvXMzxImo&usqp=CAU"
                                    alt="Chicago" style="width:100%;">
                            </div>

                            <div class="item">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRTISqARgaS7voS2MxrPe_dTzjCG6UzhCKQw7ljpdbdZYdXr42gfKrCa9_LHjVfraBDrUU&usqp=CAU"
                                    alt="New york" style="width:100%;">
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </main>
        </section>

        <footer role="contentinfo" class="layout-footer">
            <p>&copy; 2023 Website. All rights reserved.</p>
        </footer>
    </section>

</body>

</html>