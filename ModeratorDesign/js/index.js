$(function() {
    DataTableComplaints();
    DataTableSuggestions();
})

function DataTableComplaints() {
    $.post('../ModeratorDesign/php/ajaxShowComplaints.php', function(data) {
        $('#data-complainee').html(data);
    })
}

function DataTableSuggestions() {
    $.post('../ModeratorDesign/php/ajaxShowSuggestions.php', function(data) {
        $('#data-suggestion').html(data);
    })
}

function manageData(key){
    
    var subject = $("#subject");
    var problem = $("#problem");

    if(isNotEmpty(subject) && isNotEmpty(problem)){
        $.ajax({
            url: '../ModeratorDesign/php/ajaxCreateComplaints.php',
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
            url: '../ModeratorDesign/php/ajaxCreateSuggestions.php',
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

function getSuggestionDetails(userid) {
    // Add User ID to the hidden field for furture usage
    $("#hidden_user_id").val(userid);
    $.post("../ModeratorDesign/php/readSuggestionDetails.php", {
            id: userid
        },
        function (data, stats) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#upsubject").val(user.subject);
            $("#upsuggestion").val(user.suggestion);
            $("#updatestatus").val(user.status);
        }
    );
    // Open modal popup
    $("#update_suggestion_modal").modal("show");
}

function UpdateSuggestionDetails() {
    // get values
    var upsubject = $("#upsubject").val();
    var upsuggestion = $("#upsuggestion").val();
    var upstatus = $("#updatestatus").val();
 
    // get hidden field value
    var id = $("#hidden_user_id").val();
 
    // Update the details by requesting to the server using ajax
    $.post("../ModeratorDesign/php/updateSuggestionDetails.php", {
            id: id,
            subject: upsubject,
            suggestion: upsuggestion,
            status: upstatus
        
        },
        function (data, status) {
        
        
        if(data.trim() == 1) {
                        swal({
                            title: "Updated!",
                            text: "The selected problem has successfully updated!",
                            type: "success",
                            confirmButtonText: "Horrayyy!"
                        }, function() {
                            $("#update_suggestion_modal").modal("hide");
                            DataTableSuggestions();
                        })
                    }
           
        
        
        }
    );
}

function getComplaintDetails(userid) {
       // Add User ID to the hidden field for furture usage
    $("#hidden_user_id").val(userid);
    $.post("../ModeratorDesign/php/readComplaintDetails.php", {
            id: userid
        },
        function (data, stats) {
            // PARSE json data
            var user = JSON.parse(data);
            // Assing existing values to the modal popup fields
            $("#upsubject").val(user.subject);
            $("#upsuggestion").val(user.problem);
            $("#updatestatus").val(user.status);
        }
    );
    // Open modal popup
    $("#update_complaint_modal").modal("show");
}

function UpdateComplaintDetails() {
    // get values
    var upsubject = $("#upsubject").val();
    var upsuggestion = $("#upsuggestion").val();
    var upstatus = $("#updatestatus").val();
 
    // get hidden field value
    var id = $("#hidden_user_id").val();
 
    // Update the details by requesting to the server using ajax
    $.post("../ModeratorDesign/php/updateComplaintDetails.php", {
            id: id,
            subject: upsubject,
            suggestion: upsuggestion,
            status: upstatus
        
        },
        function (data, status) {
            
        
            
                  if(data.trim() == 1) {
                        swal({
                            title: "Updated!",
                            text: "The selected problem has successfully updated!",
                            type: "success",
                            confirmButtonText: "Horrayyy!"
                        }, function() {
                            $("#update_suggestion_modal").modal("hide");
                            DataTableComplaints();
                        })
                    }
        
        
        }
    );
}