<?php

//Will it be a $_POST ???
$isbn ='';
$seller = '';
$price = '';
$comment = '';
$contact = '';

function displat_template(){
  echo '
<!DOCTYPE html>
<html lang="en">

<head>
    <title>bookxchange</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Christine Nguyen Tanner Summers Giovanni Hernandez David Ghermezi">
    <meta name="description" content="The solution for buying and selling textbooks.">
    <meta name="keywords" content="bookxchange christine nguyen tanner summers giovanni hernandez david ghermezi">
    <!-- CSS -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="includes/css/bookResult.css">
    <!-- JavaScript -->
    <script src="includes/js/jquery1.11.1/jquery.min.js"></script>
    <script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="includes/js/bookResultCarousel.js"></script>
</head>
<body>

    <div class="container">
        <div class="carousel slide article-slide" id="myCarousel">
            <div class="carousel-inner cont-slider">
                <div class="item active">
                    <img src="http://placehold.it/1200x440/cccccc/ffffff">
                </div>
                <div class="item">
                    <img src="http://placehold.it/1200x440/999999/cccccc">
                </div>
                <div class="item">
                    <img src="http://placehold.it/1200x440/dddddd/333333">
                </div>
            </div>

            <!-- Indicators -->
            <ol class="carousel-indicators visible-lg visible-md">
                <li class="active" data-slide-to="0" data-target="#myCarousel">
                    <img alt="" title="" src="http://placehold.it/120x44/cccccc/ffffff">
                </li>
                <li class="" data-slide-to="1" data-target="#myCarousel">
                    <img alt="" title="" src="http://placehold.it/120x44/999999/cccccc">
                </li>
                <li class="" data-slide-to="2" data-target="#myCarousel">
                    <img alt="" title="" src="http://placehold.it/120x44/dddddd/333333">
                </li>
            </ol>
        </div>
    </div>

    <p id="isbn">Insert ISBN Here</p>
    <p id="seller">By: Insert Seller Here</p>
    <p id="price">Price: Insert Price Here</p>
    <p id="comments">Comments: Insert Comments Here</p>
    <p id="contact">Contact: Insert Contact Here</p>

</body>

</html>';
}

function displayResult(){

}
?>
