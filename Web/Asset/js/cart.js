function fillModalDetailCart(idorder, idDetailCart){
    $('#form-edit-detail-cart').attr('action','PHP/update-cart.php?update&order='+idorder+'&id='+idDetailCart);

    $.ajax({
        url:'PHP/update-cart.php?load',
        method: 'POST',
        data:{
            id_order: idorder,
            id : idDetailCart
        },
        success: function(response){
            var cart = JSON.parse(response);
            console.log(cart,cart.msg);

            $('.msg').val(cart['msg']);
            $('.msg-from').val(cart['msg_from']);
        }
    })
}