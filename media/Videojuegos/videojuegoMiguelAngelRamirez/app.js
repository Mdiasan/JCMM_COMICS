(function (window, document, game, undefined) {

   
    
    document.onkeydown = function(event) {
        switch (event.key) {
          case "ArrowLeft":
           
              direction = 'left';
            
            break;
          case "ArrowRight":
           
              direction = 'right';
                          

            
            break;
          case "ArrowUp":
          
              direction = 'up';
            
            break;
          case "ArrowDown":
            
              direction = 'down';
            
            
            break;
        }
      }
    })(window, document, game);