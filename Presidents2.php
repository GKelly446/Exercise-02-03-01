<!doctype html>

<html>
	<head>
		<title>Presidents 2</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
        <script src="modernizr.custom.65897.js"></script>
	</head>

	<body>
        <h1>Presidents 2</h1>
        
       <?php
            $presidents = "George Washington;John Adams;Thomas Jefferson;James Madison;James Monroe;";
            $thisPresident = strtok($presidents, ";");
            echo $thisPresident;
        
            while($thisPresident != NULL) {
                echo "$thisPresident<br>";
                $thisPresident = strtok(";");
            }
        ?>
   
	</body>
</html>