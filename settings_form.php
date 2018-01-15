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
 * Settings form.
 *
 * @copyright 2018 Joshua Asplund <asplund3@illinois.edu>
 * @license   https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @package   workshopallocation_group
 */

namespace workshopallocation_group;

defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot . '/lib/formslib.php');
require_once($CFG->dirroot . '/mod/workshop/allocation/scheduled/settings_form.php');

/**
 * Allocator settings form
 *
 * This is used by {@see workshop_scheduled_allocator::ui()} to set up allocation parameters.
 */
class settings_form extends workshop_scheduled_allocator_form {

    /**
     * Definition of the setting form elements
     */
    public function definition() {
        // TODO

        $mform = $this->_form;
        $workshop = $this->_customdata['workshop'];
        $current = $this->_customdata['current'];



        parent::definition();

    }

}