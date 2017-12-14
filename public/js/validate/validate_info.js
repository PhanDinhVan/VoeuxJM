$(document).ready(function() {
	
	$(function(){
	    $('#info_form').validate(
	      {
	        rules:
	        {
	          last_name: {
	            		required: true,
	            		minlength: 2
	            	},
	            email: {
	                    required: true,
	                    email: true
	                },
	            first_name: {
	            		required: true,
	            		minlength: 2
	            	}
	        },
	        messages:
	        {
	          last_name: {
		            		required: "Please enter nom",
		            		minlength: "Nom minimum 2 characters"
		            	},
		            email: {
		                    required: "Please enter email",
		                    email: "Please enter a valid email address.",
		                },
		            first_name: {
		                    required: "Please enter prenom",
		                    minlength: "Prenom minimum 2 characters.",
		                }
	        },
	        errorPlacement: function(error, element) 
	        {
	            if ( element.is(":radio") ) 
	            {
	                error.appendTo( element.parents('.containerp') );
	            }
	            else 
	            { // This is the default behavior 
	                error.insertAfter( element );
	            }
	        }
	    });
	});


	var error = document.getElementById('notification');
    if(error != null) {
        //err = document.getElementById('error').innerText;
        var err = $('#notification').text();
        //cut space

        err = err.replace(/\s+/g, '');
        
        if(err == 'error'){
        	$('#email_error').modal('show');
        }
    }
});


