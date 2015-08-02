<?php
include_once($_SERVER['FILE_PREFIX']."/project_list/project_object.php") ;
$github_uri   = "https://github.com/aidansean/links_pages" ;
$blogpost_uri = "http://aidansean.com/projects/?tag=links" ;
$project = new project_object("links", "Links pages", "https://github.com/aidansean/links_pages", "http://aidansean.com/projects/?tag=links", "links/images/project.jpg", "links/images/project_bw.jpg", "When working on ATLAS and CMS I often needed to save links to poorly advertised pages.  This is where I store the links.", "Tools,Web design", "CSS,HTML,JavaScript,PHP") ;
?>