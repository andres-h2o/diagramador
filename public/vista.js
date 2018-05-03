     

      window.onload = function() {
      
        var width = screen.availWidth - 500;
        var height = screen.availHeight-200;
        if(width < 400)  width = width;
        if(width > 1000) width = 500;

        var app = new Application( { id: 'umldiagram', width: width, height: height } );

          $("#umldiagram").click(function() {
              var xml = app.getXMLString();

              firebase.database().ref('diagrama').push(
                  {
                      xml:xml
                  }
              );
          });

          firebase.database().ref('diagrama')
              .on('value',function (snapshot) {
                  var xml = snapshot.pop().val().xml;
                  alert(xml);
                  app._delDiagram();
                  app.setXMLString(xml);
              });




}