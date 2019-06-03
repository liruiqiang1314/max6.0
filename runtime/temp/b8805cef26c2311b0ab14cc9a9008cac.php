<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:76:"E:\project2017\thinkphp5\public/../application/home\view\infolist\index.html";i:1486695026;s:66:"E:\project2017\thinkphp5\public/../application/home\view\base.html";i:1488165590;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link href="__HOME__/style/webstyle.css" rel="stylesheet" type="text/css" />
<title>新闻</title>
<script src="__HOME__/js/jquery-1.11.3.min.js"></script>
<script src="__HOME__/js/unslider-min.js"></script>
</head>

<body>
<!--header start-->
<div class="header_bg">
	<div class="content">
		<div class="link fr"><a href="">注册</a>　|　<a href="">登录</a>　|　当前访客身份：游客　<a href=""><img src="__HOME__/images/share01.jpg"></a><a href=""><img src="__HOME__/images/share02.jpg"></a><a href=""><img src="__HOME__/images/share03.jpg"></a><a href=""><img src="__HOME__/images/share04.jpg"></a><a href=""><img src="__HOME__/images/share05.jpg"></a></div>
		<div class="fl cl"><img src="__HOME__/images/logo.jpg" alt="" /></div>
		<div class="menu fr rel">
			<ul>
				<!-- <li><a href="<?php echo url('home/index/index'); ?>"><span>HOME</span>首页<em class="bor1"></em></a></li>
				<li><a href="<?php echo url('home/infolist/index'); ?>"><span>NEWS</span>新闻中心<em class="bor2"></em></a></li>
				<li><a href="<?php echo url('home/product/index'); ?>"><span>CASE</span>精彩案例<em class="bor3"></em></a></li>
				<li><a href=""><span>DOWNLOAD</span>下载中心<em class="bor4"></em></a></li>
				<li><a href=""><span>MESSAGE</span>留言列表<em class="bor5"></em></a></li>
				<li><a href=""><span>JOB</span>在线招聘<em class="bor6"></em></a></li>
				<li><a href=""><span>LOGNCAI</span>走进龙采 <em class="bor7"></em></a></li>
				<li><a href=""><span>WEB</span>网站建设<em class="bor8"></em></a></li>
				<li><a href=""><span>BAIDU</span>百度推广<em class="bor9"></em></a></li> -->

				<?php if(is_array($nav) || $nav instanceof \think\Collection): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				   <li><a href="<?php echo $vo['url']; ?>"><span><?php echo $vo['title']; ?></span><?php echo $vo['title']; ?><em class="bor<?php echo $i; ?>"></em></a></li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
		</div>
	</div>
</div>

<!--header end-->

<!--index start-->

<div class="main_bg">
	<div class="content">
		<div class="classify tc"><a href=""><img src="__HOME__/images/main04.jpg"><br />新闻中心</a><a href=""><img src="__HOME__/images/main05.jpg"><br />最新动态</a><a href=""><img src="__HOME__/images/main06.jpg"><br />行业新闻</a></div>
		<div class="m_news">
			<ul>
				<li>
					<div class="m_news_pic fl"><a href=""><img src="__HOME__/images/index_10.jpg"></a></div>
					<div class="m_news_con fr">
						<a href="">“互联网思维下的营销变革”...</a>
						<p> 自2013年以来“互联网思维”变得越来越不陌生，运用网络营销平台，传导关切价值，满足关切需求，谋划超速发展的跨界共赢的思想方式。</p>
						<span>2/6/17</span>
					</div>
				</li>
				<li>
					<div class="m_news_pic fl"><a href=""><img src="__HOME__/images/index_10.jpg"></a></div>
					<div class="m_news_con fr">
						<a href="">“互联网思维下的营销变革”...</a>
						<p> 自2013年以来“互联网思维”变得越来越不陌生，运用网络营销平台，传导关切价值，满足关切需求，谋划超速发展的跨界共赢的思想方式。</p>
						<span>2/6/17</span>
					</div>
				</li>
				<li>
					<div class="m_news_pic fl"><a href=""><img src="__HOME__/images/index_10.jpg"></a></div>
					<div class="m_news_con fr">
						<a href="">“互联网思维下的营销变革”...</a>
						<p> 自2013年以来“互联网思维”变得越来越不陌生，运用网络营销平台，传导关切价值，满足关切需求，谋划超速发展的跨界共赢的思想方式。</p>
						<span>2/6/17</span>
					</div>
				</li>
				<li>
					<div class="m_news_pic fl"><a href=""><img src="__HOME__/images/index_10.jpg"></a></div>
					<div class="m_news_con fr">
						<a href="">“互联网思维下的营销变革”...</a>
						<p> 自2013年以来“互联网思维”变得越来越不陌生，运用网络营销平台，传导关切价值，满足关切需求，谋划超速发展的跨界共赢的思想方式。</p>
						<span>2/6/17</span>
					</div>
				</li>
				<li>
					<div class="m_news_pic fl"><a href=""><img src="__HOME__/images/index_10.jpg"></a></div>
					<div class="m_news_con fr">
						<a href="">“互联网思维下的营销变革”...</a>
						<p> 自2013年以来“互联网思维”变得越来越不陌生，运用网络营销平台，传导关切价值，满足关切需求，谋划超速发展的跨界共赢的思想方式。</p>
						<span>2/6/17</span>
					</div>
				</li>
				<li>
					<div class="m_news_pic fl"><a href=""><img src="__HOME__/images/index_10.jpg"></a></div>
					<div class="m_news_con fr">
						<a href="">“互联网思维下的营销变革”...</a>
						<p> 自2013年以来“互联网思维”变得越来越不陌生，运用网络营销平台，传导关切价值，满足关切需求，谋划超速发展的跨界共赢的思想方式。</p>
						<span>2/6/17</span>
					</div>
				</li>
			</ul>
			<div class="cl"></div>
		</div>
		<div class="more tc cl"><a href="" class="more2">MORE</a></div>
	</div>
</div>

<!--index end-->

<!--footer start-->
<div class="friendlink_bg cl">
	<div class="content">
		<div class="friendlink_tit fl">友情链接</div>
		<div class="friendlink_list fr">
			<div id="demo" style="overflow:hidden;width:980px;">
	<table border="0" cellspacing="0" cellpadding="0">
		<tr>
			<td id="demo1"><table width="980" border="0" cellspacing="0" cellpadding="0">
					<tr>
    <?php if(is_array($link) || $link instanceof \think\Collection): $i = 0; $__LIST__ = $link;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$lvo): $mod = ($i % 2 );++$i;?>
       <td align="center" style="padding-left:10px;"><table width="130" border="0" cellspacing="0" cellpadding="0" style="margin-left:10">
			<tr>
				<td><a href="<?php echo isset($lvo['url']) ? $lvo['url'] :  '####'; ?>" title="<?php echo $lvo['title']; ?>" target="_blank"><img src="__ROOT__<?php echo $lvo['picurl']; ?>" border="0" /></a></td>
			</tr>								
		</table></td>
     <?php endforeach; endif; else: echo "" ;endif; ?>


					<!--循环结束-->
					</tr>
				</table></td>
			<td id="demo2"></td>
		</tr>
	</table>
</div>
<script> 
var speed=30 
demo2.innerHTML=demo1.innerHTML 
function Marquee(){ 
if(demo2.offsetWidth-demo.scrollLeft<=0) 
demo.scrollLeft-=demo1.offsetWidth 
else{ 
demo.scrollLeft++ 
} 
} 
var MyMar=setInterval(Marquee,speed) 
demo.onmouseover=function() {clearInterval(MyMar)} 
demo.onmouseout=function() {MyMar=setInterval(Marquee,speed)} 
</script>
		</div>
	</div>
</div>
<div class="footer_bg cl">
	<div class="content">
		<div class="weixin fl tc"><img src="__HOME__/images/index_41.jpg"><b>MX营销平台</b></div>
		<div class="nav fr">
			<ul>
				<li>
					<h3><a href="">网站首页</a></h3>
					<p><a href="">网站首页</a></p>
				</li>
				<li>
					<h3><a href="">新闻动态</a></h3>
					<p><a href="">新闻中心</a><a href="">最新动态</a><a href="">行业新闻</a></p>
				</li>
				<li>
					<h3><a href="">精彩案例</a></h3>
					<p><a href="">龙采one</a><a href="">微网站</a><a href="">MX创意</a></p>
				</li>
				<li>
					<h3><a href="">下载中心</a></h3>
					<p><a href="">下载中心</a></p>
				</li>
				<li>
					<h3><a href="">留言列表</a></h3>
					<p><a href="">我要留言</a><a href="">查看留言</a></p>
				</li>
				<li>
					<h3><a href="">在线招聘</a></h3>
					<p><a href="">在线招聘</a><a href="">招聘行业</a></p>
				</li>
				<li>
					<h3><a href="">走进龙采</a></h3>
					<p><a href="">企业文化</a><a href="">关于我们</a><a href="">龙采分布</a></p>
				</li>
				<li>
					<h3><a href="">网站建设</a></h3>
					<p><a href="">网站建设</a><a href="">建设专家</a></p>
				</li>
				<li>
					<h3><a href="">百度推广</a></h3>
					<p><a href="">百度推广</a></p>
				</li>
			</ul>
		</div>
	</div>
</div>
<div class="copyright_bg cl">
	<div class="content tc">地址：尚志大街西八道街2号    电话：400-622-8811     已有20301人浏览      黑ICP2014153620</div>
</div>
<!--footer end-->
</body>


</html>
