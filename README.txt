Adaptable is a highly customisable responsive two column moodle theme based on the popular BCU theme adding:

* Customisable fonts (Google Fonts)
* Fully customisable colors
* Fully customisable block styles (including icons)
* Fully customisable buttons
* Additional header navigation
* News Ticker
* Alternative jQuery slider
* Alternative front page course styles
* Additional marketing blocks
* Additional layout settings for width, slider width, padding of various elements
* Social icons
* Mobile settings (customise how theme looks on mobile devices)
* Dismissible bootstrap alerts (can be made persistent by specifying a “key” which is stored in user preferences)
* Option to add login form in header on front page
* Favicon uploader

In addition many fields (menus, news items, alerts and help links) can be targeted using custom profile fields,
thus it is possible to present different users with different nagivation items and notices.
It is also possible for individual users to customise where they want top menu navigation to appear
(disable, home pages only, sitewide) using custom profile fields.

Adaptable has a lot of settings and may seem daunting at first, our advice is to simply install with the default
settings and play with it afterwards.

With a little time you should be able to setup an attractive Moodle site with a high degree of
individuality without without knowing any CSS.


======================================
HTML code for settings and block areas
======================================

Here you will find some code samples to help you to customize the Info Box and the Marketing Blocks

You can insert any HTML tag to customize the frontpage blocks. Use a <div> as a main container and add the
height to keep the same value in all the blocks.

The Font Awesome icons set is available in http://fortawesome.github.io/Font-Awesome/icons/.
You can insert any of them and following the examples http://fortawesome.github.io/Font-Awesome/examples/


Front Page Slider Styles
------------------------

There are two possible slider styles each with different markup required:

Original BCU Slider Markup:


<div class="span9">
  <h4>Information</h4>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore
    et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
  </div>

  <div class="span3">
  <a href="#" class="submit">2013/14 Courses <i class="fa-chevron-right fa"></i></a>
</div>

Coventry Style Slider Markup:


<div class="span6 col-sm-6">
<h3>Hand-crafted</h3> <h4>pixels and code for the Moodle community</h4>
<a href="#" class="submit">Check out our custom theme pricing!</a>
</div>

Frontpage Marketing Block HTML structure Coventry


<div><img src="http://somewebsite.com/2.jpg" class="marketimage"></div>
<h4><a href="#">International Courses</a></h4>
<p>Some text below the link....</p>


Front page Info Block
---------------------
There are two Info blocks in the frontpage located above and below the Marketing Blocks. See pix/layout.png


Simple box with solid background and using a default heading

<div style="text-align:center; background: #f0f0f0;">
    <h3 style="text-align: center;">Add your text here</h3>
</div>


Simple box with solid background colour, default heading h3 and white text colour.

<div style="text-align:center; background: #009688; color: #ffffff;">
    <h3 style="text-align: center;">Add your text here</h3>
</div>


Front Page Secondary Info Block Example:
----------------------------------------

You can apply additional styles to the secondary info block:


<div class="span2 personpic">
    <div id="person" class="spn5">
        <img src="/urltoanimage.jpg" alt="person">
    </div>
</div>

<div class="span10">
    <h4>School of Jewelry</h4>
    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
    Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
    <a href="#" class="submit">Learn more... <i class="fa-chevron-right fa"></i></a>
</div>

Frontpage Marketing Block HTML
------------------------------
You can add up to 12 Marketing Blocks in the frontpage.
The blocks are located automatically in rows with a maximum of 4 blocks per row.
The full width is divided equally between the blocks.

Simple Block with white background and Font Awesome icon. Using the default text colour and h3 heading.

<div style="text-align:center; background: #ffffff; height: 240px; padding: 7px;">
    <i class="fa fa-font fa-5x"></i>
    <h3 style="color: #333333;">TITLE</h3>
    <div style="text-align:center;">Add your text here</div>
</div>


Block with solid background colour, white text colour and Font Awesome icon.

<div style="text-align:center; background: #4b4b4b; color: #ffffff; height: 240px; padding: 7px;">
    <i class="fa fa-th fa-5x"></i>
    <h3 style="color: #ffffff;">TITLE</h3>
    <div style="text-align:center; padding: 5px;">Add your text here</div>
</div>


Block with solid background, white text colour and text aligned vertically (useful for blocks 100% wide)

<div style="background: #c2185b; height: 120px;">
    <h1 style="line-height: 120px; color: #ffffff; text-align: center; "><b>moodle 3.0 ready !!!</b></h1>
</div>



Footer Blocks
----------------------------

Contact information

<i class="fa fa-building"></i>  High St. 100<br>
<span style="margin-left: 20px;">123456 City</span><br><br>
<i class="fa fa-phone"></i> +12 (3)456 78 90<br>
<i class="fa fa-envelope"></i> info@mail.com<br>
<i class="fa fa-globe"></i> www.example.com


List with Chevron

<ul class="block-list white">
    <li><a href="http://moodle.org/"><span class="icon-right-open-mini"></span><span>Accessibility</span></a></li>
    <li><a href="http://moodle.org/"><span class="icon-right-open-mini"></span><span>Moodle Help</span></a></li>
    <li><a href="http://moodle.org/"><span class="icon-right-open-mini"></span><span>Moodle Feedback</span></a></li>
    <li><a href="http://moodle.org/"><span class="icon-right-open-mini"></span><span>IT Help</span></a></li>
    <li><a href="http://moodle.org/"><span class="icon-right-open-mini"></span><span>IT Feedback</span></a></li>
</ul>
