<html>

<head>
    <script type="text/javascript" src="js/jquery-1-4-4-min.js"></script>
    <script>
        $(document).ready(function () {
            _data = '';
            setInterval(function () {
                $.ajax({
                    url: 'dataip.php',
                    success: function (data) {
                        console.log(data);


                        if(data != _data){
                            var audio = new Audio('beep.wav');
                            audio.play();
                            _data = data;
                            $('.content').html(data);
                        }else{

                        }



                    }
                });
            }, 1000)

        });
    </script>
</head>
<body>
<div class="content">

</div>
</body>
</html>