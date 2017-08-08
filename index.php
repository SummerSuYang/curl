<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/8/8 0008
 * Time: 10:09
 */
$url = "http://www.jb51.net";
$post_data = [

];

//初始化
$ch = curl_init();
//获取信息
curl_getinfo($ch);
//设置url
curl_setopt($ch, CURLOPT_URL, $url);
//不立即输出
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//不显示header信息
curl_setopt($ch, CURLOPT_HEADER, 0);
//post方式
curl_setopt($ch, CURLOPT_POST, 1);
//post传递过去的数据
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
//设置代理服务器
curl_setopt($ch, CURLOPT_PROXY, '125.21.23.6:8080');
//设置延迟时间
curl_setopt($ch, CURLOPT_TIMEOUT, 10);
//在http的header加一个referer的字段
curl_setopt($ch,  CURLOPT_REFERER, 'str');
//加一个cookie
curl_setopt($ch,   CURLOPT_COOKIE, 'str');


//执行
$output = curl_exec($ch);
//获取错误信息，如果没有就返回空字符串
$error = curl_error($ch);
//关闭
curl_close($ch);