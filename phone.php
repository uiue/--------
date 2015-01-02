<?php
error_reporting(0);
/****
解析各大视频网站视频地址
本插件由萌娘TV 网站友情提供。
仅用于网络技术学习之目的，禁止用于商业及违法用途。
不承担由本插件带来的任何责任。
版本：3.8
开发：萌娘TV
网址：www.mengniangtv.com
QQ：766195605	
******/



$utoken = '8c73dee777992e5c64b259032a5ab908'; //这里填写token，多个请用，隔开


//随机轮换token值，解决token限制问题

$arr=explode(",", $utoken);
$c=count($arr)-1;
$i=rand(0,$c);
$token= $arr[$i];





//自动判断播放地址类型，1为url播放页网址方式，2为VID方式

$v=$_GET["v"];
if(strpos($v,"http")!== false)
	{
	$playtype = 1;
	}
else
	{
	$playtype = 2;
	}


if(empty($v))
{echo '播放地址为空，播放失败，请重试或向管理员报告此错误！';}


$s=$_GET["s"];

if(empty($s) AND $playtype == 2)

{echo '播放类型为空，播放失败，请重试或向管理员报告此错误！';}


if($playtype == 1)
	{
	$url=base64_encode($v);
	$b="token/$token/url/$url";

	}
else
	{
	$b="token/$token/site/$s/vid/$v";
	}

//请求手机可以播放的格式
$p=file_get_contents("http://api.flvxz.com/$b/xmlformat/ckxml/ftype/mp4");

    $data = $p;
    $parser = xml_parser_create();                      
    xml_parse_into_struct($parser, $data, $values, $index); 
    xml_parser_free($parser); 
    $sj = $values[3][value];
	header("Location:$sj");
