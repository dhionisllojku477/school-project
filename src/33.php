<?php
/*
 * This file is part of PHP Code Generator.
 *
 * (c) 2019-2020 LinQ Coding <i@linqcoding.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in an enclosed directory called LICENSE.
 */

// Define a simple school project class
class SchoolProject {
    public $name = "School Project";  // The name of the school project

    // Method to generate the project's HTML content
    public function generateHtmlContent() {
        return "<h1>" . $this->name . "</h1>";
    }
}

// Create an instance of the SchoolProject class
$project = new SchoolProject();

// Generate and print the HTML content for the school project
echo $project->generateHtmlContent();
