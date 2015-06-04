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
</head>
<body style="background-color: darkgray;">
<div class="container" id="mainContainer">

    <?php include "menu.php"?>

<div class="carousel" style="margin-top: 30px;">

</div>
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

                $id = $_GET['bid'];

                $url = urlencode("context.php?bid=".$id."&dpt=".$dpt."&yr=".$year."&sem=".$semester);

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

                $id = $_GET['bid'];



                $que = mysql_query("select b_name,w_name,edition,new_old,image,price from books where b_id = $id") or die ("Query failed!");

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
                                <h4><a href="#"><?php echo $res[0];?></a></h4>
                                <h5>By <?php echo $res[1];?></h5>
                                <h6><?php echo $res[2];?> Edition</h6>
                                <?php
                                if($res[3]==='new'){
                                    ?>
                                    <div class="label label-success pos">
                                        <span class="glyphicon glyphicon-tag">New</span>
                                    </div><!--end new-->

                                <?php


                                }else{
                                    ?>
                                    <div class="label label-danger pos">
                                        <span class="glyphicon glyphicon-tag">Old</span>
                                    </div><!--end old-->

                                <?php
                                }
                                ?>
                                <div class="alert alert-info">
                                    <div class="btn btn-info">
                                        <h4>Price <span class="badge"><?php echo $res[5]." ৳";?></span></h4>
                                    </div>
                                </div><!--end price--->
                                <div class="well well-sm">
                                    <?php
                                    $dpt = $_GET['dpt'];
                                    $year = $_GET['yr'];
                                    $semester = $_GET['sem'];

                                    $id = $_GET['bid'];
                                    $url = urlencode("context.php?bid=".$id."&dpt=".$dpt."&yr=".$year."&sem=".$semester);

                                    ?>
                                    <form action="#" method="POST" class="form-control-static">
                                        <label>Quatity of book</label>
                                        <input type="number" name="qob" class="form-control-static" required min=1.0 value="1">

                                        <input type="submit" value="Get Booking" class="btn btn-info" name="booked" >


                                    </form>

                                </div>

                            </div>


                        </div><!--end panel body-->
                    </div><!--end panel body well-->

                <?php
                }


                ?>



                <?php
                include 'init.php';
                if(isset($_POST['booked'])){
                    if(isset($_POST['qob'])){
                        $nofbook = $_POST['qob'];
                    }else{
                        $nofbook = 0;
                    }

                    $bookid = $_GET['bid'];
                    $userid = $_COOKIE['userID'];
                    $dateTime = date("Y-m-d h:i:s");
                    $url = "context.php?bid=".$_GET['bid']."&dpt=".$_GET['dpt']."&yr=".$_GET['year']."&sem=".$_GET['sem'];

                    $sql = mysql_query("select price from books where b_id = $bookid") or die("Error price ".mysql_error());
                    $sqlresult  = mysql_fetch_array($sql);
                    $t_price = $sqlresult[0]*$nofbook;

                    $ins = mysql_query("insert into booking values ('$userid','$bookid','$dateTime','$nofbook','$t_price')") or die("Insertion failed to booking.");
                    if($ins){
                        ?>
                    <script>
                        window.addEventListener('load',function(){

                            window.location.href = "myCart.php?usr=<?php echo urlencode($userid);?>"

                        },false);
                    </script>

                <?php
                    }

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




</body>

</html>