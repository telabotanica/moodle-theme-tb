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


    // Header heading.
    $temp = new admin_settingpage('theme_adaptable_header', get_string('headersettings', 'theme_adaptable'));
    $temp->add(new admin_setting_heading('theme_adaptable_header', get_string('headersettingsheading', 'theme_adaptable'),
    format_text(get_string('headerdesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

    // Enable Site title.
    $name = 'theme_adaptable/sitetitle';
    $title = get_string('sitetitle', 'theme_adaptable');
    $description = get_string('sitetitledesc', 'theme_adaptable');
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Site title.
    $name = 'theme_adaptable/sitetitletext';
    $title = get_string('sitetitletext', 'theme_adaptable');
    $description = get_string('sitetitletextdesc', 'theme_adaptable');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    // Logo.
    $name = 'theme_adaptable/logo';
    $title = get_string('logo', 'theme_adaptable');
    $description = get_string('logodesc', 'theme_adaptable');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Favicon file setting.
    $name = 'theme_adaptable/favicon';
    $title = get_string('favicon', 'theme_adaptable');
    $description = get_string('favicondesc', 'theme_adaptable');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'favicon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Display Course title in the header.
    $name = 'theme_adaptable/enableheading';
    $title = get_string('enableheading', 'theme_adaptable');
    $description = get_string('enableheadingdesc', 'theme_adaptable');
    $radchoices = array(
        'fullname' => "Course Full Name",
        'shortname' => "Course Short Name",
        'off' => get_string('hide'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, 'fullname', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Display Course title in the breadcrumb.
    $name = 'theme_adaptable/breadcrumbtitle';
    $title = get_string('breadcrumbtitle', 'theme_adaptable');
    $description = get_string('breadcrumbtitledesc', 'theme_adaptable');
    $radchoices = array(
        'fullname' => "Course Full Name",
        'shortname' => "Course Short Name"
    );
    $setting = new admin_setting_configselect($name, $title, $description, 'shortname', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/frontpagelogin';
    $title = get_string('frontpagelogin', 'theme_adaptable');
    $description = get_string('frontpagelogindesc', 'theme_adaptable');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $ADMIN->add('theme_adaptable', $temp);
