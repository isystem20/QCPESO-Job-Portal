$(document).ready(function() {


	$('#add-btn').click(function(e){ //Input the form's ID or CLASS, use # for ID and . for CLASS
		$('#add-modal').modal();
	});


	$('#add-form').submit(function(e){ //Input the form's ID or CLASS, use # for ID and . for CLASS
		e.preventDefault();       //This prevents the action to move to other page.
        $("#add-submit").prop("disabled", true);   //Disables the submit button after click 
        var newURL = $(this).attr('action');      //Get the form action attribute value.
        var newData  = {
                'name' : $('input[name=name]').val(),     //List of data you want to post
                'description' : $('textarea[name=description]').val(),
                'status' : $('select[name=status]').val(),
            }
          $.ajax({
              url: newURL,
              type:'POST',
              dataType: "json",       //Datatype shows what kind of data you are posting, in this case, purely text and no file.
              data: newData,
              success: function(data) {
                console.log(data);            //This is for testing only, it will show the result in browser console. Please remove it when deploying
                if($.isEmptyObject(data.error)){      //Checking if the data.error has value
			           


			           $.toast({
			            heading: 'Success!',
			            text: 'Record Updated',
			            position: 'top-right',
			            loaderBg:'#ff6849',
			            icon: 'success',
			            hideAfter: 3500, 
			            stack: 6
			          });

                var name = data[0].name;
                var desc = data[0].description.substr(0, 40);
                var modifieddate = $.datepicker.formatDate('yy-dd-mm', new Date(data[0].modifiedAt));  
                if (data[0].isActive == '1') {
                  var status = '<span class="label label-success">Active</span>';
                }
                else {
                  var status = '<span class="label label-default">Inactive</span>';
                }
                var btns = '<button data-id="'+data[0].Id+'" class="btn btn-success btn-xs open-generic-item-btn" data-action="'+controller+'/read"><i class="fa fa-info-circle"></i></button>'+
                '           <button data-id="'+data[0].Id+'" class="btn btn-primary btn-xs edit-generic-item-btn" data-action="'+controller+'/edit"><i class="fa fa-pencil"></i></button>'+
                '           <button data-id="'+data[0].Id+'" class="btn btn-danger btn-xs delete-generic-item-btn" data-action="'+controller+'/delete"><i class="fa fa-trash-o "></i></button>';                 

                var t = $('#dynamic-table').DataTable();
                var trDOM = t.row.add( [
                  code,
                  name,
                  desc,
                  modifieddate,
                  status,
                  btns,
                ] ).draw().node();
                $( trDOM ).attr('id','row'+data[0].Id);
                $( trDOM ).find("td").eq(4).attr('data-active',data[0].Active);
                $('#add-generic-item-modal').modal('hide');



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
                $("#add-submit").prop("disabled", false);     //Reenable the submit button after the action           
              }
          }); 	
	});



// ADMIN / OFFICE LOGIN
  $('#loginform').submit(function(e){ //Input the form's ID or CLASS, use # for ID and . for CLASS
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
                if($.isEmptyObject(data.error)){ 
                     //Checking if the data.error has value
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
                      window.location.href = data.url;  
                    }, 1000);


                  }
                  else{

                     $.toast({
                      heading: 'Success!',
                      text: 'Login Failed',
                      position: 'top-right',
                      loaderBg:'#ff6849',
                      icon: 'success',
                      hideAfter: 3500, 
                      stack: 6
                    });

                  }
                $("#login-btn").prop("disabled", false);     //Reenable the submit button after the action           
              }
          });   
  });









});