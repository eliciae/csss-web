<?php
require 'header.php';
?>

<div class="event-bg">
    <h1 class="center page-title">Executives</h1>
</div>

<div class="container content">

<?php

//get the url from the publish to web options in drive spreadsheet
//get it as a csv so it can be iterated through
$spreadsheet_url="https://docs.google.com/spreadsheet/pub?key=0AuwXAOvqaY5PdEFwQmo5SVhBRno0ZWZEQXl6OHRCclE&output=csv";

if(!ini_set('default_socket_timeout',    15)) echo "<!-- unable to change socket timeout -->";

if (($handle = fopen($spreadsheet_url, "r")) !== FALSE) 
{
    $count = 1;

	//while there is still more csv data
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) 
    {
        $spreadsheet_data[]=$data;

        
        //ifs are so that there are no broken images or weird formatting from empty cells
        if ($data[3] != null)
            $image = $data[3];
        else
            $image ="";

        if ($data[0] != null)
        	$title = '<h2>'.$data[0].'</h2>';
        else 
            $title = "";

    	if ($data[2] != null)
            $name = '<h2 class="media-heading">'.$data[2].'</h2>';
        else
            $name = "";

        if ($data[4] != null)
            $bio = $data[4];
        else
            $bio = "";

        if ($data[1] != null)
            $got = '<h2>'.$data[1].'</h2>';
        else
            $got = "";



        if ($count % 2 == 0)
        {
            echo '<div class="row">';
        }

        echo '
        <div class="col-md-6">
          <div class="media">
            <div class="media-left">
              <img src="'.$image.'" height="180">
            </div>
            <div class="media-body">
              '.$name.$title.'
            </div>
          </div>
        </div>';

        if ($count % 2 == 0)
        {
            echo '</div>';
        }

        $count++;

    }
    fclose($handle);
}
else
    die("Problem reading csv");
?>

</div>

<?php
require 'footer.php';
?>