<!doctype html>
<html lang="ja">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="../css/style.css">

<title>PHP</title>
</head>
<body>
<header>
<h1 class="font-weight-normal">PHP</h1>    
</header>

<main>
<h2>Practice</h2>
<pre>
<?php
  try 
  {
    $db = new PDO('mysql:dbname=my_db;host=127.0.0.1;charset=utf8', 'root', 'root');
  }
  catch (PDOException $e)
  {
    echo "connection error ".$e->get_Message();
  }
  $count = $db->exec('INSERT INTO my_item SET item_name="apple", price=30');
  echo $count."件のデータを挿入しました"
?>
</pre>
</main>
</body>    
</html>