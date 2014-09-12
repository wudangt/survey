<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>调查问卷统计数据</title>

    <link rel="stylesheet" href="<?=base_url()?>styles/form.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?=base_url()?>bootstrap-3.0.3/css/bootstrap.min.css">

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

<div id="container" style="text-align: left; margin:auto">
	<h1>目前调查问卷统计数据</h1>

	<div id="body">
        <p>截至目前：</p>
        <p>问卷总填写数量：<?php echo($all_visit); ?></p>

        <p>clothes有效问卷数量：<?php echo($cloth_visit); ?></p>
        <p>clothes问卷return user数量：<?php echo($return_visit); ?></p>
        <p>clothes有效问卷uid为：<?php foreach($cloth_uid as $item) echo $item->uid."\t";?></p>


	<table class="table table-striped table-hover" style="width:200px; margin:auto">
            <tbody>

            <?php for($i =0; $i<count($all_uid); $i= $i+5) {?>
                <tr>
				<?php for($j =0; $i+$j <count($all_uid) &&$j<5; $j= $j+1) {?>
                    <td style="vertical-align:middle">
                        <div><?php echo $all_uid[$i+$j]->uid; ?></div>
                    </td>
                    <td style="vertical-align:middle">
                        <div><?php echo $all_uid[$i+$j]->phone_num; ?></div>
                    </td>
					<?php }?>
                </tr>
            <?php }?>
            </tbody>
        </table>
	</div>

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>
