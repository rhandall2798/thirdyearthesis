function addRecord(key) {
    // get values
    var reguname = $("#reguname").val();
    var regpwordlast = $("#regpwordlast").val();
 
    // Add record
    
    
    if(isNotEmpty(reguname) && isNotEmpty(regpwordlast)){
        $.ajax({
            url:'../php/registration.php',
            method: 'POST',
            dataType: 'text',
            data:{
                key:key,
                reguname:reguname.val(),
                repwordlast:regpwordlast.val()
            });
            }
        })
    }
    
}

function isNotEmpty(caller){
               
        if(caller.val() == ''){
        caller.css('border','1px solid red');
        return false;
    }
    else{
              
        caller.css('border','');
        return true;
    }
}