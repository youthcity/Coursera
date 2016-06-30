$(function(){

    $email = $("#inputEmail");
    $pwd = $("#inputPassword");
    $rpwd =$("#RinputPassword");
    $submit = $("#btn-sbt");


    $submit.click(function(){


        // 检测邮箱是否为空
        if (!$email.val()) {
            alert("邮箱输入为空");
            $email.focus();
            // valtoNull();
            return false;
        }

        // 检测密码是否为空
        if (!$pwd.val()) {
            alert("密码输入为空");
            $pwd.focus();
            // valtoNull();
            return false;
        }

        //检测第二次密码是否为空
        if (!$pwd.val()) {
        	alert("密码输入为空");
        	$pwd.focus();
        	// valtoNull();
        	return false;
        }

        // 检测是否符合邮箱格式
        var reg = /^(\w)+(\.\w+)*@(\w)+((\.\w+)+)$/;
        if(!reg.test($email.val())){
            alert("您输入的邮箱有误,请重新核对后再输入!");
            $email.focus();
            // valtoNull();
            return false;
        }

        //密码效验
        var hasDigital = /[\d]+/.test($pwd.val());//密码含有数字
        var hasCharater = /[a-zA-Z]+/.test($pwd.val());//密码含有字母
        if(($pwd.val().length < 6)){
            alert("密码位数小于6");
            $pwd.focus();
            // valtoNull();
            return false;
        }

        if(!hasDigital){
            alert("密码缺少数字");
            $pwd.focus();
            // valtoNull();
            return false;
        }

        if (!hasCharater) {
            alert("密码缺少字母");
            $pwd.focus();
            // valtoNull();
            return false;
        }


        if ($pwd.val() == $rpwd.val()) {
            alert("注册成功")
            // return false;
        }



    });

});