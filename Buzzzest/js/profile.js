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
   $('#content_userpost').load('user_profile_post.php');
   
 });
 
function fnchangediv(stringval) 
{
	if (stringval == "info")
	{
	   $('#infoedit').css("display","block");
	   $('#infoeditdis').css("display","none");
	   $("#infoedit").load("view_profile.php");
	}
	if (stringval == "photos")
	{
		$('#gallery').load('gallery.php');
	}
	if (stringval == "content_post")
	{
		$('#content_userpost').load('user_profile_post.php');
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

//popup image upload
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

function enable_pop_up_divimage()
{	
	$('#popup-wrapper').css("display","block");
	$('#popup-wrapper').modalPopLite({ openButton: '#clickerimage', closeButton: '#close-btnimage', isModal: true });
}

function fnprof_refresh()
{
	$('#infoeditdis').load("edit_profile.php");
}

function fnuploadimage()
{
	if ($('#userphotos').val() == "")
	{
		alert ("Plz choose a file");
	}
	else 
	{		
	  var val1=$(field1).val();
	  var datastring="id="+id_val;
	  $.ajax({
	  type:"POST",
	  beforeSend: function(xhr) {xhr.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'))},
	  url:path,
	  data:datastring,
	  success:function(result){
	  },
	  error: function(data){
	  }
	  });
  }
}


function fnUpdatePost()
{
	var post_value=jQuery.trim($('#txtuserpost').val());
	if (post_value != "" || post_value.match(/(\w+\s)*\w+[.?!]/) )
	{
		url='saveuser_post.php';
		data=new Object();
		data['txtuserpost']=$('#txtuserpost').val();
		$.ajax({
		  type: 'POST', // type of request either Get or Post
		  url: url, // Url of the page where to post data and receive response 
		  data: data, // data to be post
		  success: function(data){ 
			 alert (data);
		 	 $('#content_userpost').load('user_profile_post.php');	
		  } //function to be called on successful reply from server
		});
	}
}


//end of popup image upload
