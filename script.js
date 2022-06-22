const colorArray = ["orange", "purple", "blue"];

document.addEventListener("DOMContentLoaded", function(event) { 
    setColorLetterListeners("orange");
    setColorLetterListeners("purple");
    setColorLetterListeners("blue");

    changeKeywordOptions("orange");
    changeKeywordOptions("purple");
    changeKeywordOptions("blue");
});

function setColorLetterListeners(letterColor) {
    var letters = document.getElementsByClassName(letterColor);
    for (let letter of letters) {
        letter.addEventListener('change', colorLetterChanged);
    }
}

function colorLetterChanged(event) {
    
    changeKeywordOptions(retrieveColorClass(event.target.className));

}

function changeKeywordOptions(color) {
    let keyword_letters_class = color + "_keyword";
    console.log(keyword_letters_class);
    var color_letters = document.getElementsByClassName(color);

    let keyword_letters = document.getElementsByClassName(keyword_letters_class);
    for (let keyword_letter of keyword_letters) {
        keyword_letter.innerHTML = '';
        for (let color_letter of color_letters) {
            let option = document.createElement('option');
            option.innerHTML = color_letter.value;
            keyword_letter.appendChild(option);
        }
    }
}

function retrieveColorClass(className) {
    for (let color of colorArray) {
        if (className.includes(color)) return color;
    }
}