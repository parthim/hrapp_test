<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="text/javascript">
    function get_country_code() {
        // $.post("ipAddress.php",function(data){
        $.post("text.php",function(data){
            $country_code = data;
            $("#ip").val($country_code);
        });
    }
    </script>
</head>
<body>
    <div>
    <input type="button" value = "Get Country code" onclick = "get_country_code()"/></div>
    <!-- <input type="text" id = "ip"> -->
    <textarea name="" id="ip" style= "width:300px; height:auto;"></textarea>
</body>
</html>