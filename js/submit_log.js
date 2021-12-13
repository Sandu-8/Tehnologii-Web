$(function(){
    var $registerForm = $("#formValidation")
    
    $.validator.addMethod("noSpace", function(value, element){
        return value == '' || value.trim().length != 0
    }, "Spaces are not allowed!")

    $.validator.addMethod("pwcheck", function(value) {
        return /^[A-Za-z0-9\d=!\-@._*]*$/.test(value) // contine caracterele date
            && /[a-z]/.test(value) // are o litera mica
            && /\d/.test(value) // are un numar
     });
     

    if($registerForm.length){
        $registerForm.validate({
            rules:{
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                }
            },
            messages:{
                email: {
                    required: "Introduceti emailul!",
                    email: "Emailul este greșit!"
                },

                password: {
                    required: "Introduceti parola!",
                }
            },
            submitHandler: function(form, event) {
                event.preventDefault();
                var email =$("#email").val();
                var password =$("#password").val();
                var response = document.getElementById("msg");    
                
                $.ajax({
                    url:'http://localhost/jquery/php/submit_log.php',
                    type: 'POST',
                    cache: false,
                    data: {'email': email, 'password':password},
                    dataType: 'json',
                    success: function(data){
                        console.log(data);
                        if(!data){
                            response.style.color = "red";
                            response.innerHTML = "Error!";
                        }
                        else{
                            if(data.status == 1) {
                            response.style.color = "green";
                            response.innerHTML = data.mesage;
                            $("#formValidation").trigger("reset");
                        }else{
                            response.style.color = "red";
                            response.innerHTML = data.mesage;
                        }
                        }
                    }
         
                })
              }
        })
    }

        
})
