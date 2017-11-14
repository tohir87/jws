function show_org1(category_sales_id) {
    // alert(category_sales_id);
    if (category_sales_id == '1' || category_sales_id == '') {
        $("#org_div1").hide();
    } else {
        $("#org_div1").show();
    }

    values = {"type": "search", "category_sales_id": category_sales_id}
    $.ajax({
        dataType: "json",
        url: "ajax.php",
        type: "post",
        data: values,
        success: function (data) {
            // alert(data.institute_present);
            if (data.institute_present == '0') {

                $("#inst_notice").html('<font color="red">No Institute is present!</font>');
            } else {
                $("#inst_notice").html('');
            }
            if (data.content == 'not_exist') {
                // $("#remaining_form").hide();
            } else {
                $("#country_new").html(data.content);
                // setTimeout( function(){equal_height('left-panel','right-panel');} , 900);
            }
        },
        error: function () {
            $("#other_inst_li_id").show().html('<input name="other_inst" id="other_inst" value="" type="text" placeholder="Please enter institute Name" required style="width:100%;"/>');
            $("#other_inst").css({'width': '100%'});
        }
    });
}