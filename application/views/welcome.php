<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>hbq的调查问卷</title>

    <link rel="stylesheet" href="<?=base_url()?>styles/form.css" type="text/css" media="screen" />
	<style type="text/css">

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	#wrapper {
		width: 800px;
		margin: auto;
		text-align: left;
	}

	#content {
		padding: 40px;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}

	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}

    label {
        display: inline;
        float: left;

        width: 600px;
        width: "600px";
        padding-right: 10px;

        vertical-align: middle;
    }
    label.required {
        font-weight: normal;
    }
	</style>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="content-language" content="de" />
</head>
<body>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-52582741-1', 'auto');
    ga('send', 'pageview');

</script>

<div id="container">
	<h1>尊敬的同学：</h1>

	<div id="body">
		<p style="font-size:16px; color: blue;font-weight: bold;">您好，本次问卷调查是两个月前的跟踪调查，仅耽误您几分钟的时间。此外您所填写的手机号仅是为了实验研究及随后的小礼品赠送，绝不会泄露您的隐私，请您放心！</p>

        <p style="font-size:16px; color: blue;font-weight: bold;">谢谢！</p>
		<p style="font-size:16px; color: blue;font-weight: bold;">黄冰俏</p>
	</div>
		
	<div id="wrapper">
		<div id="content">
		<?=$errors?>
		<?=$form?>
		</div>
		
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}<?php echo($visitor_count); ?></strong> seconds</p>

</div>

</body>
</html>