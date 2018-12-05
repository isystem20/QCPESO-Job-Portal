$(document).ready(function() {


	$('#add-btn').click(function(e){ //Input the form's ID or CLASS, use # for ID and . for CLASS
    $('#header-text').text('Add Entry');
    $('input[name=name]').val('');  
    $('textarea[name=description]').val('');
    $('select[name=status]').val('1');  
    $('#add-form').attr('action',$('#myTable').data('action')+'add');
    $('input[name=itemid]').val('');  
    $('.viewing').hide();
    $('form input.form-control').prop('readonly',false);
    $('form textarea.form-control').prop('readonly',false);
    $('form select.form-control').prop('readonly',false);


    $('.modal-footer').show();
		$('#add-modal').modal();
	});


	$('#add-form').submit(function(e){ //Input the form's ID or CLASS, use # for ID and . for CLASS
		e.preventDefault();       //This prevents the action to move to other page.
        $("#add-submit").prop("disabled", true);   //Disables the submit button after click 
        var newURL = $(this).attr('action');      //Get the form action attribute value.
        var newData  = {
                'itemid' : $('input[name=itemid]').val(),
                'name' : $('input[name=name]').val(),     //List of data you want to post
                'description' : $('textarea[name=description]').val(),
                'status' : $('select[name=status]').val(),
            }
          console.log(newData);  
          $.ajax({
              url: newURL,
              type:'POST',
              dataType: "json",       //Datatype shows what kind of data you are posting, in this case, purely text and no file.
              data: newData,
              success: function(data) {
                console.log(data);            //This is for testing only, it will show the result in browser console. Please remove it when deploying
                if($.isEmptyObject(data.error)){      //Checking if the data.error has value
                    $('#add-modal').modal('hide');

                     $.toast({
                      heading: 'Success!',
                      text: 'Record Updated',
                      position: 'top-right',
                      loaderBg:'#ff6849',
                      icon: 'success',
                      hideAfter: 3500, 
                      stack: 6
                    });


                  if ($('input[name=itemid]').val() != '') {

                      var Id = data[0].Id;
                      var table = $('#myTable').DataTable();
                      table.row($('#row'+data[0].Id))
                      .remove()
                      .draw();

                  }



                    var id = data[0].Id;
                    var name = data[0].Name;
                    var desc = data[0].Description.substr(0,30);
                    var modby = data[0].ModifiedById;
                    // var modat = $.datepicker.formatDate('yy-dd-mm', new Date(data[0].modifiedAt));
                    var modat = data[0].ModifiedAt;

                    if (data[0].IsActive == '1') {
                      var status = '<label class="label label-success">Active</label>';
                    }else {
                      var status = '<span class="label label-light-inverse">Inactive</span>';
                    }

                    var actions = '<button class="read-item-btn btn btn-info waves-effect waves-light btn-sm " data-toggle="tooltip" data-placement="top" title="" data-original-title="View" type="button" data-action="'+$('#myTable').data('action')+'" data-id="'+id+'" data-name="'+name+'" data-desc="'+data[0].Description+'" data-createdby="'+data[0].CreatedById+'" data-createdat="'+data[0].CreatedAt+'" data-modifiedby="'+data[0].ModifiedById+'" data-modifiedat="'+data[0].ModifiedAt+'" data-version="'+data[0].VersionNo+'" data-status="'+data[0].IsActive+'"> <i class="fas fa-info-circle"></i> </button>'+
                                  '<button class="edit-item-btn btn btn-success waves-effect waves-light btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit"type="button" data-action="'+$('#myTable').data('action')+'" data-id="'+id+'" data-name="'+name+'" data-desc="'+desc+'" data-status="'+data[0].IsActive+'"> <i class="far fa-edit" ></i> </button>'+
                                  '<button class="del-item-btn btn btn-danger waves-effect waves-light btn-sm" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" type="button" data-action="'+$('#myTable').data('action')+'" data-id="'+id+'" data-name="'+name+'"> <i class="fas fa-trash-alt"></i></button>';

                    var table = $('#myTable').DataTable();
                    var row = table.row.add( [
                      name,desc,modby,modat,status,actions,
                      ]).draw().node();
                    $( row ).attr('id','row'+data[0].Id);

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
                $('input[name=name]').val('');  
                $('textarea[name=description]').val('');
                $('select[name=status]').val('1');      
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
                      heading: 'Failed!',
                      text: 'Login Failed',
                      position: 'top-right',
                      loaderBg:'#ff6849',
                      icon: 'error',
                      hideAfter: 3500, 
                      stack: 6
                    });

                  }
                $("#login-btn").prop("disabled", false);     //Reenable the submit button after the action           
              }
          });   
  });

//DELETE BUTTON IN ITEMS
  $('#myTable').delegate(".del-item-btn", "click", function() {
    $('input[name=id]').val($(this).data('id'));
    $('input[name=exname]').val($(this).data('name'));
    $('#del-form').attr('action',$('#myTable').data('action')+'del');
    $('#del-modal').modal();
  });

// DELETE FORM
  $('#del-form').submit(function(e){ //Input the form's ID or CLASS, use # for ID and . for CLASS
    e.preventDefault();       //This prevents the action to move to other page.
        $("#del-submit").prop("disabled", true);   //Disables the submit button after click 
        var newURL = $(this).attr('action');      //Get the form action attribute value.
        var newData  = {
                'id' : $('input[name=id]').val(),     //List of data you want to post
                'name' : $('input[name=exname]').val(),
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
                      text: 'Record Updated',
                      position: 'top-right',
                      loaderBg:'#ff6849',
                      icon: 'success',
                      hideAfter: 3500, 
                      stack: 6
                    });

                  var Id = data.id;
                  var table = $('#myTable').DataTable();
                  table.row($('#row'+data.id))
                  .remove()
                  .draw();

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
                $("#del-submit").prop("disabled", false);     //Reenable the submit button after the action           
              }
          });   
  });

//EDIT BUTTON IN ITEMS
  $('#myTable').delegate(".edit-item-btn", "click", function() {
    $('#header-text').text('Edit Entry');
    $('input[name=itemid]').val($(this).data('id'));
    $('input[name=name]').val($(this).data('name')); 
    $('textarea[name=description]').val($(this).data('desc')); 
    $('select[name=status]').val($(this).data('status'));     
    $('#add-form').attr('action',$('#myTable').data('action')+'edit');
    $('.viewing').hide();
    $('form input.form-control').prop('readonly',false);
    $('form textarea.form-control').prop('readonly',false);
    $('form select.form-control').prop('readonly',false);
    $('.modal-footer').show();
    $('#add-modal').modal();
  });

//VIEW BUTTON IN ITEMS
  $('#myTable').delegate(".read-item-btn", "click", function() {

    $('#header-text').text($(this).data('name'));
    $('input[name=name]').val($(this).data('name')); 
    $('textarea[name=description]').val($(this).data('desc')); 
    $('input[name=created]').val($(this).data('createdby')+' ('+ $(this).data('createdat') +')'); 
    $('input[name=modified]').val($(this).data('modifiedby')+' ('+ $(this).data('modifiedat') +')');     
    $('select[name=status]').val($(this).data('status'));    
    $('input[name=version]').val($(this).data('version')); 

    $('form input.form-control').prop('readonly',true);
    $('form textarea.form-control').prop('readonly',true);
    $('form select.form-control').prop('readonly',true);

    $('#add-form').attr('action','');
    $('.viewing').show();
    $('.modal-footer').hide();
    $('#add-modal').modal();
    // alert('Hi Im view');
  });


$('#webpostform').submit(function(e){ //Input the form's ID or CLASS, use # for ID and . for CLASS
    e.preventDefault();       //This prevents the action to move to other page.
        $("#sub-btn").prop("disabled", true);   //Disables the submit button after click 
        var newURL = $(this).attr('action');   
         var newData = new FormData(this);   //Get the form action attribute value.
        // var newData  = {
        //         'Id' : $('input[name=id]').val(), //List of data you want to post
        //         'PostTitle' : $('input[name=title]').val(),
        //         'PostDescription' : $('input[name=description]').val(),
        //         'PostTypeId' : $('select[name=type]').val(),
        //         'Tags' : $('input[name=tags]').val(),
        //         'IsActive' : $('select[name=status]').val(),
        //         'PostContent' : $('textarea[name=textarea]').val(),
        //         'WebImage' : $('input[name=file]').val(),
        //     }
            console.log(newData);
          $.ajax({
              url: newURL,
              type:'POST',
              dataType: "json",       //Datatype shows what kind of data you are posting, in this case, purely text and no file.
              data: newData,
              contentType: false,
              cache: false,  
              processData:false,  
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
                     if($.isEmptyObject(data.url)) {
                  
                      

                  }

                  else {
                    window.setTimeout(function(){
                      window.location.href = data.url;  
                    }, 1000);
                  }
        
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
                $("#sub-btn").prop("disabled", false);     //Reenable the submit button after the action           
              }
          });   
  });




  $('#applicant-info-form').submit(function(e){ //Input the form's ID or CLASS, use # for ID and . for CLASS
    e.preventDefault();       //This prevents the action to move to other page.
        $("#add-submit").prop("disabled", true);   //Disables the submit button after click 
        var newURL = $(this).attr('action');      //Get the form action attribute value.
        var newData  = {
                'itemid' : $('input[name=itemid]').val(),
                'name' : $('input[name=name]').val(),     //List of data you want to post
                'description' : $('textarea[name=description]').val(),
                'status' : $('select[name=status]').val(),
            }
          console.log(newData);  
          $.ajax({
              url: newURL,
              type:'POST',
              dataType: "json",       //Datatype shows what kind of data you are posting, in this case, purely text and no file.
              data: newData,
              success: function(data) {
                console.log(data);            //This is for testing only, it will show the result in browser console. Please remove it when deploying
                if($.isEmptyObject(data.error)){      //Checking if the data.error has value
                    $('#add-modal').modal('hide');

                     $.toast({
                      heading: 'Success!',
                      text: 'Record Updated',
                      position: 'top-right',
                      loaderBg:'#ff6849',
                      icon: 'success',
                      hideAfter: 3500, 
                      stack: 6
                    });

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
                $('input[name=name]').val('');  
                $('textarea[name=description]').val('');
                $('select[name=status]').val('1');      
              }
          });   
  });

$('#servicesform').submit(function(e){ //Input the form's ID or CLASS, use # for ID and . for CLASS
    e.preventDefault();       //This prevents the action to move to other page.
        $("#sub-btn").prop("disabled", true);   //Disables the submit button after click 
        var newURL = $(this).attr('action');   
         var newData = new FormData(this);   //Get the form action attribute value.
        // var newData  = {
        //         'Id' : $('input[name=id]').val(), //List of data you want to post
        //         'PostTitle' : $('input[name=title]').val(),
        //         'PostDescription' : $('input[name=description]').val(),
        //         'PostTypeId' : $('select[name=type]').val(),
        //         'Tags' : $('input[name=tags]').val(),
        //         'IsActive' : $('select[name=status]').val(),
        //         'PostContent' : $('textarea[name=textarea]').val(),
        //         'WebImage' : $('input[name=file]').val(),
        //     }
            console.log(newData);
          $.ajax({
              url: newURL,
              type:'POST',
              dataType: "json",       //Datatype shows what kind of data you are posting, in this case, purely text and no file.
              data: newData,
              contentType: false,
              cache: false,  
              processData:false,  
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
                     if($.isEmptyObject(data.url)) {
                  
                      

                  }

                  else {
                    window.setTimeout(function(){
                      window.location.href = data.url;  
                    }, 1000);
                  }
        
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
                $("#sub-btn").prop("disabled", false);     //Reenable the submit button after the action           
              }
          });   
  });


});


// add jobpost :)


// alert('tang ina gumana ka');
        // $("#save-jobpost").prop("disabled", true);   
        //  var fld = $('select[name=speci]');
        // var values = [];
        //   for (var i = 0; i < fld.options.length; i++) {
        //     if (fld.options[i].selected) {
        //       values.push(fld.options[i].value);
        //     }
        //   }
                // 'Specialization' : $('select[name=speci]').val(),
$('#jobpost-form').submit(function(e){
        e.preventDefault();
        $("#add-jobposts").prop("disabled", true); 

        var newURL = $(this).attr('action');  
        var me = $(this);
        var newData  = {
                'Id' : $('input[name=id]').val(), //List of data you want to post
                'EstablishmentId' : $('select[name=estab]').val(),
                'JobTitle' : $('input[name=jtitle]').val(),
                'EmpTypeId' : $('select[name=emptype]').val(),
                'PositionLevelId' : $('select[name=postlevel]').val(),
                'Specialization' : $('select[name=speci]').val(),
                'Category' : $('select[name=cate]').val(),
                
                'JobDescription' : $('textarea[name=jobdesc]').val(),
                'Salary' : $('input[name=salary]').val(),
                'JobImage' : $('input[name=jobimg]').val(),
                
                'IsActive' : $('select[name=stat]').val(),
            }
        console.log(newData);  
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
                      window.setTimeout(function(){
                      window.location.href = data.url;  
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
                $("#add-jobposts").prop("disabled", false);     //Reenable the submit button after the action           
              }
          }); 


       
 // $("#save-jobpost").prop("disabled", false);   

    });

//employer
$('#empform').submit(function(e){
        e.preventDefault();
        $("#sub-btn-emp").prop("disabled", true); 

        var newURL = $(this).attr('action');  
        var me = $(this);
        var newData  = {
                'Id' : $('input[name=id]').val(), //List of data you want to post
                'CompanyName' : $('input[name=CompanyName]').val(),
                'CompanyNameAcronym' : $('input[name=CompanyNameAcronym]').val(),
                'IsActive' : $('select[name=IsActive]').val(),
                'TIN' : $('input[name=TIN]').val(),
                'PermitIssuedDate' : $('input[name=PermitIssuedDate]').val(),
                'EstablismentType' : $('select[name=EstablismentType]').val(),
                'IndustryType' : $('select[name=IndustryType]').val(),
                'CompanyAddress' : $('input[name=CompanyAddress]').val(),
                'LandlineNum' : $('input[name=LandlineNum]').val(),
                'FaxNum' : $('input[name=FaxNum]').val(),
                'CompanyEmail' : $('input[name=CompanyEmail]').val(),
                'Website' : $('input[name=Website]').val(),
                'OwnerName' : $('input[name=OwnerName]').val(),
                'Designation' : $('input[name=Designation]').val(),
                'ContactPerson' : $('input[name=ContactPerson]').val(),
                'ContactPersonDesignation' : $('input[name=ContactPersonDesignation]').val(),
                'ContactPersonLandline' : $('input[name=ContactPersonLandline]').val(),
                'ContactPersonMobile' : $('input[name=ContactPersonMobile]').val(),
                'DoleRegistration' : $('input[name=DoleRegistration]').val(),
                'DoleRegistrationDateIssued' : $('input[name=DoleRegistrationDateIssued]').val(),
                'DoleRegistrationExpiration' : $('input[name=DoleRegistrationExpiration]').val(),
                'PoeaLicenseDateIssued' : $('input[name=PoeaLicenseDateIssued]').val(),
                'PoeaLicenseExpiration' : $('input[name=PoeaLicenseExpiration]').val(),
                'WorkingHours' : $('input[name=WorkingHours]').val(),
                'Benefits' : $('input[name=Benefits]').val(),
                'DressCode' : $('input[name=DressCode]').val(),
                'SpokenLanguage' : $('input[name=SpokenLanguage]').val(),
            }
        console.log(newData);  
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
                      window.setTimeout(function(){
                      window.location.href = data.url;  
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
                $("#sub-btn-emp").prop("disabled", false);     //Reenable the submit button after the action           
              }
          }); 


       
 // $("#save-jobpost").prop("disabled", false);   

    });


