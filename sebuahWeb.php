<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sebuah Website</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet"href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Archivo+Narrow|Lobster" rel="stylesheet">
    <style type="text/css">
	body{
		background-color: #fff3a0;
	}
	#satu{
		height: 25%;
		width: 80%;
		margin: auto;
		text-align: center;
		background-color: #6bd6b7;
		color: #3a4c49;
		font-family: 'Itim', cursive;
		border: dotted;
		border-width: 5px;
		border-color: #3a4c49;
		padding: 10px;
		box-sizing: border-box;
		margin-bottom: 24px;
	}
	#dua{
		height: 25%;
		width: 80%;
		margin: auto;
		text-align: center;
		background-color: #d1d1d1;
		color:#a81544;
		font-family: 'Itim', cursive;
		border: double;
		border-width: 5px;
		border-color: #a81544;
		padding: 10px;
		box-sizing: border-box;
	}
	</style>
</head>
<body>
    
<?php
    date_default_timezone_set('Asia/Jakarta');
    if (!isset($_COOKIE['count'])){
        $cookie = 1;
        $tgl = date ("d-m-Y");
        $wkt = date ("h:i:s a");
        setcookie("count", $cookie, time()+86400);
        setcookie("date", $tgl, time()+86400);
        setcookie("time", $wkt, time()+86400);
    }
    else{
        $cookie = ++$_COOKIE['count'];
        $tgl = $_COOKIE['date'].'<br>'.date ("d-m-Y");
        $wkt = $_COOKIE['time'].'<br>'.date ("h:i:s a");
        setcookie("count", $cookie, time()+86400);
        setcookie("date", $tgl, time()+86400);
        setcookie("time", $wkt, time()+86400);
    }
?>

<div id="satu">
	<h1>MY WEBSITE</h1>
	<p style="font-size: 14pt;">Secara terminologi website adalah kumpulan dari halaman-halaman situs, yang biasanya terangkum dalam sebuah domain atau subdomain, yang tempatnya berada di dalam World Wide Web (WWW) di Internet. WWW terdiri dari seluruh situs web yang tersedia kepada publik. Halaman-halaman sebuah situs web  (web page) diakses dari sebuah URL yang menjadi “akar” ( root ), yang disebut homepage (halaman induk; sering diterjemahkan menjadi “beranda”, “halaman muka”), URL ini mengatur web page untuk menjadi sebuah hirarki, meskipun hyperlink-hyperlink yang ada di halaman tersebut mengatur para pembaca dan memberitahu mereka susunan keseluruhan dan bagaimana arus informasi ini berjalan.
	</p>
</div>
<div id="dua">
	<h1>MY ARTICLE</h1>
	<p style="font-size: 14pt;">Artikel adalah karya tulis lengkap, misalnya laporan berita, surat kabar, dan sebagainya (KBBI 2002: 66), atau bisa juga sebuah karangan/prosa yang di muat dalam media massa, yang membahas isu tertentu, persoalan, atau kasus yang berkembang dalam masyarakat secara lugas. Dalam arti lain, Artikel juga merupakan karya tulis atau karangan, karangan non fiksi, karangan tak tentu panjangnya, karangan yang bertujuan untuk meyakinkan, mendidik, atau menghibur, sarana penyampaiannya adalah surat kabar, majalah, dan lainnya. wujud karangan berupa berita atau “kharkas”.
	</p>
</div>
</body>
</html>
