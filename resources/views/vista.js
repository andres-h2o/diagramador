

      window.onload = function() {

        var width = screen.availWidth - 250;
        var height = screen.availHeight;
        if(width < 400)  width = width+250;
        if(width > 1000) width = 1000;

        var app = new Application( { id: 'umldiagram', width: width, height: height } );

  $("#umldiagram").click(function() {
    var xml = app.getXMLString();

  });



}