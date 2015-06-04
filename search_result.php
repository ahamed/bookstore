<!doctype html>

<html lang="en">
<?php include "header.php"?>
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
                <?php
                $dpt = $_GET['dpt'];
                $year = $_GET['yr'];
                $semester = $_GET['sem'];
                $url = urlencode("search_result.php?dpt=".$dpt."&yr=".$year."&sem=".$semester);

                ?>
                <a href="login_up.php?addr=<?php echo $url;?>" class="btn btn-link">Get in(Log In) </a>
            </div><!--end left panel body-->
        </div><!--end left panel-->
    </div><!--end col left side-->

    <div class="col-lg-8" id="midpoint">
        <div class="well well-sm" >
            <div class="panel">
                <div class="panel-heading">
                    <h4 class="panel-title">Books</h4>
                </div><!--end panel heading-->
                <?php
                include 'init.php';
                $dpt = $_GET['dpt'];
                $year = $_GET['yr'];
                $semester = $_GET['sem'];

                $que = mysql_query("select b.b_name,b.w_name,b.edition,b.new_old,b.image,b.price,b.b_id from books as b,
                department as d where b.b_id = d.b_id and d.dept = '$dpt' and d.year = '$year' and d.semester = '$semester' ") or die ("Query failed!");

                $rownum = mysql_num_rows($que);
                ?>
                <div class="well-sm well">
                    <div class="alert-info" style="width: 700px; margin-left: 15px;">
                        <h4><?php echo "Department of ".$dpt." > ".$year." year > ".$semester ." semester" ;?></h4>
                    </div>
                </div>

                <?php
                if($rownum===0){
                    ?>

                <div class="well well-sm">
                    <div class="alert-danger">
                        <h3>We are really sorry! there are no book here. :(</h3>
                    </div>
                </div>

                <?php
                }


                while($res = mysql_fetch_array($que)){
                    ?>
                    <div class="well-sm well thumbnail" id="Bookinfo" style="background-color: #9d9d9d;">
                        <div class="panel-body">
                            <div class="pull-left">
                                <img src="<?php echo $res[4];?>" class="img-thumbnail" width="200" height="100" alt="Image not found" title="Book image">
                            </div>

                            <div class="pull-left" style="margin-left: 10px;">
                                <h4><a href="context.php?bid=<?php echo $res[6]?>&dpt=<?php echo $dpt."&yr=".$year."&sem=".$semester;?>"><?php echo $res[0];?></a></h4>
                                <h5>By <?php echo $res[1];?></h5>
                                <h6><?php echo $res[2];?> Edition</h6>
                                <?php
                                if($res[3]==='new'){
                                    ?>
                                    <div class="label label-success pos">
                                        <span class="glyphicon glyphicon-tag">New</span>
                                    </div>

                                <?php


                                }else{
                                    ?>
                                    <div class="label label-danger pos">
                                        <span class="glyphicon glyphicon-tag">Old</span>
                                    </div>

                                <?php
                                }
                                ?>
                                <div class="alert alert-info">
                                    <div class="btn btn-info">
                                        <h4>Price <span class="badge"><?php echo $res[5]." ৳";?></span></h4>
                                    </div>
                                </div>
                                <?php
                                $dpt = $_GET['dpt'];
                                $year = $_GET['yr'];
                                $semester = $_GET['sem'];
                                $id = $res[6];
                                $url = urlencode("getbooked.php?bid=".$id."&dpt=".$dpt."&yr=".$year."&sem=".$semester);
                                ?>



                                <a href="booking.php?adr=<?php echo $url;?>" class="btn btn-danger" title="Click for booking"><span class="glyphicon glyphicon-shopping-cart"> Add to Cart</a>

                            </div>


                        </div><!--end panel body-->
                    </div><!--end panel body well-->

                <?php
                }


                ?>


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
<div style=" margin-top:-220px; margin-left: 100px; width: 200px; display: none;" class="navbar-fixed-bottom" id="scrollTopDiv">
    <button style="width: 200px; height: 50px;" class="btn btn-info" id="upbt"><span  style="font-size: 30px;" class="fa fa-chevron-up"></span> </button>
</div>
</div><!--end main container-->
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
    $(document).ready(function(){
        $(window).scroll(function(){
            if($(window).scrollTop() >= 140){
                //$("#scrollTopDiv").css("display","block");
                $("#scrollTopDiv").slideDown("slow");
            }else{

                $("#scrollTopDiv").slideUp("slow");
                //$("#scrollTopDiv").css("display","none");
            }
        });

        $("#upbt").click(function(){
            $("html,body").animate({scrollTop: 0},700);
            return false;
        });
    });
</script>






</body>

</html>