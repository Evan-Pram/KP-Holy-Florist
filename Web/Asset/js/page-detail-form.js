$('#form-pesan-barang').submit(function(e){
    e.preventDefault();

    
    
    e.currentTarget.submit();
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
