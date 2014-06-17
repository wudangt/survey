<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>服装购物调查</title>
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

                width: 470px;
                width: "470px";
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
	<h1>服装购物调查</h1>
	
	<div id="wrapper">	
		<div id="content">
        <table>
            <tr>
                <th>累计评论</th>
            </tr>
            <?php foreach($comments as $item):?>
            <tr>
                <td><?php echo $item->comment; ?></td>
            </tr>
            <?php endforeach; ?>
        </table>
		</div>
	</div>

    <h1>第二部分：您对服装评论的感知的相关调查</h1>
    <div id="body">
        <p>请您基于网页中的商品描述及评论填写以下问卷。（1—5分别代表非常不认同、不认同、一般、认同和非常认同）</p>
    </div>

    <div id="wrapper">
        <div id="content">
            <?=$errors?>
            <?=$form?>
        </div>
    </div>
</div>

</body>
</html>