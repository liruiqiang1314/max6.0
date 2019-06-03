<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:75:"E:\project2017\thinkphp5\public/../application/home\view\product\index.html";i:1490513976;s:66:"E:\project2017\thinkphp5\public/../application/home\view\base.html";i:1491456291;}*/ ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title><?php echo \think\Config::get('web_config.web_name'); ?></title>
<meta name="description" content="<?php echo \think\Config::get('web_config.web_description'); ?>" />
<meta name="author" content="<?php echo \think\Config::get('web_config.web_author'); ?>" />
<link rel="shortcut icon" href="__CONSOLE__/images/favicon.png" type="image/png">
<link href="__HOME__/style/webstyle.css" rel="stylesheet" type="text/css" />
<script src="__HOME__/js/jquery-1.11.3.min.js"></script>
<script src="__HOME__/js/unslider-min.js"></script>

</head>

<body>
<!--header start-->
<div class="header_bg">
	<div class="content">
		<div class="link fr">
		<?php if($uid == '0'): ?>
				<a href="<?php echo url('home/login/reg'); ?>">注册</a>　|　<a href="<?php echo url('home/login/index'); ?>">登录</a>　|　当前访客身份：游客　
		<?php else: ?>
		        <a href="<?php echo url('home/user/index'); ?>">用户中心</a>
		<?php endif; ?>
        </div>
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
		<div class="classify tc">
            <?php if(is_array($product_type) || $product_type instanceof \think\Collection): $i = 0; $__LIST__ = $product_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
			   <a href="<?php echo url('home/product/index',['id'=>$vo['id']]); ?>"><?php echo $vo['title']; ?></a>
	        <?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
		<div class="m_case fl">
			<ul>
			    <?php if(is_array($product) || $product instanceof \think\Collection): $i = 0; $__LIST__ = $product;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
					<li><a href="<?php echo url('home/product/show',['id'=>$vo['id']]); ?>"><img src="__ROOT__<?php echo $vo['picurl']; ?>" width="249" height="194" alt="" /><?php echo $vo['title']; ?></a></li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			<div class="cl"></div>
		</div>
		<div class="page cl tc"><?php echo $product->render(); ?></div>
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
		<div class="weixin fl tc"><img src="__HOME__/images/index_41.jpg"><b><?php echo \think\Config::get('web_config.web_name'); ?></b></div>
		<div class="footer fr">
			<ul class="nav">
			    <?php if(is_array($nav) || $nav instanceof \think\Collection): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
				   <li><h3><a href="<?php echo $vo['url']; ?>"><?php echo $vo['title']; ?></a></h3></li>
				<?php endforeach; endif; else: echo "" ;endif; ?>
			</ul>
			<form action="<?php echo url('home/message/add'); ?>" method="post" class="cl message">
				<div class="fl">
					<p><input type="text" name="truename" placeholder="姓名" class="user" required></p>
					<p><input type="tel" name="mobile" placeholder="电话" class="tel" required pattern="^1(3[0-9]|4[57]|5[0-35-9]|7[0135678]|8[0-9])\d{8}$"  oninput="this.setCustomValidity('请输入电话号码');"></p>
				</div>
				<p class="fr rel"><textarea name="content" placeholder="留言内容" class="mes_con" required></textarea>
				                  <input type="submit" value="提交留言" class="mes_btn"></p>
			</form>
		</div>
	</div>
</div>
<div class="copyright_bg cl">
	<div class="content tc">地址：<?php echo \think\Config::get('web_config.web_address'); ?>    电话：<?php echo \think\Config::get('web_config.web_hotline'); ?>     <?php echo \think\Config::get('web_config.web_record'); ?></div>
</div>
<!--footer end-->

</body>


</html>
