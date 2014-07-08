<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>情景一实验的说明</title>

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

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-52582741-1', 'auto');
    ga('send', 'pageview');

</script>

<div id="container" style="font-size: 16px;">
    <h1>情景一实验的说明</h1>

    <div id="body">
        <p>您好，您即将进入情景一实验。请您仔细阅读以下的假设情景：</p>
        <p style="color: blue; font-weight: bold">这几天，您打算精心选购一套职业正装以满足您找工作或是组织校内大型活动的需要。</p>
        <p style="color: blue; font-weight: bold">下一网页即是您在您熟悉的购物平台初步挑选出来的一个服装样式较为好看的职业正装销售商。</p>
        <p>请您基于网页中的介绍及用户评论填写网页后下端的问卷。</p>
        <p style="color: #28a4c9">注意：网页左下端的评论一共为十条，如果您无法看到最后的END，请您将浏览器的页面窗口缩小至100%或者90%，则可看完全部的评论。</p>
    </div>

    <div id="wrapper">
        <div id="content">
            <?=$form?>
        </div>
    </div>

    <p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>



</body>
</html>