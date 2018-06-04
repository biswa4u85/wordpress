(function( $ ) { 
    "use strict"; 
    
var retryIteration=1;

$(document).ready( function(){
	GetTimezoneFromIP(SetTimezone);
}); 

function SetTimezone(response)
{
	$("[name='Your-Time-Zone[]'] option:contains(" + response.timezone + ")").attr('selected', 'selected');
}

function GetTimezoneFromIP(callback)
{
	try {
		$.ajax({
                	url: "http://ip-api.com/json",
                	dataType: "jsonp", // <== JSON-P request
			async: true,
	                success: function(response){
				if(callback!==undefined && typeof(callback)==="function"){
					callback(response);
				}
        	        	return response.timezone;
                	}
            	});
	}
	catch(err) {
		console.log(err.message);
		if(retryIteration<2)
		{
			GetTimezoneFromIP(SetTimezone);
			retryIteration++;
		}    		
	}

	return '';
}
 
})(jQuery);