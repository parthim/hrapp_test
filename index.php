
<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <script type="text/javascript" src="currency.js">
    </script> -->
    
</head>
<body onload = "pricing()">
    <div>
    <!-- <input type="button" value = "Get Country code" onclick = "get_country_code()"/></div> -->
    <!-- <input type="text" id = "ip"> -->
    <textarea name="" id="ip" style= "width:300px; height:auto;" ></textarea>
    <div> <textarea type="text" id="lite-25"></textarea>  
    </div>
    <div> <input type="text" id="lite-1">
    </div>
    <div>
    <input type="text" id="pro-25"></div>
    <div>
    <div>
    <input type="text" id="pro-1"></div>
    <div>
    <input type="text" id="enterprise-25">
    </div>
    <div>
    <input type="text" id="enterprise-1">
    </div>
</body>
</html>
<script>
function fetchData() {
    fetch("./currency.json")
      .then((response) => response.json())
      .then((data) => {
        console.log(data);
        return data;
      });
  }
</script>
<script type="text/javascript">

        

        //Get  Country code function
    function get_country_code() {
    var tmp = null;
    $.ajax({
        'async': false,
        'type': "POST",
        'global': false,
        'dataType': 'html',
        'url': "ipAddress.php?first",
        'data': { 'request': "", 'target': 'arrange_url', 'method': 'method_target' },
        'success': function (data) {
            tmp = data;
            $("#ip").val(tmp);
        }
    });
    return tmp;
} 

        // // Main Pricing function()
        function pricing()
        {
            var code = get_country_code();
            // console.log("Hello",code)
            $.ajax({
        'async': false,
        'type': "POST",
        'global': false,
        'dataType': 'html',
        'url': "currency.json?first",
        'data': { 'request': "", 'target': 'arrange_url', 'method': 'method_target' },
        'success': function (data) {
            tmp = data;
            $("#lite-25").val(tmp);
        }
    });

            
            // var price = fetchData();
            // console.log(price);

        }
        
    </script>