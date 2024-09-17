<?php
$image_urls = [
    "https://pic.imgdb.cn/item/66e99e76f21886ccc060e8e5.gif",
    "http://cdnjson.com/images/2024/09/17/FBC19F8B-4B1B-4A90-A254-3FF2C525980D.gif",
    "http://cdnjson.com/images/2024/09/17/47989680-AC4E-4280-A848-39E033ECBB61.gif"
    "http://cdnjson.com/images/2024/09/17/4253D878-EEA8-403F-9D4E-A7729B4B4A0E.gif"

];

$random_url = $image_urls[array_rand($image_urls)];
header('Content-Type: text/plain');
echo $random_url;
?>
