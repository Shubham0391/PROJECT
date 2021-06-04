<?php include_once("file_includes/configure/servervariables.php");?>
<script language="javascript" type="text/javascript">
	
		function deletemodel(model_id){
			
			 if (confirm("Are you sure to delete this row ?") == false) {
                    return;
                }	
			
			$.post("<?php echo SERVER_URL."processrequests.php";?>",{action : "deletemodel", post_module: "models", model_id : model_id},function(response){
	//	alert(response);return false;
	if(response=='1'){

			location.href='<?php echo SERVER_URL."list_model.php";?>';
	}				
			});
		
		}
		function deletemodule(module_id){
			
			 if (confirm("Are you sure to delete this row ?") == false) {
                    return;
                }	
			
			$.post("<?php echo SERVER_URL."processrequests.php";?>",{action : "deletemodule", post_module: "modules", module_id : module_id},function(response){
	//	alert(response);return false;
	if(response=='1'){

			location.href='<?php echo SERVER_URL."list_module.php";?>';
	}				
			});
		
		}
			function deletesize(size_id){
			
			 if (confirm("Are you sure to delete this row ?") == false) {
                    return;
                }	
			
			$.post("<?php echo SERVER_URL."processrequests.php";?>",{action : "deletesize", post_module: "sizes", size_id : size_id},function(response){
	//	alert(response);return false;
	if(response=='1'){

			location.href='<?php echo SERVER_URL."list_size.php";?>';
	}				
			});
		
		}
		function deletestock(stock_id){
			
			 if (confirm("Are you sure to delete this row ?") == false) {
                    return;
                }	
			
			$.post("<?php echo SERVER_URL."processrequests.php";?>",{action : "deletestock", post_module: "stocks", stock_id : stock_id},function(response){
	//	alert(response);return false;
	if(response=='1'){

			location.href='<?php echo SERVER_URL."list_stock.php";?>';
	}				
			});
		
		}
		function deletefaq(faq_id){
			
			 if (confirm("Are you sure to delete this row ?") == false) {
                    return;
                }	
			
			$.post("<?php echo SERVER_URL."processrequests.php";?>",{action : "deletefaq", post_module: "faqs", faq_id : faq_id},function(response){
	//	alert(response);return false;
	if(response=='1'){

			location.href='<?php echo SERVER_URL."list_faq.php";?>';
	}				
			});
		
		}
		function deletebrand(brand_id){
			
			 if (confirm("Are you sure to delete this row ?") == false) {
                    return;
                }	
			
			$.post("<?php echo SERVER_URL."processrequests.php";?>",{action : "deletebrand", post_module: "brands", brand_id : brand_id},function(response){
	//	alert(response);return false;
	if(response==1){
					location.href='<?php echo SERVER_URL."list_brand.php";?>';
				}	
			});
		
		}
		
		function deleteprice(price_id){
			
			 if (confirm("Are you sure to delete this row ?") == false) {
                    return;
                }	
			
			$.post("<?php echo SERVER_URL."processrequests.php";?>",{action : "deleteprice", post_module: "prices", price_id : price_id},function(response){
	//	alert(response);return false;
	if(response=='1'){

			location.href='<?php echo SERVER_URL."list_price.php";?>';

	}			
			});
		
		}
		function deleteproduct(prodcut_id){
			
			 if (confirm("Are you sure to delete this row ?") == false) {
                    return;
                }	
			
			$.post("<?php echo SERVER_URL."processrequests.php";?>",{action : "deleteproduct", post_module: "products", product_id : product_id},function(response){
	//	alert(response);return false;
	if(response=='1'){

			
				location.href='<?php echo SERVER_URL."list_product.php";?>';
		 
	}				
			});
		
		}
	function deleteos(os_id){
			
			 if (confirm("Are you sure to delete this row ?") == false) {
                    return;
                }	
			
			$.post("<?php echo SERVER_URL."processrequests.php";?>",{action : "deleteos", post_module: "os", os_id : os_id},function(response){
	//	alert(response);return false;
	if(response=='1'){

			
			location.href='<?php echo SERVER_URL."list_os.php";?>';
			
	}			
			});
		
		}
	function deletediscount(discount_id){
			
			 if (confirm("Are you sure to delete this row ?") == false) {
                    return;
                }	
			
			$.post("<?php echo SERVER_URL."processrequests.php";?>",{action : "deletediscount", post_module: "discounts", discount_id : discount_id},function(response){
	//	alert(response);return false;
	if(response=='1'){

				location.href='<?php echo SERVER_URL."list_discount.php";?>';
	}			
			});
		
		}
			function deleteslideshow(slideshow_id){
			
			 if (confirm("Are you sure to delete this row ?") == false) {
                    return;
                }	
			
			$.post("<?php echo SERVER_URL."processrequests.php";?>",{action : "deleteslideshow", post_module: "slideshows", slideshow_id : slideshow_id},function(response){
	//	alert(response);return false;
	if(response=='1'){

		
				location.href='<?php echo SERVER_URL."list_slider.php";?>';
			
			}
					
			});
		
		}
		
			function deletemember(member_id){
			
			 if (confirm("Are you sure to delete this row ?") == false) {
                    return;
                }	
			
			$.post("<?php echo SERVER_URL."processrequests.php";?>",{action : "deletemember", post_module: "members", member_id : member_id},function(response){
	//	alert(response);return false;
	if(response=='1'){

		
				location.href='<?php echo SERVER_URL."list_member.php";?>';
			
			}
					
			});
		
		}
		function deletedisplay(display_id){
			
			 if (confirm("Are you sure to delete this row ?") == false) {
                    return;
                }	
			
			$.post("<?php echo SERVER_URL."processrequests.php";?>",{action : "deletedisplay", post_module: "displays", display_id : display_id},function(response){
	//	alert(response);return false;
	if(response=='1'){

		
				location.href='<?php echo SERVER_URL."list_display.php";?>';
			
			}
					
			});
		
		}
		
		function deletespecification(specification_id){
			
			 if (confirm("Are you sure to delete this row ?") == false) {
                    return;
                }	
			
			$.post("<?php echo SERVER_URL."processrequests.php";?>",{action : "deletespecification", post_module: "specifications", specification_id : specification_id},function(response){
	//	alert(response);return false;
	if(response=='1'){

		
				location.href='<?php echo SERVER_URL."list_specification.php";?>';
			
			}
					
			});
		
		}

		function deletebattery(battery_id){
			
			 if (confirm("Are you sure to delete this row ?") == false) {
                    return;
                }	
			
			$.post("<?php echo SERVER_URL."processrequests.php";?>",{action : "deletebattery", post_module: "batteries", battery_id : battery_id},function(response){
	//	alert(response);return false;
	if(response=='1'){

		
				location.href='<?php echo SERVER_URL."list_battery.php";?>';
			
			}
					
			});
		
		}

		function deleteterm(term_id){
			
			 if (confirm("Are you sure to delete this row ?") == false) {
                    return;
                }	
			
			$.post("<?php echo SERVER_URL."processrequests.php";?>",{action : "deleteterm", post_module: "terms", term_id : term_id},function(response){
	//	alert(response);return false;
	if(response=='1'){

		
				location.href='<?php echo SERVER_URL."list_term.php";?>';
			
			}
					
			});
		
		}

</script>
