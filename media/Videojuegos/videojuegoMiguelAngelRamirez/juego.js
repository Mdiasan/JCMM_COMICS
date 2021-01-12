


var game = (function () {

    //variable globales
    var canvas, ctx,imgVin ,fondo, imgEnemigo,imgPocionazul,imgPocionrojo,imgCargadas=0 , jugador = new Elemento(20,150,100,70,5);
    var hierro =100 ,acero=100;
    var pociones=[];
    var enemigos=[];
    var arrayDeImagenes=[];
    arrayDeImagenes.push(fondo);
    arrayDeImagenes.push(imgVin);
    arrayDeImagenes.push(imgPocionazul);
    arrayDeImagenes.push(imgPocionrojo);
    arrayDeImagenes.push(imgEnemigo);
    var nombresImagenes=[];
    
    nombresImagenes.push("images/fondo.jpg");
    nombresImagenes.push("images/vin.png");
    nombresImagenes.push("images/azul.png");
    nombresImagenes.push("images/rojo.png");
    nombresImagenes.push("images/enemigo.png");

    
   
    //variables de funcionamiento del juego 
    var vidas=1,
    finJuego=false;
    //iniciar juego
    function init(){
        crearEnemigos(5);
        crearPociones(5);
        cargarImgs();

        //inicializar canvas y la "brocha"
        canvas=document.getElementById('canvas');
        ctx=canvas.getContext("2d");
        direction="right";



    }

    function cargarImgs() {
      
          for (let index = 0; index < arrayDeImagenes.length; index++) {
              var img = arrayDeImagenes[index];
              img =new Image();
              img.src=nombresImagenes[index];
              
             
              arrayDeImagenes[index]=img;
              img.addEventListener('load',function(){
                imgCargadas++;
                paint();
              },false);
          }

      }  
      function paint(){
        if(imgCargadas==5){

            if (direction == 'right'&& acero>0) { 
               jugador.avanzar(1);                direction=0; acero-=1;
            }
              else if (direction == 'left'&& hierro>0) { 
               jugador.avanzar(0); direction=0; 
                hierro-=1;            }
              else if (direction == 'up'&& acero>0) { 
                jugador.volar(0);  direction=0;
                acero-=1;
              } else if(direction == 'down'&& hierro>0) { 
                jugador.volar(1);  direction=0;
                hierro-=1;
            }



            
            paintFondo();
            paintPersonaje();
            PaintEnemigo();
            PaintPociones();
        }


        if(!finJuego){
            juego();

        }else{
            paintGameOver();
        }
        
      }
    function juego(){
        Metales();
        moverEnemigos();
        moverPociones();
        comprobarColisiones();
        esFinDeJuego();

        if(vidas<1){
            finJuego=true;
        }
        setInterval(paint,100);
    }


    function paintFondo(){

ctx.drawImage(arrayDeImagenes[0], 0, 0);
ctx.font="30px Verdana";

    }

    function PaintEnemigo(){
       enemigos.forEach(enemigo => {
        if(enemigo.vivo){
            ctx.drawImage(arrayDeImagenes[4], enemigo.x, enemigo.y);
        }
       });


        


    }

    function PaintPociones(){

        pociones.forEach(pocion => {
            if(pocion.estaVivo()){
                ctx.drawImage(arrayDeImagenes[pocion.color], pocion.x, pocion.y);

            }

    
        });
       
    }

    function getNumeroAleatorio(max) {
        return Math.floor(Math.random() * max);
    }

    function crearEnemigos(numero) {
        for (let index = 0; index < numero; index++) {
           var enemigo = new Elemento(getNumeroAleatorio(700)+450,getNumeroAleatorio(350),100,70,0.01);
            enemigos.push(enemigo);
            
        }
    }
    function crearPociones(numero) {
        for (let index = 0; index < numero; index++) {
           
           var pocion = new Elemento(getNumeroAleatorio(700)+450,getNumeroAleatorio(350),40,40,0.01);
           if(getNumeroAleatorio(2)==0){
               pocion.colores(2);
        }else{
            pocion.colores(3);
        }
            pociones.push(pocion);
            
        }
    }
    
function paintGameOver() {
    ctx.fillStyle = 'red';
    if(finJuego){
        if(vidas){
            ctx.fillText("YOU WIN", 150, 200);
    
        }else{
            ctx.fillText("GAME OVER", 150, 200);
    
        }
    }
   
}
    function paintPersonaje(){
        if(vidas){
            ctx.drawImage(arrayDeImagenes[1], jugador.x, jugador.y);

        }
    }
    function Metales() {
        ctx.fillStyle = 'blue';
        ctx.fillRect(40,40,hierro,20);
        ctx.fillText("hierro:", 0, 30);

        ctx.fillStyle = 'red';
        ctx.fillText("acero:", 0, 80);

        ctx.fillRect(40,90,acero,20);
    }
    function moverEnemigos() {
        enemigos.forEach(enemigo => {
            enemigo.avanzar(0);

        });

    }
    function moverPociones() {
        pociones.forEach(pocion => {
            pocion.avanzar(0);

        });

    }
    

    function esFinDeJuego() {
        finJuego=true;
        enemigos.forEach(enemigo=>{
            if(enemigo.estaVivo()){
                finJuego=false;
            }
        }
        

        );
    }
    function comprobarColisiones() {
        pociones.forEach(pocion => {
            if(pocion.estaVivo()){
                if (jugador.x < pocion.x + pocion.ancho &&
                    jugador.x + jugador.ancho > pocion.x &&
                    jugador.y < pocion.y + pocion.alto &&
                    jugador.alto + jugador.y > pocion.y) {
                        pocion.matar();
                        if(pocion.color==2){
                            hierro+=25;
                        }else{
                            acero+=25;
                        }
                 }
            }
            
        });

        enemigos.forEach(enemigo => {
            if(enemigo.estaVivo()){
                if (jugador.x < enemigo.x + enemigo.ancho &&
                    jugador.x + jugador.ancho > enemigo.x &&
                    jugador.y < enemigo.y + enemigo.alto &&
                    jugador.alto + jugador.y > enemigo.y) {
                        vidas--;
                 }
                if(enemigo.x <0){
                    enemigo.matar();
                }
            }
         
        });

        
    }
    return {
        init: init
    }
})();
