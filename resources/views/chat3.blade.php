<!doctype html>
<html>

<head>

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link type="text/css" rel="stylesheet" href="css/UDStyle.css"/>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="UDCore.js"></script>
    <script type="text/javascript" src="UDModules.js"></script>
    <script type="text/javascript" src="UDApplication.js"></script>

    <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700,300' rel='stylesheet'
          type='text/css'>

    <script src="https://use.typekit.net/hoy3lrg.js"></script>
    <script>try {
            Typekit.load({async: true});
        } catch (e) {
        }</script>
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'>
    <link rel='stylesheet prefetch'
          href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css'>

    <title>cHAT</title>
</head>
<style type="text/css">
    .circular--portrait {
        position: relative;
        width: 40px;
        height: 40px;
        overflow: hidden;
        border-radius: 50%;
        box-shadow: 1px 2px 3px black;

    }

    .container {
        text-align: center
    }

    .left {
        float: left;
        background: blue
    }

    .right {
        float: right;
        background: red
    }

    .center {
        background: #bae1a9;
        display: inline-block
    }

    #body {

        font-family: Tahoma, Geneva, sans-serif;
        font-size: 1em;
        height: auto;
        margin: 0 auto;
        padding: 0;
        width: 1194px;
    }

    #lateralizq {
        background: none repeat scroll 0 0 #556677;
        float: left;
        height: 900px;
        width: 59px;
    }

    #superiorgeneral {
        background: none repeat scroll 0 0 #118899;
        float: left;
        height: 290px;
        width: 1076px;
    }

    #superiorflotantemenu {
        background: none repeat scroll 0 0 #661100;
        float: left;
        height: 90px;
        width: 1076px;
    }

    #lateralder {
        background: none repeat scroll 0 0 rgb(255, 247, 65);
        float: right;
        height: 900px;
        width: 300px;
    }

    #main {
        background: none repeat scroll 0 0 #fff741;
        float: left;
        height: 130%;
        width: 70%;
    }

    #pie {
        background: none repeat scroll 0 0 #4455FF;
        float: left;
        height: 147px;
        width: 1076px;
    }

    #fondoabajo {
        background-color: #F2886E;
        clear: both;
        height: 34px;
        width: auto;
    }
    .bubble:after {
        content: "";
        position: absolute;
        top: 0;
        bottom: 0;
        margin: auto;
        height: 0;
        left: -10px;
        border-style: solid;
        border-width: 10px 10px 10px 0;
        border-color: transparent #e5e5ea;
        display: block;
        width: 0;
        z-index: 1;
    }

    .bubble2:after {
        content: "";
        position: absolute;
        top: 0;
        bottom: 0;
        margin:auto;
        height: 0px;
        right: -10px;
        border-style: solid;
        border-width: 10px 0 10px 10px;
        border-color: transparent #1289fe;
        display: block;
        width: 0;
        z-index: 1;
    }
</style>
<body style="background-color: rgb(32,163,243)">
<div id="body">
    <div id="main">
        <br>
        <a class="button" style="font-size: 10px;" title="Exportar XML a JAVA" href="{{url('/java')}}" target="_blank">
            <span class="dashicons dashicons-admin-generic"></span><i class="fa fa-plus"></i> Exporta XML a JAVA
        </a>
        <div id="umldiagram">

        </div>
    </div>
    <div id="lateralder">
        <style type="text/css">
            .chat {
                list-style: none;
                margin: 0;
                padding: 0;
            }

            .chat li {
                margin-bottom: 10px;
                padding-bottom: 5px;
                border-bottom: 1px dotted #B3A9A9;
            }

            .chat li.left .chat-body {
                margin-left: 60px;
            }

            .chat li.right .chat-body {
                margin-right: 60px;
            }

            .chat li .chat-body p {
                margin: 0;
                color: #777777;
            }

            .panel .slidedown .glyphicon, .chat .glyphicon {
                margin-right: 5px;
            }

            .panel-body {
                overflow-y: scroll;
                height: 500px;
            }

            ::-webkit-scrollbar-track {
                -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
                background-color: #F5F5F5;
            }

            ::-webkit-scrollbar {
                width: 12px;
                background-color: #F5F5F5;
            }

            ::-webkit-scrollbar-thumb {
                -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
                background-color: #555;
            }

            .bubble {
                margin: 10px;
                position: relative;
                width: 80%;
                padding: 8px;
                float: left;
                display: inline-block;
                vertical-align: middle;

                font-size: 13px;
                color: #333;
                text-align: left;

                background-color: #e5e5ea;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                border-radius: 5px;
                -webkit-box-shadow: 2px 2px 10px 0px rgba(97, 97, 97, 0.5);
                -moz-box-shadow: 2px 2px 10px 0px rgba(97, 97, 97, 0.5);
                box-shadow: 2px 2px 10px 0px rgba(97, 97, 97, 0.5);
            }
            .ul1{
                margin: 0;padding: 0;
            }
            .li1{
                list-style-type: none;
                display: none;
                margin: 10px;
                clear: both;
                overflow: hidden;
                padding: 10px;


            }
            .bubble2 {
                margin: 10px;
                position: relative;
                width: 80%;
                padding: 8px;
                float: right;
                text-align: left;
                display: inline-block;
                vertical-align: middle;
                font-size: 13px;
                color: #fff;
                background-color: #1289fe;
                -webkit-border-radius: 5px;
                -moz-border-radius: 5px;
                border-radius: 5px;
                -webkit-box-shadow: 2px 2px 10px 0px rgba(97, 97, 97, 0.5);
                -moz-box-shadow: 2px 2px 10px 0px rgba(97, 97, 97, 0.5);
                box-shadow: 2px 2px 10px 0px rgba(97, 97, 97, 0.5);


            }
        </style>


        <div class="contact-profile">
            <strong>
            <p id="user" style="color: lightblue">{{ Auth::user()->name}}</p></strong>
        </div>
        <div class="message-input">
            <div class="wrap">
                <input type="text" placeholder="Escribe tu mensaje..."/>
                <button class="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i></button>
            </div>
        </div>
        <div id="global">
            <div id="mensajes">
        <div class="mobile">
            <div class="chat-w">
                <div class="messages" id="mesa">
                    <ul id="lista" class="ul1">

                    </ul>
                </div>
            </div>
        </div>
            </div></div>

        <style type="text/css">
            #global {
                height: 700px;
                width: 300px;
                border: 1px solid #ddd;
                overflow-y: scroll;
            }
            #mensajes {
                height: auto;
            }
            .texto {
                padding:4px;
                background:#fff;
            }
        </style>

    </div>
</div>


</body>


<script src="https://www.gstatic.com/firebasejs/4.13.0/firebase.js"></script>
<script>
    // Initialize Firebase

</script>
<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script>
<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>
<script>
    var config = {
        apiKey: "AIzaSyDgJKfXIQy87XXdjvKdvxSeGzCBX-3S1zs",
        authDomain: "diagramador-769b4.firebaseapp.com",
        databaseURL: "https://diagramador-769b4.firebaseio.com",
        projectId: "diagramador-769b4",
        storageBucket: "",
        messagingSenderId: "1091174356200"
    };
    firebase.initializeApp(config);
    var actual = "";
    /* var txtNombre = document.getElementById('nombre');
     var txtMensaje = document.getElementById('mensaje');
     var btnEnviar = document.getElementById('btnEnviar');
     var listaChat = document.getElementById('lista');

     btnEnviar.addEventListener("click",function () {
         var nombre=txtNombre.value;
         var mensaje   =txtMensaje.value;
         firebase.database().ref('chat').push({
             nombre: nombre,
             mensaje: mensaje
         });

     });*/


    window.onload = function () {

        var width = screen.availWidth - 500;
        var height = screen.availHeight - 200;
        if (width < 400) width = width;
        if (width > 1000) width = 500;

        var app = new Application({id: 'umldiagram', width: width, height: height});

        $("#umldiagram").click(function () {
            var xml = app.getXMLString();
            actual = xml;
            firebase.database().ref('diagrama').set({
                xml: xml
            })
        });

        firebase.database().ref('diagrama')
            .on('value', function (s) {
                var xml = s.val().xml;
                if (actual != xml) {
                    app._delDiagram();
                    app.setXMLString(xml);
                }

            });


    }

    var listaChat = document.getElementById('lista');
    firebase.database().ref('chat')
        .on('value', function (snapshot) {
            var html = "";
            var user = document.getElementById('user').innerHTML;
            snapshot.forEach(function (e) {
                var element = e.val();
                var nombre = element.nombre;
                var mensaje = element.mensaje;


                if (nombre == user) {

                    html = '<li class="bubble2" style="color: white"><img class="circular--portrait"  src="http://emilcarlsson.se/assets/mikeross.png" alt="" /><p>' + nombre + ': ' + mensaje + '</p></li>' + html;

                } else {
                    html = '<li class="bubble   "><img class="circular--portrait"  src="http://emilcarlsson.se/assets/mikeross.png" alt="" /><p>' + nombre + ': ' + mensaje + '</p></li>' + html;
                }

            });
            listaChat.innerHTML = html;
            var box = document.getElementById('mesa');
            box.scrollTop = box.scrollHeight;
        });
    $(".messages").animate({scrollTop: $(document).height()}, "fast");


    function newMessage() {

        message = $(".message-input input").val();
        if ($.trim(message) == '') {
            return false;
        }

        var user = document.getElementById('user').innerHTML;
        var nombre = user;
        var mensaje = $.trim(message);
        firebase.database().ref('chat').push({
            nombre: nombre,
            mensaje: mensaje
        });

    };

    $('.submit').click(function () {
        newMessage();
    });

    $(window).on('keydown', function (e) {
        if (e.which == 13) {
            newMessage();
            return false;
        }
    });
</script>

</body>
</html>