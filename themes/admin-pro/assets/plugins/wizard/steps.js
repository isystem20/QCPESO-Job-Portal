$(".tab-wizard").steps({
    headerTag: "h6"
    , bodyTag: "section"
    , transitionEffect: "fade"
    , titleTemplate: '<span class="step">#index#</span> #title#'
    , labels: {
        finish: "Submit"
    }
    , 
    onFinished: function (event, currentIndex) {
    // e.preventDefault();       //This prevents the action to move to other page.
        $("#add-submit").prop("disabled", true);   //Disables the submit button after click 
        var newURL = $(this).attr('action');      //Get the form action attribute value.
        var newData  = {
                'FirstName' : $('input[name=firstname]').val(),
                'LastName' : $('input[name=lastname]').val(),     //List of data you want to post
                'MiddleName' : $('input[name=middlename]').val(),
                'Suffix' : $('input[name=suffix]').val(),
                'HouseNum' : $('input[name=housenum]').val(),
                'StreetName' : $('input[name=address]').val(),
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
    }
});


var form = $(".validation-wizard").show();

$(".validation-wizard").steps({
    headerTag: "h6"
    , bodyTag: "section"
    , transitionEffect: "fade"
    , titleTemplate: '<span class="step">#index#</span> #title#'
    , labels: {
        finish: "Submit"
    }
    , onStepChanging: function (event, currentIndex, newIndex) {
        return currentIndex > newIndex || !(3 === newIndex && Number($("#age-2").val()) < 18) && (currentIndex < newIndex && (form.find(".body:eq(" + newIndex + ") label.error").remove(), form.find(".body:eq(" + newIndex + ") .error").removeClass("error")), form.validate().settings.ignore = ":disabled,:hidden", form.valid())
    }
    , onFinishing: function (event, currentIndex) {
        return form.validate().settings.ignore = ":disabled", form.valid()
    }
    , 
    // onFinished: function (event, currentIndex) {
    //      swal("Form Submitted!", "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed lorem erat eleifend ex semper, lobortis purus sed.");
    // }
}), 
$(".validation-wizard").validate({
    ignore: "input[type=hidden]"
    , errorClass: "text-danger"
    , successClass: "text-success"
    , highlight: function (element, errorClass) {
        $(element).removeClass(errorClass)
    }
    , unhighlight: function (element, errorClass) {
        $(element).removeClass(errorClass)
    }
    , errorPlacement: function (error, element) {
        error.insertAfter(element)
    }
    , rules: {
        email: {
            email: !0
        }
    }
})