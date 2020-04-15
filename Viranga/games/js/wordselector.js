const cards = document.querySelectorAll(".memory-card");
let hasFlippedCard = false;
let lockBoard=false;
let firstCard, secondCard;
const timeOut = document.querySelector(".timeOut");
const start = document.querySelector(".start");

//set timer
var timer = setInterval(function(){gameTimer()}, 1000);
var seconds = 59;

function gameTimer()
{
    if(seconds ===0)
    {
        gameStop();
        timeOut.classList.add("show");
    }
    document.querySelector(".time").innerHTML = "00:" + zeroPad(seconds,2)
    seconds= seconds -1;
}

function gameStop()
{
    clearInterval(timer);
}
function zeroPad(num,places)
{
    var zero = places-num.toString().length +1;
    return Array(+(zero > 0 && zero)).join("0")+ num;
}




//flip card
function flipCard()
{
    if(lockBoard) return;

    if(this===firstCard) return;

    this.classList.add('flip');

    if(!hasFlippedCard)
    {
        hasFlippedCard = true;
        firstCard =this;
        return;
    }
    
        hasFlippedCard=false;
        secondCard = this;
        checkForMatch();

  
}

//check for cards match
function checkForMatch()
{
    if(firstCard.dataset.card===secondCard.dataset.card)
    {
        disableCards();
    }
    else
    {
        unFlipCards();
        
    }
}


//disable once they were clicked
function disableCards()
{
    firstCard.removeEventListener('click', flipCard);
    secondCard.removeEventListener('click', flipCard);
}

function unFlipCards()
{
    lockBoard = true;
    setTimeout(() =>
    {
        firstCard.classList.remove('flip');
        secondCard.classList.remove('flip');
        resetBoard();
    },1200);
}

//reset 
function resetBoard()
{
    [hasFlippedCard, lockBoard] = [false, false];
    [firstCard ,secondCard] = [null, null];
}


//start button
function getStart()
{
    start.classList.remove("hide");
    shuffle();
    
}
//shuffle the cards
function shuffle()
{
    gameTimer();
    
    cards.forEach(card => 
    {
        let randomPos = Math.floor(Math.random()*12);
        card.style.order = randomPos;
    });
}

//button try again
function tryAgain()
{
    window.location.reload();
}

cards.forEach(card => card.addEventListener('click', flipCard));