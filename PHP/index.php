<!doctype html>
<html lang="en">
<head>
    <title>Titanic - Start</title>

    <?php
        include('../TEMPLATE/includes.php');
    ?>

</head>
<body>

<?php
include('../TEMPLATE/header.php');
?>


<!-- TODO: ADD something -->
<section class="index_section">
    <article>
        <p>
            Titanic bla bla bla : Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, pariatur?
            Titanic bla bla bla : Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, pariatur?
            Titanic bla bla bla : Lorem ipsum dolor sit amet, consectetur adipisicing elit. Modi, pariatur?
        </p>
    </article>
</section>


<div class="container">
    <br>
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
            <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="../IMG/slider_titanic_photo.png" alt="" width="800" height="400">
            </div>

            <div class="item">
                <img src="../IMG/abelseth_oj_02_thm.jpg" alt="" width="800" height="400">
            </div>

            <div class="item">
                <img src="../IMG/allen_ew_100.jpg" alt="" width="800" height="400">
            </div>

            <div class="item">
                <img src="../IMG/magnus.jpeg" alt="" width="800" height="400">
            </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>



<?php
include('../TEMPLATE/footer.php');
?>

</body>
</html>