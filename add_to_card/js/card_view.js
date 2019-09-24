$(document).on("click",".remove_product_from_card_page_dsp",function(){
   var id=$(this).data("id");
    $.ajax({
   	method:"POST",
   	url:"get_product.php",
   	data:{"id":id,"status":"Remove_product"},
   	dataType:"json",
   	success:function(data){
   		  get_add_to_card_product_for_card_view(data.data.cid);
   	  }
   });

});

$(document).on("click",".set_quenty",function(){
   var id=$(this).data("id");
    $.ajax({
      method:"POST",
      url:"get_product_for_view_card.php",
      data:{"id":id,"status":"set_quenty"},
      dataType:"json",
      success:function(data){
           get_add_to_card_product_for_card_view(data.data.cid);
        }
   });

});
function get_add_to_card_product_for_card_view(cid)
{

   $.ajax({
      method:"POST",
      url:"get_product_for_view_card.php",
      data:{"cid":cid,"status":"get_add_to_card_product"},
      dataType:"html",
      success:function(data){
         
         $("#show_card_produst_dsp_view_card").empty();
         $("#show_card_produst_dsp_view_card").html(data);
        }
   });
}