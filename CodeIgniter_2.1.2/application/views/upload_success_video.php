<html>
<head>
<title>Upload Form</title>
</head>
<body>

<h3>Your file was successfully uploaded!</h3>

<ul>
<?php foreach ($upload_data as $item => $value):?>
<li><?php echo $item;?>: <?php echo $value;?></li>
<?php endforeach; ?>
</ul>

<p>
<a href="http://localhost/CodeIgniter_2.1.2/index.php/upload_video/"> Upload Another File! </a>
</p>
</body>
</html>
