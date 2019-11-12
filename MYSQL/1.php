<?php
header("Content-type:text/html;charset=utf8");
$config=[
    'host'=>'127.0.0.1',
    'user'=>'root',
    'password'=>'',
    'database'=>'jsp',
    'charset'=>'utf8'
];
$dsn=sprintf(
    "mysql:host=%s;dbname=%s;charset=%s",
    $config['host'],
    $config['database'],
    $config['charset']
);
try{
    // $pdo=new PDO($dsn,$config['user'],$config['password'],
    // [PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION]);
    $pdo=new PDO($dsn,$config['user'],$config['password']);
    // $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
    // $pdo->query('select * from d');
    //增删改查 输出受影响的条数
    $pdo->exec("INSERT INTO admin (username,name,password) values('113123','王五','123')");
    echo $pdo->lastInsertId();
}catch(PDOException $e){
    die($e->getMessage());
}