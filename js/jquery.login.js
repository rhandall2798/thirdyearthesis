$('#login').click(function(e) {
    
    e.preventDefault();
    
    var username = $('#loguser').val();
    var password = $('#logpass').val();
    var data = 'username='+username+'&password='+password;
    
    if(username === '' || password === '') {
        
        swal({
            title: "I feel empty :(",
            text: "Oh snap! Please enter your Username and password!",
            type: "error",
            confirmButtonText: "Retry",
            confirmButtonColor: "#ff5454"
        })
    } else {
        
        $.ajax({
            
            type: "POST",
            url: 'php/login.php',
            data: data,
            cache: false,
            success: function(data) {
                
                if(data.trim() == 1) {
                    
                    swal({
                        title: "Success!",
                        text: "You have successfully logged in as Admin!",
                        type: "success",
                        confirmButtonText: "Continue"
                    }, function() {
                        location.href="AdminDesign/index.php";
                    });
                    
                    
                }
               else if(data.trim() == 2) {
                    
                    swal({
                        title: "Success!",
                        text: "You have successfully logged in as Moderator!",
                        type: "success",
                        confirmButtonText: "Continue"
                    }, function() {
                        window.location="ModeratorDesign/index.php";
                    });
                    
                    
                }
                  else if(data.trim() == 3) {
                    
                    swal({
                        title: "Success!",
                        text: "You have successfully logged in as User!",
                        type: "success",
                        confirmButtonText: "Continue"
                    }, function() {
                        window.location="UserDesign/index.php";
                    });
                    
                    
                }
                
                else {
                    
                    swal({
                        title: "Oh snap!",
                        text: "The user name or password is incorrect!",
                        type: "error",
                        confirmButtonText: "Retry",
                        confirmButtonColor: "#ff5454"
                    })
                }
            }
        })
    }
})