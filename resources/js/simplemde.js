window.simplemde = require('simplemde');

$('.simplemde').each(function(){
    new window.simplemde({
        element: this,
        spellChecker: false,
        hideIcons: ["side-by-side", "fullscreen"]
    });
});
