# blinkiegen
simple blinkie generator in php. adds text to blinkies.

features:
* select blinkie style
* select font
* select text colour

you may also be interested in my [piconaut/blinkies.cafe](https://github.com/piconaut/blinkies.cafe) repo, which is a node.js blinkie maker / web server with a different set of features.


## to run:
* i guess this depends where you're running/hosting?
* this should work out-of-the-box on Glitch -- just import the repo [https://github.com/piconaut/blinkiegen](https://github.com/piconaut/blinkiegen). i currently have it running as a [Glitch project](https://glitch.com/edit/#!/cotton-wirehaired-court).
* Debian/Ubuntu: in bash, at the repo's root directory, use `php -S localhost:80` to run on the standard HTTP port 80.


## to add a new style (Glitch):
1) There are a few extra steps to add images in Glitch. If you're not using Glitch

2) in your Glitch project, click on "Assets" and upload your blank blinkie `.gif`. Then click "Copy URL".

3) click "TERMINAL" at the bottom of the project page.

4) once the terminal loads, type `cd blank` to enter the `~/blank` directory.

5) in the `~/blank` directory, type `wget ` (with a space after)

6) press Ctrl+Shift+V to paste the URL you copied in Step 2. The command line should look kinda like this, but with a different URL:

    `wget https://cdn.glitch.global/2c0d59b9-4345-48bb-aff6-858a6e656a20/blinkiesCafe-o4.gif?v=1650903842137`

7) type ` -O ` (with a space both before and after)

8) type a filename for your blank gif, like `example.gif`. So in total your command line should look like this, but with a different URL and filename:

    `wget https://cdn.glitch.global/2c0d59b9-4345-48bb-aff6-858a6e656a20/blinkiesCafe-o4.gif?v=1650903842137 -O 04-mushroom.gif`

    press Enter.

10) in `index.php`, add an `<option>` element to the style select dropdown, `<select id="instyle" name="instyle">`. set its `value` to match the filename of the blank gif (without the `.gif` extension).

    `<option value="example">Your Style Name!</option>`


# to add a new style (General):

1) save a blank blinkie `.gif` file to the `blank/` directory.
 
    e.g.: `blank/example.gif`
    
2) in `index.php`, add an `<option>` element to the style select dropdown, `<select id="instyle" name="instyle">`. set its `value` to match the filename of the blank gif (without the `.gif` extension).

    e.g.: `<option value="example">Your Style Name!</option>`


## to add a new font:
1) add a `.ttf` file to the `fonts/` folder.

    e.g.: `fonts/example.ttf`
    
2) in `index.php`, add an `<option>` element to the font select dropdown, `<select id="font" name="font">`. set its `value` to match the filename of the ttf file (without the `.ttf` extension).

    e.g.: `<option value="example">New Font Name</option>`
