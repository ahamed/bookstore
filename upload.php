
<html>

<head>
    <title>Admin: Upload a book</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="css/bootstrap.css">-->
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href="css/dropdown.submenu.css">
    <link rel="stylesheet" href="select-bt/dist/css/bootstrap-select.min.css">
</head>


<body>

    <div class="row" style="margin-top: 100px;">
        <div class="col-sm-2">

        </div>
        <div class="col-sm-8">
            <div class="well-sm well" style="background-color: #b2dba1;">
                <form method="post" action="upload.php" enctype="multipart/form-data" class="form-horizontal">
                    Book Name: <input type="text" name="b_name" class="form-control" required>
                    Author Name: <input type="text" name="w_name" class="form-control" required>
                    Edition: <input type="text" name="edition" class="form-control" required>
                    Price: <input type="number" name="price" class="form-control" required>
                    <select name="n_o" class="form-control-static">
                        <optgroup label="Version">
                            <option value="new">New</option>
                            <option value="old">Old</option>
                        </optgroup>

                    </select>

                    <select name="depmnt" class="form-control-static" >
                        <optgroup  label="Science">
                            <option value="cse">Computer Science & Engineering</option>
                            <option value="physics">Physics</option>
                            <option value="chemistry">Chemistry</option>
                            <option value="mathematics">Mathematics</option>
                            <option value="statistics">Statistics</option>
                        </optgroup>
                        <optgroup label="Life and Earth Science">
                            <option value="Geography">Geography and Botany</option>
                            <option value="botany">Botany</option>
                            <option value="zoology">Zoology</option>
                            <option value="pharmacy">Pharmacy</option>
                            <option value="psychology">Psychology</option>
                            <option value="microbiology">Microbiology and Biotechnology</option>
                        </optgroup>
                        <optgroup label="Arts">
                            <option value="bangla">Bangla</option>
                            <option value="english">English</option>
                            <option value="history">History</option>
                            <option value="islamic history">Islamic History and Culture</option>
                            <option value="islamic philosophy">Islamic Philosophy</option>
                            <option value="islamic study">Islamic Study</option>
                            <option value="drama and music">Drama and Music</option>
                        </optgroup>
                        <optgroup label="Social Science">
                            <option value="economics">Economics</option>
                            <option value="politicle science">Politicle Science</option>
                            <option value="sociology">Sociology</option>
                            <option value="social work">Social Work</option>
                            <option value="anthropology">Anthropology</option>
                            <option value="journalism">Mass Communication and Journalism</option>
                            <option value="public administration">Public Administration</option>

                        </optgroup>
                        <optgroup label="Business Studies">
                            <option value="accounting">Accounting and Information System</option>
                            <option value="management">Management Studies</option>
                            <option value="marketing">Marketing</option>
                            <option value="finance">Finance</option>
                        </optgroup>
                        <optgroup label="Law">
                            <option value="law">Law</option>
                        </optgroup>
                        
                    </select>

                    <select name="year" class="form-control-static" data-style="btn-info">
                        <optgroup label="Class year">
                            <option value="first">First Year</option>
                            <option value="second">Second Year</option>
                            <option value="third">Third Year</option>
                            <option value="fourth">Fourth Year</option>
                        </optgroup>

                    </select>

                    <select name="semester" class="form-control-static">
                        <optgroup label="Semester">
                            <option value="1st">1st</option>
                            <option value="2nd">2nd</option>
                        </optgroup>

                    </select>


                    <br><label>Image:</label>
                    <input type="file" name="filetoup" id="upfile" class="btn btn-info">

                    <button  type="submit" name="submit" value="submit" class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
        <div class="col-sm-2"></div>
    </div>


    <script src="js/bootstrap.min.js"></script>
<script src="js/jquery.min.js"></script>
<script src="select-bt/dist/js/bootstrap-select.js"></script>
</body>

<?php
include 'init.php';
$target_dir = "images/";
$target_file =$target_dir.basename($_FILES['filetoup']['name']);


$uploadOk=1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);





if(isset($_POST['submit'])){
    $chk = getimagesize($_FILES['filetoup']['tmp_name']);
    if($chk){

        header("Location: upload.php");
        $uploadOk = 1;
    }else{
        echo "File is not an image";
        //header("upload.php");
        $uploadOk = 0;
    }

    if(file_exists($target_file)){
        echo "Sorry , file already exist";
        header("Location: upload.php");
        $uploadOk = 0;
    }

    if($_FILES['filetoup']['size']> 5000000){
        echo "sorry your file is too large";
        header("Location: upload.php");

        $uploadOk = 0;

    }
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        header("Location: upload.php");
        $uploadOk = 0;
    }
    if($uploadOk==0){
        echo "sorry file was not upload";
        header("Location: upload.php");

    }else{
        rename($target_file,"my_name".$imageFileType);
        if(move_uploaded_file($_FILES['filetoup']['tmp_name'],$target_file)){


            header("Location: upload.php");
        }else{
            echo "Sorry, there was an error uploading your file";
            header("Location: upload.php");
        }
    }


    if(isset($_POST['b_name'])){
        $b_name = $_POST['b_name'];
    }else{
        $b_name = "";
    }

    if(isset($_POST['w_name'])){
        $w_name = $_POST['w_name'];
    }else{
        $w_name = "";
    }

    if(isset($_POST['b_name'])){
        $b_name = $_POST['b_name'];
    }else{
        $b_name = "";
    }

    if(isset($_POST['edition'])){
        $edition = $_POST['edition'];
    }else{
        $edition = "";
    }
    if(isset($_POST['price'])){
        $price = $_POST['price'];
    }else{
        $price = "";
    }

    $new_old = $_POST['n_o'];
    $dept = $_POST['depmnt'];
    $year = $_POST['year'];
    $sem = $_POST['semester'];
    $image = $target_file;

    $que = mysql_query("select b_id from books order by b_id desc limit 1") or die ("Error execution get ID ".mysql_error());

    $getID = mysql_fetch_array($que);

    $fid = $getID[0]+1;





    $insert_books = mysql_query("insert into books values ('$fid','$b_name','$w_name','$edition','$price','$new_old','$image')") or die("Error insertion books".mysql_error());

    if($insert_books){
        $insert = mysql_query("insert into department values ('$fid','$dept','$year','$sem')") or die("Error insertion");
    }


}



?>
</html>



