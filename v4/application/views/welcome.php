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
	<h1>尊敬的先生/女士：</h1>

	<div id="body">
		<p>您好！非常感谢您能参与本次情景调查实验(V4)。</p>
		<p style="font-size:16px; color: blue;font-weight: bold;">本实验由基本信息调查部分和两个不同假设场景构成，其中每个场景由52题问题组成问卷调查。敬请您填完所有问题调查。</p>
        <p style="color: blue;">本次调查将抽出1等奖1名（价值100块钱充值卡），</p>
        <p style="color: blue;">2等奖2名（价值30块钱充值卡），</p>
        <p style="color: blue;">3等奖5名（价值20块钱充值卡）。</p>

        <p>谢谢！</p>
        <p>注：整个实验采取匿名形式，基本信息中的手机号调查仅是为了抽奖所用，绝对不会泄露您的隐私，且答案没有对错之分，结果仅用于学术研究，在此感谢您！</p>
<!--		<p style="font-weight: bold; font-size: 12px">本研究中关于网络购物的定义是：您通过互联网搜索任何无形或有形的商品并最终购买（例如在网上购买一件衣服、在互联网中搜索一个餐厅的评价并前去就餐）。因此，本研究中关于网络购物的金额为您通过互联网搜索任何无形或有形的商品并最终消费的金额。</p>-->
	</div>

	<h1>第一部分：基本信息调查</h1>
	<div id="body">
		<p>这部分仅用于了解被试者的基本情况，将您所适合的答案打钩，我们对您所填写内容完全保密。（以下内容均为必选）</p>
	</div>

	<div id="wrapper">
		<div id="content">
		<?=$errors?>
		<?=$form?>
		</div>
		
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}<?php echo($visitor_count); ?></strong> seconds</p>
<script type="text/javascript"><!--
google_ad_client = "ca-pub-4079117029926365";
/* footer_ad */
google_ad_slot = "4435673085";
google_ad_width = 728;
google_ad_height = 90;
//-->
</script>
<script type="text/javascript"
src="//pagead2.googlesyndication.com/pagead/show_ads.js">
</script>

</div>

</body>
</html>
