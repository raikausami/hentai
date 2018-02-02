<!DOCTYPE html>

<html lang="jp" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <title>ホムペつくりたい</title>
	<style type="text/css">
		
		h4{
			position: relative;
			top: 300px;
			float: left;
		}
		h5{	
		position: relative;
			top: 300px;
			float: left;
		}
		h6{
			float: right;
		}
		p{
			float: right;
		}
		body {
			background-image: url("a.JPG");
			background-size: cover;
			color: #ffffff
		}
    </style>
	<meta name="description" content="テスト ">
	<meta name="keywords" content="テスト,HTML,php">
</head>
<body>
<h1 div style="float:left; width:400px;heifht:180px;background:#000000;border:1px solid #a7e; text-align: center;"> Test</div></h1>
<h6 form action="example.php" method="post">
    <input type="text" name="名前" >
    <input type="submit" name="送信">
</form></h6>
<?php
    echo "<p>{$_POST['名前']} 会員の方はこちら</p>";
?>
<h2 div span style="text-align: center;width:300px;heifht:80px;background:#000000;border:1px solid #a7e; position: relative; top: 200px ">概要</span></h2>
<h3 div span style="text-align: center;width:300px;heifht:80px;background:#000000;border:1px solid #a7e; position: relative; top: 250px ">実績</span></h3>
<h4> <a href="https://twitter.com/RAIKA_EX"><img src="Twitter.png" border="0" width="45" height="45"></h4>
<h5> <a href="https://www.youtube.com/channel/UCZOXgyBp5Y-w5AwPD1AayvA?disable_polymer=true" ><img src="Youtube.png" border="0" width="150" height="45"></h5>
</body>
</html>