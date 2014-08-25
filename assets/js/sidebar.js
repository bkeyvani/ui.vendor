
$(window).load(function(){
    $('#navigator').click(function () {

        if ($('#spinspan').attr('class') == "glyphicon glyphicon-chevron-right"){
          $('#spinspan').addClass("rotate");
        }
        else if ($('#spinspan').attr('class') == "glyphicon glyphicon-chevron-right rotate") {
            $('#spinspan').removeClass("rotate");
            $('#spinspan').addClass("rotate-back");
        }
        else if ($('#spinspan').attr('class') == "glyphicon glyphicon-chevron-right rotate-back") {
            $('#spinspan').removeClass("rotate-back");
            $('#spinspan').addClass("rotate");
        }
        if ($('.sidenav').attr('class') == "col-sm-3 sidenav"){
          $('.sidenav').addClass("on");
        }
        else if ($('.sidenav').attr('class') == "col-sm-3 sidenav on") {
            $('.sidenav').removeClass("on");
            $('.sidenav').addClass("off");
        }
        else if ($('.sidenav').attr('class') == "col-sm-3 sidenav off") {
            $('.sidenav').removeClass("off");
            $('.sidenav').addClass("on");
        }
    });
});

