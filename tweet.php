<?php
require_once "vendor/autoload.php";

use Gutty\Tweet\Tweet;

$keys = [
    "consumer_key" => "gEf6EeT7IQg37AfIA78dyYXgQ",
    "consumer_secret" => "qfp0LEdtw5UAO8TRGM02KNifyXtM9uAWviSmPlRNwHjFl6pGT4",
    "access_token" => "3223138740-5UqQEAwMQCU37DL09ZBfM45ChDCzhwm4NP2uMI9",
    "access_token_secret" => "LStpyHqcfItB58MPRvbTMgteHHHznopsC271dPLZKj8Qk"
];
$twitter = new Tweet($keys);
if ($twitter->tweet("Hello, Twitter!")) {
    echo "Success";
} else {
    echo "Failure";
}