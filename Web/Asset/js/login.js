$(document).ready(function (){
    $('#login-form').submit(function(e){
        e.preventDefault();

        if($('#email').val() == "" || $('#password').val() == ""){
            resetInput();
            if($('#email').val().length == 0 ){
                $('#email').css({'border-color':'red'});
                $('.feedback-email').removeClass('d-none');
                $('.feedback-email').text('*tidak boleh kosong');
            }
            if($('#password').val().length == 0 ){
                $('#password').css({'border-color':'red'});
                $('.feedback-password').removeClass('d-none');
                $('.feedback-password').text('*tidak boleh kosong');
            }
            return false;
        }else{
            $.ajax({
                url:'PHP/login-procces.php',
                method: 'POST',
                data:{
                    email: $('#email').val(),
                    password: $('#password').val()
                },
                success: function(response){
                    resetInput();
                    if(response == '0'){
                        $('.feedback-login').removeClass("d-none");
                        $('.feedback-login').text("*Email atau Password salah");
                        $('#email').css({'border-color':'red'});
                        $('#password').css({'border-color':'red'});
                    }else if(response == '1'){
                        location.href = "index.php";
                    }
                }
            });
        }
    });
})

function resetInput(){
    //input email
    $('#email').css({'border-color':''});
    $('.feedback-email').addClass('d-none');
    //input password
    $('#password').css({'border-color':''});
    $('.feedback-password').addClass('d-none');
    //feedback-login
    $('.feedback-login').addClass('d-none');
}