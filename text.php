<?php 
// PHP code to extract IP 

function getVisIpAddr() { 
	
	if (!empty($_SERVER['HTTP_CLIENT_IP'])) { 
		return $_SERVER['HTTP_CLIENT_IP']; 
	} 
	else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) { 
		return $_SERVER['HTTP_X_FORWARDED_FOR']; 
	} 
	else { 
		// return $_SERVER['REMOTE_ADDR']; 
	} 
} 

// Store the IP address 
$vis_ip = getVisIPAddr(); 

// Display the IP address 
// echo $vis_ip; 
// $this->catalogHelperInstance->log($vis_ip);
$query = @unserialize(file_get_contents('http://ip-api.com/php/'.$vis_ip));
// print_r($query);
echo $query['countryCode'];
// if($query && $query['status'] =='sucess'){
//     // echo "ISP: ".$query['isp']."<br>";
//     echo "CountryCode: ".$query['countryCode']."<br/>";
// }
// else 
// {
// echo "Status: ".$query['status']."<br/>";
// echo "No country code";
// }
?> 
