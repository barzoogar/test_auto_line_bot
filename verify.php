<?php
$access_token = 'rW/Eg7KHcl9bGVFIJLou0BW3lOQHsp7PkS9ERnf8kfnyOpkFh2VqxykCX9Ep12TUW2RbHy9y2zNnijvZIW4euF+V28F1rPLKBcfC+j4pqYId3LhCJON9BkPXJAGy3KkVLck5kzocqSd40cx1mAgP/QdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
?>