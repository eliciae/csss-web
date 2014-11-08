<?php
require 'header.php';
?>

<script type="text/javascript" src="js/csss.js"></script>


<div class="black-bg">

<?php
echo file_get_contents("https://docs.google.com/document/d/1RcR6L0vyceKsf4WZqjXY5muNnyZLuFEPTBb3jlfE01g/pub?output=html");
?>

</div>

<?php
require 'footer.php';
?>