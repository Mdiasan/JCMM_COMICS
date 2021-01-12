document.addEventListener('DOMContentLoaded', () => {
  //array de todas las cartas
  const cardArray = [
    {
      name: 'batman',
      img: 'images/batmandark.png'
    },
    {
      name: 'ironman',
      img: 'images/ironmanred.png'
    },
    {
      name: 'linternaverde',
      img: 'images/linternaverde.png'
    },
    {
      name: 'spiderman',
      img: 'images/spidermanred.png'
    },
    {
      name: 'superman',
      img: 'images/supermanblue.png'
    },
    {
      name: 'thor',
      img: 'images/thoryellow.png'
    },
    {
      name: 'batman',
      img: 'images/batmandark.png'
    },
    {
      name: 'ironman',
      img: 'images/ironmanred.png'
    },
    {
      name: 'linternaverde',
      img: 'images/linternaverde.png'
    },
    {
      name: 'spiderman',
      img: 'images/spidermanred.png'
    },
    {
      name: 'superman',
      img: 'images/supermanblue.png'
    },
    {
      name: 'thor',
      img: 'images/thoryellow.png'
    }
  ]

  //desordenamos el array para que las cartas sean aleatorias
  cardArray.sort(() => 0.5 - Math.random())

  const grid = document.querySelector('.grid')
  const resultDisplay = document.querySelector('#result')
  var cardsChosen = []
  var cardsChosenId = []
  var cardsWon = []

  //creando el tablero
  function createBoard() {
    for (let i = 0; i < cardArray.length; i++) {
      var card = document.createElement('img')
      card.setAttribute('src', 'images/blank.png')
      card.setAttribute('data-id', i)
      card.addEventListener('click', flipCard)
      grid.appendChild(card)

      
    }
  }

  //validando las uniones de las cartas
  function checkForMatch() {
    var cards = document.querySelectorAll('img')
    const optionOneId = cardsChosenId[0]
    const optionTwoId = cardsChosenId[1]
    
    if(optionOneId == optionTwoId) {
      cards[optionOneId].setAttribute('src', 'images/blank.png')
      cards[optionTwoId].setAttribute('src', 'images/blank.png')
      alert('No clickes en la misma imagen!')
    }
    else if (cardsChosen[0] === cardsChosen[1]) {
      alert('Ehnorabuena has encontrado una pareja!')
      cards[optionOneId].setAttribute('src', 'images/white.png')
      cards[optionTwoId].setAttribute('src', 'images/white.png')
      cards[optionOneId].removeEventListener('click', flipCard)
      cards[optionTwoId].removeEventListener('click', flipCard)
      cardsWon.push(cardsChosen)

      var sonidoscore = new Audio();
	    sonidoscore.src = 'Sounds/acierto.mp3';
	    sonidoscore.play();
    } else {
      cards[optionOneId].setAttribute('src', 'images/blank.png')
      cards[optionTwoId].setAttribute('src', 'images/blank.png')
      alert('Oh, intentalo de nuevo')
    }
    cardsChosen = []
    cardsChosenId = []
    resultDisplay.textContent = cardsWon.length
    if  (cardsWon.length === cardArray.length/2) {
      var sonidoscore = new Audio();
	    sonidoscore.src = 'Sounds/victoria.mp3';
	    sonidoscore.play();
      resultDisplay.textContent = 'Ehnorabuena! Has encontrado todas las cartas!'
      
    }
  }

  //aqui le damos la vuelta a la carta
  function flipCard() {
    var cardId = this.getAttribute('data-id')
    cardsChosen.push(cardArray[cardId].name)
    cardsChosenId.push(cardId)
    this.setAttribute('src', cardArray[cardId].img)
    if (cardsChosen.length ===2) {
      setTimeout(checkForMatch, 500)
    }
  }

  createBoard()
})
