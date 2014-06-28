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

        width: 400px;
        width: "400px";
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

<div id="container">
	<h1>尊敬的女士/先生：</h1>

	<div id="body">
		<p>您好！非常感谢您能参与本次情景实验调查。您是第 <?php echo($visitor_count); ?> 位参与者。</p>
		<p>请您基于以下几个假设场景，根据自身的想法填写问卷。整个实验采取匿名形式，答案没有对错之分，结果仅用于学术研究。再次感谢您！</p>
		<p>本研究中关于网络购物的定义是：您通过互联网搜索任何无形或有形的商品并最终购买（例如在网上购买一件衣服、在互联网中搜索一个餐厅的评价并前去就餐）。因此，本研究中关于网络购物的金额为您通过互联网搜索任何无形或有形的商品并最终消费的金额。</p>
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
	
	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>



</body>
</html>