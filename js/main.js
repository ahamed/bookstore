$ ( document ).ready ( function (){




    $("#alft").click(function(){
        $("#arts").css({
        "text-align":"left"
        });
        $("#tex").css({
           "text-align": "left"
        });

    });

    $("#acnt").click(function(){
        $("#arts").css({
            "text-align":"center"
        });
        $("#tex").css({
            "text-align": "center"
        });
    });

    $("#arit").click(function(){
        $("#arts").css({
            "text-align":"right"
        });
        $("#tex").css({
            "text-align": "right"
        });
    });

    $("#ajst").click(function(){
        $("#arts").css({
            "text-align":"justify"
        });
        $("#tex").css({
            "text-align": "justify"
        });
    });




});


