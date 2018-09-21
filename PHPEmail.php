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
        $emailAdresses = array("john.smith@php.test",
                               "mary.smith.mail@php.example",
                               "john.jones@php.invalid",
                               "alan.smithee@test",
                               "jsmith456@example.com",
                               "jsmith456@test",
                               "mjones@example",
                               "mjones@example.net",
                               "jane.a.doe@example.org" );
        
        function validateAdress($address) {
            if(strpos($address, '@') !== false && strpos($address, '.') !== false) {
                return true;
            }
            else {
                return false;
            }
        }
        
        foreach($emailAdresses as $value) {
            if (validateAdress($value) === false) {
                echo "<p>The e-mail address <em>$value</em> does not appear to be valid.</p>";
            }
        }
       ?>
	</body>
</html>