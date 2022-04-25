# blinkiegen
simple blinkie generator in php

to add a new style:
1) save a blank blinkie `.gif` file to the `blank/` folder.
 
    e.g.: `blank/example.gif`
    
2) in `index.php`, add an `<option>` element to the style select dropdown, `<select id="instyle" name="instyle">`. set its `value` to match the filename of the blank gif (without the `.gif` extension).

    e.g.: `<option value="example">Your Style Name!</option>`

to add a new font:
1) add a `.ttf` file to the `fonts/` folder.

    e.g.: `fonts/example.ttf`
    
2) in `index.php`, add an `<option>` element to the font select dropdown, `<select id="font" name="font">`. set its `value` to match the filename of the ttf file (without the `.ttf` extension).

    e.g.: `<option value="example">New Font Name</option>`
