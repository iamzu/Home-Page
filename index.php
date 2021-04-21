<?php
    $version = '20210407'
?>
<!DOCTYPE html>
<html>
<!--head模块-->
<head>
    <!--字符编码-->
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <!--语言-->
    <meta http-equiv="Content-Language" contect="zh-CN">
    <!--移动端适配-->
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <!-- 避免IE使用兼容模式 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <!--窗口设定-->
    <meta http-equiv="Window-target" content="_top">
    <!-- 针对手持设备优化，主要是针对一些老的不识别viewport的浏览器，比如黑莓 -->
    <meta name="HandheldFriendly" content="true">
    <!-- 微软的老式浏览器 -->
    <meta name="MobileOptimized" content="320">
    <!-- windows phone 点击无高光 -->
    <meta name="msapplication-tap-highlight" content="no">
    <!--百度禁止转码-->
    <meta http-equiv="Cache-Control" content="no-siteapp">
    <!--浏览器的兼容配置-->
    <!--Microsoft Internet Explorer-->
    <!--是否开启cleartype显示效果-->
    <meta http-equiv="cleartype" content="on">
    <meta name="skype_toolbar" content="skype_toolbar_parser_compatible">
    <!--Pinned Site-->
    <!-- IE 10 / Windows 8 -->
    <meta name="msapplication-TileImage" content="pinned-tile-144.png">
    <meta name="msapplication-TileColor" content="#009900">
    <!--IE 11 / Windows 9.1-->
    <meta name="msapplication-config" content="ieconfig.xml">
    <!--Google Chrome-->
    <!--禁止自动翻译-->
    <meta name="google" value="notranslate">
    <!--360浏览器-->
    <!--极速模式-->
    <meta name="renderer" content="webkit">
    <!--QQ手机浏览器-->
    <!--锁定屏幕在特定方向-->
    <meta name="x5-orientation" content="portrait">
    <!-- 全屏显示 -->
    <meta name="x5-fullscreen" content="true">
    <!-- 应用模式 -->
    <meta name="x5-page-mode" content="app">
    <!--UC浏览器-->
    <!-- uc强制竖屏 -->
    <meta name="screen-orientation" content="portrait">
    <!-- UC强制全屏 -->
    <meta name="full-screen" content="yes">
    <!-- UC应用模式 -->
    <meta name="browsermode" content="application">
    <!--Apple iOS-->
    <!-- Smart App Banner -->
    <!--<meta name="apple-itunes-app" content="app-id=APP_ID,affiliate-data=AFFILIATE_ID,app-argument=SOME_TEXT">-->
    <!-- 禁止自动探测手机/邮箱号码 -->
    <meta name="format-detection" content="telphone=no, email=no">
    <!-- Add to Home Screen添加到主屏 -->
    <!-- 是否启用 WebApp 全屏模式 -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    <!-- 设置状态栏的背景颜色,只有在 “apple-mobile-web-app-capable” content=”yes” 时生效 -->
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <!-- 添加到主屏后的标题 -->
    <meta name="apple-mobile-web-app-title" content="Chia2主页">
    <!--Google Android-->
    <meta name="theme-color" content="#CCFFFF">
    <!-- 添加到主屏 -->
    <meta name="mobile-web-app-capable" content="yes">
    <!--引入核心css-->
    <link rel="stylesheet" href="./assets/css/home/main.css?v=<?=$version?>"/>
    <!--选择性引入css-->
    <noscript>
        <link rel="stylesheet" href="./assets/css/home/noscript.css?v=<?=$version?>"/>
    </noscript>
    <!--SEO优化-->
    <!--标题-->
    <title>「七月」的小屋</title>
    <!--关键词-->
    <meta name="keywords" content="七月,个人主页,引导页,导航,博客,音乐,电影,壁纸,解析,源码,教程">
    <!--描述-->
    <meta name="description" content="「七月」的小屋！">
    <!--作者 author-->
    <meta name="author" content="七月,i@lsoex.com">
    <!--搜索引擎索引方式-->
    <meta name="robots" content="all">
    <!--logo-->
    <link rel="shortcuticon" href="./favicon.ico"/>
    <!--百度统计-->
	<script>
	var _hmt = _hmt || [];
	(function() {
	  var hm = document.createElement("script");
	  hm.src = "https://hm.baidu.com/hm.js<?=$version?>?e5df5d58f35df4f5a177c704966a2a66";
	  var s = document.getElementsByTagName("script")[0];
	  s.parentNode.insertBefore(hm, s);
	})();
	</script>
    <!--调试工具-->
    <script>
        if ((location.href || '').indexOf('admin=true') > -1) {
            document.write('<script src="https://assets.top/admins/vconsole.min.js"><\/script>');
            document.write('<script>new VConsole()<\/script>');
        }
    </script>
</head>
<body class="is-loading">
<!-- Wrapper -->
<div id="wrapper">

    <!-- Main -->
    <section id="main">
        <!--header模块-->
        <header>
            <!--头像-->
            <span class="avatar"><img src="https://q2.qlogo.cn/headimg_dl?dst_uin=210849049&spec=100" alt=""/></span>
            <!--内容-->
            <a href="/"><h1>七月</h1></a>
            <p>欢迎来到我的小屋！</p>
        </header>
        <!--footer模块-->
        <footer>
            <!--上部导航-->
            <!--            <ul>-->
            <!--                <a href="douyin" class="fa fa-hacker-news" target="_blank>">抖音解析</a>-->
            <!--                <a>|</a>-->
            <!--                <a href="wangyiyun" class="fa fa-music" target="_blank>">网易热评</a>-->
            <!--                <a>|</a>-->
            <!--                <a href="bing" class="fa fa-picture-o" target="_blank>">必应图库</a>-->
            <!--            </ul>-->
            <!--中部导航-->
            <ul class="icons">
                                <li><a href="https://blog.chia2.com" class="fa fa-globe" target="_blank>"></a>博客</li>
                <!--                <li><a href="https://movie.assets.top" class="fa fa-film" target="_blank>"></a>电影</li>-->
                <!--                <li><a href="music.html" class="fa fa-music" target="_blank>"></a>音乐</li>-->
                <!--                <li><a href="picture" class="fa fa-picture-o" target="_blank>"></a>图片</li>-->
                <!--                <li><a href="book" class="fa fa-book" target="_blank>"></a>小说</li>-->
                <!--                <li><a href="pan" class="fa fa-briefcase" target="_blank>"></a>网盘</li>-->
                <!--                <li><a href="api" class="fa fa-cogs" target="_blank>"></a>API</li>-->
                <!--                <li><a href="https://photo.assets.top" class="fa fa-camera" target="_blank>"></a>相册</li>-->
            </ul>
            <!--联系方式-->
            <a href="http://wpa.qq.com/msgrd?V=1&uin=210849049" class="fa fa-qq"
               target="_blank>">QQ</a>
            <a>|</a>
            <!--            <a href="404.html" class="fa fa-weixin" target="_blank>">微信</a>-->
            <!--            <a>|</a>-->
            <a href="https://weibo.com/u/5671385970" class="fa fa-weibo" target="_blank>">微博</a>
            <a>|</a>
            <a href="http://mail.qq.com/cgi-bin/qm_share?t=qm_mailme&email=8pOWn5ucspGam5PA3JGdnw"
               class="fa fa-envelope" target="_blank>">邮箱</a>
        </footer>
    </section>

    <!-- Footer -->
    <footer id="footer">
        <ul class="copyright">
            <li>您的IP：
                <span id="cip"></span>
            </li>
            <li>您的节点：
                <span id="cid"></span>
            </li>
            <li>您的位置：
                <span id="cname"></span>
            </li>
            <p><a target="_blank" href="/">Lsoex</a>©版权所有 <a target="_blank" href="http://beian.miit.gov.cn/">苏ICP备17068687号</a></p>

        </ul>
    </footer>

</div>
<canvas id="mineCanvas"></canvas>

<script>
    if ('addEventListener' in window) {
        window.addEventListener('load', function () {
            document.body.className = document.body.className.replace(/\bis-loading\b/, '');
        });
        document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
    }
</script>
<!--落叶效果-->
<script src="./assets/js/home/jquery.min.js?v=<?=$version?>"></script>
<script src="./assets/js/home/anime.min.js?v=<?=$version?>"></script>
<script src="./assets/js/home/canvas.js?v=<?=$version?>"></script>
<script src="./assets/js/home/su.js?v=<?=$version?>"></script>
<script type="text/javascript">jQuery(document).ready(function ($) {
    $('body').wpSuperSnow({
        flakes: ['./assets/images/home/007.png', './assets/images/home/006.png', './assets/images/home/004.png', './assets/images/home/005.png', './assets/images/home/001.png', './assets/images/home/003.png', './assets/images/home/002.png', './assets/images/home/008.png'],
        totalFlakes: '100',
        zIndex: '999999',
        maxSize: '30',
        maxDuration: '20',
        useFlakeTrans: false
    });
});</script>
<script src="https://pv.sohu.com/cityjson?ie=utf-8"></script>
<script type="text/javascript">
    document.getElementById('cip').innerText = returnCitySN['cip'];
    document.getElementById('cid').innerText = returnCitySN['cid'];
    document.getElementById('cname').innerText = returnCitySN['cname'];
</script>
<!-- 禁止右键和禁止选中文字 -->
<body onselectstart="return false" oncontextmenu=self.event.returnValue=false></body>
<!--防举报,仅支持iOS-->
<!--<script src="https://open.mobile.qq.com/sdk/qqapi.js?v=<?=$version?>?_bid=152"></script>-->
<!--<script type="text/javascript">-->
<!--    mqq.ui.setTitleButtons({-->
<!--        right: {-->
<!--            title: "投诉",-->
<!--            hidden: true-->
<!--        }-->
<!--    })-->
<!--</script>-->
<!-- 背景音乐代码 -->
<!--<audio autoplay="autopaly" loop="loop" src="https://blog.assets.top/0.m4a" type="audio/mpeg"/>-->
<!--</audio>-->
<!--动态背景特效-->
<!--<script type="text/javascript" color="51,153,204" opacity='0.7' zIndex="-2" count="200" src="./assets/js/home/canvas-nest.js?v=--><?//=$version?><!--"></script>-->
</body>
</html>
