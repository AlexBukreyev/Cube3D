<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
        <title>Home Page</title>
        <script src="jquery.js"></script>
    </head>
    
    <body>
        <div id="wrapper">
            <div id="cube">                
            
                <div class="side" id="side1">1</div>
                <div class="side" id="side2">2</div>
                <div class="side" id="side3">3</div>
                <div class="side" id="side4">4</div>
                <div class="side" id="side5">5</div>
                <div class="side" id="side6">6</div>
        
            </div>
        </div>
        <script>
            $(function(){
                $(document).mousemove(function(e){
                    $('#cube').css({
                       '-moz-transform':'rotateX('+e.pageY+'deg) rotateY('+e.pageX+'deg)'
                   });
                });
            });
        </script>
    </body>
</html>