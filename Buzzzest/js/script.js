// 
//	jQuery Validate example script
//
//	Prepared by David Cochran
//	
//	Free for your use -- No warranties, no guarantees!
//

$(document).ready(function(){

	jQuery.validator.addMethod(
        'ContainsAtLeastOneDigit',
        function (value) { 
            return /[0-9]/.test(value); 
        },  
        'Your password must contain at least one digit.'
    );  
 
    jQuery.validator.addMethod(
        'ContainsAtLeastOneCapitalLetter',
        function (value) { 
            return /[A-Z]/.test(value); 
        },  
        'Your password must contain at least one capital letter.'
    );
	
	// Validate
	// http://bassistance.de/jquery-plugins/jquery-plugin-validation/
	// http://docs.jquery.com/Plugins/Validation/
	// http://docs.jquery.com/Plugins/Validation/validate#toptions
	
		$('#contact-form').validate({
	    rules: {			
			
			account:{			
			 required: true
			},
			
			fullname:{
			 minlength: 4,
			 required: true
			},
			
			username:{
			 minlength: 4,
			 required: true
			},
			
			email: {
	         required: true,
	         email: true
	      },
		  
			password:{
				required: true,
				ContainsAtLeastOneDigit: true,
                ContainsAtLeastOneCapitalLetter: true               
			
			},
			
	      gender: {
	       required: true
	      },
	     
	      bird: {	      	
	        required: true
	      },
		  birm: {	      	
	        required: true
	      },
		  biry: {	      	
	        required: true
	      },
		  place: {	      	
	        required: true
	      },
		   interests: {	      	
	        required: true
	      },
		   occupation: {	      	
	        required: true
	      },
		  
		  industry: {	      	
	        required: true
	      },
	      bio: {
	        minlength: 2,
	        required: true
	      },
		  url:{
			required:true
		},
		  
		    terms:
		  {
			
	        required: true 
		  }
	    },
	    highlight: function(label) {
	    	$(label).closest('.control-group').addClass('error');
	    },
	    success: function(label) {
	    	label
	    		.text('OK!').addClass('valid')
	    		.closest('.control-group').addClass('success');
	    }
	  });
	  
}); // end document.ready