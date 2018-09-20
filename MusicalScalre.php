<!doctype html>

<html>
	<head>
		<title>Musical Scale</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
        <script src="modernizr.custom.65897.js"></script>
	</head>

	<body>
        <h1>Musical Scale</h1>
        
        <?php
            $musicalScale = array("do", "re", "mi", "fa", "so", "la", "ti", "do");
            $outputString = "The notes of the musical scale are: ";
            foreach ($musicalScale as $currentNote) {
                $outputString . = " " . $currentNote;
            }
            echo "<p>$outputString</p>";
        ?>
	</body>
</html>