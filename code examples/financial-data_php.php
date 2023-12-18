<?php

$params = [
    'source' => 'universal',
    'url' => 'https://www.syntaxdata.com/affinity?_gl=1*1ozt4xh*_up*mq..*_ga*mtuyntq3ntm5lje3mdi1ndixotc.*_ga_v0892cy751*mtcwmju0mje5ni4xljaumtcwmju0mje5ni4wljauma..'];

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "https://realtime.oxylabs.io/v1/queries");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($params));
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_USERPWD, "user" . ":" . "pass1");

$headers = array();
$headers[] = "Content-Type: application/json";
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
echo $result;

if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close ($ch);
?>