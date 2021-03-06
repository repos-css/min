<?php

//This file can be used on CDNs so that users can pick and choose their downloads
//e.x. http://8b51d1abd8.test-url.ws/mingziphotlink.php?general=1&icons=1

header("Access-Control-Allow-Origin: *");

$totalcss="";

if ($_GET['general']) {
$totalcss .= "body{font-family:Helvetica,sans-serif;text-align:center;margin:0;font-size:16px}hr{margin:2.5em auto}hr.mediumwidth{margin:2.5em auto}a{text-decoration:none}.mediumwidth{font-size:16px;width:40%;margin-left:30%;margin-top:.3em;margin-bottom:.3em}@media(max-width:870px){.mediumwidth{width:70%;margin-left:15%}}@media(max-width:520px){.mediumwidth{width:100%;margin-left:0}hr.mediumwidth{width:auto}}.thin{font-weight:100}";
}

if ($_GET['headings']) {
$totalcss .= "h1{font-size:4em;margin:0}h1.title{font-size:7em}h2{font-size:2em}";
}

if ($_GET['buttons']) {
$totalcss .= "button{background:#afafaf;font-family:Lucida Sans Unicode,Lucida Grande,sans-serif;box-shadow:0 1px 0 rgba(255,255,255,0.5) inset;color:#f3f3f3 !important;display:inline-block;font-size:2.5em;padding:15px 40px 16px;text-align:center;text-decoration:none;margin:.3em .7em .3em .7em;border:1px solid #000;cursor:pointer}button.smooth{transition:background-color .15s ease-in-out}button.btn-a{background:#345eb3;border:1px solid #1d3464}button.btn-a:hover{background:#29498b}button.btn-a:active{background:#1d3464}button.btn-b{background:#51a351;border:1px solid #2f5f2f}button.btn-b:hover{background:#408140}button.btn-b:active{background:#2f5f2f}button.btn-c{background:#da2727;border:1px solid #841717}button.btn-c:hover{background:#b01e1e}button.btn-c:active{background:#841717}button.btn-small{padding:7px 19px 10px;font-size:16px}";
}

if ($_GET['inputs']) {
$totalcss .= "textarea,input{border:1px solid lightgray;outline:0;padding:6px;font-size:.8em;font-family:Helvetica,sans-serif}textarea.smooth,input.smooth{transition:border .15s ease-in-out}textarea:focus,input:focus{border:1px solid #57abb3}textarea,input[type='text']{width:13em}.addon-front{padding:6px 11px 6px 10px;margin-right:-2px;border:1px solid lightgray;z-index:400;display:inline-block;border-right:0;font-size:.8em;font-family:Arial Unicode MS Regular,sans-serif !important}";
}

if ($_GET['navbar']) {
$totalcss .= ".navbar{width:100%;background:black;color:white;text-align:left;height:1.5em;padding:1em 0 .6em}.pagename{color:white;padding:0 1em 0 2em;font-weight:bold}.navbar-link{padding:.5em;color:#aaa}.navbar-link:hover{color:white}@media(max-width:500px){.navbar a{text-align:center;display:block}.navbar{height:7.5em}}";
}

if ($_GET['tables']) {
$totalcss .= "table{width:100%;border-spacing:0}.table th,.table td{padding:.5em;line-height:1.4em;text-align:left;vertical-align:top}.table td{border-top:1px solid #ddd}tbody tr:nth-child(2n-1){background:#e0e0e0}";
}

if ($_GET['messages']) {
$totalcss .= "message{width:100%;display:block;padding:2em 0;background:#a7d3e4}message.warning{background:#e4a7a7}message.great{background:#a7e4ae}";
}

if ($_GET['icons']) {
$totalcss .= "ico{font-size:1.9375em;font-family:Lucida Sans Unicode,Lucida Grande,sans-serif}";
}

if ($_GET['grid']) {
$totalcss .= ".row{display:block;line-height:2em;margin-top:2%;height:2em}.ie column{margin:auto .7%}column{display:inline-block;float:left;margin:auto 1%}.c10{width:98%}.c9{width:88%}.c8{width:78%}.c7{width:68%}.c6{width:58%}.c5{width:48%}.c4{width:38%}.c3{width:28%}.c2{width:18%}.c1{width:8%}@media(max-width:720px){.row [class*='c']{width:100%;display:block;margin:1% auto}.row:last-child column{margin-bottom:2.5em}}";
}

if ($_GET['iehacks']) {
$totalcss .= ".ie .mediumwidth{width:70%;margin-left:0}.ie .mediumwidth hr{margin:100px auto;padding-left:200px}";
}

// disable ZLIB ouput compression
ini_set('zlib.output_compression','Off');

// compress data
$gzipoutput = gzencode($totalcss,intval($_GET['loc']));

header("Access-Control-Allow-Origin: *");

header('Content-Encoding: gzip');

header('Content-Length: '.strlen($gzipoutput));
header('Cache-Control: no-cache, no-store, max-age=0, must-revalidate');
header('Pragma: no-cache');

// output data
echo $gzipoutput;

?>