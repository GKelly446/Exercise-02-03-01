<!doctype html>

<html>
	<head>
		<title>PHP Email 2</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="initial-scale=1.0">
        <script src="modernizr.custom.65897.js"></script>
	</head>

	<body>
        <h1>PHP Email 2</h1>
        
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
        
        function sortAddresses($addresses) {
            $sortedAddresses = array();
            $ilimit = count($addresses) - 1;
            $jlimit = count($addresses);
            for ($i = 0; $i < $ilimit; $i++) {
                $currentAddress = $addresses[$i];
                for($j = $i + 1; $j < $jlimit; $j++) {
                    if (strcasecmp($currentAddress, $addresses[$j]) > 0) {
                        $tempVal = $addresses[$j];
                        $addresses[$j] = $currentAddress;
                        $currentAddress = $tempVal;
                    }
                }
             $sortedAddresses[] = $currentAddress;
            }
            return($sortedAddresses);
        }
        
        $sortedAddresses = sortAddresses($emailAdresses);
        $sortedAddressList = implode(", ", $sortedAddresses);
        echo "<p> Sorted Addresses: $sortedAddressList</p>\n";
        
        function validateAdress($address) {
            if(preg_match("/^[\w-]+(\.[\w-]+)*@[\w-]+(\.[w-]+)*(\.[A-Za-z]{2,})$/i", $address) == 1) {
                return true;
            }
            else {
                return false;
            }
        }
        
        foreach($sortedAddresses as $value) {
            if (validateAdress($value) === false) {
                echo "<p>The e-mail address <em>$value</em> does not appear to be valid.</p>";
            }
        }
       ?>
	</body>
</html>