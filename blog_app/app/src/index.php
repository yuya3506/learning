<?php

// 接続
// hostはコンテナ名を記載する
$dsn = 'mysql:dbname=test_db;host=run-php-db;';
$user = 'test';
$password = 'test';

try {
    $pdo = new PDO($dsn, $user, $password);
    $sth = $pdo->query("SELECT * FROM blog ORDER BY id DESC LIMIT 5");
    $user = $sth->fetch(PDO::FETCH_ASSOC);
    var_dump($user);
    echo '接続成功';
    # 接続終了
    $pdo = null;
} catch (PDOException $e) {
    print('Error:'.$e->getMessage());
    exit;
}
