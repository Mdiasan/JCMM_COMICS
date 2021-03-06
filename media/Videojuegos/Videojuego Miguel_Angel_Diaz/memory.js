document.addEventListener('DOMContentLoaded', () => {
  
  //Array de todas las cartas de los superheroes
  const cardArray = [
    {
      name: 'batman',
      img: 'media/images/batmandark.png'
    },
    {
      name: 'ironman',
      img: 'media/images/ironmanred.png'
    },
    {
      name: 'linternaverde',
      img: 'media/images/linternaverde.png'
    },
    {
      name: 'spiderman',
      img: 'media/images/spidermanred.png'
    },
    {
      name: 'superman',
      img: 'media/images/supermanblue.png'
    },
    {
      name: 'thor',
      img: 'media/images/thoryellow.png'
    },
    {
      name: 'batman',
      img: 'media/images/batmandark.png'
    },
    {
      name: 'ironman',
      img: 'media/images/ironmanred.png'
    },
    {
      name: 'linternaverde',
      img: 'media/images/linternaverde.png'
    },
    {
      name: 'spiderman',
      img: 'media/images/spidermanred.png'
    },
    {
      name: 'superman',
      img: 'media/images/supermanblue.png'
    },
    {
      name: 'thor',
      img: 'media/images/thoryellow.png'
    }
  ]

  //Desordenamos el array para que las cartas sean aleatorias
  cardArray.sort(() => 0.5 - Math.random())

  const grid = document.querySelector('.grid')
  const resultDisplay = document.querySelector('#result')
  const resultDisplay2 = document.querySelector('#result2')
  var cardsChosen = []
  var cardsChosenId = []
  var cardsWon = []

  //Creando el tablero
  function createBoard() {
    for (let i = 0; i < cardArray.length; i++) {
      var card = document.createElement('img');
      card.setAttribute('src', 'media/images/blank.png');
      card.setAttribute('data-id', i);
      card.setAttribute('data-name',"hola");
      card.setAttribute('alt',"Imagen");
      card.addEventListener('click', flipCard);
      grid.appendChild(card);

      
    }
  }

  //validando las uniones de las cartas
  function checkForMatch() {
    var cards = document.querySelectorAll("img[data-name]");

    const optionOneId = cardsChosenId[0]
    const optionTwoId = cardsChosenId[1]
    
    if(optionOneId == optionTwoId) {
      cards[optionOneId].setAttribute('src', 'media/images/blank.png')
      cards[optionTwoId].setAttribute('src', 'media/images/blank.png')
      resultDisplay2.textContent ='No clickes en la misma imagen!';
    }
    else if (cardsChosen[0] === cardsChosen[1]) {
      cards[optionOneId].setAttribute('src', 'media/images/white.png')
      cards[optionTwoId].setAttribute('src', 'media/images/white.png')
      cards[optionOneId].removeEventListener('click', flipCard)
      cards[optionTwoId].removeEventListener('click', flipCard)
      cardsWon.push(cardsChosen)
      resultDisplay2.textContent ='Ehnorabuena has encontrado una pareja!'
      
      var sonidoscore = new Audio();
	    sonidoscore.src = 'media/Sounds/acierto.mp3';
	    sonidoscore.play();
    } else {
      cards[optionOneId].setAttribute('src', 'media/images/blank.png')
      cards[optionTwoId].setAttribute('src', 'media/images/blank.png')
      resultDisplay2.textContent ='Oh, intentalo de nuevo'
    }
    cardsChosen = []
    cardsChosenId = []
    resultDisplay.textContent = cardsWon.length
    if  (cardsWon.length === cardArray.length/2) {
      var sonidoscore = new Audio();
	    sonidoscore.src = 'media/Sounds/victoria.mp3';
	    sonidoscore.play();
      resultDisplay2.textContent = 'Ehnorabuena! Has encontrado todas las cartas!'
      
    }
  }

  //Aqui le damos la vuelta a la carta
  function flipCard() {
    var cardId = this.getAttribute('data-id')
    cardsChosen.push(cardArray[cardId].name)
    cardsChosenId.push(cardId)
    this.setAttribute('src', cardArray[cardId].img)
    if (cardsChosen.length ===2) {
      setTimeout(checkForMatch, 500)
    }
  }

//Creamos el tablero
  createBoard()
})
