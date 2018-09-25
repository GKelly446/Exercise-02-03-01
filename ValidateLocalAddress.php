<!doctype html>

<html>
	<head>
		<title>Validate Local Address</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
        <script src="modernizr.custom.65897.js"></script>

	</head>

	<body>
        <h2>Validate Local Address</h2>
        
        <?php
           $email = array("hsmith123@example.org",
                         "john.smityh.mail@example",
                         "john.smith@example.org",
                         "john.smith@example",
                         "jsmith123@mail.example.org");
               
            
            foreach ($email as $emailAddress) {
                echo "The eamil address &ld1uo;" . $emailAddress . "&rdquo; ";
                if (preg_match("/^(([A-Za-z]+\d+|)" . "([A-Za-z]+\.[A-Za-z]+))" . "@((mail\.)?)example\.org$/i", $emailAddress) ==1) {
                    echo " is a valid e-mail address.<br>";
                }
                else {
                    echo " is not a valid e-mail address.<br>";
                }
            }
        ?>
	</body>
</html>