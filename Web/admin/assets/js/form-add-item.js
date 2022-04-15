$(document).ready(function(){
    $('.input-tambah-kategori').on('change', function(){
        if($('.input-tambah-kategori').val() != "Papan Bunga"){
            $('.slide-modal-tambah').slideUp();
            $('.input-tambah-model').removeAttr('required');
            $('.input-tambah-panjang').removeAttr('required');
            $('.input-tambah-lebar').removeAttr('required');
        }else{
            $('.slide-modal-tambah').slideDown();
            $('.input-tambah-model').attr('required', true);
            $('.input-tambah-panjang').attr('required', true);
            $('.input-tambah-lebar').attr('required', true);

        }
    })

    $('#form-tambah-barang').submit(function(e){
        e.preventDefault();

        if($('.input-tambah-gambar').val().length == 0){
            $('.input-tambah-gambar').css({"border-color":"red"});
            $('.feedback-tambah-gambar').addClass('text-danger');
            $('.feedback-tambah-gambar').text('Gambar (Tidak Boleh kosong)');
        }else{
            var form = $('#form-tambah-barang')[0];
            var data = new FormData(form);
            
            $.ajax({
                url: "../PHP/add-item-process.php",
                type: "POST",
                enctype: 'multipart/form-data',
                processData: false,  // Important!
                contentType: false,
                cache: false,
                data: data ,
                success: function(response){
                    if(response == "true"){
                        window.location.href = "produk.php";
                    }else if(response == "size"){
                        $('.input-tambah-gambar').css({"border-color":"redd"});
                        $('.feedback-tambah-gambar').addClass('text-danger');
                        $('.feedback-tambah-gambar').text('Gambar (Ukuran File Melebihi 1MB)');
                    }else if(response == "type"){
                        $('.input-tambah-gambar').css({"border-color":"red"});
                        $('.feedback-tambah-gambar').addClass('text-danger');
                        $('.feedback-tambah-gambar').text('Gambar (Pastikan File yang anda Upload benar)');
                    }
                }
            })
        }
    })
    
})

function resetFormTambahBarang(){
    $('.slide-modal-tambah').css('display','block');
    $('.input-tambah-nama').val('');
    $('.input-tambah-kategori option[value="hidden"]').prop("selected",true);
    $('.input-tambah-model').val('');
    $('.input-tambah-panjang').val('');
    $('.input-tambah-lebar').val('');
    $('.input-tambah-harga').val('');
    $('.input-tambah-gambar').val('');
    //reset input gambar
    $('.input-tambah-gambar').css({"border-color":""});
    $('.feedback-tambah-gambar').removeClass('text-danger');
    $('.feedback-tambah-gambar').text('Gambar');
}