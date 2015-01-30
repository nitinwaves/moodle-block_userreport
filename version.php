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
 * Version information for the userreport plugin.
 *
 * @package    block
 * @subpackage userreport
 * @copyright  2013 The Digital Group - http://www.thedigitalgroup.com - Nitin Jain
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version = 2013060300;  // YYYYMMDDHH (year, month, day, 24-hr time)
$plugin->requires = 2011070100; // YYYYMMDDHH (This is the release version for Moodle 2.0)
$plugin->component = 'block_userreport'; // Full name of the plugin (used for diagnostics)