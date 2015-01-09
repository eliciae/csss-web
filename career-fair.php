<?php
require 'header.php';
?>

<div class="header-bg">
	<h1 class="center page-title">Career Fair Schedule</h1>
</div>


<div class="container">
	<div class="schedule table-responsive">

<?php

//get the url from the publish to web options in drive spreadsheet
//get it as a csv so it can be iterated through
$spreadsheet_url="https://docs.google.com/spreadsheet/pub?key=0AjQsTIS0nLpBdEkyQTNscVl3RGpMQlVIcnp5eHRoYWc&single=true&gid=1&output=csv";

if(!ini_set('default_socket_timeout',    15)) echo "<!-- unable to change socket timeout -->";

if (($handle = fopen($spreadsheet_url, "r")) !== FALSE) 
{
	//print the date of career fair
	$data = fgetcsv($handle, 1000, ",");

	echo "<h2>". $data[0] . "</h2>";

	//start the table
	echo '<table class="table table-hover"><thead><tr>';

	//print the titles
	$data = fgetcsv($handle, 1000, ",");
	foreach ($data as $title)
	{
		echo "<th>" . $title . "</th>";
	}

	echo "</tr></thead><tbody>";

	//while there is still more csv data
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) 
    {
    	echo "<tr>";
        foreach ($data as $info)
		{
        	echo "<td>" . $info . "</td>";
    	}
    	echo "</tr>";
    }
    echo "</tbody>";
    fclose($handle);
}
else
    die("Problem reading csv");
?>


</table>
</div>

<br>
<br>
<br>

</div>



<?php
require 'footer.php';
?>