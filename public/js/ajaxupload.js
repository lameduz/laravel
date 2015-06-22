$(document).ready(function()
{
    var form = $('.form-ajax-profile-pic');
    var newProfileInput = $('#profile-pic');
    var description = $('.profile-description');
    var editBtn = $('.edit-profile-confirm');

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    form.bind('submit',function(e)
    {
        e.preventDefault();
        $.ajax({
            type: form.attr('method'),
            url: form.attr('action'),
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData:false,

            success: function(data) {
                console.log(data.file);
                newProfileInput.attr('src',data.file);
            },
            error: function(data) {
                console.log('error');
            }
        });
    });



    description.click(function()
    {
        $(this).attr('contenteditable','true');
        $(this).focus();
        $('#profile').find('.edit-tools').show();
    });


    editBtn.click(function(e){
        $('#profile').find('.edit-tools').hide();
        var request = $.ajax({
            url: "profile/edit/desc",
            type: "post",
            dataType:'jsonp',
            data: { desc : description.html() }
        });

        request.done(function(msg)
        {
           console.log(msg);
        });




    });






});




