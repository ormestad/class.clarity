<?php
require('config.php');
require('class.clarity.php');
$clarity=new Clarity($CONFIG['clarity']['uri'],$CONFIG['clarity']['user'],$CONFIG['clarity']['pass']);
$project=$clarity->getEntity("projects/P7601");
?>

<html>
<head>
	<meta charset="utf-8">
	<title>Clarity test</title>
</head>

<body>
	<h1>class.clarity.php</h1>
	<h2>Fetch project data<h2>
	<pre>
	<?php print_r($project); ?>
	</pre>
</body>
</html>
