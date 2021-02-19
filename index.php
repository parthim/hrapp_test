
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
    <div id="menu_hcm_pricing"></div>
    <div id="menu_ems_pricing"></div>
    <div id="pricing_plan_lite_25"></div>
    <div id="pricing_plan_lite_1"></div>
    <div id="pricing_plan_pro_25"></div>
    <div id="pricing_plan_pro_1"></div>
    <div id="pricing_plan_enterprise_25"></div>
    <div id="pricing_plan_enterprise_1"></div>
    <div id="pm_lite"></div>
    <div id="pm_pro"></div>
    <div id="pm-enterprise"></div>
    <div id="ats_lite"></div>
    <div id="ats_pro"></div>
    <div id="ats_enterprise"></div>
</body>
</html>
<script>

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
    // Country code is here
    var code = get_country_code();
     var price ="";
    //json file read using ajax
    $.ajax({
        'async': false,
        'type': "POST",
        'global': false,
        'dataType': 'html',
        'url': "currency.json?first",
        'data': { 'request': "", 'target': 'arrange_url', 'method': 'method_target' },
        'success': function (data) 
        {
            price = data;
            $("#pricing_plan_lite-25").val(price);
        }
    });
    // JSON Object is stored here
    const price_parsed = JSON.parse (price);
    console.log(price_parsed);
    if(code.includes("IN"))
    { 
        for(var key in price_parsed.inr) {
            var keys= JSON.stringify(key);
            keys = keys.replace(/"/g,"");
            var values= JSON.stringify(price_parsed.inr[key]);
            values = values.replace(/"/g,"");
            var temp =  document.getElementById(keys);
            temp.innerHTML=values;
        }
    }
    else
    {
        for(var key in price_parsed.usd) {
            var keys= JSON.stringify(key);
            keys = keys.replace(/"/g,"");
            var values= JSON.stringify(price_parsed.usd[key]);
            values = values.replace(/"/g,"");
            var temp =  document.getElementById(keys);
            temp.innerHTML=values;
        }

    }
     

   
}

</script>