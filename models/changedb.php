<?php
require_once __DIR__ . './../functions/sql.php';
function get_news()
{
    sql_connect();
    $sql='SELECT * FROM newsTable ORDER BY timecreate';
    $res=mysql_query($sql);
}
function add_news($data)
{
    $sql="
    INSERT INTO newsTable
    (title, path,newscontent,datenews,timecreate)
    VALUES
    ('". $data[title] ."','". $data[path] ."','". $data[newscontent] ."','". $data[datenews] ."','". $data[timecreate] ."')
    ";
    sql_connect();
    mysql_query($sql);
}
?>

