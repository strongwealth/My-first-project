<footer class="text-center" id="footer">&copy; Copyright 2019-2020 Red Stone shop</footer>
</div>
<script>
function detailsmodal(id){
  var data={"id" : id};
  jQuery.ajax({
    url : '/tutorial/detailsmodal.php',
    method : "post",
    data  :  data,
    success:function(data) {
      jQuery('body').append(data);
      jQuery('#details-'+id).modal('toggle');
    },
    error: function() {
      aleart("something went wrong!");
    }
  });
}

function update_cart(mode,edit_id,edit_size){
  var data = {"mode" : mode, "edit_id" : edit_id, "edit_size": edit_size};
  jQuery.ajax({
    url : '/tutorial/admin/parsers/update_cart.php',
    method : "post",
    data : data,
    success : function(){location.reload();},
    error : function(){alert("something went wrong.");},

  })
}

function add_to_cart(){
  jQuery('modal_errors').html("");
  var size = jQuery('#size').val();
  var quantity = jQuery('#quantity').val();
  var available = jQuery('#available').val();
  var error = '';
  var data = jQuery('#add_product_form').serialize();
  console.log('calling add_to_cart')
  if(size ==''|| quantity == '' || quantity==0){
    error += '<p class="text-danger text-center">You must choose a Size and quantity</p>';
    jQuery('#modal_errors').html(error)
      console.log('error 1')
    return;

  } else if (quantity > available){
        error += '<p class="text-danger text-center">There are only '+available+' available </p>';
        jQuery('#modal_errors').html(error);
        console.log('derror2')
        return;

  }else{
    console.log('sent request');
    jQuery.ajax({
      url : '/tutorial/admin/parsers/add_cart.php',
      method: 'post',
      data : data,
      success: function(){
      //  location.reload();
      },
      error : function(){alert("something went wrong");}
    })
  }
}

</script>
