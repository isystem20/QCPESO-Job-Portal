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
    $('form select.form-control').prop('disabled',false);


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
    $('.modal-footer').show();
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
    $('form select.form-control').prop('disabled',false);
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
    $('form select.form-control').prop('disabled',true);

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
                 }
                  else {
                     $.toast({
                      heading: 'Error',
                      text: data.error,
                      position: 'top-right',
                      loaderBg:'#ff6849',
                      icon: 'error',
                      hideAfter: 3500
                      
                    });
                    window.setTimeout(function(){
                      window.location.href = data.url;  
                    }, 1000);
                  }  
        
                $("#sub-btn").prop("disabled", false);     //Reenable the submit button after the action           
              }
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

$('#jobpost-form').submit(function(e){ //Input the form's ID or CLASS, use # for ID and . for CLASS
    e.preventDefault();       //This prevents the action to move to other page.
        $("#add-jobposts").prop("disabled", true);   //Disables the submit button after click 
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
                $("#add-jobposts").prop("disabled", false);     //Reenable the submit button after the action           
              }
          });   
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
                'DressCode' : $('select[name=DressCode]').val(),
                'SpokenLanguage' : $('select[name=SpokenLanguage]').val(),
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
                    //   window.setTimeout(function(){
                    //    window.location.href = data.url; 
                    // }, 1000);
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

 });
$('#applicant').submit(function(e) {
    e.preventDefault();

    var CompanyName = new Array();
    $("input[name=CompanyName]").each(function() {
      if ($(this).val() == '') {
        CompanyName.push('-');
      }
      else {
       CompanyName.push($(this).val());
      }
    });
    var HeldPosition = new Array();
    $("input[name=HeldPosition]").each(function() {
      if ($(this).val() == '') {
        HeldPosition.push('-');
      }
      else {
       HeldPosition.push($(this).val());
      }
    });
    var CompanyAddress = new Array();
    $("input[name=CompanyAddress]").each(function() {
      if ($(this).val() == '') {
        CompanyAddress.push('-');
      }
      else {
       CompanyAddress.push($(this).val());
     }
    });

    var InclusiveDateFrom = new Array();
    $("input[name=InclusiveDateFrom]").each(function() {
      if ($(this).val() == '') {
        InclusiveDateFrom.push('-');
      }
      else {
       InclusiveDateFrom.push($(this).val());
     }
    });
     var InclusiveDateTo = new Array();
    $("input[name=InclusiveDateTo]").each(function() {
      if ($(this).val() == '') {
        InclusiveDateTo.push('-');
      }
      else {
       InclusiveDateTo.push($(this).val());
     }
    });
     var Name = new Array();
    $("input[name=Name]").each(function() {
      if ($(this).val() == '') {
        Name.push('-');
      }
      else {
       Name.push($(this).val());
     }
    });
     var Description = new Array();
    $("input[name=Description]").each(function() {
      if ($(this).val() == '') {
        Description.push('-');
      }
      else {
       Description.push($(this).val());
     }
    });
     var SchoolName = new Array();
    $("input[name=SchoolName]").each(function() {
      if ($(this).val() == '') {
        SchoolName.push('-');
      }
      else {
       SchoolName.push($(this).val());
     }
    });
     var ProgramCourse = new Array();
    $("input[name=ProgramCourse]").each(function() {
      if ($(this).val() == '') {
        ProgramCourse.push('-');
      }
      else {
       ProgramCourse.push($(this).val());
     }
    });
     var HighestLevel = new Array();
    $("input[name=HighestLevel]").each(function() {
      if ($(this).val() == '') {
        HighestLevel.push('-');
      }
      else {
       HighestLevel.push($(this).val());
     }
    });
     var YearGraduated = new Array();
    $("input[name=YearGraduated]").each(function() {
      if ($(this).val() == '') {
        YearGraduated.push('-');
      }
      else {
       YearGraduated.push($(this).val());
     }
    });
     var YearLastAttended = new Array();
    $("input[name=YearLastAttended]").each(function() {
      if ($(this).val() == '') {
        YearLastAttended.push('-');
      }
      else {
       YearLastAttended.push($(this).val());
     }
    });
     var DependentName = new Array();
    $("input[name=DependentName]").each(function() {
      if ($(this).val() == '') {
        DependentName.push('-');
      }
      else {
       DependentName.push($(this).val());
     }
    });
     var DependentDescription = new Array();
    $("input[name=DependentDescription]").each(function() {
      if ($(this).val() == '') {
        DependentDescription.push('-');
      }
      else {
       DependentDescription.push($(this).val());
     }
    });

        $("#sub-btn").prop("disabled", true);   //Disables the submit button after click 
        var newURL = $(this).attr('action');   
     
        var newData  = {
                'Id' : $('input[name=Id]').val(), //List of data you want to post
                'LastName' : $('input[name=LastName]').val(),
                'FirstName' : $('input[name=FirstName]').val(),
                'MiddleName' : $('input[name=MiddleName]').val(),
                'Suffix' : $('select[name=Suffix]').val(),
                'HouseNum' : $('input[name=HouseNum]').val(),
                'StreetName' : $('input[name=StreetName]').val(),
                'CityId' : $('select[name=CityId]').val(),
                'ProvinceId' : $('select[name=ProvinceId]').val(),
                'BirthDate' : $('date[name=BirthDate]').val(),
                'BirthPlace' : $('select[name=BirthPlace]').val(),
                'Age' : $('input[name=Age]').val(),
                'Gender' : $('select[name=Gender]').val(),
                'CivilStatus' : $('select[name=CivilStatus]').val(),
                'Nationality' : $('select[name=Nationality]').val(),
                'LandlineNum' : $('input[name=LandlineNum]').val(),
                'MobileNum' : $('input[name=MobileNum]').val(),
                'EmailAddress' : $('input[name=EmailAddress]').val(),
                'EmploymentStatus' : $('select[name=EmploymentStatus]').val(),
                'PreferredJobs' : $('select[name=PreferredJobs]').val(),
                'PreferredWorkLocations' : $('select[name=PreferredWorkLocations]').val(),
                'Disability' : $('select[name=Disability]').val(),
                'DisabilityOthers' : $('input[name=DisabilityOthers]').val(),
                'LanguangeSpoken' : $('select[name=LanguangeSpoken]').val(),
                'LanguageRead' : $('select[name=LanguageRead]').val(),
                'LanguageWritten' : $('select[name=LanguageWritten]').val(),
                'Dialect' : $('select[name=Dialect]').val(),
                'IsCurrrentlyStudying' : $('select[name=IsCurrrentlyStudying]').val(),
                'LastSchoolLevel' : $('input[name=LastSchoolLevel]').val(),
                'NonStudentReason' : $('input[name=NonStudentReason]').val(),
                'PreferredTrainingCourse' : $('input[name=PreferredTrainingCourse]').val(),
                'IsOFW' : $('select[name=IsOFW]').val(),
                'IsKasambahay' : $('select[name=IsKasambahay]').val(),
                'VersionNum' : $('input[name=VersionNum]').val(),
                'TIN' : $('input[name=TIN]').val(),
                'SSS' : $('input[name=SSS]').val(),
                'PHILHEALTH' : $('input[name=PHILHEALTH]').val(),
                'PAGIBIG' : $('input[name=PAGIBIG]').val(),
                'IsMigrated' : $('input[name=IsMigrated]').val(),
                'Remarks' : $('textarea[name=Remarks]').val(),
                'IsActive' : $('select[name=IsActive]').val(),
                'company_name' : CompanyName,
                'held_position' : HeldPosition,
                'company_address' : CompanyAddress,
                'inclusive_datefrom' : InclusiveDateFrom,
                'inclusive_dateto' : InclusiveDateTo,
                'skill_name' : Name,
                'skill_description' : Description,
                'school_name' : SchoolName,
                'program_course' : ProgramCourse,
                'highest_level' : HighestLevel,
                'year_graduated' : YearGraduated,
                'year_lastattended' : YearLastAttended,
                'dependent_name' : DependentName,
                'dependent_description' : DependentDescription,
            } 
            // 'PhotoPath' : $('input[name=file]').val(), 
            // 'CreatedAt' : $('input[name=CreatedAt]').val(),
            // 'CreatedBy' : $('input[name=CreatedBy]').val(),
            // 'ModifiedById' : $('input[name=ModifiedById]').val(),
            // 'ModifiedAt' : $('input[name=ModifiedAt]').val(),
            console.log(newData);
          
          $.ajax({
              url: newURL,
              type:'POST',
              dataType: "json",       //Datatype shows what kind of data you are posting, in this case, purely text and no file.
              data: newData,
              // contentType: false,
              // cache: false,  
              // processData:false,  
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


// job application

$('.applyjob').click(function(e){ //Input the form's ID or CLASS, use # for ID and . for CLASS
    e.preventDefault();       //This prevents the action to move to other page.
        $(this).prop("disabled", true);   //Disables the submit button after click 
        $(this).text("Processing...");

        var btn = $(this);
        var newURL = $(this).data('action');   
        
        var newData  = {
                'ApplicantId' : $('#Applicant').val(), //List of data you want to post
                'JobId' : $(this).data('id'),
            }
            console.log(newData);
          $.ajax({
              url: newURL,
              type:'POST',
              dataType: "json",       //Datatype shows what kind of data you are posting, in this case, purely text and no file.
              data: newData,
              // contentType: false,
              // cache: false,  
              // processData:false,  
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


                    // $(this).prop("disabled", true);   //Disables the submit button after click 
                    btn.text("Applied");
                    btn.css("background-color", "red");
                    btn.css("border", "red");
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

                   btn.prop("disabled", false);   //Disables the submit button after click 
                    btn.text("Apply");
                  }
                      
              }
          });   
});  
if ($('#addemployment').length > 0) {
  $('#addemployment').on("click", function() {
    // alert ("test");
    var c = $('#CompanyName');
    var h =  $('#HeldPosition');
    var g = $('#CompanyAddress');
    var f = $('#InclusiveDateFrom');
    var t = $('#InclusiveDateTo');
    
    if (c.val() == '' || h.val() == '') {
     $.toast({
                      heading: 'Error',
                      text: 'Company Name and Position are required.',
                      position: 'top-right',
                      loaderBg:'#ff6849',
                      icon: 'error',
                      hideAfter: 3500
                      
                    }); 
        return false;
    }
    var str = '';
    str = str + '<tr>';
    str = str + '  <td><input type="text" placeholder="Can not be empty." readonly class="form-control CompanyName" name="CompanyName" value="'+ c.val() +'"></td>';
    str = str + '  <td><input type="text" class="form-control HeldPosition" name="HeldPosition" value="'+ h.val() +'"></td>';
    str = str + '  <td><input type="text" class="form-control CompanyAddress" name="CompanyAddress" value="'+ g.val() +'"></td>';
    str = str + '  <td><input type="text" class="form-control InclusiveDateFrom" name="InclusiveDateFrom" value="'+ g.val() +'"></td>';
    str = str + '  <td><input type="text" class="form-control InclusiveDateTo" name="InclusiveDateTo" value="'+ g.val() +'"></td>';
    str = str + '  <td class="actions"><button class="btn btn-danger btn-xs tr-remover">Remove<i class="fa fa-trash-o "></i></button></td>';
    str = str + '</tr>';
    $('#employ tbody').append(str);
    c.val('');
    h.val('');
    g.val('');
    f.val(''); 
    t.val('');  
    $.toast({
                      heading: 'Success!',
                      text: 'Employment History Successfully Added',
                      position: 'top-right',
                      loaderBg:'#ff6849',
                      icon: 'success',
                      hideAfter: 3500, 
                      stack: 6
                    });

    // toastr.info('Employment History Successfully Added', "");
  });
}
if ($('#addskill').length > 0) {
  $('#addskill').on("click", function() {
    var n = $('#Name');
    var d =  $('#Description');
    
    if (n.val() == '' || d.val() == '') {
         $.toast({
                      heading: 'Error',
                      text: 'Name and Description are required.',
                      position: 'top-right',
                      loaderBg:'#ff6849',
                      icon: 'error',
                      hideAfter: 3500
                      
                    }); 
        return false;
    }
    var str = '';
    str = str + '<tr>';
    str = str + '  <td><input type="text" placeholder="Can not be empty." readonly class="form-control Name" name="Name" value="'+ n.val() +'"></td>';
    str = str + '  <td><input type="text" class="form-control Description" name="Description" value="'+ d.val() +'"></td>';
    str = str + '  <td class="actions"><button class="btn btn-danger btn-xs tr-remover">Remove<i class="fa fa-trash-o "></i></button></td>';
    str = str + '</tr>';
    $('#skill tbody').append(str);
    n.val('');
    d.val('');
      $.toast({
                      heading: 'Success!',
                      text: 'Skill Successfully Added',
                      position: 'top-right',
                      loaderBg:'#ff6849',
                      icon: 'success',
                      hideAfter: 3500, 
                      stack: 6
                    });
    // toastr.info('Skill Successfully Added', "");
  });
}
if ($('#addeducation').length > 0) {
  $('#addeducation').on("click", function() {
    var s = $('#SchoolName');
    var p =  $('#ProgramCourse');
    var h = $('#HighestLevel');
    var g = $('#YearGraduated');
    var l = $('#YearLastAttended');
    
    if (s.val() == '' || p.val() == '') {
         $.toast({
                      heading: 'Error',
                      text: 'School Name and Program Course are required.',
                      position: 'top-right',
                      loaderBg:'#ff6849',
                      icon: 'error',
                      hideAfter: 3500
                      
                    }); 
        return false;
    }
    var str = '';
    str = str + '<tr>';
    str = str + '  <td><input type="text" placeholder="Can not be empty." readonly class="form-control SchoolName" name="SchoolName" value="'+ s.val() +'"></td>';
    str = str + '  <td><input type="text" class="form-control ProgramCourse" name="ProgramCourse" value="'+ p.val() +'"></td>';
    str = str + '  <td><input type="text" class="form-control HighestLevel" name="HighestLevel" value="'+ h.val() +'"></td>';
    str = str + '  <td><input type="text" class="form-control YearGraduated" name="YearGraduated" value="'+ g.val() +'"></td>';
    str = str + '  <td><input type="text" class="form-control YearLastAttended" name="YearLastAttended" value="'+ l.val() +'"></td>';
    str = str + '  <td class="actions"><button class="btn btn-danger btn-xs tr-remover">Remove<i class="fa fa-trash-o "></i></button></td>';
    str = str + '</tr>';
    $('#educ tbody').append(str);
    s.val('');
    p.val('');
    h.val('');
    g.val(''); 
    l.val('');  
   
     $.toast({
                      heading: 'Success!',
                      text: 'Education Successfully Added',
                      position: 'top-right',
                      loaderBg:'#ff6849',
                      icon: 'success',
                      hideAfter: 3500, 
                      stack: 6
                    });
    // toastr.info('Skill Successfully Added', "");
  });
}
if ($('#adddepend').length > 0) {

  $('#adddepend').on("click", function() {
    
    var m = $('#DependentName');
    var k =  $('#DependentDescription');
     
    if (m.val() == '' || k.val() == '') {
         $.toast({
                      heading: 'Error',
                      text: 'Name and Description are required.',
                      position: 'top-right',
                      loaderBg:'#ff6849',
                      icon: 'error',
                      hideAfter: 3500
                      
                    }); 
        return false;
    }
    // alert ("test");
    var str = '';
    str = str + '<tr>';
    str = str + '  <td><input type="text" placeholder="Can not be empty." readonly class="form-control DependentName" name="DependentName" value="'+ m.val() +'"></td>';
    str = str + '  <td><input type="text" class="form-control DependentDescription" name="DependentDescription" value="'+ k.val() +'"></td>';
    str = str + '  <td class="actions"><button class="btn btn-danger btn-xs tr-remover">Remove<i class="fa fa-trash-o "></i></button></td>';
    str = str + '</tr>';
    $('#depends tbody').append(str);
    m.val('');
    k.val('');
  
    $.toast({
                      heading: 'Success!',
                      text: 'Dependent Successfully Added',
                      position: 'top-right',
                      loaderBg:'#ff6849',
                      icon: 'success',
                      hideAfter: 3500, 
                      stack: 6
                    });
    // toastr.info('Skill Successfully Added', "");
  });
}
$('.table').delegate(".tr-remover", "click", function() {
  var tr = $(this).closest('tr');
  $(tr).remove();
});


});

// });








