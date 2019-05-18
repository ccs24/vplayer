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
 * VPlayer module admin settings and defaults
 *
 * @package mod_vplayer
 * @copyright  2009 Petr Skoda (http://skodak.org)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
    require_once("$CFG->libdir/resourcelib.php");

    $displayoptions = resourcelib_get_displayoptions(array(RESOURCELIB_DISPLAY_OPEN, RESOURCELIB_DISPLAY_POPUP));
    $defaultdisplayoptions = array(RESOURCELIB_DISPLAY_OPEN);

    //--- general settings -----------------------------------------------------------------------------------
    $settings->add(new admin_setting_configmultiselect('vplayer/displayoptions',
        get_string('displayoptions', 'vplayer'), get_string('configdisplayoptions', 'vplayer'),
        $defaultdisplayoptions, $displayoptions));

    //--- modedit defaults -----------------------------------------------------------------------------------
    $settings->add(new admin_setting_heading('vplayermodeditdefaults', get_string('modeditdefaults', 'admin'), get_string('condifmodeditdefaults', 'admin')));

    $settings->add(new admin_setting_configcheckbox('vplayer/printheading',
        get_string('printheading', 'vplayer'), get_string('printheadingexplain', 'vplayer'), 1));
    $settings->add(new admin_setting_configcheckbox('vplayer/printintro',
        get_string('printintro', 'vplayer'), get_string('printintroexplain', 'vplayer'), 0));
    $settings->add(new admin_setting_configcheckbox('vplayer/printlastmodified',
        get_string('printlastmodified', 'vplayer'), get_string('printlastmodifiedexplain', 'vplayer'), 1));
    $settings->add(new admin_setting_configselect('vplayer/display',
        get_string('displayselect', 'vplayer'), get_string('displayselectexplain', 'vplayer'), RESOURCELIB_DISPLAY_OPEN, $displayoptions));
    $settings->add(new admin_setting_configtext('vplayer/popupwidth',
        get_string('popupwidth', 'vplayer'), get_string('popupwidthexplain', 'vplayer'), 620, PARAM_INT, 7));
    $settings->add(new admin_setting_configtext('vplayer/popupheight',
        get_string('popupheight', 'vplayer'), get_string('popupheightexplain', 'vplayer'), 450, PARAM_INT, 7));
}
