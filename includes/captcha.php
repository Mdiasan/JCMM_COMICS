<script>
function Captcha(mainCaptcha, inputName) {
    var alpha1 = new Array('A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', '1', '2', '3', '4', '5', '6', '7', '8', '9', '0', '!', '@', '# ', ',', '.', '$', '%', '^', '&', '*', '(', ')', '-', '_', '=', '+', '[', ']', '{', '}', '"', ':', ';', '/', '?', '<', '>', '|');
    var alpha3 = new Array('1', '2', '3', '4', '5', '6', '7', '8', '9', '0');
    var i;
    for (i = 0; i < 6; i++) {
        var a = alpha1[Math.floor(Math.random() * alpha1.length)];
        var c = alpha3[Math.floor(Math.random() * alpha3.length)];
        var d = alpha1[Math.floor(Math.random() * alpha1.length)];
        var f = alpha3[Math.floor(Math.random() * alpha3.length)];
        var g = alpha1[Math.floor(Math.random() * alpha1.length)];
    }
    var code = a + ' ' + c + ' ' + d + ' ' + f + ' ' + g;
    
    document.cookie= 'captcha='+code //solo 3 minutos de cookie
    //crear el captcha en el div seleccionado
    var contenedor = document.getElementById(mainCaptcha);
    contenedor.innerHTML = '';
    //primera columna
    var div = document.createElement('div');
    div.className = "col";
    //columna para la imagen
    var div1 = document.createElement('div');
    div1.className = "col";
    var captcha = document.createElement('canvas');
    captcha.id = 'captcha';
    div1.appendChild(captcha);
    div.appendChild(div1);
    //columna para el refresh
    div1 = document.createElement('div');
    div1.className = "col";
    
    div.appendChild(div1);
    contenedor.appendChild(div);
    //columna para el texto
    div = document.createElement('div');
    div.className = "col text-center";
    div1 = document.createElement('div');
    div1.className = "form-horizontal";
    var label = document.createElement('label');
    label.setAttribute('for',inputName) ;
    label.className="sr-only text-dark";
    label.innerText="completar chaptcha";
    div1.appendChild(label);
    var input = document.createElement('input');
    input.id = inputName;
    input.className = "form-control";
    div1.appendChild(input);
    var boton = document.createElement("button");
    boton.className="btn btn-warning"
    boton.addEventListener("click",function(){
        comprobarValidacionCaptcha();
    });
    boton.value="validar";
    boton.innerHTML = "validar captcha";

    div1.appendChild(boton);
    div.appendChild(div1);
    contenedor.appendChild(div);
    //columna para el boton
    
    div = document.createElement('div');
   /* div.className = "col-lg-4 col-md-4 col-sm-6 col-xs-12";
    var check = document.createElement('input');
    check.id = "check";
    check.value = "Check";
    check.className = "btn btn-default pull-right";
    check.setAttribute('onclick', "alert(ValidCaptcha('" + mainCaptcha + "', 'txtInput'));");
    div.appendChild(check);
    contenedor.appendChild(div);*/
    CreaIMG(code);
}

function ValidCaptcha(mainCaptcha, inputName) {
   
    var string1 = document.cookie;//removeSpaces(readCookie('c'));
    string1 = string1.split(";");
    console.log(string1.length);
    string1=string1[string1.length-1];
    console.log(string1)
    
    string1=string1.replace("captcha=","");
    string1 = removeSpaces(string1);

    var string2 = removeSpaces(getElementValue(inputName));
    console.log(string1);
    console.log(string2);
    if (string1 == string2) {
        return true;
    }
    else {
        Captcha(mainCaptcha, inputName);
        return false;
    }
}

function getElementValue(inputName){
    var value = document.getElementById(inputName).value;
    return value;
}

function removeSpaces(string) {
    return string.split(' ').join('');
}

function CreaIMG(texto) {
    var ctxCanvas = document.getElementById('captcha').getContext('2d');
    var fontSize = "30px";
    var fontFamily = "Arial";
    var width = 250;
    var height = 50;
    //tamaño
    ctxCanvas.canvas.width = width;
    ctxCanvas.canvas.height = height;
    //color de fondo
    ctxCanvas.fillStyle = "whitesmoke";
    ctxCanvas.fillRect(0, 0, width, height);
    //puntos de distorsion
    ctxCanvas.setLineDash([7, 10]);
    ctxCanvas.lineDashOffset = 5;
    ctxCanvas.beginPath();
    var line;
    for (var i = 0; i < (width); i++) {
        line = i * 5;
        ctxCanvas.moveTo(line, 0);
        ctxCanvas.lineTo(0, line);
    }
    ctxCanvas.stroke();
    //formato texto
    ctxCanvas.direction = 'ltr';
    ctxCanvas.font = fontSize + " " + fontFamily;
    //texto posicion
    var x = (width / 9);
    var y = (height / 3) * 2;
    //color del borde del texto
    ctxCanvas.strokeStyle = "yellow";
    ctxCanvas.strokeText(texto, x, y);
    //color del texto
    ctxCanvas.fillStyle = "red";
    ctxCanvas.fillText(texto, x, y);
}
</script>




    <script  async defer type="text/javascript">
        $(document).ready( function () {
            Captcha('mainCaptcha', 'txtInput')
        });

         function ValidaWeb() {
                if (ValidCaptcha('mainCaptcha', 'txtInput')) {
                     // tu codigo una vez validado
                     return true;
                     
                }else{
                    Captcha('mainCaptcha', 'txtInput');
                    return false;
                }
         }        
    </script>
     
    

