const flashcards = document.getElementsByClassName("flashcards")[0];
const createBox = document.getElementsByClassName("create-box")[0];
const question = document.getElementById("question");
const answer = document.getElementById("answer");
var contentArray = localStorage.getItem('items') ? JSON.parse(localStorage.getItem('items')) : [];

contentArray.forEach(divMaker);

function divMaker(text) {
    var div = document.createElement("div");
    var cardContent = document.createElement("div");
    var front = document.createElement("div");
    var back = document.createElement("div");
    var h2_front = document.createElement("h2");
    var h2_back = document.createElement("h2");

    div.className = "flashcard";
    cardContent.className = "card-content";
    front.className = "front";
    back.className = "back";

    h2_front.innerHTML = text.my_question;
    h2_back.innerHTML = text.my_answer;

    front.appendChild(h2_front);
    back.appendChild(h2_back);

    cardContent.appendChild(front);
    cardContent.appendChild(back);
    div.appendChild(cardContent);

    div.addEventListener("click", function () {
        div.classList.toggle("flipped");
    });

    flashcards.appendChild(div);
}

function addFlashcard() {
  var flashcard_info = {
    'my_question': question.value,
    'my_answer': answer.value
  };

  contentArray.push(flashcard_info);
  localStorage.setItem('items', JSON.stringify(contentArray));
  divMaker(contentArray[contentArray.length - 1]);
  question.value = '';
  answer.value = '';
}

function delFlashcards() {
    localStorage.clear();
    flashcards.innerHTML = '';
    contentArray = [];
}

function showCreateCardBox() {
    var createBox = document.querySelector('.create-box');
    createBox.style.display = 'block';
}

function hideCreateBox() {
    var createBox = document.querySelector('.create-box');
    createBox.style.display = 'none';
}
