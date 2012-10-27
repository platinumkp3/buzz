// JavaScript Document


$(document).ready(function() {
   $('#photos').hide("");	
   $('#blogs').hide("");	
   $('#info').hide("");	
   $('#qanda').hide("");	
   $('#infoeditdis').hide("");
  /* $('#content_post').hide("");
   $("#content_post").css("display","none");*/
   $("#photos").css("display","none");;
   $("#blogs").css("display","none");
   $("#info").css("display","none");
   $("#qanda").css("display","none");
   $('#infoeditdis').css("display","none");
   $('#popup-wrapper').css("display","none");	
   
 });
 
function fnchangediv(stringval) 
{
	if (stringval == "info")
	{
	   $('#infoedit').css("display","block");
	   $('#infoeditdis').css("display","none");
	   $("#infoedit").load("view_profile.php");
	}
   $('#photos').hide("");	
   $('#blogs').hide("");	
   $('#info').hide("");	
   $('#qanda').hide("");	
   $('#content_post').hide("");
   $("#content_post").css("display","none");
   $("#photos").css("display","none");
   $("#blogs").css("display","none");
   $("#info").css("display","none"); 
   $("#qanda").css("display","none");
      
   $('#'+stringval).css("display","block");
   
	
}
var xmlhttp = new getXMLObject();	//xmlhttp holds the ajax object
function fninfoenable()
{

  $('#popup-wrapper').css("display","none");	
  $('#infoedit').css("display","none");
  $('#infoeditdis').css("display","block");
  $("#infoeditdis").load("edit_profile.php");
} 

function fninfodisable()
{
  $('#popup-wrapper').css("display","none");	
  $('#infoedit').css("display","block");
  $('#infoeditdis').css("display","none");
  $("#infoedit").load("view_profile.php");
}

//code to update profile data
 
function getXMLObject()  //XML OBJECT
{
   var xmlHttp = false;
   try {
     xmlHttp = new ActiveXObject("Msxml2.XMLHTTP")  // For Old Microsoft Browsers
   }
   catch (e) {
     try {
       xmlHttp = new ActiveXObject("Microsoft.XMLHTTP")  // For Microsoft IE 6.0+
     }
     catch (e2) {
       xmlHttp = false   // No Browser accepts the XMLHTTP Object then false
     }
   }
   if (!xmlHttp && typeof XMLHttpRequest != 'undefined') {
     xmlHttp = new XMLHttpRequest();        //For Mozilla, Opera Browsers
   }
   return xmlHttp;  // Mandatory Statement returning the ajax object created
}

function handleServerResponse() {
	
   if (xmlhttp.readyState == 4) {
     if(xmlhttp.status == 200) {		 	
     var result_txt =xmlhttp.responseText; //Update the HTML Form element 
		 if (result_txt == "Success")
		 {
			alert (result_txt);
			//document.getElementById("txtpost").value='';
				
		 }
     }
     else {
        alert("Error during AJAX call. Please try again");
     }
   }
}

//end of code to update profile data


function startUpload(){
      document.getElementById('f1_upload_process').style.visibility = 'visible';
      document.getElementById('f1_upload_form').style.visibility = 'hidden';
      return true;
	}
	
	function stopUpload(success){
      var result = '';
      if (success == 1){
         result = '<span class="msg">The file was uploaded successfully!<\/span><br/><br/>';
      }
      else {
         result = '<span class="emsg">There was an error during file upload!<\/span><br/><br/>';
      }
      document.getElementById('f1_upload_process').style.visibility = 'hidden';
      document.getElementById('f1_upload_form').innerHTML = result + '<label>File: <input name="myfile" type="file" size="30" /><\/label><label><input type="submit" name="submitBtn" class="sbtn" value="Upload" /><\/label>';
      document.getElementById('f1_upload_form').style.visibility = 'visible';      
      return true;   
}



function enable_pop_up_div()
{	
	$('#popup-wrapper').css("display","block");
	$('#popup-wrapper').modalPopLite({ openButton: '#clicker', closeButton: '#close-btn', isModal: true });
}