<!doctype html>

<html>
	<head>
		<title>PHP Email</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
        <script src="modernizr.custom.65897.js"></script>
	</head>

	<body>
        <h1>PHP Email</h1>
        
       <?php
        $presidents = array("George Washington",
                               "John Adams",
                               "Thomas Jefferson",
                               "James Madison", 
                               "James Monroe");
        
        $yearsInOffics = array("1789 to 1797",
                            "1797 to 1801",
                            "1801 to 1809",
                            "1809 to 1817",
                            "1817 to 1825");
        
        $outputTemplate = "<p>President [NAME] served from [TERM] </p>\n";
        
        foreach ($presidents as $sequence => $value) {
            $tempString = str_replace("[NAME]", $value, $outputTemplate);
            $outputString = str_replace("[TERM]",$yearsInOffics[$sequence],$tempString);
            echo $outputString;
        }
                            
        
        ?>
   
	</body>
</html>