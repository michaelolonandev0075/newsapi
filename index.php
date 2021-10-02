<?php 

  $cURLConnection = curl_init();

  curl_setopt($cURLConnection, CURLOPT_URL, 'https://newsapi.org/v2/top-headlines?country=ph&apiKey=fc8fe67df7524a9f8c101f5bf21b7169&category=business');
  curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

  $data = curl_exec($cURLConnection);
  curl_close($cURLConnection);

  $news_data = json_decode($data);

?>
<?php foreach ($news_data->articles as $key => $value): ?>
<h1>News Title: <?= $value->title ?></h1>
<?php endforeach; ?>