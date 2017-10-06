<?php
/**
 * Created by PhpStorm.
 * User: jonse
 * Date: 06.10.2017
 * Time: 15:45
 */

/**
 * This function acts as a html string template, which will insert the title string and the menu item names and their
 * respective links into the template for the main section of the vulcan page, which contains the slide show and the
 * overlay menu.
 * The function returns the html string ti be echo-ed to the client browser.
 * @param $overlayTitle: The title to be displayed on top of the slide show
 * @param $menuItemLinkDict: A associative array aka dictionary, which contains the names of the menu items as keys
 *  and the string links (to be inserted in the href attribute of the a tags)
 * @return string: The html code to be displayed as string
 */
function vulcan_main_section($overlayTitle, $menuItemLinkDict)
{
    // Defining dynamic variables for the key value pairs in the Dict for the menu items, so that these variables
    // can be set into the tempString directly
    $count = 1;
    foreach ($menuItemLinkDict as $key => $value) {
        ${"menuItemName" . $count} = $key;
        ${"menuItemLink" . $count} = $value;
        $count++;
    }

    $tempString = "
<div class='vulcan-section-wrapper' id='main-section-wrapper'>
<div class='image-wrapper' id='slideshow-image-wrapper'>
<!-- Insert the background image here -->
</div>

<!-- This is the horizontal wrapper for the overlay of the slide show pictures -->
<div class='pane-layout' id='slide-show-overlay-wrapper'>
<!-- This is the left button for the slide show -->
<div class='slide-show-button-wrapper'>
<button class='slide-show-button' id='slide-show-button-main-left'></button>
</div>
<!-- The main window for the overlay of the slide show -->
<div class='overlay-pane' id='slide-show-main-overlay-pane'>
<p id='slide-show-overlay-title'>$overlayTitle</p>
<!-- The wrapper for the three links, which represent the overlay menu -->
<div id='slide-show-overlay-menu-wrapper'>
<a class='slide-show-overlay-menu-item' id='slide-show-overlay-menu-item-first' href='$menuItemLink1'>$menuItemName1</a>
<a class='slide-show-overlay-menu-item' id='slide-show-overlay-menu-item-second' href='$menuItemLink2'>$menuItemName2</a>
<a class='slide-show-overlay-menu-item' id='slide-show-overlay-menu-item-third' href='$menuItemLink3'>$menuItemName3</a>
</div>
</div>
<!-- This is the right button for the slide show-->
<div class='slide-show-button-wrapper' id='slide-show-button-wrapper-left'>
<button class='slide-show-button' id='slide-show-button-main-right'></button>
</div>
</div>
</div>
    ";

    return $tempString;
}