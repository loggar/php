$allowedDomains = [
    "http://www.mydomain.com",
    "https://www.mydomain.com",
    "http://www.myotherdomain.com",
    "http://www.myotherdomain.com",
];

$originDomain = $_SERVER['HTTP_ORIGIN'];

if (in_array($originDomain, $allowedDomains)) {
    header("Access-Control-Allow-Origin: $originDomain");
};