$(function() {
    DataTableComplaints();
    DataTableSuggestions();
})

function DataTableComplaints() {
    $.post('../UserDesign/php/ajaxShowComplaints.php', function(data) {
        $('#data-complainee').html(data);
    })
}

function DataTableSuggestions() {
    $.post('../UserDesign/php/ajaxShowSuggestions.php', function(data) {
        $('#data-suggestion').html(data);
    })
}

function manageData(key){
    
    var subject = $("#subject");
    var problem = $("#problem");

    if(isNotEmpty(subject) && isNotEmpty(problem)){
        $.ajax({
            url: '../UserDesign/php/ajaxCreateComplaints.php',
            method: 'POST',
            dataType: 'text',
            data:{
                key:key,
                subject: subject.val(),
                problem: problem.val(),
            }, success: function(data){
                  swal({
                        title: "Success!",
                        text: "You have successfully Submitted your Complaint",
                        type: "success",
                        confirmButtonText: "Continue"
                    },function(){
                       DataTableComplaints();
                       });
            }
        })
    }
}



function addSuggestion(pointer){
    
    var subject = $("#subject");
    var suggestion = $("#suggestion");

    if(isNotEmpty(subject) && isNotEmpty(suggestion)){
        $.ajax({
            url: '../UserDesign/php/ajaxCreateSuggestions.php',
            method: 'POST',
            dataType: 'text',
            data:{
                pointer:pointer,
                subject: subject.val(),
                suggestion: suggestion.val(),
            }, success: function(data){
                  swal({
                        title: "Success!",
                        text: "You have successfully Submitted your Suggestion",
                        type: "success",
                        confirmButtonText: "Continue"
                    },function(){
                       DataTableSuggestions();
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