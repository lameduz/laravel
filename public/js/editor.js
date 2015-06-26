
    var editor = document.getElementById("textBox");

    var formatDoc = function(sCmd, sValue) {
        document.execCommand(sCmd, false, sValue);
        editor.focus();
    };



