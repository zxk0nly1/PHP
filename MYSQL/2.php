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
    // $pdo=new PDO($dsn,$config['user'],$config['password']);
    // $pdo->setAttribute(PDO::ATTR_CASE,PDO::CASE_NATURAL);
    $pdo=new PDO($dsn,$config['user'],$config['password'],[PDO::ATTR_CASE=>PDO::CASE_UPPER]);
    $query=$pdo->query('select * from admin');
    $rows=$query->fetchAll();
    print_r($rows);
}catch(PDOException $e){
    die($e->getMessage());
}