$(document).ready(function() {
	$(function(){
	    $('#question_form').validate(
	      {
	        rules:
	        {
	          question:{ required:true }
	        },
	        messages:
	        {
	          question:
	          {
	            required:"Please select a answers<br/>"
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
        
        if(err == 'success') {
            $('#success').modal('show');
        }
    }
	
});
