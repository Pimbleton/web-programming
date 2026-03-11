// Part 1 materials
let displayButton = document.getElementById("displayButton");
let userTextInput = document.getElementById("userText");
let displayText = document.getElementById("displayText");

function displayDisplayText() {
    displayText.innerHTML = userTextInput.value;
    updateFontSize();
}

displayButton.addEventListener('click', displayDisplayText);



// Part 2 materials
let decreaseButton = document.getElementById("decreaseButton");
let resetButton = document.getElementById("resetButton");
let increaseButton = document.getElementById("increaseButton");

let fontSizeDisplay = document.getElementById("fontSizeDisplay");
let defaultFontSize = 12;                                               
let fontSize = 12;                                                      

function decreaseFontSize() {
    if (displayText.innerHTML === "") {
        alert("What exactly are you decrease? You need to enter some text first!");
        return;
    }
    
    if (fontSize > 1) {
        fontSize--;
        updateFontSize();
    } else {
        alert("Ah ah ah. Wouldn't want it to go missing now, would we?");
    }
}

function resetFontSize() {
    if (displayText.innerHTML === "") {
        alert("What exactly are you resetting? You need to enter some text first!");
        return;
    }
    
    fontSize = 12;
    updateFontSize();
}

function increaseFontSize() {
    if (displayText.innerHTML === "") {
        alert("What exactly are you increasing? You need to enter some text first!");
        return;
    }

    fontSize++;
    updateFontSize();
}

function updateFontSize() {
    displayText.style.fontSize = fontSize + "pt";
    fontSizeDisplay.innerHTML = "Font size: " + fontSize + "pt";
}

decreaseButton.addEventListener('click', decreaseFontSize);
resetButton.addEventListener('click', resetFontSize);
increaseButton.addEventListener('click', increaseFontSize);



///Part 3 materials
const colorButtons = document.querySelectorAll('input[name="colorChange"]');
const backgroundColorButtons = document.querySelectorAll('input[name="backgroundChange"]');

function changeFontColor(event) {
    if (displayText.innerHTML === "") {
        alert("What exactly are you changing the color of? You need to enter some text first!");
        event.target.checked = false;
        return;
    }

    switch (event.target.value) {
        case "red":
            displayText.style.color = "#FFADAD";
            break;
        case "orange":
            displayText.style.color = "#FFD6A5";
            break;
        case "yellow":
            displayText.style.color = "#FDFFB6";
            break;
        case "green":
            displayText.style.color = "#CAFFBF";
            break;
        case "blue":
            displayText.style.color = "#9BF6FF";
            break;
        case "indigo":
            displayText.style.color = "#A0C4FF";
            break;
        case "purple":
            displayText.style.color = "#BDB2FF";
            break;
        case "black":
            displayText.style.color = "#000000";
            break;
    }
}

function changeBackgroundColor(event) {
    if (displayText.innerHTML === "") {
        alert("What exactly are you changing the background color of? You need to enter some text first!");
        event.target.checked = false;
        return;
    }

    switch (event.target.value) {
        case "darkred":
            displayText.style.backgroundColor = "red";
            break;
        case "darkorange":
            displayText.style.backgroundColor = "orange";
            break;
        case "darkyellow":
            displayText.style.backgroundColor = "yellow";
            break;
        case "darkgreen":
            displayText.style.backgroundColor = "green";
            break;
        case "darkblue":
            displayText.style.backgroundColor = "blue";
            break;
        case "darkindigo":
            displayText.style.backgroundColor = "indigo";
            break;
        case "darkpurple":
            displayText.style.backgroundColor = "purple";
            break;
        case "white":
            displayText.style.backgroundColor = "white";
            break;
    }
}

colorButtons.forEach(button => button.addEventListener('change', changeFontColor));
backgroundColorButtons.forEach(button => button.addEventListener('change', changeBackgroundColor));



//Part 4 materials
suiseiImage = document.getElementById("hoshimachiSuisei");
ninomaeImage = document.getElementById("ninomaeInanis");
vestiaImage = document.getElementById("vestiaZeta");
hoverImage = document.getElementById("hoverImage");
altText = document.getElementById("altText");

function showImage(event) {
    targetImage = event.target;
    hoverImage.src = targetImage.src;
    altText.innerHTML = targetImage.alt;
}

suiseiImage.addEventListener('mouseover', showImage);
ninomaeImage.addEventListener('mouseover', showImage);
vestiaImage.addEventListener('mouseover', showImage);