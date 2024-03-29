<?php if (!defined('THINK_PATH')) exit(); /*a:5:{s:74:"E:\project2017\mx1.0\public/../application/console\view\product\index.html";i:1492669160;s:75:"E:\project2017\mx1.0\public/../application/console\view\template\index.html";i:1485224515;s:77:"E:\project2017\mx1.0\public/../application/console\view\template\sidebar.html";i:1485229266;s:76:"E:\project2017\mx1.0\public/../application/console\view\template\topbar.html";i:1485229261;s:76:"E:\project2017\mx1.0\public/../application/console\view\template\footer.html";i:1488519734;}*/ ?>
<!DOCTYPE html>
<html lang="zh_cn">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="__CONSOLE__/images/favicon.png" type="image/png">

  <title><?php echo $mate_title; ?>-<?php echo \think\Config::get('web_config.web_name'); ?></title>
  
  <link href="__CONSOLE__/css/style.default.css" rel="stylesheet">
  <!--   sweetalert弹出样式 -->
  <link href="__PLUGIN__/sweetalert/css/sweetalert.css" rel="stylesheet">
  <link href="__CONSOLE__/css/jquery.datatables.css" rel="stylesheet">
  
<link href="__CONSOLE__/css/prettyPhoto.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="__CONSOLE__/js/html5shiv.js"></script>
  <script src="__CONSOLE__/js/respond.min.js"></script>
  <![endif]-->
  
</head>
<body>
<!-- Preloader -->
<div id="preloader">
    <div id="status"><i class="fa fa-spinner fa-spin"></i></div>
</div>
<section>
  

  <div class="leftpanel">

    <div class="logopanel">
        <h1><span>[</span> 管理中心 <span>]</span></h1>
    </div><!-- logopanel -->

    <div class="leftpanelinner">

        <!-- This is only visible to small devices -->
        <div class="visible-xs hidden-sm hidden-md hidden-lg">
            <div class="media userlogged">
                <img alt="" src="__CONSOLE__/images/photos/user<?php echo $user['avatar']; ?>.jpg" class="media-object">
                <div class="media-body">
                    <h4><?php echo $user['username']; ?></h4>
                    <span><?php echo $user['nickname']; ?></span>
                </div>
            </div>
            <ul class="nav nav-pills nav-stacked nav-bracket mb30">
              <li><a href="#" data-toggle="modal" data-target=".bs-myinfo-modal-lg"><i class="fa fa-user"></i> <span>我的信息</span></a></li><!-- 
              <li><a href=""><i class="fa fa-cog"></i> <span>账号设置</span></a></li>
              <li><a href=""><i class="fa fa-question-circle"></i> <span>帮助</span></a></li> -->
              <li><a onClick="logout('<?php echo url('Console/login/logout'); ?>');"><i class="fa fa-sign-out"></i> <span>退出</span></a></li>
            </ul>
        </div>
      <ul class="nav nav-pills nav-stacked nav-bracket">
              <?php if(is_array($menu_left) || $menu_left instanceof \think\Collection): $i = 0; $__LIST__ = $menu_left;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): $mod = ($i % 2 );++$i;if($menu['set'] == 1): ?>
                     <li class="<?php if($menu['active'] == 1): ?>active<?php endif; ?>">
                        <a href="<?php echo $menu['low']['0']['url']; ?>"><i class="<?php echo $menu['class']; ?>"></i> <span><?php echo $menu['low']['0']['keyname']; ?></span></a>                           
                      </li>
                     <?php else: ?>
                    <li class="nav-parent <?php if($menu['active'] == 1): ?> active<?php endif; ?>">
                        <a ><i class="<?php echo $menu['class']; ?>"></i> <span><?php echo $menu['title']; ?></span></a>
                            <ul class="children" <?php if($menu['active'] == 1): ?>style="display:block;"<?php else: ?>style="display:none;"<?php endif; ?>>
                                 <?php if(is_array($menu['low']) || $menu['low'] instanceof \think\Collection): $i = 0; $__LIST__ = $menu['low'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu_2): $mod = ($i % 2 );++$i;?>   
                                      <li <?php if($menu_2['active'] == 1): ?>class="active"<?php endif; ?>>
                                          <a href="<?php echo $menu_2['url']; ?>"><i class="fa fa-caret-right"></i> <?php echo $menu_2['keyname']; ?></a>
                                      </li>
                                 <?php endforeach; endif; else: echo "" ;endif; ?>
                            </ul>  
                      </li>
                      <?php endif; endforeach; endif; else: echo "" ;endif; ?>
      </ul>
  

    </div><!-- leftpanelinner -->
  </div><!-- leftpanel -->
  
  <div class="mainpanel">
    
     <div class="headerbar">

      <a class="menutoggle"><i class="fa fa-bars"></i></a>

      <div class="header-right">
        <ul class="headermenu">
          <li>
            <div class="btn-group">
            <a href="<?php echo url('Home/index/index'); ?>" target="_blank">
              <button class="btn btn-default tp-icon" title="预览网站">
                <i class="fa fa-send"></i>
              </button>
              </a>
            </div>
          </li>
          <li>
            <div class="btn-group">
              <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                <img src="__CONSOLE__/images/photos/user<?php echo $user['avatar']; ?>.jpg" alt="">
                <?php echo $user['username']; ?>
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu dropdown-menu-usermenu pull-right">
                <li><a href="#" data-toggle="modal" data-target=".bs-myinfo-modal-lg"><i class="fa fa-user"></i> 我的信息</a></li><!-- 
                <li><a href="#"><i class="glyphicon glyphicon-cog"></i> 账号设置</a></li>
                <li><a href="#"><i class="glyphicon glyphicon-question-sign"></i> 帮助</a></li> -->
                <li><a onClick="logout('<?php echo url('Console/login/logout'); ?>');"><i class="fa fa-sign-out"></i> 退出</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div><!-- header-right -->

    </div><!-- headerbar -->


   
    
    <div class="pageheader">
      <h2><i class="fa fa-list-ul"></i> <?php echo $mate_title; ?> <span><?php echo $mate_operate; ?></span></h2>
      <div class="breadcrumb-wrapper">
        <span class="label">现在所在位置:</span>
        <ol class="breadcrumb">
          <li><?php echo $mate_title; ?> </li>
          <li class="active"><?php echo $mate_operate; ?></li>
        </ol>
      </div>
    </div>
    <div class="contentpanel">
         
 <ul class="filemanager-options">
        <li>
          <div class="ckbox ckbox-default">
            <input type="checkbox" id="selectall" value="1" />
            <label for="selectall">全选</label>
          </div>
        </li>
        <li>
          <a onClick="check_delete('<?php echo url('console/product/delete'); ?>',0);" class="itemopt disabled"><i class="fa fa-trash-o"></i> 删除</a>
        </li>
        
      </ul>
        
      <div class="row">
        <div class="col-sm-9">
          <div class="row filemanager">
            <?php if(is_array($list) || $list instanceof \think\Collection): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
            <div class="col-xs-6 col-sm-4 col-md-3 image">
              <div class="thmb">
                <div class="ckbox ckbox-default">
                  <input type="checkbox" id="check<?php echo $i; ?>" value="<?php echo $vo['id']; ?>" name="checkid[]" />
                  <label for="check<?php echo $i; ?>"></label>
                </div>
                <div class="btn-group fm-group">
                    <button type="button" class="btn btn-default dropdown-toggle fm-toggle" data-toggle="dropdown">
                      <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu fm-menu" role="menu">
                      <li><?php echo show_operate($vo['id'],'update','编 辑'); ?></li>
                      <li><?php echo show_operate($vo['id'],'delete','删 除'); ?></li>
                    </ul>
                </div><!-- btn-group -->
                <div class="thmb-prev">
                   <a href="__ROOT__<?php echo $vo['picurl']; ?>" data-rel="prettyPhoto">
                    <img src="__ROOT__<?php echo $vo['picurl']; ?>" class="img-responsive" alt="<?php echo $vo['intro']; ?>" style="height:200px;" />
                  </a>
                </div>
                <h5 class="fm-title"><a href="<?php echo url('console/product/update', ['id' => $vo['id']]); ?>"><?php echo $vo['title']; ?></a></h5>
                <small class="text-muted"><?php echo date('Y-m-d',$vo['create_time']); ?></small><span class="pull-right"><?php echo show_status($vo['status'],$vo['id']); ?></span>
              </div><!-- thmb -->
            </div><!-- col-xs-6 -->
            <?php endforeach; endif; else: echo "" ;endif; ?>
          
          </div><!-- row -->
        </div><!-- col-sm-9 -->
        <div class="col-sm-3">
          <div class="fm-sidebar">
            
            <a href="<?php echo url('console/product/create'); ?>" class="btn btn-primary btn-block">添加图文</a>
            
            <div class="mb30"></div>
            
            <h5 class="subtitle"><a href="<?php echo url('console/product/index'); ?>">全部分类</a> <a href="#" class="pull-right" data-toggle="modal" data-target=".bs-example-modal-lg">+ 创建分类</a></h5>

             <div class="details">
                <table class="table">
                    <tbody>
                    <?php if(is_array($type) || $type instanceof \think\Collection): $i = 0; $__LIST__ = $type;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vot): $mod = ($i % 2 );++$i;?>
                        <tr <?php if($tid == $vot['id']): ?> style="background-color:#BCBCBC;" <?php endif; ?>>
                            <td width="60%"><a href="<?php echo url('console/product/index', ['tid' => $vot['id']]); ?>" style="text-decoration:none;"><i class="fa fa-search"></i><span><?php echo $vot['title']; ?></span></a></td>
                            <td width="40%" style="text-align: right;">
                            <a href="<?php echo url('console/ProductType/update', ['id' => $vot['id']]); ?>"><i class="fa fa-pencil"></i> 
                            <a onClick="check_delete('<?php echo url('console/ProductType/delete'); ?>',<?php echo $vot['id']; ?>);"><i class="fa fa-trash-o"></i> </a>
                            </td>
                        </tr>
                    <?php endforeach; endif; else: echo "" ;endif; ?>
                        
                    </tbody>
                </table>
            </div><!--details-->
              <!-- 添加分类 -->
              <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button aria-hidden="true" data-dismiss="modal" class="close" type="button">&times;</button>
                          <h4 class="modal-title">创建分类</h4>
                      </div>
                      <div class="modal-body">
                       <form class="form-horizontal form-bordered" id="submitForm" action="<?php echo url('console/ProductType/create'); ?>" method="post" >
                           <div class="form-group">
                              <label class="col-sm-3 control-label"><span>*</span>分类名称：</label>
                              <div class="col-sm-6">
                                  <input type="text" class="form-control" placeholder="分类名称" name="title" value=""  required>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-3 control-label">描述：</label>
                              <div class="col-sm-6">
                                  <input type="text" class="form-control" placeholder="描述" name="intro" value="" >
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-3 control-label">排序：</label>
                              <div class="col-sm-6">
                                  <input type="text" class="form-control" placeholder="排序" name="orderid" value="<?php echo get_orderid('','orderid','product_type'); ?>" >
                              </div>
                          </div>

                              <div class="panel-footer">
                               <div class="row">
                                <div class="col-sm-6 col-sm-offset-3">
                                  <input type="hidden" name="id" value="">
                                  <button type="submit" class="btn btn-primary">提交</button>
                                  <button type="button" class="btn btn-default" aria-hidden="true" data-dismiss="modal" class="close">关闭</button>
                                </div>
                               </div>
                              </div><!-- panel-footer -->

                          </form>
                      </div>
                  </div>
                </div>
              </div>

             <?php echo $list->render(); ?>
          </div>
        </div><!-- col-sm-3 -->
      </div>
    </div>
 


         <div id="renew_submit" style="display: none;"></div>
    </div><!-- contentpanel -->
  </div><!-- mainpanel -->
  
  
</section>

<script src="__CONSOLE__/js/jquery-1.11.1.min.js"></script>
<script src="__CONSOLE__/js/jquery-migrate-1.2.1.min.js"></script>
<script src="__CONSOLE__/js/bootstrap.min.js"></script>
<script src="__CONSOLE__/js/modernizr.min.js"></script>
<script src="__CONSOLE__/js/jquery.sparkline.min.js"></script>
<script src="__CONSOLE__/js/toggles.min.js"></script>
<script src="__CONSOLE__/js/retina.min.js"></script>
<script src="__CONSOLE__/js/jquery.cookies.js"></script>

<script src="__CONSOLE__/js/select2.min.js"></script>
<script src="__CONSOLE__/js/custom.js"></script>
<script src="__PLUGIN__/sweetalert/js/sweetalert.min.js"></script>

<script src="__CONSOLE__/js/jquery.datatables.min.js"></script>
<script src="__CONSOLE__/js/listing.js"></script><!-- 列表页处理js 手写 -->
<!-- 验证 -->
<script src="__CONSOLE__/js/bootstrapValidator.js"></script>


<script src="__CONSOLE__/js/jquery.prettyPhoto.js"></script>
<script src="__CONSOLE__/js/bootstrapValidator.js"></script>


<script>
   $(document).ready(function() {
  
    $('#submitForm').bootstrapValidator({
        message: '这个值是无效的',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        }
    });
});
   jQuery(document).ready(function(){
    
    "use strict";
    
    jQuery('.thmb').hover(function(){
      var t = jQuery(this);
      t.find('.ckbox').show();
      t.find('.fm-group').show();
    }, function() {
      var t = jQuery(this);
      if(!t.closest('.thmb').hasClass('checked')) {
        t.find('.ckbox').hide();
        t.find('.fm-group').hide();
      }
    });
    
    jQuery('.ckbox').each(function(){
      var t = jQuery(this);
      var parent = t.parent();
      if(t.find('input').is(':checked')) {
        t.show();
        parent.find('.fm-group').show();
        parent.addClass('checked');
      }
    });
    
    
    jQuery('.ckbox').click(function(){
      var t = jQuery(this);
      if(!t.find('input').is(':checked')) {
        t.closest('.thmb').removeClass('checked');
        enable_itemopt(false);
      } else {
        t.closest('.thmb').addClass('checked');
        enable_itemopt(true);
      }
    });
    
    jQuery('#selectall').click(function(){
      if(jQuery(this).is(':checked')) {
        jQuery('.thmb').each(function(){
          jQuery(this).find('input').attr('checked',true);
          jQuery(this).addClass('checked');
          jQuery(this).find('.ckbox, .fm-group').show();
        });
        enable_itemopt(true);
      } else {
        jQuery('.thmb').each(function(){
          jQuery(this).find('input').attr('checked',false);
          jQuery(this).removeClass('checked');
          jQuery(this).find('.ckbox, .fm-group').hide();
        });
        enable_itemopt(false);
      }
    });
    
    function enable_itemopt(enable) {
      if(enable) {
        jQuery('.itemopt').removeClass('disabled');
      } else {
        
        // check all thumbs if no remaining checks
        // before we can disabled the options
        var ch = false;
        jQuery('.thmb').each(function(){
          if(jQuery(this).hasClass('checked'))
            ch = true;
        });
        
        if(!ch)
          jQuery('.itemopt').addClass('disabled');
      }
    }
    
    jQuery("a[data-rel^='prettyPhoto']").prettyPhoto();
    
  });
  
</script>


 <!-- 我的信息弹出 -->
    <div class="modal fade bs-myinfo-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">&times;</button>
                <h4 class="modal-title">我的信息</h4>
            </div>
            <div class="modal-body">
             <form class="form-horizontal form-bordered" id="myinfoForm" action="<?php echo url('console/login/myinfo'); ?>" method="post" >
                 <div class="form-group">
                  <label class="col-sm-3 control-label">用户名:</label>
                  <div class="col-sm-6">
                      <input type="text" class="form-control" name="username" placeholder="请输入用户名"  value="<?php echo isset($user['username']) ? $user['username'] :  ''; ?>" readonly>
                  </div>
              </div>
              <div class="form-group">
                  <label class="col-sm-3 control-label">密码:</label>
                  <div class="col-sm-6">
                      <input type="password" class="form-control" name="password" placeholder="请输入密码">
                  </div>
              </div>
              <div class="form-group">
                  <label class="col-sm-3 control-label">确认密码:</label>
                  <div class="col-sm-6">
                      <input type="password" class="form-control" name="repassword" placeholder="请输入确认密码">
                  </div>
              </div>
               <div class="form-group">
                  <label class="col-sm-3 control-label">昵称:</label>
                  <div class="col-sm-6">
                      <input type="text" class="form-control" name="nickname" placeholder="请输入昵称"  value="<?php echo isset($user['nickname']) ? $user['nickname'] :  ''; ?>" required>
                  </div>
              </div>
              <div class="form-group">
                  <label class="col-sm-3 control-label">手机号:</label>
                  <div class="col-sm-6">
                      <input type="text" class="form-control" name="mobile" placeholder="请输入手机号"  value="<?php echo isset($user['mobile']) ? $user['mobile'] :  ''; ?>" required>
                  </div>
              </div>
               <div class="form-group">
                    <label class="col-sm-3 control-label">头像选择:</label>
                    <div class="col-sm-6 avatar-size">
                        <input type="hidden" name="avatar" value="<?php echo isset($user['avatar']) ? $user['avatar'] :  1; ?>" id="avatar2">
                        <?php $__FOR_START_31759__=1;$__FOR_END_31759__=9;for($i=$__FOR_START_31759__;$i < $__FOR_END_31759__;$i+=1){ ?>
                        <img src="__CONSOLE__/images/photos/user<?php echo $i; ?>.jpg" class="img-circle" onClick="chooseImg2(<?php echo $i; ?>);" myflagImg="<?php echo $i; ?>">
                        <?php } ?>
                    </div>
                </div>

                    <div class="panel-footer">
                     <div class="row">
                      <div class="col-sm-6 col-sm-offset-3">
                        <input type="hidden" name="id" value="<?php echo isset($user['id']) ? $user['id'] :  ''; ?>">
                        <button type="submit" class="btn btn-primary">提交</button>
                        <button type="button" class="btn btn-default" aria-hidden="true" data-dismiss="modal" class="close">关闭</button>
                      </div>
                     </div>
                    </div><!-- panel-footer -->

                </form>
            </div>
        </div>
      </div>
    </div>
    <!-- 我的信息弹出 --> 
    <script>
         $(document).ready(function() {
            $("[myflagImg='<?php echo isset($user['avatar']) ? $user['avatar'] :  '1'; ?>']").addClass("choosed");
            $('#myinfoForm').bootstrapValidator({
                message: '这个值是无效的',
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                 fields: {
                    password: {
                        validators: {
                           identical: {
                                field: 'repassword',
                                message: '密码和确认密码不一致'
                            }
                        }
                    },
                    repassword: {
                        validators: {
                            identical: {
                                field: 'password',
                                message: '密码和确认密码不一致'
                            }
                        }
                    },
                    nickname: {
                        validators: {
                            stringLength: {
                                min: 5,
                                max: 30,
                                message: '昵称长度5~30之间'
                            },
                            remote: {
                                url: "<?php echo url('console/common/validonly',['table'=>'manager']); ?>",
                                message: '昵称已经存在'
                            }
                        }
                    },
                    mobile: {
                        validators: {
                            regexp: {
                                regexp: /^1(3[0-9]|4[57]|5[0-35-9]|7[0135678]|8[0-9])\d{8}$/,//手机号正则表达式
                                message: '手机号格式不正确'
                            },
                            remote: {
                                url: "<?php echo url('console/common/validonly',['table'=>'manager']); ?>",
                                message: '手机号已经存在'
                            }
                        }
                    }
                }
            });
        });
         //选择头像效果
      function chooseImg2(num){
        $('#avatar2').val(num);
        $("[myflagImg='"+num+"']").siblings().removeClass('choosed').end().addClass("choosed");
      }
      function logout(url){
          swal({   
            title: "确定要退出?",   
            text: "你将退出管理后台!",   
            type: "warning",   
            showCancelButton: true,    
            confirmButtonText: "确认", 
            cancelButtonText: '取消',
            closeOnConfirm: false
          }, function(){ 
             top.location=url;   
             return true;
          });
      }
    </script>
</body>
</html>