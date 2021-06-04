//To delete data from the database
$(function() {
    $(".delete_img").click(function(){
        var element = $(this);
        var del_id = element.attr("id");
        var del_table_name = element.attr("name");

        if(confirm("Are you sure you want to delete this?"))
        {
            $.ajax({
                type: "POST",
                url: "delete.php",
                data: {id : del_id, table_name : del_table_name},
                success: function(){

                }
            });
            $(this).parents(".response").animate({ backgroundColor: "red" }, "slow")
                .animate({ opacity: "hide" }, "slow");
        }
        else{
            return false;
        }


    });

});