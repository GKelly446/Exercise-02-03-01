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
            $musicalScale = array("doe", "re", "mi", "fa", "so", "la", "ti", "doe");
            $outputString = "The notes of the musical scale are: ";
            foreach ($musicalScale as $currentNote) {
                $outputString .= " " . $currentNote;
            }
            echo "<p>$outputString</p>";
        ?>
        
        <h2>Formatted Text</h2>
        <?php
        //using escape characters to format text and use different characters
        $displayVariable = 9.876;
        echo "<pre>\n";
        echo "Unformatted text line 1. ";
        echo "Unformatted text line 2. ";
        echo "\$displayVariable = $displayVariable";
        echo "</pre>\n";
        ?>
	</body>
</html>