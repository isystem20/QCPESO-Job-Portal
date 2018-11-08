$(document).ready(function() { //This shows that the code inside this function will activate after the whole page has been fully loaded

	$('#element_id').submit(function(e){ //Input the form's ID or CLASS, use # for ID and . for CLASS
		 e.preventDefault();       //This prevents the action to move to other page.
        $("#submit_btn_id").prop("disabled", true);   //Disables the submit button after click 
        var newURL = $(this).attr('action');      //Get the form action attribute value.
        var newData  = {
                'firstName' : $('input[name=firstname]').val(),     //List of data you want to post
                'lastName' : $('input[name=lastname]').val(),
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
          			            text: '',
          			            icon: 'icofont icofont-info-circle',
          			            type: 'success'
          			        });
                  }
                  else{
          					   new PNotify({             //This is to activate the PNotify API when the post has failed
          			            title: 'Error!',
          			            text: data.error,
          			            icon: 'icofont icofont-info-circle',
          			            type: 'error'
          			        });
                  }
                $("#submit_btn_id").prop("disabled", false);     //Reenable the submit button after the action           
              }
          }); 	
	});






});