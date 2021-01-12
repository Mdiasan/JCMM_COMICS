class posicion{
  constructor(x=0, y=0){
    this.x=x;
    this.y=y;
  }
  get longitud(){
    return Math.sqrt(this.x * this.x + this.y * this.y);
  }
  set longitud(value){
    const factor = value / this.longitud;
    this.x*= factor;
    this.y*= factor;
  }
}

class rectangulo{
constructor(alto, ancho){
  this.poss = new posicion;
  this.size = new posicion(alto, ancho);
}

get izquierda(){
  return this.poss.x - this.size.x /2;
}

get derecha(){
  return this.poss.x + this.size.x /2;
}

get arriba(){
  return this.poss.y - this.size.y /2;
}

get abajo(){
  return this.poss.y + this.size.y /2;
}
}

class bola extends rectangulo{
  constructor(){
    super(10, 10);
    this.velocidad = posicion;
  }
}

class jugador extends rectangulo{
 constructor(){
   super(15,100);
   this.puntuacion = 0;
 }
}

class juego{
  constructor(canvas){
    this._canvas = canvas;
    this._ctx = canvas.getContext('2d');

    this.bola1 = new bola;

    this.jugadores =[new jugador, new jugador];

    this.jugadores[0].poss.x = 40;
    this.jugadores[1].poss.x = this._canvas.width - 40;
    this.jugadores.forEach(jugador => {
      jugador.poss.y = this._canvas.height/2;
    });

    let ultimaVez;
    const movimiento = (miliseg) => {
      if(ultimaVez){
        this.update((miliseg- ultimaVez)/ 1000);
      }
      ultimaVez = miliseg;
      requestAnimationFrame(movimiento);
    };

    movimiento();

    this.pixelMarcador = 10;
    this.marcadores = [
        '111101101101111',
        '010010010010010',
        '111001111100111',
        '111001111001111',
        '101101111001001',
        '111100111001111',
        '111100111101111',
        '111001001001001',
        '111101111101111',
        '111101111001111',
    ].map(str => {
        const canvas = document.createElement('canvas');
        const s = this.pixelMarcador;
        canvas.height = s * 5;
        canvas.width = s * 3;
        const ctx = canvas.getContext('2d');
        ctx.fillStyle = '#fff';
        str.split('').forEach((fill, i) => {
            if (fill === '1') {
                ctx.fillRect((i % 3) * s, (i / 3 | 0) * s, s, s);
            }
        });
        return canvas;
    });


    this.reset();
  }

  colision(jugador, bola){
    if(jugador.izquierda < bola.derecha && jugador.derecha > bola.izquierda && jugador.arriba < bola.abajo && jugador.abajo > bola.arriba){
      const long = bola.velocidad.longitud;
      bola.velocidad.x = -bola.velocidad.x;
      bola.velocidad.y += 300 * (Math.random() - .5);
      bola.velocidad.longitud = long * 1.05; 
    }
  }

  pintar(){

    this._ctx.fillStyle = '#000';
    this._ctx.fillRect(0,0,this._canvas.width, this._canvas.height);
  
    this.dibujarRectangulo(this.bola1);
    this.jugadores.forEach(jugador => this.dibujarRectangulo(jugador));
  
    this.dibujarPuntuacion();
  }

  dibujarRectangulo(rectangulo){
    this._ctx.fillStyle = '#fff';
    this._ctx.fillRect(rectangulo.izquierda, rectangulo.arriba, rectangulo.size.x, rectangulo.size.y);
  }



  dibujarPuntuacion(){
    const alinear = this._canvas.width / 3;
    const pixelW = this.pixelMarcador * 4;
    this.jugadores.forEach((jugador, index) => {
        const pixeles = jugador.puntuacion.toString().split('');
        const offset = alinear * (index + 1) - (pixelW * pixeles.length / 2) + this.pixelMarcador / 2;
        pixeles.forEach((char, pos) => {
            this._ctx.drawImage(this.marcadores[char|0], offset + pos * pixelW, 20);
        });
    });
  }

  reset(){
    this.bola1.poss.x = this._canvas.width / 2;
    this.bola1.poss.y = this._canvas.height / 2;

    this.bola1.velocidad.x = 0;
    this.bola1.velocidad.y = 0;
  }

  comienzo(){
    if(this.bola1.velocidad.x === 0 && this.bola1.velocidad.y === 0){
      this.bola1.velocidad.x = 300 * (Math.random() > .5 ? 1: -1);
      this.bola1.velocidad.y = 300 * (Math.random()* 2  -1);

      this.bola1.velocidad.longitud = 200;
    }
  }

   update(Tdelta){
    this.bola1.poss.x += this.bola1.velocidad.x * Tdelta;
    this.bola1.poss.y += this.bola1.velocidad.y * Tdelta;
  
    if(this.bola1.izquierda < 0 || this.bola1.derecha > this._canvas.width){
      let jugadorId = this.bola1.velocidad.x < 0 | 0
      this.jugadores[jugadorId].puntuacion++;
      this.reset();
      console.log(jugadorId);
    }
  
    if(this.bola1.arriba < 0 || this.bola1.abajo > this._canvas.height){
      this.bola1.velocidad.y = -this.bola1.velocidad.y;
    }

    this.jugadores[1].poss.y = this.bola1.poss.y;

    this.jugadores.forEach(jugador => this.colision(jugador, this.bola1));

    this.pintar();
  }
  
}

var canvas = document.getElementById('canvas');
var juego1 = new juego(canvas);

canvas.addEventListener('mousemove', event => {
  juego1.jugadores[0].poss.y = event.offsetY;
});

canvas.addEventListener('click', event => {
  juego1.comienzo();
});
