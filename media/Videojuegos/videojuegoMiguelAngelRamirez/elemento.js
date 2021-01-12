class Elemento{
    
    constructor(x,y,ancho,alto,velocidad){
        this.x=x;
        this.y=y;
        this.ancho=ancho;
        this.alto=alto;
        this.velocidad=velocidad;
        
        this.vivo=true;
        
    }


    avanzar(direccion) {
        if(direccion==1){
            this.x = this.x + this.velocidad;

        }
        if(direccion==0){
            this.x = this.x - this.velocidad;
        }
    }

    volar(direccion){
        if(direccion==1){
            this.y = this.y + this.velocidad;

        }
        if(direccion==0){
            this.y = this.y - this.velocidad;
        }
    }
    estaVivo(){
       return this.vivo;
    }
    matar(){
        this.vivo=false;
    }
    colores(numero){
        this.color=numero;
    }

}