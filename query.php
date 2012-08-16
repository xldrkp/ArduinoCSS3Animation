<!DOCTYPE html>
<html>
<head>

    <style>

        #wrapper {
            width: 1200px;
            margin: 100px auto;
            position: relative;
        }

        #container {
            height: 20px;
            width: 512px;
            border: 1px solid #000;
            background: yellow;
            position: absolute;
            left: 256px;
            top: 256px;
        }
    </style>

</head>
<body>
    <div id="wrapper">
        <p id="display-data"></p>
        <div id="container"></div>
    </div>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script>

        function grow() {
            $('#container').animate({
                width: '800px'
            }, 100, function() { shrink(); });
        };

        function shrink() {
            $('#container').animate({
                width: '512px'
            }, 100);
        };


        function getData() {
            $.getJSON('api.php', {'q': 'receive'}, function(data){

                var d = Math.floor(data.poti / 2.84);

                var b = data.btn;

                $('#display-data').html(d);
                $('#container').css('transform', 'rotate(' + d + 'deg)');

                if (b == 1) {
                    grow();
                }



            })

            setInterval('getData()', 1000);
        }

        getData();


    </script>
</body>
</html>