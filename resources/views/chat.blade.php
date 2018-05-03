<!doctype html>
<html>
<head><title>cHAT</title></head>
<body>

<form action=" ">
    <div>
        <lavel id="nombre">nombre</lavel>
        <input type="text" id="nombre">
    </div>
    <div>
        <lavel for="mensaje">Mensaje</lavel>
        <textarea id="mensaje"></textarea>
    </div>
    <ul id="lista">
    </ul>

    <button type="button" id="btnEnviar">Enviar</button>
</form>


<script src="https://www.gstatic.com/firebasejs/4.13.0/firebase.js"></script>
<script>
    // Initialize Firebase
    var config = {
        apiKey: "AIzaSyDgJKfXIQy87XXdjvKdvxSeGzCBX-3S1zs",
        authDomain: "diagramador-769b4.firebaseapp.com",
        databaseURL: "https://diagramador-769b4.firebaseio.com",
        projectId: "diagramador-769b4",
        storageBucket: "",
        messagingSenderId: "1091174356200"
    };
    firebase.initializeApp(config);

    var txtNombre = document.getElementById('nombre');
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

    });
    firebase.database().ref('chat')
        .on('value',function (snapshot) {
            var html="";
            snapshot.forEach(function (e) {
                var element = e.val();
                var nombre = element.nombre;
                var mensaje = element.mensaje;
                html+="<li><b>"+nombre+": </b>"+mensaje+"</li>"
            })
            listaChat.innerHTML=html;
        });
</script>
</body>
</html>