$(document).ready(function()
{
    var form = $('.form-ajax-profile-pic');
    var newProfileInput = $('#profile-pic');
    var description = $('#profile-description');
    var editBtn = $('#btn-profile-description');

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

    function replaceInputToEdit()
    {
        $(this).replaceWith($('<textarea id="profile-description">Prout</textarea>'));
    }

    description.hover(function()
    {
        $(this).append('<button id="btn-profile-description">Modifier</button>');
    },function()
    {
        $(this).find('button').remove();
    });

    editBtn.click(replaceInputToEdit);












});




