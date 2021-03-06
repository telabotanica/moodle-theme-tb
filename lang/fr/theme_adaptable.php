<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Version details
 *
 * @package    theme_adaptable
 * @copyright 2015 Jeremy Hopkins (Coventry University)
 * @copyright 2015 Fernando Acedo (3-bits.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 */

// General.

$string['choosereadme'] = '
<div class="clearfix">
<div class="well">
 <h2>Adaptable</h2>
 <p><img class="img-polaroid" src="adaptable/pix/screenshot.png" /></p>
</div>
<div class="well">
 <h2>Credits</h2>
 <h3>About</h3>
 <p>Adaptable is a moodle 2-columns responsive theme highly customizable and based in the popular BCU theme.</p>
 <p>This theme is licensed under the GPL (GNU General Public License). You can find a complete licence copy in: http://www.gnu.org/licenses/</p>
 <p>Modify it / Improve it / Share it</p>
 <br>
 <p>This theme has been developed by:<br>
 Jeremy Hopkins (Coventry University)<br>
 Fernando Acedo (3-bits.com)<br>
 </p>
 <br>
 <h3>Bugs Report</h3>
 <p>You can report bugs using the moodle forum or https://bitbucket.org/covuni/moodle-theme_adaptable/issues</p>
 <br>
 <h3>Documentation</h3>
 <p></p>
 <br>
 <h3>Demo</h3>
 <p>You can see a demo and download a Quickinstall version in <a href="http://3-bits.com/demo/adaptable">http://3-bits.com/demo/adaptable</a></p>
 <br>

</div>
</div>';



$string['pluginname'] = 'Adaptable';
$string['configtitle'] = 'Adaptable';

$string['region-middle'] = 'middle';
$string['region-frnt-footer'] = 'footer';
$string['region-side-post'] = 'Droite';
$string['region-side-pre'] = 'Gauche';
$string['frnt-footer'] = 'Les blocs placés dans cette zone ne seront visibles que pour les administrateurs.';


// Settings page headings ******************************************.
$string['settingsmaincolors'] = 'Couleurs principales';
$string['settingsheadercolors'] = "Couleurs de l'entête";
$string['settingsmenucolors'] = 'Couleurs du menu';
$string['settingsmobilemenucolors'] = 'Couleurs du menu mobile';
$string['settingsinfoboxcolors'] = "Couleurs de la boîte d'infos (Info Box)";
$string['settingssecondinfoboxcolors'] = "Couleurs de la deuxième boîte d'infos (Info Box)";
$string['settingsmarketingcolors'] = 'Couleurs du bloc "Marketing"';
$string['settingsoverlaycolors'] = 'Couleur des tuiles en surimpression (Overlay)';
$string['settingsnavbarcolors'] = 'Couleurs de la barre de navigation (navbar)';
$string['settingsalertbox'] = "Boîte d'alertes";
$string['settingsbreadcrumbcolors'] = "Couleurs du fil d'Ariane (Breadcrumb)";
$string['settingsfootercolors'] = 'Couleurs du pied de page';
$string['settingsfonts'] = 'Polices';
$string['analyticssettings'] = 'Analytics';


// Admin Menu Strings.
$string['blocksettings'] = 'Réglages des blocs';
$string['frontpagealertsettings'] = "Boîte d'alertes";
$string['frontpageblockregionsettings'] = 'Créateur de zones de blocs';
$string['frontpageblocksettings'] = 'Blocks "marketing"';
$string['frontpagetickersettings'] = 'Frontpage Ticker';
$string['frontpageslidersettings'] = 'Frontpage Slider';
$string['frontpagecoursesettings'] = "Cours en page d'accueil";
$string['frontpagesettingsheading'] = "Rendu de la page d'accueil";
$string['frontpagedesc'] = "Configurer la manière dont les boîtes des cours seront affichées sur la page d'accueil";
$string['frontpagerenderer'] = 'Frontpage Course Boxes';
$string['frontpagerendererdesc'] = "Configurer la manière dont les boîtes des cours seront affichées sur la page d'accueil";
$string['frontpagerendereroption1'] = 'Tiles';
$string['frontpagerendereroption2'] = 'Tiles w/ overlay';
$string['frontpagerendereroption3'] = 'Moodle default';
$string['frontpagerendereroption4'] = 'Coventry Tiles';


// Ticker **********************************************************.
$string['tickersettings'] = 'News Ticker';
$string['tickersettingsheading'] = 'Setup News Ticker on Front Page. See the layout <a href="./../theme/adaptable/pix/layout.png" target="_blank"> here</a>';
$string['tickerdesc'] = 'Here you can set a news ticker to run across the front page of your Moodle site.
  It is intended as a less intrusive alternative to the slider taking up very little space.
  To setup your ticker simply entere a bulleted list and include any hyperlinks you need to in that text.
  Note: you must not put ul tags around our list, only li. Moodles text editor tends to add ul tags.
  If your ticker does not load properly switch to HTML view and ensure you have only li tags:
  <pre>
  &lt;li&gt;News item one.....&lt;/li&gt;
  &lt;li&gt;News item two.....&lt;/li&gt;
  </pre>';

$string['tickerdefault'] = 'No news items to display';

$string['enableticker'] = 'Enable the news ticker on the homepage?';
$string['enabletickerdesc'] = 'Check to enable the homepage ticker.';

$string['enabletickermy'] = 'Enable the news ticker on the My Home / Dashboard page?';
$string['enabletickermydesc'] = 'Check to enable the ticker on My Home / Dashboard.';

$string['enabletickerc'] = 'Enable the news ticker on internal pages?';
$string['enabletickercdesc'] = 'Check to enable the ticker on internal pages.';

$string['tickerwidth'] = 'News Ticker Width';
$string['tickerwidthdesc'] = 'You can use this setting to fix the news ticker at 100% width.';

$string['tickertext1'] = 'News Ticker Text';
$string['tickertext1desc'] = 'Add news ticker text in list format. See the read me for more info.';

$string['tickertext2'] = 'News Ticker Text 2';
$string['tickertext2desc'] = 'By controlling access on profile fields you can show different news ticker items to different types of user using this second text field';

$string['tickertextprofilefield'] = 'Custom Profile Field Name=Value (optional)';
$string['tickertextprofilefielddesc'] = 'Add access rule using for custom profile field eg: "usertype=student"';

$string['ticker'] = 'Announcements';

// Slideshow *******************************************************.
$string['slideshowsettings'] = 'Slideshow';
$string['slideshowsettingsheading'] = 'Customize the carousel on the front page. See the layout <a href="./../theme/adaptable/pix/layout.png" target="_blank"> here</a>';
$string['slideshowdesc'] = 'Upload the images, add the links and description for the carousel on the front page.';

$string['sliderimage'] = 'Slider Picture';
$string['sliderimagedesc'] = 'Add an image for your slide.';

$string['slidercaption'] = 'Slider Caption';
$string['slidercaptiondesc'] = 'Add a caption for your slide';

$string['sliderurl'] = 'Slide Link URL';
$string['sliderurldesc'] = 'Add a URL to which your slide links to when clicked.';

$string['slidermargintop'] = 'Margin above slider';
$string['slidermargintopdesc'] = 'Set the size of the margin above the slider.';

$string['slidermarginbottom'] = 'Margin below slider';
$string['slidermarginbottomdesc'] = 'Set the size of the margin below the slider.';

$string['sliderenabled'] = 'Enable Slider';
$string['sliderenableddesc'] = 'Enable a slider at the top of your home page';

$string['sliderfullscreen'] = 'Slider full screen';
$string['sliderfullscreendesc'] = 'Check this box to make the slider full screen (100% width)';

$string['slideroption2'] = 'Choose Slider Type';
$string['slideroption2desc'] = 'Choose Slider Type <strong>and then click SAVE</strong> to see color settings for your chosen slider';
$string['slideroption2snippet'] = '<p>Sample HTML for Slider Captions:</p>
<pre>
&#x3C;div class=&#x22;span6 col-sm-6&#x22;&#x3E;
&#x3C;h3&#x3E;Hand-crafted&#x3C;/h3&#x3E; &#x3C;h4&#x3E;pixels and code for the Moodle community&#x3C;/h4&#x3E;
&#x3C;a href=&#x22;#&#x22; class=&#x22;submit&#x22;&#x3E;Please favorite our theme!&#x3C;/a&#x3E;
</pre>';

$string['slidercount'] = 'Slider Count';
$string['slidercountdesc'] = 'Select how many slides you want to add <strong>then click SAVE</strong> to load the input fields';

$string['sliderh3color'] = 'Slider 1 H3 Color';
$string['sliderh3colordesc'] = 'Choose the color you want for the slider 1 H3 tag';

$string['sliderh4color'] = 'Slider 1 H4 Color';
$string['sliderh4colordesc'] = 'Choose the color you want for the slider 1 H4 tag';

$string['slidersubmitcolor'] = 'Slider 1 Submit Text';
$string['slidersubmitcolordesc'] = 'Choose the text color of the Slider 1 submit button';

$string['slidersubmitbgcolor'] = 'Slider 1 Submit bg';
$string['slidersubmitbgcolordesc'] = 'Choose the background color of the Slider 1 submit button';

$string['slider2h3color'] = 'Slider 2 H3 Text Color';
$string['slider2h3colordesc'] = 'Choose the text color you want for the slider 2 H3 tag';

$string['slider2h4color'] = 'Slider 2 H4 Text Color';
$string['slider2h4colordesc'] = 'Choose the text color you want for the slider 2 H4 tag';

$string['slider2h3bgcolor'] = 'Slider 2 H3 bg Color';
$string['slider2h3bgcolordesc'] = 'Choose the background color you want for the slider 2 H3 tag';

$string['slider2h4bgcolor'] = 'Slider 2 H4 bg Color';
$string['slider2h4bgcolordesc'] = 'Choose the background color you want for the slider 2 H4 tag';

$string['slideroption2submitcolor'] = 'Slider 2 Submit Text';
$string['slideroption2submitcolordesc'] = 'Set a background colour for the submit text in slider style option 2 colour';

$string['slideroption2color'] = 'Slider 2 Submit bg';
$string['slideroption2colordesc'] = 'Set a background colour for the submit text in slider style option';

$string['slideroption2a'] = 'Slider style option 2 arrow background colour';
$string['slideroption2adesc'] = 'Set the slider style option 2 arrow background colour';

// Block Regions ***************************************************.
$string['blocklayoutbuilder'] = 'Frontpage Block Regions';
$string['blocklayoutbuilderdesc'] = 'Below you can build your own layout for block regions on the front page.
To add content these regions you will need to <strong> turn editing on on the front page of Moodle</strong>.
Then you can begin to drag/drop blocks into the regions you create!';

$string['blocklayoutlayoutcheck'] = 'Check your layout';
$string['blocklayoutlayoutcheckdesc'] = 'Use the tool below to check the number of blocks you have used and see a representation of your new layout.';
$string['blocklayoutlayoutcount1'] = 'You can set a maximum of ';
$string['blocklayoutlayoutcount2'] = ' block regions. You are currently using: ';

$string['blocklayoutlayoutrow'] = 'Block Region Row ';
$string['blocklayoutlayoutrowdesc'] = 'Add / set layout for block region row on front page.';

$string['frontpageblocksenabled'] = 'Enable custom block region on front page';
$string['frontpageblocksenableddesc'] = 'You can enable / disable custom block regions on the front page.
You can then drag and drop blocks into the regions you created';

$string['layoutcheck'] = 'Check your layout';
$string['layoutcheckdesc'] = 'Use the tool below to check the number of blocks you have used and see a representation of your new layout.';
$string['layoutcount1'] = 'You can set a maximum of ';
$string['layoutcount2'] = ' block regions. You are currently using: ';

// Marketing Blocks & Info Box *************************************.
$string['marketingsettings'] = 'Marketing Blocks';
$string['marketingsettingsheading'] = 'Customize the marketing blocks that appear on the front page. See the layout <a href="./../theme/adaptable/pix/layout.png" target="_blank"> here</a>';
$string['marketingdesc'] = 'There are two full width info boxes witht differing styles you can use.
In addition to this there is a layout builder allowing you to decide how many blocks you need and define your own layout, please see the <a href="./../theme/adaptable/README.txt" target="_blank">README</a> file that comes with this theme.';

$string['marketingbuilderheading'] = 'Marketing Block Layout Builder';
$string['marketingbuilderdesc'] = 'Use the tool below to setup your marketing blocks.
Once defined the block settings will appear further down the page.';

$string['marketlayoutrow'] = 'Marketing Block Row';
$string['marketlayoutrowdesc'] = 'Add / set layout for marketing block row on front page';

$string['market'] = 'Marketing Block ';
$string['marketdesc'] = 'Add html for marketing block (see the <a href="./../theme/adaptable/README.txt" target="_blank">README</a> file for additional info and hints).';

$string['layoutaddcontent'] = 'Happy With Your Layout? Now Add Content to Your Blocks:';
$string['layoutaddcontentdesc1'] = 'You have configured ';
$string['layoutaddcontentdesc2'] = ' marketing blocks. If you are happy with this layout add content to the blocks below.
If you are not happy use the layout builder above to make changes<br />';

$string['infobox'] = 'Frontpage Info Box';
$string['infoboxdesc'] = 'Frontpage info block HTML (see the <a href="./../theme/adaptable/README.txt" target="_blank">README</a> file for additional info and hints).';

$string['infoboxfullscreen'] = 'Make infobox full screen';
$string['infoboxfullscreendesc'] = 'Turning this option on will make the infobox full screen.';

$string['infoboxcolor'] = 'Frontpage Info Box background colour';
$string['infoboxcolordesc'] = 'Set the frontpage Info Box background colour';

$string['infoboxtextcolor'] = 'Frontpage Info Box text colour';
$string['infoboxtextcolordesc'] = 'Set the frontpage Info Box text colour';

$string['infobox2'] = 'Frontpage Secondary Info Box';
$string['infobox2desc'] = 'Frontpage Secondary Info Box (see the <a href="./../theme/adaptable/README.txt" target="_blank">README</a> file for additional info and hints).';

$string['infoboxcolor2'] = 'Secondary frontpage Info Box background colour';
$string['infoboxcolor2desc'] = 'Set the secondary frontpage Info Box background colour';

$string['infoboxtextcolor2'] = 'Secondary frontpage Info Box text colour';
$string['infoboxtextcolor2desc'] = 'Set the secondary frontpage Info Box text colour';

$string['frontpagemarketenabled'] = 'Enable Marketing Blocks';
$string['frontpagemarketenableddesc'] = 'Set the marketing blocks in the frontpage.';

$string['frontpagemarketoption'] = 'Choose style for marketing blocks';
$string['frontpagemarketoptiondesc'] = 'You can apply different styles to marketing blocks.
Note: BCU style is designed to work with images at top of block.';

// Footer **********************************************************.
$string['footersettings'] = 'Footer';
$string['footersettingsheading'] = 'Set the content that should appear in the footer. See the layout <a href="./../theme/adaptable/pix/layout.png" target="_blank"> here</a> ';
$string['footerdesc'] = 'Control the content that appears in the 4 footer sections of the page.';

$string['showfooterblocks'] = 'Show Footnote Block';
$string['showfooterblocksdesc'] = 'Show / hide the lower footerblock used for footnote / moodle docs region';

$string['footerblocksplacement'] = 'Footer Blocks Placement ';
$string['footerblocksplacementdesc'] = 'Control where the upper footer blocks are displayed. Sitewide is default.';
$string['footerblocksplacement1'] = 'Sitewide';
$string['footerblocksplacement2'] = 'Homepage Only';
$string['footerblocksplacement3'] = 'Never';

$string['footerlayoutrow'] = 'Footer Layout Builder';
$string['footerlayoutrowdesc'] = 'Design your layout for footer block regions.';

$string['footnote'] = 'Footnote';
$string['footnotedesc'] = 'Add text to the footer.';

$string['footerheader'] = 'Footer Title Section ';
$string['footerdesc'] = 'Add a title for footer section ';

$string['footercontent'] = 'Footer Content Section ';
$string['footercontentdesc'] = 'Add content to footer section ';


// Moodle Docs link.
$string['moodledocs'] = 'Moodle Docs link';
$string['moodledocsdesc'] = 'Display the Moodle Docs link in the footer.';


// NavBar **********************************************************.
$string['navbarmenusettings'] = 'Navbar Tools Menu';
$string['navbarmenusettingsheading'] = 'Customize the menu in the navigation bar. See the layout <a href="./../theme/adaptable/pix/layout.png" target="_blank"> here</a>';
$string['navbarmenusettingsdesc'] = 'Allows you to add a menu to the navigation bar.';

$string['navbarsettings'] = 'Header Navbar';
$string['navbarsettingsheading'] = 'Customize the navigation bar';
$string['navbardesc'] = 'Allows you to control all of the elements that appear on the navigation bar.';

if ($CFG->version > 2015051100) {
    $string['enablemy'] = 'Dashboard';
    $string['enablemydesc'] = 'Display a link to the Dashboard page';
} else {
    $string['enablemy'] = 'My Home';
    $string['enablemydesc'] = 'Display a link to My Home page';
};

$string['enableprofile'] = 'User Profile';
$string['enableprofiledesc'] = 'Display a link to the users profile';

$string['enableeditprofile'] = 'Edit Profile';
$string['enableeditprofiledesc'] = 'Display a link to edit the users profile';

$string['enablebadges'] = 'Badges';
$string['enablebadgesdesc'] = 'Display a link to the users badges';

$string['enablegrades'] = 'Grades';
$string['enablegradesdesc'] = 'Display a link to the users grades';

$string['enablecalendar'] = 'User Calendar';
$string['enablecalendardesc'] = 'Display a link to the users calendar';

$string['enableprivatefiles'] = 'Private Files';
$string['enableprivatefilesdesc'] = 'Display a link to the users private files';

$string['enablesearchbox'] = 'Enable Search Box';
$string['enablesearchboxdesc'] = 'Display a search box in the header';

$string['enablepref'] = 'My Preferences';
$string['enableprefdesc'] = 'Display a link to the user preferences page';

$string['enablenote'] = 'My Notifications';
$string['enablenotedesc'] = 'Display a link to the user notifications page';

$string['enableblog'] = 'My blogs';
$string['enableblogdesc'] = 'Display a link to the users blogs page';

$string['enableposts'] = 'My posts';
$string['enablepostsdesc'] = 'Display a link to the my posts page';

$string['enablefeed'] = 'My Feedback';
$string['enablefeeddesc'] = 'Display a link to the users "My Feedback" page - Note: this requires the <a href="https://moodle.org/plugins/report_myfeedback" target="blank">My Feedback Plugin</a>';

$string['myblogs'] = 'My Blogs';

$string['noenrolments'] = 'No enrolments found.';

$string['enablemyhomedesc'] = 'Display a link to {$a}';
$string['enableeventsdesc'] = 'Display a link to the calendar';
$string['enablemysitesdesc'] = 'Display a dropdown with a users courses';
$string['enablethiscoursedesc'] = 'Display a dropdown with activities from the current course';

$string['mysitesmaxlength'] = 'My Courses Max Length';
$string['mysitesmaxlengthdesc'] = 'Adjust the max length of coursenames in the My Courses dropdown to optimise for your font.';

$string['usernavheading'] = 'Customize the user navigation dropdown';
$string['usernavdesc'] = 'Allows you to control all of the elements that appear in the user navigation dropdown.';
$string['enablehomedesc'] = 'Display a link to the frontpage.';

$string['enablehomeredirect'] = 'Enable Home redirect=0';
$string['enablehomeredirectdesc'] = 'Enable redirect=0 on home. This is for use on sites where where My Home is default homepage. It prevents users clicking the Home link from being redirected back to My Home / Dashboard';


// Colours *********************************************************.
$string['colorsettings'] = 'Colours';
$string['colorsettingsheading'] = 'Modify the main colours used throughout the theme.';
$string['colordesc'] = 'You can select the colours that you would like to use throughout the theme. Use Hex or any other standard notation. As an alternate option you can use transparent and inherited as a value';
$string['linkcolor'] = 'Link Colour';
$string['linkcolordesc'] = 'Set the colour of links in the theme, use html hex code.';

$string['linkhover'] = 'Link Hover colour';
$string['linkhoverdesc'] = 'Set the colour of links (on hover) in the theme, use html hex code.';

$string['backcolor'] = 'Background colour';
$string['backcolordesc'] = 'Set the background colour.';

$string['regionmaincolor'] = 'Main region colour';
$string['regionmaincolordesc'] = 'Set the background colour for main content area.';

$string['maincolor'] = 'Main colour';
$string['maincolordesc'] = 'Main colour for blocks and footer.';

$string['footertextcolor'] = 'Footer text colour';
$string['footertextcolordesc'] = 'The colour of the text in the footer, use html hex code.';

$string['footerbackgroundcolor'] = 'Footer background colour';
$string['footerbackgroundcolordesc'] = 'The background colour of the footer, use html hex code.';

$string['footerbkcolor'] = 'Footer background colour';
$string['footerbkcolordesc'] = 'Set the footer background colour.';

$string['footertextcolor'] = 'Footer blocks text colour';
$string['footertextcolordesc'] = 'Footer blocks text colour.';

$string['footertextcolor2'] = 'Lower footer text colour';
$string['footertextcolor2desc'] = 'Lower footer text colour.';

$string['footerlinkcolor'] = 'Footer blocks link colour';
$string['footerlinkcolordesc'] = 'Footer blocks link colour.';

$string['headerbkcolor'] = 'Top header background colour';
$string['headerbkcolordesc'] = 'Set the top header background colour.';

$string['headerbkcolor2'] = 'Lower header background colour';
$string['headerbkcolor2desc'] = 'Set the lower header background colour.';

$string['headertextcolor'] = 'Top Header blocks text and link colour';
$string['headertextcolordesc'] = 'Set the top header blocks text and link colour.';

$string['headertextcolor2'] = 'Lower Header blocks text and link colour';
$string['headertextcolor2desc'] = 'Set the lower header blocks text and link colour.';

$string['blockheadercolor'] = 'Block header font colour';
$string['blockheadercolordesc'] = 'Set the block header font colour.';

$string['blockbackgroundcolor'] = 'Block background colour';
$string['blockbackgroundcolordesc'] = 'Set the background colour for all blocks.';

$string['blockheaderbackgroundcolor'] = 'Block heading background colour';
$string['blockheaderbackgroundcolordesc'] = 'Set the heading background colour for all blocks.';

$string['blockbordercolor'] = 'Block border colour';
$string['blockbordercolordesc'] = 'Set the block border colour.';

$string['blocklinkcolor'] = 'Block link colour';
$string['blocklinkcolordesc'] = 'Set the blocks link colour';

$string['blockregionbackground'] = 'Block Region Backround Color';
$string['blockregionbackgrounddesc'] = 'Background color of container holding custom block layouts on the front page';

$string['blockheaderbordertop'] = 'Block header top border thickness';
$string['blockheaderbordertopdesc'] = 'Set the thickness of the top border of block headers';

$string['blockheaderborderleft'] = 'Block header left border thickness';
$string['blockheaderborderleftdesc'] = 'Set the thickness of the left hand border of block headers';

$string['blockheaderborderright'] = 'Block header right border thickness';
$string['blockheaderborderrightdesc'] = 'Set the thickness of the right hand border of block headers';

$string['blockheaderborderbottom'] = 'Block header bottom border thickness';
$string['blockheaderborderbottomdesc'] = 'Set the thickness of the bottom border of block headers';

$string['blockmainbordertop'] = 'Block main top border thickness';
$string['blockmainbordertopdesc'] = 'Set the thickness of the top border of the main block area';

$string['blockmainborderleft'] = 'Block main left border thickness';
$string['blockmainborderleftdesc'] = 'Set the thickness of the left hand border of the main block area';

$string['blockmainborderright'] = 'Block main right border thickness';
$string['blockmainborderrightdesc'] = 'Set the thickness of the right hand border of the main block area';

$string['blockmainborderbottom'] = 'Block main bottom border thickness';
$string['blockmainborderbottomdesc'] = 'Set the thickness of the bottom border of the main block area';

$string['blockheaderbordertopstyle'] = 'Block header border style';
$string['blockheaderbordertopstyledesc'] = 'Set the style of the border of block headers';

$string['blockmainbordertopstyle'] = 'Block header border style';
$string['blockmainbordertopstyledesc'] = 'Set the style of the border of block headers';

$string['blockheadertopradius'] = 'Block header top radius';
$string['blockheadertopradiusdesc'] = 'Set the radius of top header block to achieve a curved / rounded effect';

$string['blockheaderbottomradius'] = 'Block header bottom radius';
$string['blockheaderbottomradiusdesc'] = 'Set the radius of bottom header block to achieve a curved / rounded effect';

$string['blockmaintopradius'] = 'Block main top radius';
$string['blockmaintopradiusdesc'] = 'Set the top radius of main block area to achieve a curved / rounded effect';

$string['blockmainbottomradius'] = 'Block main bottom radius';
$string['blockmainbottomradiusdesc'] = 'Set the bottom radius of main block area to achieve a curved / rounded effect';

$string['marketblockbordercolor'] = 'Marketing block border line colour';
$string['marketblockbordercolordesc'] = 'Set the marketing block border line colour';

$string['marketblocksbackgroundcolor'] = 'Marketing blocks region background colour';
$string['marketblocksbackgroundcolordesc'] = 'Set the Marketing blocks region background colour.';

$string['currentcolor'] = 'Current Section Highlight colour';
$string['currentcolordesc'] = 'Set the colour for the Current Section Highlight';

$string['sectionheadingcolor'] = 'Section Heading Text Colour';
$string['sectionheadingcolordesc'] = 'Set the colour for section headings text';

$string['homebk'] = 'Frontpage Background Image';
$string['homebkdesc'] = 'Upload an image that will be a bacgkound image on the homepage.';

$string['editonbk'] = 'Editing and Customize this page button background';
$string['editonbkdesc'] = 'Set the background colour for the editing and customize this page button';

$string['editoffbk'] = 'Editing and Customize this page OFF button background';
$string['editoffbkdesc'] = 'Set the background colour for the editing and customize this page button in OFF state.';

$string['dividingline'] = 'Dividing line in header';
$string['dividinglinedesc'] = 'The colour for the dividing line found in the header';

$string['dividingline2'] = 'Dividing line in footer';
$string['dividingline2desc'] = 'The colour for the dividing line found in the footer';

$string['navbarborder'] = 'Navbar bottom border colour';
$string['navbarborderdesc'] = 'Colour for the bottom of the navbar';
$string['navbarhover'] = 'Navbar hover colour';
$string['navbarhoverdesc'] = 'When hovering on a navigation item, the colour of the border of the navbar.';

$string['breadcrumb'] = 'Breadcrumb background colour';
$string['breadcrumbdesc'] = 'Set the background colour of the breadcrumb.';

$string['breadcrumbtextcolor'] = 'Breadcrumb text colour';
$string['breadcrumbtextcolordesc'] = 'Set the text colour of the breadcrumb.';

$string['activebreadcrumb'] = 'Active breadcrumb background colour';
$string['activebreadcrumbdesc'] = 'Set the background colour of the active breadcrumb colour, and remainder of the breadcrumb bar.';

$string['menubkcolor'] = 'Main Menu background colour';
$string['menubkcolordesc'] = 'Set a Main Menu background colour';

$string['menubordercolor'] = 'Main Menu bottom border colour';
$string['menubordercolordesc'] = 'Set a Main Menu border bottom colour';

$string['menufontcolor'] = 'Main Menu font colour';
$string['menufontcolordesc'] = 'Set a Main Menu font colour';

$string['mobilemenubkcolor'] = 'Mobile Menu background colour';
$string['mobilemenubkcolordesc'] = 'Set the Main Menu background colour on mobile devices (collapsed)';

$string['mobilemenufontcolor'] = 'Mobile Menu font colour';
$string['mobilemenufontcolordesc'] = 'Set a Main Menu font colour on mobile devices (collapsed)';


// Fonts ***********************************************************.
$string['fontsettings'] = 'Fonts';
$string['fontsettingsheading'] = 'Modify the fonts used throughout the theme.';
$string['fontdesc'] = 'You can select the <a href="https://www.google.com/fonts" target="_blank">Google Fonts</a> that you would like to use throughout the theme. Select the subset needed (latin is always included) and enter the right font weight or the font will not displayed.';

$string['fsize'] = 'Global Font Size';
$string['fsizedesc'] = 'Adjust the global font size (in percent, use a number only, default is 85).';

$string['fontname'] = 'Main font';
$string['fontnamedesc'] = 'Select the default font or <a href="https://www.google.com/fonts" target="_blank">Google Fonts</a> used in site.';

$string['fontheadername'] = 'Headers font';
$string['fontheadernamedesc'] = 'Select the default font or <a href="https://www.google.com/fonts" target="_blank">Google Fonts</a> used in the text and blocks headers.';

$string['fontheadercustom'] = 'Headers custom font name';
$string['fontheadercustomdesc'] = 'Enter the header custom name font if you selected custom as a font name.';

$string['fontcolor'] = 'Main font colour';
$string['fontcolordesc'] = 'Set the colour of the font in the theme, use html hex code.';

$string['fontheadercolor'] = 'Headers font colour';
$string['fontheadercolordesc'] = 'Set the colour of the headers font in the theme, use html hex code.';

$string['fontweight'] = 'Main font weight';
$string['fontweightdesc'] = 'Font weight used in site. Enter a value from 100 to 900 depending the font selected.';

$string['fontheaderweight'] = 'Headers font weight';
$string['fontheaderweightdesc'] = 'Headers font weight used in the site. Enter a value from 100 to 900 depending the font selected.';

$string['fonttitlename'] = 'Site title font';
$string['fonttitlenamedesc'] = 'Select the default font or <a href="https://www.google.com/fonts" target="_blank">Google Fonts</a> used in title site.';

$string['fonttitlecolor'] = 'Site title font colour';
$string['fonttitlecolordesc'] = 'Set the colour of the site title font in the theme, use html hex code.';

$string['fonttitleweight'] = 'Site title font weight';
$string['fonttitleweightdesc'] = 'Set the font weight used in the title site. Enter a value from 100 to 900 depending the font selected.';

$string['fonttitlesize'] = 'Site title font size';
$string['fonttitlesizedesc'] = 'Site title font size used in site. Enter a decimal value in pixels: 24px';

$string['fontsubset'] = 'Google Fonts subset';
$string['fontsubsetdesc'] = 'Select other character subset than latin to be applied to all the fonts. Latin subset is already included by default.';

$string['menufontsize'] = 'Font size for navigation bar';
$string['menufontsizedesc'] = 'Set the size of the font used in the main navigation bar.';


// Buttons *********************************************************.
$string['buttonsettings'] = 'Buttons';
$string['buttonsettingsheading'] = 'Customize the buttons of this theme.';
$string['buttondesc'] = 'Alter the appearance of buttons used in this theme.';

$string['buttonradius'] = 'Set Button Radius';
$string['buttonradiusdesc'] = 'Higher radius = curved buttons, lower radius = square buttons';

$string['buttonloginpadding'] = 'Set Padding for Log In Button';
$string['buttonloginpaddingdesc'] = 'Higher number = bigger button';

$string['buttonloginheight'] = 'Set Height for Login Button';
$string['buttonloginheightdesc'] = 'Only effective if using a login form in the upper header';

$string['buttonloginmargintop'] = 'Set Top Margin for Login Button';
$string['buttonloginmargintopdesc'] = 'Allows spacing / position of login button to be altered';

$string['buttoncolor'] = 'Button colour';
$string['buttoncolordesc'] = 'The colour of the main buttons used throughout the site.';

$string['buttonlogincolor'] = 'Login button colour';
$string['buttonlogincolordesc'] = 'The colour of the login button.';

$string['buttonloginhovercolor'] = 'Login button hover colour';
$string['buttonloginhovercolordesc'] = 'The hover colour of the login button.';

$string['buttonlogintextcolor'] = 'Login button text colour';
$string['buttonlogintextcolordesc'] = 'The colour of text used on the login button.';

$string['buttonhovercolor'] = 'Button colour (When hovering)';
$string['buttonhovercolordesc'] = 'The colour that the button changes to when hovering over the button.';

$string['buttontextcolor'] = 'Button text colour';
$string['buttontextcolordesc'] = 'The colour of text used on buttons';

$string['buttontextcolor'] = 'Button text colour';
$string['buttontextcolordesc'] = 'The colour of the text buttons used throughout the site, use html hex code.';

$string['editfont'] = 'Editing and Customize this page button font colour';
$string['editfontdesc'] = 'Set the Editing and Customize this page button font colour';

$string['editverticalpadding'] = 'Set vertical padding of editing buttons';
$string['edithorizontalpadding'] = 'Set Horizontal padding of editing buttons';
$string['edittopmargin'] = 'Set top margin of editing buttons';


// Login button.
$string['logintextbutton'] = 'Se connecter';


// Header ***********************************************************.
$string['headersettings'] = 'Header';
$string['headersettingsheading'] = 'Customize the header of this theme. See the layout <a href="./../theme/adaptable/pix/layout.png" target="_blank"> here</a>';
$string['headerdesc'] = 'Display alert boxes to warn users of actions, or provide notices to all users. Control the navbars that appear on the site.';

$string['enableheading'] = 'Header course title';
$string['enableheadingdesc'] = 'Set the mode to display the course title in the header.';

$string['breadcrumbtitle'] = 'Breadcrumb course name';
$string['breadcrumbtitledesc'] = 'Set the mode to display the course title in the breadcrumb.';

$string['usernav'] = 'Header User';
$string['usernavheading'] = 'Customize dropdown menu for users profile.';

$string['menusettings'] = 'Header Menus';
$string['menusettingsheading'] = 'Customize menus in the upper header the header of this theme.';

$string['logo'] = 'Logo';
$string['logodesc'] = 'Upload a logo for use on your site,';

$string['favicon'] = 'Favicon';
$string['favicondesc'] = 'Upload a favicon for use on your site,';

$string['enableavailablecourses'] = 'Display Available Courses';
$string['enableavailablecoursesdesc'] = 'Display Available Courses label in the frontpage';

$string['thiscourse'] = 'This course';

$string['loadtime'] = 'Page loaded in';

$string['loadingcolor'] = 'Loading colour';
$string['loadingcolordesc'] = 'The loading bar colour in the top of the page';

$string['sitetitle'] = 'Display site title';
$string['sitetitledesc'] = 'Show / Hide site title';

$string['sitetitletext'] = 'Site title';
$string['sitetitletextdesc'] = 'Site title displayed in the header';

$string['frontpagelogin'] = 'Front Page Login';
$string['frontpagelogindesc'] = 'Enable login form in header (will show button if turned off)';

$string['hideblocks'] = 'Hide blocks';
$string['showblocks'] = 'Show blocks';
$string['fullscreen'] = 'Full screen';
$string['standardview'] = 'Standard view';

$string['viewselect'] = 'Default to full screen view.';
$string['viewselectdesc'] = 'Make the default view of the site fullscreen (when zoom option is in use).';

$string['enablezoom'] = 'Enable Zoom';
$string['enablezoomdesc'] = 'Allow users to toggle between fullscreen and fixed width).';

$string['enableshowhideblocks'] = 'Enable Show Hide Blocks';
$string['enableshowhideblocksdesc'] = 'Allows users to show / hide all blocks.';

$string['fullscreenwidth'] = 'Full screen width.';
$string['fullscreenwidthdesc'] = 'Set the max width of the theme when it is in full screen mode / zoom.';


// Help Links ******************************************************.
$string['enablehelp'] = 'Help Link';
$string['enablehelpdesc'] = 'Add a help link in the navbar.';

$string['helptitle'] = 'Help';
$string['helptitle2'] = 'Second Help link';

$string['helpprofilefield'] = 'Help custom profile field (optional)';
$string['helpprofilefielddesc'] = 'Add access rule using for custom profile field eg: "usertype=student"';


// Courses Overlay *************************************************.
$string['rendereroverlaycolor'] = 'Overlay colour';
$string['rendereroverlaycolordesc'] = 'The colour of the overlay, when the "Tiles w/ overlay" renderer is selected.';

$string['rendereroverlayfontcolor'] = 'Overlay font colour';
$string['rendereroverlayfontcolordesc'] = 'The colour of the font, when hovering over a coursebox with "Tiles w/ overlay" renderer enabled.';

$string['covbkcolor'] = 'Coventry tiles title background colour';
$string['covbkcolordesc'] = 'Set the title background colour with the Coventry Tiles renderer is selected.';

$string['covfontcolor'] = 'Coventry tiles title font colour';
$string['covfontcolordesc'] = 'Set the title font colour with the Coventry Tiles renderer is selected.';

$string['covhidebutton'] = 'Coventry tiles course button';
$string['covhidebuttondesc'] = 'Set this to hide the course button when Coventry Tiles is selected.';


$string['frontpagerendererdefaultimage'] = 'Default course image';
$string['frontpagerendererdefaultimagedesc'] = 'The default image to use when no course image is found, (only applies for Tiles w/ overlay)';

$string['coursetitlemaxwidth'] = 'Course Title Maximum Width';
$string['coursetitlemaxwidthdesc'] = 'Set the maximum width of the course title area';

$string['coursetitlepaddingtop'] = 'Course Title Padding Top';
$string['coursetitlepaddingtopdesc'] = 'Set padding above course title';

$string['tilesshowcontacts'] = 'Show course contacts';
$string['tilesshowcontactsdesc'] = 'Show / hide course contacts';

$string['tilesbordercolor'] = 'Coursebox tiles border colour';
$string['tilesbordercolordesc'] = 'Set a colour for the coursebox tiles border';

$string['tilescontactstitle'] = 'Show course contacts role';
$string['tilescontactstitledesc'] = 'Show / hide the role of a course contact. If not displayed, an image will be displayed before each contact';

$string['tilesshowallcontacts'] = 'Show all course contacts';
$string['tilesshowallcontactsdesc'] = 'Show all course contacts or just one';


// Alerts **********************************************************.
// Alert Box Enable.
$string['enablealert'] = 'Enable Alert Box {$a}';
$string['enablealertdesc'] = 'Enable Alert Box {$a}';

// Alert Box Generic Strings.
$string['alerttype'] = 'Alert Box Type';
$string['alerttypedesc'] = 'Select the type of alert: info (blue), warning (yellow) or announcement (green)';

$string['alerttext'] = 'Alert text';
$string['alerttextdesc'] = 'Enter the text to display in the Alert box';

$string['enablealertcoursepages'] = 'Enable Alert Box on Course Pages';
$string['enablealertcoursepagesdesc'] = 'Turning this option on will display the top alert box in the courses pages';

$string['enablealertstriptags'] = 'Automatically strip html tags from alerts';
$string['enablealertstriptagsdesc'] = 'Enable will clean up alert messages automatically, Disable will allow you to use html / links in messages but you will have to clean up manually in html view';

$string['alertkeyvalue'] = 'Alert Key';
$string['alertkeyvalue_details'] = 'The key that identifies this alert, from previous alerts. If you change this, all users who have dismissed the alert previously will see it again. If you change the alert, you will likely want to change this to ensure all users see it.';

$string['alertsettingsgeneral'] = 'General Alert Settings';
$string['alertsettings'] = 'Alert Box {$a}';

$string['alertcount'] = 'Alert count';
$string['alertcountdesc'] = 'The number of alerts to show in the edit area below.';

$string['alertsettingsheading'] = 'Customize top Alert Box. See the layout <a href="./../theme/adaptable/pix/layout.png" target="_blank"> here</a>';
$string['alertdesc'] = 'Enter and customize a text to be displayed in the top of the site as an alert. It is possible to set more than one alert to target different user types. You also have the option of showing alerts sitewide or on homepages only.';

// Alerts Types.
$string['alertinfo'] = 'Info';
$string['alertinfodesc'] = 'Display information in the Alert Box';

$string['alertwarning'] = 'Warning';
$string['alertinfodesc'] = 'Display a warning in the Alert Box';

$string['alertannounce'] = 'Announcement';
$string['alertinfodesc'] = 'Display an announcement in the Alert Box';

$string['alertprofilefield'] = 'Custom Profile Field Name=Value (optional)';
$string['alertprofilefielddesc'] = 'Add access rule using for custom profile field eg: "usertype=student"';

// Alert Access - Visibility.
$string['alertaccessglobal'] = 'Visibile to everyone';
$string['alertaccessusers'] = 'Visibile to logged in users';
$string['alertaccessadmins'] = 'Visibile to administrators';
$string['alertaccessprofile'] = 'Add custom profile field restriction';

$string['alertaccess'] = 'Alert Visibility';
$string['alertaccessdesc'] = 'Set access restriction type for alert box visibility. Note: if using "Add custom profile field restriction" you will need to add values for profile fields below.';

// Mobile **********************************************************.
$string['layoutmobilesettings'] = 'Mobile Settings';
$string['layoutmobilesettingsdesc'] = 'Alter settings for mobile devices';

$string['hidealertsmobile'] = 'Hide Alerts (if in use) on mobile';
$string['hidealertsmobiledesc'] = 'Hide will remove alerts on mobile devices';

$string['hidesocialmobile'] = 'Hide Social Icons (if in use) on mobile';
$string['hidesocialmobiledesc'] = 'Hide will remove social icons on mobile devices';

$string['hidecoursetitlemobile'] = 'Hide Course Title on mobile';
$string['hidecoursetitlemobiledesc'] = 'Hide the course title AND site title on mobile devices';

$string['socialboxpaddingtopmobile'] = 'Set top padding of social container on mobile';
$string['socialboxpaddingbottommobile'] = 'Set bottom padding of social container on mobile';

$string['hidelogomobile'] = 'Hide Logo on mobile';
$string['hidelogomobiledesc'] = 'Hide will remove the logo on mobile devices';

$string['hideheadermobile'] = 'Hide header on mobile';
$string['hideheadermobiledesc'] = 'Hide will remove the header with logo / social icons / search box on mobile devices';

$string['hidebreadcrumbmobile'] = 'Hide breadcrumb on mobile';
$string['hidebreadcrumbmobiledesc'] = 'Checking this option will remove the breadcrumb on mobile devices';

$string['hidepagefootermobile'] = 'Hide footer on mobile';
$string['hidepagefootermobiledesc'] = 'Checking this option will remove the footer on mobile devices';

$string['mobilesettings'] = 'Mobile Settings';
$string['mobilesettingsheading'] = 'Control how your site looks on mobile devices';


// Layout **********************************************************.
$string['layoutsettings'] = 'Layout';
$string['layoutdesc'] = 'Set the default layout that users see.';
$string['layoutsettingsheading'] = 'Control aspects of the site\'s layout';

$string['blockside'] = 'Location of the blocks';
$string['blocksidedesc'] = 'Control whether blocks appear on the left or right of the page';


$string['blockicons'] = 'Block Icons';
$string['blockiconsdesc'] = 'Set this to show block icons in the block header area.';

$string['leftblocks'] = 'Left';
$string['rightblocks'] = 'Right';

$string['helptarget'] = 'Help target';
$string['helptargetdesc'] = 'Do you want the help link to open in a new window?';

$string['hideinforum'] = 'Hide Help and Tools in Forums';
$string['hideinforumdesc'] = 'When using fixed width and all menu options the forum search box spills onto the line below. Turning this option on will hide tools and help menu items in forums allowing it to display properly.';

$string['targetnewwindow'] = 'New window';
$string['targetsamewindow'] = 'Same window';

$string['toolsmenu2'] = '2nd Tools menu';
$string['toolsmenu2desc'] = 'You can configure links to be shown under a tools menu. Each line consists of some menu text, a link URL (optional), a tooltip title (optional) and a language code or comma-separated list of codes (optional, for displaying the line to users of the specified language only), separated by pipe characters. You can specify a structure using hyphens. For example:
<pre>
Moodle community|https://moodle.org
-Moodle free support|https://moodle.org/support
-Moodle development|https://moodle.org/development
--Moodle Docs|http://docs.moodle.org|Moodle Docs
--German Moodle Docs|http://docs.moodle.org/de|Documentation in German|de
Moodle.com|http://moodle.com/
</pre>';

$string['toolsmenulabel'] = 'Tools';
$string['toolsmenulabel2'] = 'Tools 2';
$string['events'] = 'Events';
$string['mysites'] = 'My Courses';
$string['people'] = 'People';
$string['help'] = 'Help';

$string['dividingline'] = 'Dividing line in header';
$string['dividinglinedesc'] = 'The colour for the dividing line found in the header';

$string['dividingline2'] = 'Dividing line in footer';
$string['dividingline2desc'] = 'The colour for the dividing line found in the footer';

$string['navbarborder'] = 'Navbar bottom border colour';
$string['navbarborderdesc'] = 'Colour for the bottom of the navbar';
$string['navbarhover'] = 'Navbar hover colour';
$string['navbarhoverdesc'] = 'When hovering on a navigation item, the colour of the border of the navbar.';
$string['showfooterblocks'] = 'Show footer blocks';
$string['showfooterblocksdesc'] = 'Show / hide the four configurable footer blocks';

$string['breadcrumb'] = 'Breadcrumb background colour';
$string['breadcrumbdesc'] = 'Set the background colour of the breadcrumb.';

$string['breadcrumbtextcolor'] = 'Breadcrumb text colour';
$string['breadcrumbtextcolordesc'] = 'Set the text colour of the breadcrumb.';

$string['activebreadcrumb'] = 'Active breadcrumb background colour';
$string['activebreadcrumbdesc'] = 'Set the background colour of the active breadcrumb colour, and remainder of the breadcrumb bar.';

$string['menufontsize'] = 'Font size for navigation bar';
$string['menufontsizedesc'] = 'Set the size of the font used in the main navigation bar.';

$string['usernavheading'] = 'Customize the user navigation dropdown';
$string['usernavdesc'] = 'Allows you to control all of the elements that appear in the user navigation dropdown.';
$string['enablehomedesc'] = 'Display a link to the frontpage.';

$string['enablehomeredirect'] = 'Enable Home redirect=0';
$string['enablehomeredirectdesc'] = 'Enable redirect=0 on home. This is for use on sites where where My Home is default homepage. It prevents users clicking the Home link from being redirected back to My Home / Dashboard';

$string['enablemyhomedesc'] = 'Display a link to {$a}';
$string['enableeventsdesc'] = 'Display a link to the calendar';
$string['enablemysitesdesc'] = 'Display a dropdown with a users courses';
$string['enablethiscoursedesc'] = 'Display a dropdown with activities from the current course';

$string['mysitesexclude'] = 'Enable excluding hidden courses';
$string['mysitesinclude'] = 'Enable including hidden courses';
$string['mysitesdisabled'] = 'Disable';

$string['frnt-footer'] = 'Blocks in this area will only be visible to admin users.';

$string['enableticker'] = 'Enable the news ticker on the homepage?';
$string['enabletickerdesc'] = 'Check to enable the homepage ticker.';

$string['enabletickermy'] = 'Enable the news ticker on the My Home / Dashboard page?';
$string['enabletickermydesc'] = 'Check to enable the ticker on My Home / Dashboard.';

$string['enabletickerc'] = 'Enable the news ticker on internal pages?';
$string['enabletickercdesc'] = 'Check to enable the ticker on internal pages.';

$string['newstickercount'] = 'Number of News Ticker Sections';
$string['newstickercountdesc'] = 'Define multiple news ticker sections with access rules to target different audiences';

$string['tickertext'] = 'News Ticker Text';
$string['tickertextdesc'] = 'Add news ticker text in list format. See the read me for more info.';

$string['newmenu1trigger'] = 'Top Menu Dropdown 1 trigger word';
$string['newmenu1triggerdesc'] = 'Set a Top Menu Dropdown 1 trigger word. Font awesome icons can be used';

$string['menusheading'] = 'Configure Navigation for link Menus in the upper header';
$string['menustitledesc'] = 'Tools Menus (in navbar) and Top Menus (upper header) can be restricted based on custom profile fields (optional). To add a restriction enter the name of the profile field and expected value. Menu Structure follows the common Moodle format:
<pre>
Moodle community|https://moodle.org
-Moodle free support|https://moodle.org/support
-Moodle development|https://moodle.org/development
--Moodle Docs|http://docs.moodle.org|Moodle Docs
--German Moodle Docs|http://docs.moodle.org/de|Documentation in German|de
Moodle.com|http://moodle.com/
</pre>
';

$string['menusession'] = 'Store access details in session';
$string['menusessiondesc'] = 'For performance reasons it is suggested this is enabled. You may want to disable when testing';

$string['disablecustommenu'] = 'Disable Moodle Custom Menu';
$string['disablecustommenudesc'] = 'Disable Moodle Custom Menus in the navigation bar (will still render in other themes you may have installed)';

$string['menusessionttl'] = 'Minutes to store access rules in session';
$string['menusessionttldesc'] = 'Number of minutes after which menu access rules are refreshed in the users session.';


// Tool menus ******************************************************.
$string['newmenudesc'] = 'Configure links to be shown under a top header menu.';
$string['newmenufield'] = 'Custom Profile Field Name=Value (optional)';
$string['newmenufielddesc'] = 'Add access rule using for custom profile field eg: "usertype=student"';
$string['newmenurequirelogin'] = 'Require login';
$string['newmenurequirelogindesc'] = 'If enabled this menu will only be visible to logged in users';

$string['menusdesc'] = '';

$string['newmenu2trigger'] = 'Top Menu Dropdown 2 trigger word';
$string['newmenu2triggerdesc'] = 'Set a Top Menu Dropdown 2 trigger word. Font awesome icons can be used';

$string['enablemenus'] = 'Enable Menus';
$string['enablemenusdesc'] = 'It is recommended you leave this off if menus are not in use for preformance reasons';

$string['topmenufontsize'] = 'Top Menu Font Size';
$string['topmenufontsizedesc'] = 'Adjust the font size of the top menus';

$string['disablemenuscoursepages'] = 'Disable Menus on Course Pages';
$string['disablemenuscoursepagesdesc'] = 'Turning this option on will limit the display of top menus to site pages, the homepage, and dashboard (My Home) etc. and will not show in any course pages';

$string['menuuseroverride'] = 'Allow user override';
$string['menuuseroverridedesc'] = 'These settings can be used to give users control over where menus appear via a custom profile field. To use this option you will need to create a custom profile field in the "list" format with values in the corresponding order:
<pre>1. Sitewide (the first item in the list will be for sitewide menu visibility)
2. Homepages Only (the second item in the list will set visibility to only site / homepages)
3. Hidden (the third value in the list will hide menus entirely)</pre>
You should NOT use the "Disable Menus on Course Pages" option in conjuction with profile field settings, instead use set the default value to your "Homepages Only" entry when setting up your profile field list.

Note: Users will have to log out of Moodle and back in again for this change to take effect, you may want to add a note explaining this in the custom profile field.';

$string['menuoverrideprofilefield'] = 'Custom profile field name';
$string['menuoverrideprofilefielddesc'] = 'The name of the custom profile "list" field used for user override';
$string['menuoverrideprofilefielddefault'] = 'topmenusettings';

$string['topmenuscount'] = 'Number of top Menus';
$string['topmenuscountdesc'] = 'Set the number of top menus you want to add to the theme header';

$string['menusheadingvisibility'] = 'General settings for Top Menu visibility';
$string['menusheadingvisibilitydesc'] = 'The following settings allow you to control where menus appear and optionally allow users to customise their settings';

$string['newmenuheading'] = 'Top Menu';
$string['newmenu'] = 'Top Menu Dropdown';
$string['newmenutitle'] = 'Top Menu Title';
$string['newmenutitledesc'] = 'The title of the dropdown list that will appear in the header of your site';
$string['newmenutitledefault'] = 'Menu';

$string['enabletoolsmenus'] = 'Enable Tools Menus';
$string['enabletoolsmenusdesc'] = 'It is recommended you leave this off if menus are not in use for preformance reasons';

$string['toolsmenuheading'] = 'Tools Menus (in main nagivation)';
$string['toolsmenuheadingdesc'] = 'You can configure links to be shown under a tools menu (in main navigation bar).
 The format is similar to that used for Moodle custom menus but allows you to add fa icons to menu items:
<pre>
&lt;span class=&quot;fa fa-video-camera&quot;&gt;&lt;/span&gt; Record Screen|http://google.co.uk|Record Screen
&lt;span class=&quot;fa fa-picture-o&quot;&gt;&lt;/span&gt; ThinkStock|http://google.co.uk|ThinkStock
&lt;span class=&quot;fa fa-clock-o&quot;&gt;&lt;/span&gt; Exam Clock|http://google.co.uk|Exam Clock
</pre><br />';

$string['toolsmenuscount'] = 'Number of tools Menus';
$string['toolsmenuscountdesc'] = 'Set the number of tools menus you want to add to the main navigation bar';

$string['toolsmenuheading'] = 'Tools Menu ';
$string['toolsmenu'] = 'Tools Menu Dropdown';
$string['toolsmenudesc'] = 'Add a drop down menu to the main navigation bar';
$string['toolsmenutitle'] = 'Tools Menu Title';
$string['toolsmenutitledefault'] = 'Tools';
$string['toolsmenutitledesc'] = 'Add the title of the menu you would like to display in the main navigation bar';
$string['toolsmenulabel'] = 'Tools Menu';

$string['toolsmenufield'] = 'Custom Profile Field Name=Value (optional)';
$string['toolsmenufielddesc'] = 'Add access rule using for custom profile field eg: "usertype=student"';


// Social settings *************************************************.
$string['socialsettings'] = 'Header Social';
$string['socialheading'] = 'Social Icon Settings';
$string['socialtitledesc'] = '<pre>You can disable the sitewide search box and enable social icons / links in its place.
To setup icons enter a de-limited list into the "Social Icon List" field below.
This should be in the format:

url|title|icon

For example:

http://localhost/moodle/course/search.php|Search Moodle|fa-search
http://facebook.com/|Facebook|fa-facebook-square
http://twitter.com/|Twitter|fa-twitter-square
http://instagram.com|Instagram|fa-instagram </pre>';

$string['socialset'] = 'Add social icons and hide search bar';
$string['socialsetdesc'] = 'Check this box to hide the search bar and add social icons in the same location instead.';

$string['socialsize'] = 'Set the font size of the social icons';
$string['socialsizemobile'] = 'Set the font size of the social icons on Mobile';
$string['socialpaddingtop'] = 'Adjust padding above social icons (alters vertical position)';

$string['socialtarget'] = 'Social Links Open Target';
$string['socialtargetdesc'] = 'How would you like social links to open (same or new window)';

$string['socialsearchicon'] = 'Search Moodle';
$string['socialsearchicondesc'] = 'Enable to put a search link alongside social icons (as using social disables sitewide search box)';

$string['socialicondesc'] = 'Set Font Awesome icon for example: fa-facebook';

$string['socialiconlist'] = 'Social Icon List';
$string['socialiconlistdesc'] = 'Enter a de-limited list to setup the social icons / links you need using the format: url|title|icon';

// Analytics.
$string['analyticssettingsheading'] = 'Setup Google Analytics';
$string['analyticssettingsdesc'] = 'You can setup multiple codes for Google Analytics and targed them to user profile fields.';

$string ['enableanalytics'] = 'Enable Google Analytics';
$string ['enableanalyticsdesc'] = 'Enable Google Analytics settings on your Moodle site';

$string ['analyticstext'] = 'Analytics ID';
$string ['analyticstextdesc'] = 'Enter Google Analytics ID';

$string['analyticscount'] = 'Analytics count';
$string['analyticscountdesc'] = 'The number of analytics fields to show in the edit area below.';

$string ['analyticsprofilefield'] = 'Custom Profile Field Name=Value (optional)';
$string ['analyticsprofilefielddesc'] = 'Add access rule using for custom profile field eg: "usertype=student"';


// Custom CSS.
$string['customcss'] = 'Custom CSS';
$string['customcssdesc'] = 'Whatever CSS rules you add to this textarea will be reflected in every page, making for easier customization of this theme.';

$string['customcssjssettings'] = 'Custom CSS & JS';
$string['genericsettingsheading'] = 'Apply your own modifications';
$string['genericsettingsdescription'] = 'Here you can find various settings to add your own CSS and JavaScript code to the theme.';

$string['jssection'] = 'Javascript Section';
$string['jssectiondesc'] = 'Add javascript code to the site.';
