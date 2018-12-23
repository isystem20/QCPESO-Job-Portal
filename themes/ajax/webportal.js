$(document).ready(function() {


	$('#applicant-register-form').submit(function(e){
		 e.preventDefault();

        $("#applicant-register-btn").prop("disabled", true);

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
              }
          });   
  });


});




function onSignIn(googleUser) {

    var profile = googleUser.getBasicProfile();

    var id_token = googleUser.getAuthResponse().id_token;
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'http://qcpeso.com/manage/');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    // xhr.onload = function() {
    //   console.log('Signed in as: ' + xhr.responseText);
    // };
    // xhr.send('idtoken=' + id_token);
    xhr.send('idtoken=' + id_token + '&userid=' + profile.getId() + '&fullname: ' + profile.getName() + '&firstname: ' + profile.getGivenName() + '&lastname: ' + profile.getFamilyName() + "&image: " + profile.getImageUrl() + "&email: " + profile.getEmail());
    // console.log(profile.getImageUrl());
    if (id_token != "") {

        // console.log(profile);
        // return false;
       //This prevents the action to move to other page.
              var newURL = $('#login-form').attr('action');      //Get the form action attribute value.
              var newData  = {
                    'Email' : profile.getEmail(),     //List of data you want to post
                    'External_Id' : profile.getId(),
                    'Mode' : 'Google',
                    'LastName' : profile.getFamilyName(),
                    'FirstName' : profile.getGivenName(),
                    'PhotoPath' : profile.getImageUrl(),
                  }
                $.ajax({
                    url: newURL,
                    type:'POST',
                    dataType: "json",       //Datatype shows what kind of data you are posting, in this case, purely text and no file.
                    data: newData,
                    success: function(data) {
                      console.log(data);            //This is for testing only, it will show the result in browser console. Please remove it when deploying
                      if($.isEmptyObject(data.error)){      //Checking if the data.error has value
                          $('#del-modal').modal('hide');

                             new PNotify({  //This is to activate the PNotify API when the post has failed
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
         
                    }
                });


    }
    else {

         new PNotify({  //This is to activate the PNotify API when the post has failed
            title: 'Error!',
            text: 'Login failed',
            icon: 'icofont icofont-info-circle',
            type: 'error'
                    
          });


    }

};

function signOut() {
    var auth2 = gapi.auth2.getAuthInstance();
    auth2.signOut().then(function () {
      document.location.href = "https://www.google.com/accounts/Logout?continue=https://appengine.google.com/_ah/logout?continue=http://qcpeso.com/logout";
    });
}