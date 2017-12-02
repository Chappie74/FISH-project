$(document).ready(function(){    

    var type = $("form[name=signup]").find("select[name=account_type]");
    $(type).change(function(event) {
        if($(this).val() == "customer")
        {
            $("#poc,#business_name").attr('disabled', true);
            $("#first_name,#last_name").attr('disabled', false);
            $("#poc,#business_name").val("");
        }
        else if ($(this).val() == "supplier")
        {
            $("#poc,#business_name").attr('disabled',false);
            $("#first_name,#last_name").attr('disabled', true);
            $("#first_name,#last_name").val("");
        }
    });
});
