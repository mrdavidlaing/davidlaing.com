<?php
$options[] = array("name" => "General",
			 "sicon" => "advancedsettings.png",
                   "type" => "heading");


$options[] = array("name" => "Logo Image",
                  "desc" => "You can use your own logo. Click to 'Upload' button and upload your own logo.",
                  "id" => SN."logo",
                  "std" => "",
                  "type" => "upload");

$options[] = array( "name" => "Use only image as logo",
                  "desc" => "By checking this the theme will use your uploaded image only as logo, as it is.",
                  "id" => SN."image_logo",
                  "std" => "0",
                  "type" => "checkbox");
                  
$options[] = array( "name" => "Round display of the logo image",
                  "desc" => "By checking this the image you uploaded will be rounded.",
                  "id" => SN."image_logo_roundness",
                  "std" => "0",
                  "type" => "checkbox");

$options[] = array("name" => "Logo Text",
                  "desc" => "This is used for the text part of the logo as you can see on demo.",
                  "id" => SN."logo_text",
                  "std" => "Focused",
                  "type" => "text");

$options[] = array( "name" => "Custom Favicon",
                  "desc" => "You can use your own custom favicon. Click to 'Upload Image' button and upload your own favicon.",
                  "id" => SN."favicon",
                  "std" => "",
                  "type" => "upload");

?>