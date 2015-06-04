<!DOCTYPE html>
<html>
<head>

    <title>Boi Bitan JnU</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!--<link rel="stylesheet" href="css/bootstrap.css">-->
    <link rel="stylesheet" href="../css/bootstrap-theme.min.css">
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href="../css/dropdown.submenu.css">

    <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>-->
    <script src="../js/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("button").click(function(){
                $("#cng").dialog();
            });
        });
    </script>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-sm-2 alert alert-info" id="mo" style="height: 200px;">
            <div class="img-thumbnail">
                <button class="btn btn-info">Click</button>
            </div>

        </div>

    </div>
    <div class="alert alert-danger" style="display: none; width: 200px;  height: 200px; margin-top: -100px; "
    id="cng">
        <h3>Hover the mouse pointer over this paragraph.</h3>
    </div>
</div>

</body>
</html>
