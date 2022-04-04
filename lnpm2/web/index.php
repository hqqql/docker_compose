<?php
$servername = "mysql_container"; #container_name
$username = "root";
$password = "123456";
$dbname = "myDB";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // 开始事务
    $conn->beginTransaction();
    // SQL 语句
    $conn->exec("update user set name='hql' where id=1");
    $conn->exec("delete from user where id=2");

    // 提交事务
    $conn->commit();
    echo "update&delete";
}
catch(PDOException $e)
{
    // 如果执行失败回滚
    $conn->rollback();
    echo "insert:<br>" . $e->getMessage();
}

$conn = null;
//try {
//    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//    // set the PDO error mode to exception
//    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//
//    // 开始事务
//    $conn->beginTransaction();
//    // SQL 语句
//    $conn->exec("INSERT INTO user VALUES (1, 'Doe')");
//    $conn->exec("INSERT INTO user VALUES (2, 'Moe')");
//    $conn->exec("INSERT INTO user VALUES (3, 'Doo')");
//
//    // 提交事务
//    $conn->commit();
//    echo "新记录插入成功";
//}
//catch(PDOException $e)
//{
//    // 如果执行失败回滚
//    $conn->rollback();
//    echo "insert:<br>" . $e->getMessage();
//}
//
//$conn = null;
//try {
//    // create database && table
//    $conn = new PDO("mysql:host=$servername", $username, $password);
//
//    // 设置 PDO 错误模式，用于抛出异常
//    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    $sql = "drop database if exists myDB;CREATE DATABASE myDB";
//    // 使用 exec() ，因为没有结果返回
//    $conn->exec($sql);
//    echo "数据库创建成功<br>";
//
//    $sql = "use myDB";
//    $conn->exec($sql);
//    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
//
//    // 使用 sql 创建数据表
//    $sql = "drop table if exists user;CREATE TABLE user (
//    id INT PRIMARY KEY,
//    name VARCHAR(30) NOT NULL
//    )";
//
//    // 使用 exec() ，没有结果返回
//    $conn->exec($sql);
//    echo "数据表 user 创建成功<br>";
//} catch (PDOException $e) {
//    echo $sql . "<br>" . $e->getMessage();
//}
//
//$conn = null;
?>