function getDataBarang(idBarang){
    $('#modalEditBarang').addClass('show');
    // feedback reset 
    $('.feedback-edit-gambar').text('Gambar');            
    $('.feedback-edit-gambar').removeClass('text-danger');
    $('.edit-input-gambar').css({"border-color":""});
    $('.edit-input-gambar').val("");

    $.ajax({
        url:'assets/PHP/load-detail-product.php',
        method: 'POST',
        data:{
            id:idBarang
        },
        success: function(response){
            barang = JSON.parse(response);
            


            $('.edit-input-id').attr('value',barang['id_Barang']);
            $('#editProduct').attr("name", "idBarang-"+idBarang);
            $('.edit-input-nama').val(barang['nama']);
            $(".edit-input-kategori option[value='"+barang['jenis']+"']").attr('selected','selected');
            $('.edit-input-harga').val(barang['harga']);
            if(barang['jenis'] != 'Papan Bunga'){
                $('.input-model').addClass("d-none");
                $('.input-ukuran').addClass("d-none");
                $('.edit-input-model').removeAttr('required');
                $('.edit-input-model').val('');
                $('.edit-input-panjang').removeAttr('required');
                $('.edit-input-panjang').val('');
                $('.edit-input-lebar').removeAttr('required');
                $('.edit-input-lebar').val('');
            }else{
                $('.input-model').removeClass("d-none");
                $('.edit-input-model').attr('required', true);
                $('.edit-input-model').val(barang['model']);
                $('.input-ukuran').removeClass("d-none");
                var panjang = barang['ukuran'].split('x')[0];
                var lebar = barang['ukuran'].split('x')[1];
                $('.edit-input-panjang').val(panjang);
                $('.edit-input-lebar').val(lebar);
                $('.edit-input-panjang').attr('required', true);
                $('.edit-input-lebar').attr('required', true);
            }
        }
    })
}