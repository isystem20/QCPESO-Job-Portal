$(document).ready(function() {


	$('#applicant-register-form').submit(function(e){
		 e.preventDefault();

        $("#applicant-register-btn").prop("disabled", true);

        var newURL = $(this).attr('action');
        var newData  = {
                'firstName' : $('input[name=firstname]').val(),
                'lastName' : $('input[name=lastname]').val(),
                'emailAddress' : $('input[name=email]').val(),
                'password' : $('input[name=password]').val(),
                'password2' : $('input[name=password2]').val(),
            }
          $.ajax({
              url: newURL,
              type:'POST',
              dataType: "json",
              data: newData,
              success: function(data) {
                console.log(data);
                if($.isEmptyObject(data.error)){
					new PNotify({
			            title: 'Success!',
			            text: '',
			            icon: 'icofont icofont-info-circle',
			            type: 'success'
			        });
                  }
                  else{
					new PNotify({
			            title: 'Error!',
			            text: data.error,
			            icon: 'icofont icofont-info-circle',
			            type: 'error'
			        });

                  }
                $("#applicant-register-btn").prop("disabled", false);                   

              }
              
          }); 	
	});




  $('#login-form').submit(function(e){ //Input the form's ID or CLASS, use # for ID and . for CLASS
     e.preventDefault();       //This prevents the action to move to other page.
        $("#login-btn").prop("disabled", true);   //Disables the submit button after click 
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
                      window.location.href = data.url;  
                    }, 1000);


                  }
                  else{
                       new PNotify({             //This is to activate the PNotify API when the post has failed
                            title: 'Error!',
                            text: data.error,
                            icon: 'icofont icofont-info-circle',
                            type: 'error'
                        });
                  }
                $("#login-btn").prop("disabled", false);     //Reenable the submit button after the action           
              }
          });   
  });














});