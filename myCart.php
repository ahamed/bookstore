<!doctype html>

<html>
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
</head>

<body>
<div class="container" id="mianContainer">
    <?php include "menu.php"?>
<div class="row" id="middle_part" style="margin-top: 40px;">
    <div class="col-lg-2" id="leftSide" style="margin-top: 20px;">
        <div class="panel">
            <div class="panel-heading">
                <h4 class="panel-title">Take a view</h4>

            </div><!--end left panel heading-->
            <div class="panel-body">

                <a href="login_up.php?addr=myCart.php" class="btn btn-link">Get in(Log In) </a>
            </div><!--end left panel body-->
        </div><!--end left panel-->
    </div><!--end col left side-->

    <div class="col-lg-10 alert alert-info" id="midpoint" style="margin-top: 20px;">
        <div class="col-lg-10">
            <div class="well well-sm" >
                <div class="panel">
                    <div class="panel-heading">
                        <?php
                        include 'init.php';
                        $id = $_COOKIE['userID'];
                        $sql = mysql_query("select sum(bk.t_price) from books as b, booking as bk where b.b_id = bk.b_id and bk.u_id = '$id'") or die ("Sum failed");
                        $sqlres = mysql_fetch_array($sql);
                        ?>
                        <h4 class="panel-title" style="color: white;"><span class="glyphicon glyphicon-shopping-cart"> Books at the cart</h4>
                        <h4 class="panel-title pull-right" style="color: white; margin-top: -15px;"><span>৳ <?php echo $sqlres[0];?></span> Due

                        </h4>
                    </div><!--end panel heading-->
                    <div class="panel-body">
                        <div class="well-sm well">

                            <?php
                            include 'init.php';

                            if(!isset($_COOKIE['uncstores'])){

                                ?>
                            <script >
                                window.addEventListener('load',function(){
                                    window.location.href = "login_up.php?addr=myCart.php";
                                },false);
                            </script>


                            <?php



                            }else{
                                $uid = $_COOKIE['userID'];
                                $getBookedbooks = mysql_query("select b.b_name,b.w_name,b.edition,b.price,b.new_old,b.image,bk.number_of_book
                                 from books as b, booking as bk where b.b_id=bk.b_id and bk.u_id='$uid' ") or die("Query failed!");

                                while($res = mysql_fetch_array($getBookedbooks)){
                                ?>
                            <div class="well well-sm ">
                                <div >
                                    <img class="thumbnail" src="<?php echo $res[5];?>" alt="No Image Found!" width="100" height="150">
                                </div>
                                <div >
                                    <h4><a href="#"><?php echo $res[0];?></a></h4>
                                    <h5 style="color: #000000;">By <?php echo $res[1];?></h5>
                                    <h6 style="color: #000000;"><?php echo $res[2]." Edition"?></h6>
                                    <h4 >Price: <?php echo $res[3]." ৳"?></h4>
                                    <h5 ><?php echo $res[4]." Version";?></h5>
                                    <h5><?php echo "Quantity : ".$res[6]." Book(s)"?></h5>
                                    <h5>Total Price: <?php echo $res[3]*$res[6]." ৳"?></h5>
                                </div>
                            </div>

                            <?php
                                }

                            }

                            ?>



                        </div>

                    </div><!--end panel body-->

                </div><!--end midpoint panel-->
            </div><!--end minpoint well-->
        </div><!--end col sm 5-->

<!--        <div class="col-lg-5">-->
<!--            <div class="well well-sm" >-->
<!--                <div class="panel">-->
<!--                    <div class="panel-heading">-->
<!--                        <h4 class="panel-title" style="color: #ffffff;">Bought books</h4>-->
<!--                    </div><!--end panel heading-->
<!--                    <div class="panel-body">-->
<!--                        <div class="well-sm well">-->
<!---->
<!--                        </div>-->
<!---->
<!--                    </div><!--end panel body-->
<!---->
<!--                </div><!--end midpoint panel-->
<!--            </div><!--end minpoint well-->
<!--        </div><!--end col sm 5-->
    </div><!--end col left side-->


</div><!--endl middle part row-->




</div><!--end main container-->


<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>