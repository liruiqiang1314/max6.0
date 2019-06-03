<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:73:"E:\project2017\thinkphp5\public/../application/console\view\.\myinfo.html";i:1485225409;}*/ ?>
<!DOCTYPE html>
<html lang="zh_cn">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="__CONSOLE__/images/favicon.png" type="image/png">

  <title>个人信息</title>
  
  <link href="__CONSOLE__/css/style.default.css" rel="stylesheet">
</head>
 <body style="background: #FFFFFF;">
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
                <?php $__FOR_START_20873__=1;$__FOR_END_20873__=9;for($i=$__FOR_START_20873__;$i < $__FOR_END_20873__;$i+=1){ ?>
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
<!-- 验证 -->
<script src="__CONSOLE__/js/jquery-1.11.1.min.js"></script>
<script src="__CONSOLE__/js/bootstrapValidator.js"></script>
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

</script>
</body>
</html>