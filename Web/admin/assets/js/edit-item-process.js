$('#form-edit-barang').submit(function(e){
    e.preventDefault();
    var idbarang = $('#editProduct').attr('name').split("-")[1];
    var form = $('#form-edit-barang')[0];
    var data = new FormData(form);
    
    $.ajax({
        url: "../PHP/edit-item-process.php",
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
                $('.edit-input-gambar').css({"border-color":"red"});
                $('.feedback-edit-gambar').addClass('text-danger');
                $('.feedback-edit-gambar').text('Gambar (Ukuran File Melebihi 1MB)');
            }else if(response == "type"){
                $('.edit-input-gambar').css({"border-color":"red"});
                $('.feedback-edit-gambar').addClass('text-danger');
                $('.feedback-edit-gambar').text('Gambar (Pastikan File yang anda upload benar)');
            }
        }
    })
})