<html>
<head>
<title>Upload Form</title>
</head>
<body>
<h1>Upload Picture</h1>
<?php echo $error;?>

<?php echo form_open_multipart('upload/do_upload');?>

<input type="file" name="userfile" size="20" />

<br /><br />


<input type="submit" value="upload" name="upload"/>

<?php echo form_close(); ?>

</body>
</html>