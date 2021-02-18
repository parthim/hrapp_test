<?php
// function get_ip () {
//     if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
//         $ip = $_SERVER['HTTP_CLIENT_IP'];
//     } else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
//         $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
//     } else if (!empty($_SERVER['REMOTE_ADDR'])) {
//         $ip = $_SERVER['REMOTE_ADDR'];
//     } else {
//         $ip = false;
//     }
//     return $ip;
// }
// $country_code = get_ip();
function getGeoCountry() {
    $ip_address=$_SERVER["REMOTE_ADDR"];

    $reader = new Reader(plugin_dir_path( __FILE__ ).'geoip/GeoLite2-City.mmdb');

    // $record = $reader->city('49.205.45.31');
    $record = $reader->city($ip_address);

    $country_code = $record->country->isoCode;

    return $country_code;
}
$country_code = getGeoCountry();
echo $country_code;
// print_r($_SERVER);
// echo $_SERVER['REMOTE_ADDR'];
// echo "hello"
?>