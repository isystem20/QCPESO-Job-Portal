
<!-- ONe Signal -->

<link rel="manifest" href="<?=base_url();?>manifest.json" />
<script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
  var OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: "6a3fac48-55eb-4236-ac2c-31085678326c",
    });
  });
</script>
</head>



<!-- Pusher API -->


<script src="https://js.pusher.com/4.3/pusher.min.js"></script>
<script>
try {

        Pusher.logToConsole = true;

        var pusher = new Pusher('b40201798c4cfcffea24', {
          cluster: 'ap1',
          forceTLS: true
        });

        var channel = pusher.subscribe('my-channel');
        channel.bind('my-event', function(data) {
         $.toast({
          heading: 'Notification:',
          text:data.message,
          position: 'top-right',
          loaderBg:'#ff6849',
          icon: 'info',
          hideAfter: 3500, 
          stack: 6
        }); 
          // alert(JSON.stringify(data));
        });

}
catch(err) {
  console.log(err);
}
</script>


<!-- Pusher End -->



<?php
  if (!empty($websetting) && !empty($websetting['ENABLE_FACEBOOK_AUTH'])) {
    if ($websetting['ENABLE_FACEBOOK_AUTH'] == 'YES') { ?>

    <!-- Facebook API End -->

    <script type="text/javascript">
        try {

          window.fbAsyncInit = function() {
            FB.init({
              appId      : '270870246920037',
              cookie     : true,
              xfbml      : true,
              version    : 'v3.2'
            });
              
            FB.getLoginStatus(function(response) {
                if (response.status === 'connected') {
                  if ($('#logoutbtn').length > 0) {
                      document.getElementById('logoutbtn').href = 'javascript:goLogoutfb();';            
                  }

                }
                console.log(response);
                // statusChangeCallback(response);
            });

          };
        }
        catch(err) {
          console.log(err);
        }

        try {
          (function(d, s, id){
             var js, fjs = d.getElementsByTagName(s)[0];
             if (d.getElementById(id)) {return;}
             js = d.createElement(s); js.id = id;
             js.src = "https://connect.facebook.net/en_US/sdk.js";
             fjs.parentNode.insertBefore(js, fjs);
           }(document, 'script', 'facebook-jssdk'));


        }
        catch(err) {
          console.log(err);
        }
      function checkLoginState() {
        try {

            FB.getLoginStatus(function(response) {
              statusChangeCallback(response);
            });

        }
        catch(err) {
          console.log(err);
        }
      }

      function goLogoutfb() {
        try {

            FB.getLoginStatus(function(response) {
              if (response.status === 'connected') {
                FB.logout(function(response) {
                  window.location.href = 'https://qcpeso.com/logout';  
                });
                       
              }
            });
        }
        catch(err) {
          console.log(err);
        }
      }


      function statusChangeCallback(response) {
        //if (response.status === 'connected') {}
        FB.api('/me?fields=first_name,last_name,middle_name,email,picture.width(720).height(720)', function(response){
            if (response && !response.error) {
                console.log(response);  

                  var newURL = $('#loginform').attr('action'); 
                  var newData  = {
                        'Email' : response.email,  
                        'External_Id' : response.id,
                        'Mode' : 'Facebook',
                        'LastName' : response.last_name,
                        'FirstName' : response.first_name,
                        'PhotoPath' : response.picture.data.url,
                      }
                    $.ajax({
                        url: newURL,
                        type:'POST',
                        dataType: "json",    
                        data: newData,
                        success: function(data) {
                          console.log(data);           
                          if($.isEmptyObject(data.error)){     
                              $('#del-modal').modal('hide');
                                 $.toast({
                                  heading: 'Success!',
                                  text: 'Login Successful',
                                  position: 'top-right',
                                  loaderBg:'#ff6849',
                                  icon: 'success',
                                  hideAfter: 3500, 
                                  stack: 6
                                });
                                 console.log('Logged in');
                                  window.setTimeout(function(){
                                    window.location.href = $('#wrapper').data('adminpage');  
                                  }, 1000);
                            }
                            else{
                                $.toast({
                                  heading: 'Error!',
                                  text: data.error,
                                  position: 'top-right',
                                  loaderBg:'#ff6849',
                                  icon: 'danger',
                                  hideAfter: 3500, 
                                  stack: 6
                                });
                                 console.log('Not Logged in');
                            }
                        }
                    });

            }
        })
        
      }

    </script>

    <!-- Facebook API End -->

<?php
      }
  }
?>






<?php
if (!empty($websetting) && !empty($websetting['ENABLE_GOOGLE_AUTH'])) {
    if ($websetting['ENABLE_GOOGLE_AUTH'] == 'YES') { ?>


    <!-- Google API -->
    <script type="text/javascript">
        
      function onSignIn(googleUser) {

          var profile = googleUser.getBasicProfile();

          var id_token = googleUser.getAuthResponse().id_token;
          var xhr = new XMLHttpRequest();
          xhr.open('POST', 'https://qcpeso.com/manage/');
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

                                   $.toast({
                                    heading: 'Success!',
                                    text: 'Login Successful',
                                    position: 'top-right',
                                    loaderBg:'#ff6849',
                                    icon: 'success',
                                    hideAfter: 3500, 
                                    stack: 6
                                  });

                                    window.setTimeout(function(){
                                      window.location.href = $('#wrapper').data('adminpage');  
                                    }, 1000);

                              }
                              else{

                                  $.toast({
                                    heading: 'Error!',
                                    text: data.error,
                                    position: 'top-right',
                                    loaderBg:'#ff6849',
                                    icon: 'danger',
                                    hideAfter: 3500, 
                                    stack: 6
                                  });


                              }
               
                          }
                      });
            }

        };



      function signOut() {
          var auth2 = gapi.auth2.getAuthInstance();
          auth2.signOut().then(function () {
            document.location.href = "https://www.google.com/accounts/Logout?continue=https://appengine.google.com/_ah/logout?continue=https://qcpeso.com/logout";
          });
      }



      function goLogoutGoogle() {
            try {
            var auth2 = gapi.auth2.getAuthInstance();
            auth2.signOut().then(function () {
              document.location.href = "https://www.google.com/accounts/Logout?continue=https://appengine.google.com/_ah/logout?continue=https://qcpeso.com/logout";
            });
            }
            catch(err) {
              console.log(err);
            }
      }

    </script>

    <!-- Google API End -->


<?php
    }
}
?>
