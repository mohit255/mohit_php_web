$(document).ready(function(){
var cid=getCookie("add_to_card_ddsp_test");
get_add_to_card_product(cid);

});

$(document).on("click",".add_to_card_dsp",function(){
 var product_id=$(this).data("id");
 var product_price=$("#price_"+product_id).val();
 var product_que=$("#quenty_"+product_id).val();
 // alert(product_id);
 var cooki_id=getCookie("add_to_card_ddsp_test");
 var cid=""
 if(cooki_id)
 {
   cid=cooki_id
 }
 else
 {
 	var d = new Date();
 	var val=Date.parse(d);
 	setCookie("add_to_card_ddsp_test", val, 1);
 	cid=getCookie("add_to_card_ddsp_test");
 }
 //alert(cid);
 var res=fill_card(cid,product_id,product_price,product_que);
  
});



$(document).on("click",".remove_product_dsp",function(){
   var id=$(this).data("id");
    $.ajax({
   	method:"POST",
   	url:"get_product.php",
   	data:{"id":id,"status":"Remove_product"},
   	dataType:"json",
   	success:function(data){
   		  get_add_to_card_product(data.data.cid);
   	  }
   });

});


function fill_card(cid,product_id,product_price,product_que){
 $.ajax({
   	method:"POST",
   	url:"get_product.php",
   	data:{"cid":cid,"product_id":product_id,"product_price":product_price,"product_que":product_que,"status":"fill_card"},
   	dataType:"html",
   	success:function(data){
   		get_add_to_card_product(cid);
   	  }
   });
 
}


function get_add_to_card_product(cid)
{

   $.ajax({
   	method:"POST",
   	url:"get_product.php",
   	data:{"cid":cid,"status":"get_add_to_card_product"},
   	dataType:"html",
   	success:function(data){
   		
   		$("#show_card_produst_dsp").empty();
   		$("#show_card_produst_dsp").html(data);
   	  }
   });
}



function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length, c.length);
        }
    }
    return "";
}

function setCookie(cname, cvalue, exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires="+ d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}