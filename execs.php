<?php
require 'header.php';
?>

<p class="page-title">Executives</p>

<?php

//get the url from the publish to web options in drive spreadsheet
//get it as a csv so it can be iterated through
$spreadsheet_url="https://docs.google.com/spreadsheet/pub?key=0AuwXAOvqaY5PdEFwQmo5SVhBRno0ZWZEQXl6OHRCclE&output=csv";

if(!ini_set('default_socket_timeout',    15)) echo "<!-- unable to change socket timeout -->";

if (($handle = fopen($spreadsheet_url, "r")) !== FALSE) 
{
	//while there is still more csv data
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) 
    {
        $spreadsheet_data[]=$data;

        echo "<div class=black-bg>";
        //ifs are so that there are no broken images or weird formatting from empty cells
        if ($data[2] != "" || $data[2] != null)
        {
            echo "<img class=\"exec-img float-left\" src=" . $data[2] . ">";
        }

        if ($data[0] != "" || $data[0] != null)
        {
        	echo "<h3>" . $data[0] . "</h3>";
    	}
    	if ($data[1] != "" || $data[1] != null)
        {
            echo "<h1>" . $data[1] . "</h1>";
        }
        if ($data[3] != "" || $data[3] != null)
        {
            echo "<p>" . $data[3] . "</p>";
        }

        echo "<div class=clearfix></div>";
        echo "</div>";
    }
    fclose($handle);
}
else
    die("Problem reading csv");
?>

<?php
require 'footer.php';
?>