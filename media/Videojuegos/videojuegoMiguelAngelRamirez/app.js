(function (window, document, game, undefined) {

   
    
    document.onkeydown = function(event) {
        switch (event.key) {
          case "a":
           
              direction = 'left';
            
            break;
          case "d":
           
              direction = 'right';
                          

            
            break;
          case "w":
          
              direction = 'up';
            
            break;
          case "s":
            
              direction = 'down';
            
            
            break;
        }
      }
    })(window, document, game);