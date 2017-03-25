<html>
    <head>
	<meta charset="utf-8">
	<title>Project: Travel webpage</title>

	<style>

	    #italy{
		color:green;
	    }

	    body{
		background:rgb(225,225,200);
	    }

	    h3{
		color:rgb(227, 127, 227);
	    }

th, td {
text-align: center;
}
	</style>

    </head>
<body><h1>It works!</h1>
<p>This is the default web page for this server.</p>
<p>The web server software is running but no content has been added, yet. This is a test. Did it show up?</p>
<h3>WHAT UP FROM GRACE</h3>
<a href="./poolPiServer/main.php">Pool Pi HTML Test Page</a>
</body>
</html>

<?php
echo"";
echo "<h1>DNS Table</h1><br>";
$fileContents = file("/var/lib/misc/dnsmasq.leases");
echo "<table>";
echo "<tr><th>IP Address</th><th>Host</th></tr>";
foreach ($fileContents as $line) {
	preg_match("/(\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}) ([\w-]+) /",$line,$output_array);
	echo "<tr><td>$output_array[1]</td><td>$output_array[2]</td></tr>";
	//	echo "<p>$line</p>";
}
echo "</table>";
?>
