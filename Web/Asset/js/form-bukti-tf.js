$(document).ready(function(){
    $('#upload-bukti-tf').submit(function(e){
        e.preventDefault();

        if($('.input-bukti-tf').val().length == 0){
            $('.feedback-bukti-tf').text('Gambar Barang (Tidak Boleh kosong)*');
            $('.feedback-bukti-tf').addClass('text-danger');
        }else{
            var form = $('#upload-bukti-tf')[0];
            var data = new FormData(form);

            $.ajax({
                url:"PHP/upload-bukti-tf.php",
                type: "POST",
                enctype: 'multipart/form-data',
                processData: false,  // Important!
                contentType: false,
                cache: false,
                data: data ,
                success: function(response){
                    
                }
            })
        }
    })
})