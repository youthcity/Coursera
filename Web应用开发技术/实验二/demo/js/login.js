$(document).ready(function(){
     //检测Internet Explorer版本
    $(document).ready(function() {
      if (navigator.userAgent.match(/msie/i) ){
        alert('I am an old fashioned Internet Explorer');
      }
    });


    //平稳滑动到页面顶部  
    $("a[href='#']").click(function() {
        $("html, body").animate({
            scrollTop: 0
        }, "slow");
        return false;
    });   
   
    //在图片上停留时逐渐增强或减弱的透明效果
    // $(".thumbs img").fadeTo("slow", 0.6); // This sets the opacity of the thumbs to fade down to 60% when the page loads

    // $(".thumbs img").hover(function() {
    //     $(this).fadeTo("slow", 1.0); // This should set the opacity to 100% on hover
    // }, function() {
    //     $(this).fadeTo("slow", 0.6); // This should set the opacity back to 60% on mouseout
    // });


    //在文本或密码输入时禁止空格键
    // $('input.nospace').keydown(function(e) {
    //     if (e.keyCode == 32) {
    //         return false;
    //     }
    // });
   

    $email = $("#exampleInputEmail3");
    $pwd = $("#exampleInputPassword3");
    $submit = $("#submit");



    $submit.click(function(){
        function valtoNull(){
            console.log( $email);
            $email.val("");
            $pwd.val("");
        }

        // 检测是否为空
        if (!$email.val()) {
            alert("邮箱输入为空");
            $email.focus();
            valtoNull();
            return false;
        }

        if (!$pwd.val()) {
            alert("密码输入为空");
            $pwd.focus();
            valtoNull();
            return false;
        }

        // 检测是否符合邮箱格式
        var reg = /^(\w)+(\.\w+)*@(\w)+((\.\w+)+)$/;
        if(!reg.test($email.val())){
            alert("您输入的邮箱有误,请重新核对后再输入!");
            $email.focus();
            valtoNull();
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

        if(($email.val() != "397731024@qq.com")){
            alert("邮箱错误");
            return false;
        }
        
        if (($pwd.val() != "wu123456")){
            console.log($pwd.val());
            alert("密码错误");
            return false;
        }

            alert("登录成功")
        

    });

});