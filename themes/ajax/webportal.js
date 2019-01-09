$(document).ready(function() {


	$('#applicant-register-form').submit(function(e){
		 e.preventDefault();

        $("#applicant-register-btn").prop("disabled", true);
        $("#applicant-register-btn").text("Loading...");
        var newURL = $(this).attr('action');
        var newData  = {
                'FirstName' : $('input[name=firstname]').val(),
                'LastName' : $('input[name=lastname]').val(),
                'EmailAddress' : $('input[name=email]').val(),
                'Password' : $('input[name=password]').val(),
                'Password2' : $('input[name=password2]').val(),
            }
          $.ajax({
              url: newURL,
              type:'POST',
              dataType: "json",
              data: newData,
              success: function(data) {
                console.log(data);
                if($.isEmptyObject(data.error)){

                     $.toast({
                      heading: 'Success!',
                      text: 'Record Updated',
                      position: 'top-right',
                      loaderBg:'#ff6849',
                      icon: 'success',
                      hideAfter: 3500, 
                      stack: 6
                    });

                    window.setTimeout(function(){
                      window.location.href = $('#maincontent').data('adminpage');  
                    }, 1000);
                  }
                  else{
                    $.toast({
                      heading: 'Error',
                      text: data.error,
                      position: 'top-right',
                      loaderBg:'#ff6849',
                      icon: 'error',
                      hideAfter: 3500
                      
                    });

                  }
                $("#applicant-register-btn").prop("disabled", false);
                $("#applicant-register-btn").text("SIGN UP");                

              }
              
          }); 	
	});




  $('#login-form').submit(function(e){ //Input the form's ID or CLASS, use # for ID and . for CLASS
     e.preventDefault();       //This prevents the action to move to other page.
        $("#login-btn").prop("disabled", true);
        $("#login-btn").text("Loading...");
          //Disables the submit button after click 
        var newURL = $(this).attr('action');      //Get the form action attribute value.
        var newData  = {
                'Email' : $('input[name=email]').val(),     //List of data you want to post
                'Password' : $('input[name=password]').val(),
            }
          $.ajax({
              url: newURL,
              type:'POST',
              dataType: "json",       //Datatype shows what kind of data you are posting, in this case, purely text and no file.
              data: newData,
              success: function(data) {
                console.log(data);            //This is for testing only, it will show the result in browser console. Please remove it when deploying
                if($.isEmptyObject(data.error)){      //Checking if the data.error has value
                    new PNotify({                      //This is to activate the PNotify API when the post has succeed
                            title: 'Success!',
                            text: 'Login Successful',
                            icon: 'icofont icofont-info-circle',
                            type: 'success'
                        });
                    window.setTimeout(function(){
                      window.location.href = $('#maincontent').data('adminpage');  
                    }, 1000);


                  }
                  else{
                       new PNotify({  //This is to activate the PNotify API when the post has failed
                            title: 'Error!',
                            text: 'data.error',
                            icon: 'icofont icofont-info-circle',
                            type: 'error'
                                  
                        });
                  }
                $("#login-btn").prop("disabled", false);     //Reenable the submit button after the action  
                $("#login-btn").text("Login");         
              }
          });   
  });


});



