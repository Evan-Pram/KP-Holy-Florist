$('#form-delivery-detail').submit(function(e){
    e.preventDefault();

    if($('.metode-pembayaran').val() == ""){
        $('.metode-pembayaran').css("border-color","red");
        $('.feedback-pembayaran').css("color","red");
        $('.feedback-pembayaran').text('Metode Pembayaran (Tidak Boleh Kosong)');
    }else{
        e.currentTarget.submit();
    }
})

function getCurrentDate(){
    var time = new Date();
    var year = String(time.getFullYear());
    if(time.getMonth() < 10){
        var month = time.getMonth()+1;
        var month = '0'+month;
    }else{
        var month = time.getMonth()+1;
    }
    if(time.getDate() < 10){
        var date = time.getDate()+3;
        var date = '0'+date;
    }else{
        var date = time.getDate()+3;
    }
    var currentDate = year+'-'+month+'-'+date;
    return currentDate;
}

$(document).ready(function() {
    var currentDate = getCurrentDate();
    $('#tanggal-pengiriman').attr('min', currentDate);
})

function resetInputFormCheckout(){
    // reset input
    $('.metode-pembayaran').css("border-color","");
    $('.feedback-pembayaran').css("color","");
    $('.feedback-pembayaran').text('Metode Pembayaran');
}