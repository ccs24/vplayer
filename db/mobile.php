<?php
// This file is part of the VPlayer module for Moodle - http://moodle.org/
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
 * Certificate module capability definition
 *
 * @package    mod_vplayer
 * @copyright  Copyright (c) 2018 Blackboard Inc. (http://www.blackboard.com)
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
defined('MOODLE_INTERNAL') || die();

$addons = [
    'mod_vplayer' => [ // Plugin identifier
        'handlers' => [ // Different places where the plugin will display content.
            'coursevplayer' => [ // Handler unique name (alphanumeric).
                'displaydata' => [
                    'icon' => $CFG->wwwroot . '/mod/vplayer/pix/icon.png',
                    'class' => '',
                ],
 
                'delegate' => 'CoreCourseModuleDelegate', // Delegate (where to display the link to the plugin)
                'method' => 'mobile_course_view', // Main function in \mod_certificate\output\mobile
                'offlinefunctions' => [
                    'mobile_course_view' => [],
                    'mobile_issues_view' => [],
                ], // Function that needs to be downloaded for offline.
            ],
        ],
        'lang' => [ // Language strings that are used in all the handlers.
            ['pluginname', 'vplayer'],
            ['summaryofattempts', 'vplayer'],
            ['getcertificate', 'vplayer'],
            ['requiredtimenotmet', 'vplayer'],
            ['viewcertificateviews', 'vplayer'],
        ],
    ],
];