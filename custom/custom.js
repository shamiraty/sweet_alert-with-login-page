//increment btn
$(document).ready(function(){

    $('.increment-btn').click(function(e){

        e.preventDefault();
        var inc_value=$(this).closest('.product_data').find('.p_quantity').val();
        var value=parseInt(inc_value,10);
        value=isNaN(value) ? 0: value;

        if(value < 10)
        {
            value ++;
            $(this).closest('.product_data').find('.p_quantity').val(value);
             
        }
    });

//decrement btn  
    $('.decrement-btn').click(function(e){

        e.preventDefault();

        var dec_value=$(this).closest('.product_data').find('.p_quantity').val();
        var value=parseInt(dec_value,10);
        value=isNaN(value) ? 0: value;

        //user can purchase only 10 products

        if(value > 1)
        {
            value --;
            $(this).closest('.product_data').find('.p_quantity').val(value);
             
        }
    });




//change quantity
    $('.changeQuantity').click(function (e){

        e.preventDefault();
        var product_id=$(this).closest('.product_data').find('.prod_id').val();
        var product_qty=$(this).closest('.product_data').find('.p_quantity').val(); 
        
        $.ajax
        (
            {
                type:"POST",
                url:"api.php",
                data:{
                    'product_id':product_id,
                    'product_qty': product_qty,    
                },
                
                success: function (response)
                {
                  
                    alertify.set('notifier','position', 'top-center');
                    alertify.success(response);
                }
            }); 
     });


//delete product
     $('.prod_click').click(function (e){

        e.preventDefault();
    
        var product_id=$(this).closest('.product_data').find('.prod_delete').val();
        
        alert(product_id)
        $.ajax
        (
            {
                type:"POST",
                url:"delete.php",
                data:{
                    'product_id':product_id,
                      
                },
                
                success: function (response)
                {
                  
                    swal(
                        {
                        title:'Notification',
                        text:response ,
                        icon:'success'
                        }
                    )


                    $('.refresh').load(location.href + " .refresh");
                }
            });
    
     });











});