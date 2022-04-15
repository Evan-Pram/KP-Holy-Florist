$('#jenisBarang').change(function(){
    var valJenis =  $('#jenisBarang').val();
    if(valJenis == "Buket")
    {
        $('#panjangBarang').attr("disabled","disabled");
        $('#panjangBarang').val("");
        $('#lebarBarang').attr("disabled","disabled");
        $('#lebarBarang').val("");
        $('#modelBarang').attr("disabled","disabled");
    }else{
        $('#panjangBarang').removeAttr("disabled","disabled");
        $('#lebarBarang').removeAttr("disabled","disabled");
        $('#modelBarang').removeAttr("disabled","disabled");
    }
})

$('#gambarBarang').change(function(){
    $('.custom-file-label').css({"color":"#495057","border-color":"#eed202"})
    $('.feedback').text('File terbaru');
    $('.feedback').css({"display":"block","color":"#eed202"});
});

$(window).on('load', function(){
    if($('#jenisBarang').val() == "Buket"){
        $('#panjangBarang').attr("disabled","disabled");
        $('#panjangBarang').val("");
        $('#lebarBarang').attr("disabled","disabled");
        $('#lebarBarang').val("");
        $('#modelBarang').attr("disabled","disabled");
    }else{
        $('#panjangBarang').removeAttr("disabled","disabled");
        $('#lebarBarang').removeAttr("disabled","disabled");
        $('#modelBarang').removeAttr("disabled","disabled");
    };
})

$('#formBarang').submit(function(){
    if($('#gambarBarang').get(0).files.length !== 0){
        var typeFile = $('#gambarBarang').val().split(".")[1];
        var sizeFile = $('#gambarBarang').get(0).files[0].size;
        if(typeFile == "jpeg" || typeFile == "jpeg" || typeFile == "png")
        {
            if(sizeFile >= 1500000)
            {
                $('.custom-file-label').css({"color":"red","border-color":"red"});
                $('.feedback').text('ukuran file terlalu besar');
                $('.feedback').css({"display":"block"});
                return false;
            }else{
                $('#btnAdd').attr("disabled","disabled");
                return true;
            }
        }else{
            $('.custom-file-label').css({"color":"red","border-color":"red"});
            $('.feedback').text('Pastikan file yang anda upload gambar');
            $('.feedback').css({"display":"block","color":"red"});
            return false;
        }
    }
});