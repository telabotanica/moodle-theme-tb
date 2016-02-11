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

// Fixed header is determined by the individual layouts.
if (!ISSET($fixedheader)) {
    $fixedheader = false;
}
theme_adaptable_initialise_zoom($PAGE);
$setzoom = theme_adaptable_get_zoom();

theme_adaptable_initialise_full($PAGE);
$setfull = theme_adaptable_get_full();

$left = (!right_to_left());  // To know if to add 'pull-right' and 'desktop-first-column' classes in the layout for LTR.

$hasmiddle = $PAGE->blocks->region_has_content('middle', $OUTPUT);
$hasfootnote = (!empty($PAGE->theme->settings->footnote));
$haslogo = (!empty($PAGE->theme->settings->logo));
$hastitle = (!empty($PAGE->theme->settings->sitetitletext));
$enableheadingtitle = $PAGE->theme->settings->enableheading;

if ($COURSE->id != 1) {
    switch($enableheadingtitle) {
        case "shortname" :
                    $PAGE->set_heading($COURSE->shortname);
                    break;
        case "off" :
                    $PAGE->set_heading('');
                    break;
    }
}

// Get the fonts.
$fontname = str_replace(" ", "+", $PAGE->theme->settings->fontname);
$fontheadername = str_replace(" ", "+", $PAGE->theme->settings->fontheadername);
$fonttitlename = str_replace(" ", "+", $PAGE->theme->settings->fonttitlename);

// Get the fonts subset.
if (!empty($PAGE->theme->settings->fontsubset)) {
    $fontssubset = '&subset=latin,'.$PAGE->theme->settings->fontsubset;
} else {
    $fontssubset = '';
}

// Font weights.
if (!empty($PAGE->theme->settings->fontweight)) {
    $fontweight = ':'.$PAGE->theme->settings->fontweight;
} else {
    $fontweight = ':400';
}

if (!empty($PAGE->theme->settings->fontheaderweight)) {
    $fontheaderweight = ':'.$PAGE->theme->settings->fontheaderweight;
} else {
    $fontheaderweight = ':400';
}

if (!empty($PAGE->theme->settings->fonttitleweight)) {
    $fonttitleweight = ':'.$PAGE->theme->settings->fonttitleweight;
} else {
    $fonttitleweight = ':700';
}

// Get the HTML for the settings bits.
$html = theme_adaptable_get_html_for_settings($OUTPUT, $PAGE);

if (right_to_left()) {
    $regionbsid = 'region-bs-main-and-post';
} else {
    $regionbsid = 'region-bs-main-and-pre';
}

$showicons = "";
$showicons = $PAGE->theme->settings->blockicons;
if ($showicons == 1) {
    $showiconsclass = "showblockicons";
} else {
    $showiconsclass = " ";
}

// Setting for default screen view. does not override user's preference.
$defaultview = "";
$defaultview = $PAGE->theme->settings->viewselect;
if ($defaultview == 1 && $setfull == "") {
    $setfull = "fullin";
}

echo $OUTPUT->doctype();
?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

<?php
if (!empty($fontname) && $fontname != 'default') {
?>
        <link href='https://fonts.googleapis.com/css?family=<?php echo $fontname.$fontweight.$fontssubset; ?>'
        rel='stylesheet'
        type='text/css'>
<?php
}
?>

<?php
if (!empty($fontheadername) && $fontheadername != 'default') {
?>
    <link href='https://fonts.googleapis.com/css?family=<?php echo $fontheadername.$fontheaderweight.$fontssubset; ?>'
    rel='stylesheet'
    type='text/css'>
<?php
}
?>

<?php
if (!empty($fonttitlename)  && $fonttitlename != 'default') {
?>
    <link href='https://fonts.googleapis.com/css?family=<?php echo $fonttitlename.$fonttitleweight.$fontssubset; ?>'
    rel='stylesheet'
    type='text/css'>
<?php
}
?>

<?php echo $OUTPUT->standard_head_html() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
</head>

<body <?php echo $OUTPUT->body_attributes(array('two-column', $setzoom)); ?>>

<?php echo $OUTPUT->standard_top_of_body_html() ?>
<div id="page" class="container-fluid <?php echo "$setfull $showiconsclass"; ?>">

<?php

echo $OUTPUT->get_alert_messages();

?>

<header id="page-header-wrapper"
<?php
if ($fixedheader) {
?>
style="position: fixed;"
<?php
}
?> >
    <div id="above-header">
        <div class="clearfix container userhead">
            <div class="pull-left">
                <?php echo $OUTPUT->user_menu(); ?>
            </div>

            <div class="headermenu row">
<?php
if (!isloggedin() || isguestuser()) {
    echo $OUTPUT->page_heading_menu();
    if (!empty($PAGE->theme->settings->frontpagelogin)) { ?>
        <form action="<?php p($CFG->wwwroot) ?>/login/index.php" method="post">
            <input style="height: 12px; padding-bottom: 4px;" type="text" name="username" placeholder="Username" size="10">
            <input style="height: 12px; padding-bottom: 4px;" type="password" name="password" placeholder="Password"  size="10">
            <button class="btn-login" type="submit"><?php echo get_string('logintextbutton', 'theme_adaptable'); ?></button>
        </form>
<?php
    } else {
?>
        <form action="<?php p($CFG->wwwroot) ?>/login/index.php" method="post">
            <button class="btn-login" type="submit">
                <?php echo get_string('logintextbutton', 'theme_adaptable'); ?>
            </button>
        </form>
<?php
    }
} else {
?>
        <div class="dropdown secondone">
            <a class="dropdown-toggle usermendrop" data-toggle="dropdown" href="#">
                <span class="fa fa-user"></span>
                <span><?php echo fullname($USER) ?></span>
                <span class="fa fa-angle-down"></span>
            </a>

<ul class="dropdown-menu usermen" role="menu" aria-labelledby="dLabel">
<?php
    if (!empty($PAGE->theme->settings->enablemy)) { ?>
        <li>
            <a href="<?php p($CFG->wwwroot) ?>/my"
                title="<?php echo get_string('myhome') ?>">
                <i class="fa fa-dashboard"></i>
                <?php echo get_string('myhome') ?>
            </a>
        </li>
<?php
    }
?>
<?php
    if (!empty($PAGE->theme->settings->enableprofile)) { ?>
        <li>
            <a href="<?php p($CFG->wwwroot) ?>/user/profile.php"
                title="<?php echo get_string('viewprofile') ?>">
                <i class="fa fa-user"></i>
                <?php echo get_string('viewprofile') ?>
            </a>
        </li>
<?php
    }
?>
<?php
    if (!empty($PAGE->theme->settings->enableeditprofile)) { ?>
        <li>
            <a href="<?php p($CFG->wwwroot) ?>/user/edit.php"
                title="<?php echo get_string('editmyprofile') ?>">
                <i class="fa fa-cog"></i>
                <?php echo get_string('editmyprofile') ?>
            </a>
        </li>
<?php
    }
?>
<?php
    if (!empty($PAGE->theme->settings->enableprivatefiles)) { ?>
        <li>
        <a href="<?php p($CFG->wwwroot) ?>/user/files.php"
            title="<?php echo get_string('privatefiles', 'block_private_files') ?>">
                <i class="fa fa-file"></i>
                <?php echo get_string('privatefiles', 'block_private_files') ?>
        </a>
        </li>
<?php
    }
?>
<?php
    if (!empty($PAGE->theme->settings->enablegrades)) { ?>
        <li>
        <a href="<?php p($CFG->wwwroot) ?>/grade/report/overview/index.php"
            title="<?php echo get_string('grades') ?>">
                <i class="fa fa-list-alt"></i><?php echo get_string('grades') ?>
        </a>
        </li>
<?php
    }
?>
<?php
    if (!empty($PAGE->theme->settings->enablebadges)) { ?>
        <li>
        <a href="<?php p($CFG->wwwroot) ?>/badges/mybadges.php" title="<?php echo get_string('badges') ?>">
                <i class="fa fa-certificate"></i><?php echo get_string('badges') ?>
        </a>
        </li>
<?php
    }
?>

<?php
    if ($CFG->version > 2015051100) { ?>
        <li>
        <a href="<?php p($CFG->wwwroot) ?>/user/preferences.php"
            title="<?php echo get_string('preferences') ?>">
            <i class="fa fa-cog"></i><?php echo get_string('preferences') ?>
        </a>
        </li>
<?php
    }
?>

<?php
    if (!empty($PAGE->theme->settings->enablenote)) { ?>
        <li>
        <a href="<?php p($CFG->wwwroot) ?>/message/edit.php?id=<?php echo "$userid"; ?>"
            title="<?php echo get_string('notifications') ?>">
                <i class="fa fa-paper-plane"></i>
                <?php echo get_string('notifications') ?>
        </a>
        </li>
<?php
    }
?>

<?php
    if (!empty($PAGE->theme->settings->enableblog)) { ?>
        <li>
        <a href="<?php p($CFG->wwwroot) ?>/blog/index.php?userid=<?php echo "$userid"; ?>"
            title="<?php echo get_string('myblogs', 'theme_adaptable') ?>">
                <i class="fa fa-rss"></i>
                <?php echo get_string('myblogs', 'theme_adaptable') ?>
        </a>
        </li>
<?php
    }
?>

<?php
    if (!empty($PAGE->theme->settings->enableposts)) { ?>
        <li>
        <a href="<?php p($CFG->wwwroot) ?>/mod/forum/user.php?id=<?php echo "$userid"; ?>"
            title="<?php echo get_string('posts') ?>">
                <i class="fa fa-commenting"></i>
                <?php echo get_string('posts') ?>
        </a>
        </li>
<?php
    }
?>

<?php
    if (!empty($PAGE->theme->settings->enablefeed)) { ?>
        <li>
        <a href="<?php p($CFG->wwwroot) ?>/report/myfeedback/index.php?userid=<?php echo "$userid"; ?>"
            title="<?php echo get_string('feedback') ?>">
                <i class="fa fa-bullhorn"></i>
                <?php echo get_string('feedback') ?>
        </a>
        </li>
<?php
    }
?>

<?php
    if (!empty($PAGE->theme->settings->enablecalendar)) { ?>
        <li>
        <a href="<?php p($CFG->wwwroot) ?>/calendar/view.php"
            title="<?php echo get_string('pluginname', 'block_calendar_month') ?>">
                <i class="fa fa-calendar"></i>
                <?php echo get_string('pluginname', 'block_calendar_month') ?>
        </a>
        </li>
<?php
    }
?>
        <li>
        <a href="<?php echo $CFG->wwwroot.'/login/logout.php?sesskey='.sesskey(); ?>"
            title="<?php echo get_string('logout') ?>">
                <i class="fa fa-lock"></i>
                <?php echo get_string('logout') ?>
        </a>
        </li>
    </ul>
</div>
<?php
}
?>
</div>

<div style="float: right; position: relative; display: inline; margin-left: 15px; height:20px;">
<?php
if (empty($PAGE->layout_options['langmenu']) || $PAGE->layout_options['langmenu']) {
    echo $OUTPUT->lang_menu();
}
?>
</div>

<?php
echo $OUTPUT->get_top_menus();
?>
    </div>
</div>
<div id="page-header" class="clearfix container">
        <?php if ($haslogo) { ?>
            <div id="logocontainer">
                <a href="<?php p($CFG->wwwroot) ?>">
                    <?php echo "<img src='".$PAGE->theme->setting_file_url('logo', 'logo')."' alt='logo' id='logo' />";
                    echo "</a></div>";
} else if ($hastitle) {
?>
            <div id="titlecontainer">
                <a href="<?php p($CFG->wwwroot) ?>">
                    <?php echo $PAGE->theme->settings->sitetitletext; ?>
                </a>
            </div>
        <?php
}

if (isset($PAGE) && !$PAGE->theme->settings->sitetitle) {
        $header = theme_adaptable_remove_site_fullname($PAGE->heading);
        $PAGE->set_heading($header);
}
?>

<div id="coursetitle" class="pull-left">
<?php
    echo $PAGE->heading;
?>
    </div>

<?php
if (!empty($PAGE->theme->settings->socialset)) {
    echo $OUTPUT->socialicons();
}
?>

<?php
if (empty($PAGE->theme->settings->socialset)) { ?>
        <div class="searchbox">
            <form action="<?php p($CFG->wwwroot) ?>/course/search.php">
                <label class="hidden" for="search-1" style="display: none;">Search iCity</label>
                <div class="search-box grey-box bg-white clear-fix">
                    <input placeholder="<?php echo get_string("searchcourses")?>"
                                        accesskey="6"
                                        class="search_tour bg-white no-border left search-box__input ui-autocomplete-input"
                                        type="text"
                                        name="search"
                                        id="search-1"
                                        autocomplete="off">
                    <button type="submit" class="no-border bg-white pas search-box__button">
                        <abbr class="fa fa-search"></abbr>
                    </button>
                </div>
            </form>
        </div>
<?php
}
?>

        <div id="course-header">
            <?php echo $OUTPUT->course_header(); ?>
        </div>
    </div>

<?php
if (isloggedin()) {
?>
    <div id="navwrap">
        <div class="container">
            <div class="navbar">
                <nav role="navigation" class="navbar-inner">
                    <div class="container-fluid">
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                        <div class="nav-collapse collapse ">
                            <?php echo $OUTPUT->navigation_menu(); ?>
<?php
    if (empty($PAGE->theme->settings->disablecustommenu)) {
        echo $OUTPUT->custom_menu();
    }
?>
<?php
    if ($PAGE->theme->settings->enabletoolsmenus) {
        echo $OUTPUT->tools_menu();
    }
?>

        <ul class="nav pull-right">
<?php
    if (isloggedin()) {
        if ($PAGE->theme->settings->enableshowhideblocks) { ?>
           <li class="hbl">
               <a href="#" class="moodlezoom" title="<?php echo get_string('hideblocks', 'theme_adaptable') ?>">
                   <i class="fa fa-indent fa-lg"></i>
               <span class="zoomdesc"><?php echo get_string('hideblocks', 'theme_adaptable') ?></span>
           </a>
       </li>
       <li class="sbl">
               <a href="#" class="moodlezoom" title="<?php echo get_string('showblocks', 'theme_adaptable') ?>">
               <i class="fa fa-outdent fa-lg"></i>
               <span class="zoomdesc"><?php echo get_string('showblocks', 'theme_adaptable') ?></span>
           </a>
       </li>
<?php
        }

        if ($PAGE->theme->settings->enablezoom) { ?>
            <li class="hbll">
                <a href="#" class="moodlewidth" title="<?php echo get_string('fullscreen', 'theme_adaptable') ?>">
                <i class="fa fa-expand fa-lg"></i>
                <span class="zoomdesc"><?php echo get_string('fullscreen', 'theme_adaptable') ?></span>
            </a>
        </li>
        <li class="sbll">
                <a href="#" class="moodlewidth" title="<?php echo get_string('standardview', 'theme_adaptable') ?>">
                    <i class="fa fa-compress fa-lg"></i>
                <span class="zoomdesc"><?php echo get_string('standardview', 'theme_adaptable') ?></span>
            </a>
            </li>
<?php
        }
    }
?>
        </ul>
                            <div id="edittingbutton" class="pull-right breadcrumb-button">
                                <?php echo $OUTPUT->page_heading_button(); ?>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
<?php
}
?>
</header>


<?php
    echo $OUTPUT->get_news_ticker();
