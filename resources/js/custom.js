// $(function () {
//   //Initialize Select2 Elements
//   $('.selectpicker').select2()
// });
// $(function () {
//     $('select').selectpicker();
// });

$(document).ready(function() {
    
    imgInp.onchange = evt => {
        const [file] = imgInp.files
        if (file) {
            blah.src = URL.createObjectURL(file)
        }
    }

    $('#button').click(function () {
        $("#imgInp").trigger('click');
    });
  
    $("#datepicker" ).datepicker({ 
        format: 'dd-mm-yyyy',
        todayHighlight: true,
        autoclose:true,
        weekStart: 1
    });

    $("#datepicker-doj" ).datepicker({ 
        format: 'dd-mm-yyyy',
        todayHighlight: true,
        autoclose:true,
        weekStart: 1
    });

    /*-- Same as Permanent On Click --*/
    $('#same_as_permanent').click(function(){
        if ($(this).prop('checked')==true){ 
            $('#permanent_address').val($('#present_address').val());
            $('#same_as_present').attr("disabled", true);
            $('#permanent_address').attr("readonly", true);
        } else {
            $('#permanent_address').val('');
            $("#same_as_present").removeAttr("disabled");
            $('#permanent_address').removeAttr("readonly");
        }
    });

    /*-- Same as Present On Click --*/
    $('#same_as_present').click(function(){
        if ($(this).prop('checked')==true){
            $('#present_address').val($('#permanent_address').val());
            $('#same_as_permanent').attr("disabled", true);
            $('#present_address').attr("readonly", true);
        } else {
            $('#present_address').val('');
            $("#same_as_permanent").removeAttr("disabled");
            $('#present_address').removeAttr("readonly");
        }
    });

    /*-- Inputmaks Inicialised --*/
    // $('[data-mask]').inputmask();
});