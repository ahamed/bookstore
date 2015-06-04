<!doctype html>

<html lang="en">
<head>
    <title>Boi Bitan JnU</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="css/bootstrap.css">-->
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href="css/dropdown.submenu.css">
    <link rel="stylesheet" href="font-awesome-4.3.0/css/font-awesome.min.css">
</head>
<body style="background-color: darkgray;">
<div class="container" id="mainContainer" >
<?php include "menu.php"?>
<div class="carousel slide" id="Carousel" data-interval="3000" >

    <ol class="carousel-indicators" data-target="#Carousel">
        <li class="active" data-slide-to="0" data-target="#Carousel"></li>
        <li  data-slide-to="1" data-target="#Carousel"></li>
        <li  data-slide-to="2" data-target="#Carousel"></li>
    </ol><!--end indicator ol-->
    <div class="carousel-inner" >
        <div class="item active" id="bk1">
            <div class="carousel-caption">
                <p class="carousel-caption">
                    This is carousel first item;
                </p>
            </div>
        </div><!--end item-->

        <div class="item " id="bk2">
            <div class="carousel-caption">
                <p class="carousel-caption">
                    This is carousel Second item;
                </p>
            </div>
        </div><!--end item-->

        <div class="item " id="bk3">
            <div class="carousel-caption">
                <p class="carousel-caption">
                    This is carousel Third item;
                </p>
            </div>
        </div><!--end item-->

    </div><!--end carousel inner-->

    <a class="left carousel-control" data-slide="prev" href="#Carousel"><span class="icon-prev"></a>
    <a class="right carousel-control" data-slide="next" href="#Carousel"><span class="icon-next"></span> </a>

</div><!--end main carousel-->

<div class="row" id="alert">


</div><!--end optional row alert-->

<div class="row" id="middle_part">
    <div class="col-lg-2" id="leftSide" style="margin-top: 20px;">
        <div class="panel">
            <div class="panel-heading">
                <h4 class="panel-title">Take a view</h4>
            </div><!--end left panel heading-->
            <div class="panel-body">

                <a href="login_up.php?addr=index.php">Get in(Log In) </a>
            </div><!--end left panel body-->
        </div><!--end left panel-->
    </div><!--end col left side-->

    <div class="col-lg-8" id="midpoint">
        <div class="well well-sm" >
            <div class="panel">
                <div class="panel-heading" id="dpthead">
                    <h4 class="panel-title" id="titl">Departments</h4>
                </div><!--end panel heading-->
                <div class="panel-body">

                    <div class="row">
                        <a href="search_dept.php?dpt=cse" class="col-sm-3 sizeofpan  thumbnail" id="cse" style="text-decoration: none;">
                            <div >
                               <img src="resources/cse.jpg" width="172" height="188" id="cimg">
                            </div>
                            <div class="" style="background-color: red; display: none; margin-top: -190px; height: 200px;"
                                 id="cnam">CSE</div>
                        </a>
                        <a href="search_dept.php?dpt=physics" class="col-sm-3 sizeofpan  thumbnail" id="phy" style="text-decoration: none;">
                            <div >
                                <img src="resources/phy.jpeg" width="172" height="188">

                            </div>
                            <div class="bg-warning" style="display: none; margin-top: -20px;"
                                 id="pnam">Physics</div>
                        </a>
                        <a href="search_dept.php?dpt=chemistry" class="col-sm-3 sizeofpan  thumbnail" id="che" style="text-decoration: none;">
                            <div >
                                <img src="resources/chemistry.jpg" width="172" height="188">

                            </div>
                            <div class="bg-warning" style="display: none; margin-top: -20px;"
                                 id="chenam">Chemistry</div>
                        </a>
                        <a href="#" class="col-sm-3 sizeofpan  thumbnail" id="math" style="text-decoration: none;">
                            <div >
                                <img src="resources/mathe.jpg" width="172" height="188">

                            </div>
                            <div class="bg-warning" style="display: none; margin-top: -20px;"
                                 id="mathnam">Mathematics</div>
                        </a>
                    </div><!--endl inner row-->

                    <div class="row">
                        <a href="#" class="col-sm-3 sizeofpan  thumbnail">
                            <img src="images/phy.jpeg" width="172" height="188">
                        </a>
                        <a href="#" class="col-sm-3 sizeofpan  thumbnail">
                            <img src="images/phy.jpeg" width="172" height="188">
                        </a>
                        <a href="#" class="col-sm-3 sizeofpan  thumbnail">
                            <img src="images/phy.jpeg" width="172" height="188">
                        </a>
                        <a href="#" class="col-sm-3 sizeofpan  thumbnail">
                            <img src="images/phy.jpeg" width="172" height="188">
                        </a>
                    </div><!--endl inner row-->
                    <div class="row">
                        <a href="#" class="col-sm-3 sizeofpan  thumbnail">
                            <div >
                                <img src="images/phy.jpeg" width="172" height="188">

                            </div>
                        </a>
                        <a href="#" class="col-sm-3 sizeofpan  thumbnail">
                            <div >
                                <img src="images/phy.jpeg" width="172" height="188">

                            </div>
                        </a>
                        <a href="#" class="col-sm-3 sizeofpan  thumbnail">
                            <div >
                                <img src="images/phy.jpeg" width="172" height="188">

                            </div>
                        </a>
                        <a href="#" class="col-sm-3 sizeofpan  thumbnail">
                            <div >
                                <img src="images/phy.jpeg" width="172" height="188">

                            </div>
                        </a>
                    </div><!--endl inner row-->
                </div><!--endl palen body-->

            </div><!--end midpoint panel-->
        </div><!--end minpoint well-->
    </div><!--end col left side-->

    <div class="col-lg-2" id="rightSide" style="margin-top: 20px;">
        <div class="panel">
            <div class="panel-heading">
                <h4 class="panel-title">ADS</h4>
            </div><!--eng right panel heading-->
            <div class="panel-body">

            </div><!--end right panel body-->
        </div><!--end rihgt panel-->
    </div><!--end col left side-->
</div><!--endl middle part row-->
<a class="btn btn-info scrolltotop" target="_top"  style=" width: 100px;"><span class="glyphicon glyphicon-arrow-up"></span></a>

</div>

<footer id="mainFooter">
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <h6>Copyright &copy; 2015 Alright reserved.</h6>
            </div><!--end copyright-->
            <div class="col-sm-4">
                <h4>About the page</h4>
                <p >
                    This page is for the student of Jagannath University.
                    The best alternative of Nilkhet . It is very nesty and hard
                    to the JnUean to buy books from Nilkhet. So the alternate
                    is come.
                </p>
            </div><!--end about div-->
            <div class="col-sm-2">
                <h6>Navigation</h6>
                <ul class="list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Search</a></li>
                    <li><a href="#">Links</a></li>
                    <li><a href="#">Resources</a></li>
                </ul>
            </div><!--end navigation div-->

            <div class="col-sm-2">
                <h6>Contacts</h6>
                <ul class="list-unstyled">
                    <li><a href="https://www.facebook.com/sajeeb.ahamed/" target="_blank">facebook</a></li>
                    <li><a href="">twiter</a></li>
                    <li><a href="">Google+</a></li>
                    <li><a href="">Quina</a></li>
                </ul>
            </div><!--end contacts div-->
            <div class="col-sm-2">
                <h6>Coded by Sajeeb Ahamed.</h6>
            </div><!--end coder info-->
        </div><!--end footer row-->
    </div><!--end footer container-->
</footer><!--end main footer-->

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>

<script>

    function hoverDpt(dptid,dpname){
        $(dptid).hover(function(){
            $(dpname).fadeIn(2000);
            $(dpname).css("background-color","white");

            //$(".departmentname").show("slow");

        },function(){
            $(dpname).fadeOut(2000);

        });
        return false;
    }

    $(document).ready(function(){

      /*  $(window).scroll(function(){
            var scroll = $(window).scrollTop();
            if(scroll >= 300){
                //$("#dpthead").html("scrolled");
                $("#leftSide").css("position","fixed");
                $("#leftSide").css("margin-top","-328px");
                $("#leftSide").css("zIndex",999);



            }else{
                //$("#titl").html("Departments");
                $("#leftSide").css("position","relative");
                $("#leftSide").css("margin-top","0px");
            }
        });
*/
        $('.scrolltotop').click(function(){
            $('html,body').animate({scrollTop: 0 },800);
            return false;
        });

        hoverDpt("#cse","#cnam");
        hoverDpt("#phy","#pnam");
        hoverDpt("#che","#chenam");
        hoverDpt("#math","#mathnam");
    });
</script>





</body>

</html>