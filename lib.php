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
 * Workshop allocator.
 *
 * @copyright 2018 Joshua Asplund <asplund3@illinois.edu>
 * @license   https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * @package   workshopallocation_group
 */

defined('MOODLE_INTERNAL') || die();

require_once($CFG->dirroot . '/mod/workshop/allocation/lib.php');


class workshop_group_allocator implements workshop_allocator {

    /** @var workshop $workshop */
    protected $workshop;

    /** @var workshopallocation_group\settings_form $mform */
    protected $mform;

    /**
     * Initializes the allocator instance.
     *
     * @param workshop $workshop Workshop API object
     */
    public function __construct(workshop $workshop) {
        $this->workshop = $workshop;
    }

    /**
     * Allocate submissions as requested.
     *
     * @return workshop_allocation_result
     */
    public function init() {
        global $PAGE;

        // TODO
        return NULL;
    }

    /**
     * Renders the settings form.
     *
     * @return string
     */
    public function ui() {
        global $PAGE;

        // TODO
        return NULL;
    }

    /**
     * Deletes the settings related to a workshop instance.
     *
     * @param int $workshopid
     */
    public static function delete_instance($workshopid) {
        global $DB;

        $DB->delete_records('workshopallocation_group', ['workshopid' => $workshopid]);
    }
}
