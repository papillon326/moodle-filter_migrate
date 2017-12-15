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
 * filter for site migration.
 *
 * @package    filter
 * @subpackage migration
 * @copyright Mitsuru Udagawa 
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

class filter_migrate extends moodle_text_filter {
    function filter($text, array $options = array()) {

        global $CFG;
        
        if (empty($CFG->oldwwwroot)) return $text;
        if (strpos($text, $CFG->oldwwwroot) === false) return $text;
        
        $text = str_replace($CFG->oldwwwroot, $CFG->wwwroot, $text);
        return $text;
    }
}

