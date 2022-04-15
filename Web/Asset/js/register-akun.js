$("#register").submit(function(){
    resetFormjs();

    if($("#username").val().length == 0 || $("#email").val().length == 0 || $("#password").val().length == 0 || $("#retypePass").val().length == 0){
        if($("#username").val().length == 0){
            $(".feedback-username").removeClass("d-none");
            $(".feedback-username").text("*Tidak boleh kosong");
            $("#username").css({"border-color":"red"});
            console.log('username kosong');
        }
        if($("#email").val().length == 0){
            $(".feedback-email").removeClass("d-none");
            $(".feedback-email").text("*Tidak boleh kosong");
            $("#email").css({"border-color":"red"});
            console.log('email kosong');
        }else if(!cekEmail()){
            $(".feedback-email").removeClass("d-none");
            $(".feedback-email").text("*email sudah digunakan");
            $("#email").css({"border-color":"red"});
        }
        if($("#password").val().length == 0){
            $(".feedback-password").removeClass("d-none");
            $(".feedback-password").text("*Tidak boleh kosong");
            $("#password").css({"border-color":"red"});
            console.log('password kosong');
        }
        if($("#retypePass").val().length == 0){
            $(".feedback-retypePass").removeClass("d-none");
            $(".feedback-retypePass").text("*Tidak boleh kosong");
            $("#retypePass").css({"border-color":"red"});
            console.log('retype pass kosong');
        }

        if($("#password").val().length != 0 && $("#retypePass").val().length != 0){
            if($("#password").val() === $("#retypePass").val()){
                //password input
                $(".feedback-password").addClass("d-none");
                $(".feedback-password").text("*Tidak boleh kosong");
                $("#password").css({"border-color":""});
                //retype password input
                $(".feedback-retypePass").addClass("d-none");
                $(".feedback-retypePass").text("*Tidak boleh kosong");
                $("#retypePass").css({"border-color":""});
            }
        }

        return false;
    }else{
        //pengecekan password dan retype password sesuai
        if($("#password").val() === $("#retypePass").val() && cekEmail()){
            return true;
        }else{
            $(".feedback-retypePass").removeClass("d-none");
            $(".feedback-retypePass").text("*Kata sandi tidak cocok");
            $("#retypePass").css({"border-color":"red"});
    
            if(!cekEmail()){
                $(".feedback-email").removeClass("d-none");
                $(".feedback-email").text("*email sudah digunakan");
                $("#email").css({"border-color":"red"});
            }
    
            if($("#password").val() === $("#retypePass").val()){
                //password input
                $(".feedback-password").addClass("d-none");
                $(".feedback-password").text("*Tidak boleh kosong");
                $("#password").css({"border-color":""});
                //retype password input
                $(".feedback-retypePass").addClass("d-none");
                $(".feedback-retypePass").text("*Tidak boleh kosong");
                $("#retypePass").css({"border-color":""});
            }
    
            return false;
        }
    };
    

});

function cekEmail(){
    if($listEmail > 0){
        for(let i = 0; i < $listEmail.length; i++){
            if($listEmail[i]['email'] == $('#email').val()){
                $(".feedback-email").removeClass("d-none");
                $(".feedback-email").text("*email sudah digunakan");
                $("#email").css({"border-color":"red"});
                return false;
            }else{
                return true;
            }
        }
    }else{
        return true;
    }
}

function resetFormjs(){
    //username input
    $(".feedback-username").addClass("d-none");
    $(".feedback-username").text("*Tidak boleh kosong");
    $("#username").css({"border-color":""});
    //email input
    $(".feedback-email").addClass("d-none");
    $(".feedback-email").text("*Tidak boleh kosong");
    $("#email").css({"border-color":""});
    //password input
    $(".feedback-password").addClass("d-none");
    $(".feedback-password").text("*Tidak boleh kosong");
    $("#password").css({"border-color":""});
    //retype password input
    $(".feedback-retypePass").addClass("d-none");
    $(".feedback-retypePass").text("*Tidak boleh kosong");
    $("#retypePass").css({"border-color":""});
}