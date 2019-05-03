</div>
</main>

    <footer class="text-center" id="footer">
        &copy; Copyright 2017-2018 Levis Ecom
    </footer>


    <script>
   

    function detailsmodal(id){
        var data = {"id" : id};
        jQuery.ajax({
            url :  'includes/detailsmodal.php',
            method : "post",
            data : data,
            success : function(data){
                jQuery('body').prepend(data);
                jQuery('#details-modal').modal('toggle');
            },
            error : function() {
                alert("something went wrong")
            }
        });
    }

    function update_cart(mode, edit_id, edit_size){
        var data = {"mode" : mode, "edit_id" : edit_id, "edit_size" : edit_size};
        jQuery.ajax({
            url: '/Ecom/admin/parsers/update_cart.php',
            method: "post",
            data: data,
            success: function(){location.reload();},
            error: function() {alert('Something went wrong');},
        });
    }

    function add_to_cart(){
        jQuery('#modal_errors').html("");
        var size = jQuery('#size').val();
        var quantity= jQuery('#quantity').val();
        var available = jQuery('#available').val();
        var error = '';
        var data = jQuery('#add_product_form').serialize();
        if(size == "" || quantity == "" || quantity == 0){
            error += '<p class="text-danger text-center">You must choose a size and quantity</p>';
            jQuery('#modal_errors').html(error);
            return;
        } else if(parseInt(quantity) > parseInt(available)){

            error += '<p class="text-danger text-center">There are only ' + available + ' available ' + quantity + '</p>';
            jQuery('#modal_errors').html(error);
            return;
        } else{
            jQuery.ajax({
                url: '/Ecom/admin/parsers/add_cart.php',
                method: 'POST',
                data: data,
                success: function(){},
                error: function(){alert("something wrong")}
            });
            closeModal();
        }
    }



</script>

</body>


</html>