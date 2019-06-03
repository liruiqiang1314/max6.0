<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:63:"E:\project2017\thinkphp5/application/home\view\index\index.html";i:1490512995;s:56:"E:\project2017\thinkphp5/application/home\view\base.html";i:1490514749;}*/ ?>
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

<div class="banner">
    <ul>
     <?php if(is_array($banner) || $banner instanceof \think\Collection): $i = 0; $__LIST__ = $banner;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$bvo): $mod = ($i % 2 );++$i;?>
       <li><a href="<?php echo isset($bvo['linkurl']) ? $bvo['linkurl'] :  '####'; ?>" title="<?php echo $bvo['title']; ?>" target="<?php echo $bvo['target']; ?>"><img src="__ROOT__<?php echo $bvo['picurl']; ?>" /></a></li>
     <?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
</div>
<script>
$(function(){
  $('.banner').unslider({
    dots: false,//点导航
    autoplay: true,//自动播放
    speed:400,//播放速度
    delay:5000,//轮播间隔
    arrows: false,//是否显示左右箭头
    fluid: true,//是否支持响应式
  });
});
</script>
<div class="content about">
	<div><img src="__HOME__/images/index_03.jpg" alt="" /></div>
	<div class="about_con fl"><?php echo $about['intro']; ?></div>
	<div class="about_pic fr" style="padding: 10px 0 0;"><img src="__ROOT__<?php echo $about['picurl']; ?>" width="650px" height="535px"></div>
	<div class="more tc cl"><a href="<?php echo url('home/index/info',['id'=>$about['id']]); ?>" class="more1">MORE</a></div>
</div>
<div class="case_bg">
	<div class="content">
		<div><img src="__HOME__/images/index_06.jpg" alt="" /></div>
		<div class="case_type">
			<?php if(is_array($product_type) || $product_type instanceof \think\Collection): $i = 0; $__LIST__ = $product_type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
			   <a href="<?php echo url('home/product/index',['id'=>$vo['id']]); ?>"><?php echo $vo['title']; ?></a>
	        <?php endforeach; endif; else: echo "" ;endif; ?>
		</div>
		<div class="case">
			<div class="nar fl"><img src="__HOME__/images/index_13.jpg" alt="" onClick="r_left1()"/></div>
			<div class="nar fr"><img src="__HOME__/images/index_14.jpg" alt="" onClick="r_right1()"/></div>
			<div class="case_list fl" id="proRoll_1">
				<ul style="width:9999px;">
				    <?php if(is_array($product) || $product instanceof \think\Collection): $i = 0; $__LIST__ = $product;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
					     <li><a href="<?php echo url('home/product/show',['id'=>$vo['id']]); ?>"><img src="__ROOT__<?php echo $vo['picurl']; ?>" width="249" height="194" alt="" /><?php echo $vo['title']; ?></a></li>
					<?php endforeach; endif; else: echo "" ;endif; ?>
				</ul>
			</div>
			<div class="cl"></div>
			 <SCRIPT>
// JavaScript Document
$(function($){
	var dir=1;
	var vt=15;
	dir34=1;
	var ScrollBox=document.getElementById('proRoll_1');//滚动外层遮挡框架
	if(!ScrollBox) return false;
	var OldContent=ScrollBox.getElementsByTagName("ul")[0];//UL index=0;
	if(!OldContent) return false;
	var domeOne=ScrollBox.getElementsByTagName("li");// li
	if(!domeOne.length) return false;
	var domeOneLen = domeOne.length;
	var OldLong=0;//旧总长
	var NewLong=0;//新总长-外层框架长度
	var NewContent=OldContent.innerHTML;
	if(dir=="1"){
		for(var i=0;i<domeOneLen;i++){
			OldLong+=domeOne[i].offsetWidth;
		}
		while(NewLong<(ScrollBox.offsetWidth)){	
			NewContent+=OldContent.innerHTML;
			NewLong+=OldLong;
			}
	}else if(dir=="2"){
		for(var i=0;i<domeOneLen;i++){
			OldLong+=domeOne[i].offsetHeight;
		}
		while(NewLong<(ScrollBox.offsetHeight)){	
			NewContent+=OldContent.innerHTML;
			NewLong+=OldLong;
			}
	}//判断新UL的总长
	OldContent.innerHTML=NewContent;//生成新的Ul
	var domeTwo= ScrollBox.getElementsByTagName("li")[domeOneLen];//滚动结束位置
	var myRoll = function(){

			if(dir34>0)
			{
				if(ScrollBox.scrollLeft == domeTwo.offsetLeft){
					ScrollBox.scrollLeft=0;
				}else{
					ScrollBox.scrollLeft++;
				}
			}else
			{

				if(ScrollBox.scrollLeft==0){
					ScrollBox.scrollLeft=domeTwo.offsetLeft;
				}
					ScrollBox.scrollLeft--;
			}
			
		}//滚动
		  
	var timer = setInterval(myRoll,vt);//周期性调用滚动
	ScrollBox.onmouseover=function(){clearInterval(timer)}
	ScrollBox.onmouseout=function(){timer=setInterval(myRoll,vt)};
});
function r_left1(){if (dir34=-1)dir34=1}//换向左移
function r_right1(){if (dir34=1)dir34=-1}//换向右移
                        </SCRIPT> 
		</div>
		<div class="more tc cl"><a href="<?php echo url('home/product/index'); ?>" class="more2">MORE</a></div>
	</div>
</div>
<div class="news_bg cl">
	<div class="content">
		<div class="news_tit rel"><img src="__HOME__/images/index_21.jpg" alt="" />
			<div class="more abs more3 tc"><a href="<?php echo url('home/infolist/index'); ?>" class="more1">MORE</a></div>
		</div>
		<div style="padding: 0 20px;">
			<div class="news fl">
				<div class="tit">新闻中心</div>
				<div class="news_con">
					<ul>
						<li>
							<div class="news_list_pic fl"><a href=""><img src="__HOME__/images/index_29.jpg" width="155" height="155" alt="" /></a></div>
							<div class="news_list_con fl rel">
								<i><img src="__HOME__/images/index_30.jpg"></i>
								<a href="">互联网思维下的营销变革变革变革”</a>
								<p>自2013年以来“互联网思维”变得越来越不陌生，运用网络营销平台，传导关切价值，满足关切需求，谋划超速发展的跨界共赢的思想方式。</p>
								<span>2/6/17</span>
							</div>
							<div class="cl"></div>
						</li>
						<li>
							<div class="news_list_pic fl"><a href=""><img src="__HOME__/images/index_29.jpg" width="155" height="155" alt="" /></a></div>
							<div class="news_list_con fl rel">
								<i><img src="__HOME__/images/index_30.jpg"></i>
								<a href="">互联网思维下的营销变革变革变革”</a>
								<p>自2013年以来“互联网思维”变得越来越不陌生，运用网络营销平台，传导关切价值，满足关切需求，谋划超速发展的跨界共赢的思想方式。</p>
								<span>2/6/17</span>
							</div>
							<div class="cl"></div>
						</li>
					</ul>
				</div>
			</div>
			<div class="news fr">
				<div class="tit">行业动态</div>
				<div class="news_con">
					<div class="news_pic fl"><a href=""><img src="__HOME__/images/index_32.jpg"></a></div>
					<div class="news_text fr">
						<a href="">关于百度推广服务费调整的通知通知</a>
						<p>自2013年以来“互联网思维”变得越来越不陌生，运用网络营销平台，传导关切价值，满足关切需求，谋划超速发展的跨界共赢的思想方式。，满足关切需求，谋划超速发展的跨界共赢的思想方式。，满足关切需求，谋划超速发展的跨界共赢的思想方式。</p>
						<span>2/6/17</span>
					</div>
				</div>
			</div>
			<div class="cl"></div>
		</div>
		
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
					<p><input type="tel" name="mobile" placeholder="电话" class="tel" required pattern="^(0|86|17951)?(13[0-9]|15[012356789]|17[0678]|18[0-9]|14[57])[0-9]{8}" oninvalid="请输入您的姓名"></p>
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
