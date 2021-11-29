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
                    noSpace: true,
                    minlength:8,
                    pwcheck: true
                },
                confirmpassword: {
                    required: true,
                    equalTo: password
                }
            },
            messages:{
                email: {
                    required: "Introduceti emailul!",
                    email: "Emailul este greșit!"
                },

                password: {
                    required: "Introduceti parola!",
                    minlength: "Parola trebuie să conțină minimum 8 caractere!",
                    pwcheck: "Parola trebuie să conțină numere și litere!"
                },
                confirmpassword: {
                    required: "Introduceti parola repetat!",
                    equalTo: "Ați introdus parola greșită!"
                }
            }
        })
    }
})


$(function(){
    var $registerForm = $("#formReset")

    if($registerForm.length){
        $registerForm.validate({
            rules:{
                email: {
                    required: true,
                    email: true
                }
            },
            messages:{
                email: {
                    required: "Introduceti emailul!",
                    email: "Emailul este greșit!"
                },

    
            }
        })
    }
})


$(function(){
    var $registerForm = $("#formContact")
    $.validator.addMethod("noSpace", function(value, element){
        return value == '' || value.trim().length != 0
    }, "Spaces are not allowed!")

    jQuery.validator.addMethod("lettersonly", function(value, element) {
        return this.optional(element) || /^[a-z]+$/i.test(value);
      }, "Letters only please"); 

    if($registerForm.length){
        $registerForm.validate({
            rules:{
                fname:{
                    required: true,
                    noSpace: true,
                    lettersonly: true
                },
                email: {
                    required: true,
                    email: true,
                },

                textarea: {
                    required: true,
                    noSpace: true,
                    minlength: 20
                }

            },
            messages:{
                email: {
                    required: "Introduceti emailul!",
                    email: "Emailul este greșit!"
                },

                textarea: {
                    required: "Nu este nici un mesaj!",
                    noSpace: "Trebuie să scriți ceva!",
                    minlength: "Mesajul trebuie să conțină minimum 20 de caractere!"
                },

                fname:{
                    required: "Introduceti numele!",
                    noSpace: "Trebuie să scriți ceva!",
                    lettersonly: "Introduceți doar litere!"
                   
                }

            }
        })
    }
})


