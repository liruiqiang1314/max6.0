<?php if (!defined('THINK_PATH')) exit(); /*a:2:{s:67:"E:\project2017\mx1.0\public/../application/home\view\login\reg.html";i:1492508339;s:68:"E:\project2017\mx1.0\public/../application/home\view\public\top.html";i:1492495898;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?php echo \think\Config::get('web_config.web_name'); ?></title>
  <meta name="description" content="<?php echo \think\Config::get('web_config.web_description'); ?>" />
  <meta name="author" content="<?php echo \think\Config::get('web_config.web_author'); ?>" />
  <link rel="shortcut icon" href="__CONSOLE__/images/favicon.png" type="image/png">
  <link rel="stylesheet" href="__HOME__/css/amazeui.css" />
  <link rel="stylesheet" href="__HOME__/css/common.min.css" />
  <link rel="stylesheet" href="__HOME__/css/other.min.css" />
</head>
<body class="register-container">
  <div class="layout">
    <!--===========layout-header================-->
        <div class="layout-header am-hide-sm-only">
      <div class="header-box" data-am-sticky>
        <!--header start-->
          <div class="container">
            <div class="header">
              <div class="am-g">
                <div class="am-u-lg-2 am-u-sm-12">
                  <div class="logo">
                   <a href="<?php echo url('home/index/index'); ?>"><?php echo \think\Config::get('web_config.web_name'); ?></a>
                  </div>
                </div>
                <div class="am-u-md-10">
                  <div class="header-right am-fr">
                    <div class="header-contact">
                      <div class="header_contacts--item">
  											<div class="contact_mini">
  												<i style="color:#7c6aa6" class="contact-icon am-icon-phone"></i>
  												<strong><?php echo \think\Config::get('web_config.web_hotline'); ?></strong>
  												<span><?php echo \think\Config::get('web_config.web_hotline_more'); ?></span>
  											</div>
  										</div>
                      <div class="header_contacts--item">
  											<div class="contact_mini">
  												<i style="color:#7c6aa6" class="contact-icon am-icon-envelope-o"></i>
  												<strong><?php echo \think\Config::get('web_config.web_email'); ?></strong>
  												<span><?php echo \think\Config::get('web_config.web_email_more'); ?></span>
  											</div>
  										</div>
                      <div class="header_contacts--item">
  											<div class="contact_mini">
  												<i style="color:#7c6aa6" class="contact-icon am-icon-map-marker"></i>
  												<strong><?php echo \think\Config::get('web_config.web_address'); ?></strong>
  												<span><?php echo \think\Config::get('web_config.web_address_more'); ?></span>
  											</div>
  										</div>
                    </div>
                    <?php if($uid == '0'): ?>
                    <a href="<?php echo url('home/login/index'); ?>" class="contact-btn">
                      <button type="button" class="am-btn am-btn-secondary am-radius">登录</button>
                    </a>&nbsp;&nbsp;
                    <a href="<?php echo url('home/login/reg'); ?>" class="contact-btn">
                      <button type="button" class="am-btn am-btn-secondary am-radius">注册</button>
                    </a>
                    <?php else: ?>
                    <a href="<?php echo url('home/login/logout'); ?>" class="contact-btn">
                      <button type="button" class="am-btn am-btn-secondary am-radius">注销</button>
                    </a>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!--header end-->


        <!--nav start-->
        <div class="nav-contain">
          <div class="nav-inner">
            <ul class="am-nav am-nav-pills am-nav-justify">
              <?php if(is_array($nav) || $nav instanceof \think\Collection): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
      				   <li><a href="<?php echo $vo['url']; ?>"><?php echo $vo['title']; ?></a>
      				   <?php if(!(empty($vo['sub']) || ($vo['sub'] instanceof \think\Collection && $vo['sub']->isEmpty()))): ?>
      				    <ul class="sub-menu">
      				      <?php if(is_array($vo['sub']) || $vo['sub'] instanceof \think\Collection): $i = 0; $__LIST__ = $vo['sub'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?>
	                  <li class="menu-item"><a href="<?php echo $vo1['url']; ?>"><?php echo $vo1['title']; ?></a></li>
	                  <?php endforeach; endif; else: echo "" ;endif; ?>
	                </ul>
      				   <?php endif; ?>
      				   </li>
      			  <?php endforeach; endif; else: echo "" ;endif; ?>
            </ul>
          </div>
        </div>
        <!--nav end-->
      </div>
    </div>

    <!--mobile header start-->
    <div class="m-header">
      <div class="am-g am-show-sm-only">
        <div class="am-u-sm-2">
          <div class="menu-bars">
            <a href="#doc-oc-demo1" data-am-offcanvas="{effect: 'push'}"><i class="am-menu-toggle-icon am-icon-bars"></i></a>
            <!-- 侧边栏内容 -->
            <nav data-am-widget="menu" class="am-menu  am-menu-offcanvas1" data-am-menu-offcanvas >
            <a href="javascript: void(0)" class="am-menu-toggle"></a>

            <div class="am-offcanvas" >
              <div class="am-offcanvas-bar">
              <ul class="am-menu-nav am-avg-sm-1">
                  <?php if(is_array($nav) || $nav instanceof \think\Collection): $i = 0; $__LIST__ = $nav;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;if(!(empty($vo['sub']) || ($vo['sub'] instanceof \think\Collection && $vo['sub']->isEmpty()))): ?>
        					   <li class="am-parent"><a href="<?php echo $vo['url']; ?>"><?php echo $vo['title']; ?></a>
        					    <ul class="am-menu-sub am-collapse ">
        					      <?php if(is_array($vo['sub']) || $vo['sub'] instanceof \think\Collection): $i = 0; $__LIST__ = $vo['sub'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo1): $mod = ($i % 2 );++$i;?>
  		                  <li class=""><a href="<?php echo $vo1['url']; ?>" class=""><?php echo $vo1['title']; ?></a></li>
  		                  <?php endforeach; endif; else: echo "" ;endif; ?>
  		                </ul>
  		               <?php else: ?>
  		               <li><a href="<?php echo $vo['url']; ?>"><?php echo $vo['title']; ?></a>
        					   <?php endif; ?>
        					   </li>
        				  <?php endforeach; endif; else: echo "" ;endif; if($uid == '0'): ?>
                  <li class=""><a href="<?php echo url('home/login/index'); ?>" class="" >登录</a></li>
                  <li class=""><a href="<?php echo url('home/login/reg'); ?>" class="" >注册</a></li>
                  <?php endif; ?>
              </ul>

              </div>
            </div>
          </nav>

          </div>
        </div>
        <div class="am-u-sm-5 am-u-end">
          <div class="m-logo">
            <a href="<?php echo url('home/index/index'); ?>"><?php echo \think\Config::get('web_config.web_name'); ?></a>
          </div>
        </div>
      </div>
    <!--mobile header end-->
    </div>
    <!--===========layout-container================-->
    <div class="register-box">
      <form action="" method="post" class="am-form" data-am-validator>
        <fieldset>
          <legend>注册用户<p class="register-info">使用手机注册，但是仔细核对后，填入正确信息。</p></legend>

          <div class="am-form-group">
            <div class="am-g">
              <div class="am-u-md-2 am-padding-0 am-text-right">
                <label for="doc-vld-name-2" class="register-name">账号</label>
              </div>
              <div class="am-u-md-10">
                <input type="text" name="username" placeholder="请输入手机号" pattern="^1[3|4|5|8][0-9]\d{4,8}$" required/>
              </div>
            </div>
          </div>

          <div class="am-form-group">
            <div class="am-g">
              <div class="am-u-md-2 am-padding-0 am-text-right">
                <label for="doc-vld-pwd-1" class="register-pwd">密码</label>
              </div>
              <div class="am-u-md-10">
                <input type="password" name="password" id="doc-vld-pwd-1" placeholder="6位数字的密码" pattern="^\d{6}$" required/>
              </div>
            </div>
          </div>

          <div class="am-form-group">
            <div class="am-g">
              <div class="am-u-md-2 am-padding-0 am-text-right">
                <label for="doc-vld-pwd-2">确认密码</label>
              </div>
              <div class="am-u-md-10">
                <input type="password" name="repassword" id="doc-vld-pwd-2" placeholder="请与上面输入的密码一致" data-equal-to="#doc-vld-pwd-1" required/>
              </div>
            </div>
          </div>

          <div class="am-g">
            <div class="am-u-md-10">
              <button class="am-btn am-btn-secondary" type="submit">注册</button>
            </div>
          </div>
        </fieldset>
      </form>
    </div>

   </div> 


  <script src="__HOME__/js/jquery-2.1.0.js" charset="utf-8"></script>
  <script src="__HOME__/js/amazeui.js" charset="utf-8"></script>

</body>

</html>

