const cards = document.querySelectorAll('.memory-card');
const winMessage = document.getElementById('winMessage');

let hasFlippedCard = false;
let lockBoard = false;
let firstCard, secondCard;
let matchedCards = 0; // conincidencias de cards

/* Voltea las cards */
function flipCard() {
    if (lockBoard || this === firstCard) return;

    this.classList.add('flip');

    if (!hasFlippedCard) {
        hasFlippedCard = true;
        firstCard = this;
        return;
    }

    secondCard = this;
    checkForMatch();
}

/* Checquea que las card coincidan con el nombre de la card */
function checkForMatch() {
    const isMatch = firstCard.dataset.framework === secondCard.dataset.framework;
    isMatch ? disableCards() : unflipCards();
}

/* Deshabilita las cards que ya fueron encontradas y no se puede volver a dar click */
function disableCards() {
    firstCard.removeEventListener('click', flipCard);
    secondCard.removeEventListener('click', flipCard);

    // incremantamos las coincidencias siguientes
    matchedCards += 2; 
    // si todas las cards coinciden se muestra el mensaje de ganador
    if (matchedCards === cards.length) {
        setTimeout(() => {
            winMessage.style.display = 'block';
        }, 1000);
    }
    // se resetea el tablero
    resetBoard();
}

/* Si las cards no coinciden se deshabilita el tablero y se vuelven a dar vuelta */
function unflipCards() {
    lockBoard = true;

    setTimeout(() => {
        firstCard.classList.remove('flip');
        secondCard.classList.remove('flip');
        resetBoard();
    }, 1500);
}

/* Resetea el tablero */
function resetBoard() {
    [hasFlippedCard, lockBoard] = [false, false];
    [firstCard, secondCard] = [null, null];
}

/* Funcion para mezclar las cards */
function shuffle() {
    cards.forEach(card => {
        let randomPos = Math.floor(Math.random() * cards.length);
        card.style.order = randomPos;
    });
}

/* Muestra todas las cards por un tiempo determinado */
function showAllCardsTemporarily() {
    cards.forEach(card => card.classList.add('flip'));

    setTimeout(() => {
        cards.forEach(card => card.classList.remove('flip'));
        cards.forEach(card => card.addEventListener('click', flipCard));
    }, 2000);
}

/* Reinicia el juego */
function restartGame() {
    matchedCards = 0;
    winMessage.style.display = 'none';
    cards.forEach(card => {
        card.classList.remove('flip');
        card.removeEventListener('click', flipCard);
    });
    shuffle();
    showAllCardsTemporarily();
}

/* Inicializa el juego */
(function initializeGame() {
    shuffle();
    showAllCardsTemporarily();
    cards.forEach(card => card.addEventListener('click', flipCard));
})();