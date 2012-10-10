
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>cashtivity campus page</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="Nan nan LI" />
<link href="http://localhost/CodeIgniter_2.1.2/css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div id="header">
		<fieldset id ="top">
			<div id="title">
				<img id="img1" src="http://localhost/CodeIgniter_2.1.2/images/logo.jpg"/>
			</div>
			<div id="link">
				<a href="home.htm">Home</a> &nbsp;&nbsp;&nbsp;
				<a href="todo.htm">ToDo</a> &nbsp;&nbsp;&nbsp;
				<a href="calendar.htm">Calendar</a> &nbsp;&nbsp;&nbsp;
				<a href="connections.htm">Connections</a>  &nbsp;&nbsp;&nbsp;
				<a href="messages.htm">Messages</a> &nbsp;&nbsp;&nbsp;
				<a href="notifications.htm">Notifications</a>  &nbsp;&nbsp;&nbsp;
			</div>
			<div id="search">
				<form action="http://www.cashtivity.com" method="get">
					<p>
						<input type="text" size="40" name="q"/> 
						<input type="submit"name="search" value="Search"/> 
					</p>
				</form>
			</div>
		</fieldset>
	</div>
<div id="page">
	<fieldset>
		<div id ="nav">
		<fieldset class="small">
			<div id ="pic">
				<table border="0" cellspacing="0" cellpadding="4" summary="">
					<tr>
						<td>
							<img id="img2" src="http://localhost/CodeIgniter_2.1.2/images/Standard-Pizza1.jpg" height="90" width="150"/>
							</a>
						<br />User name
						</td>
					</tr>
				</table>
			</div>
		</fieldset>
			<div id="menu">
				<dl id="project">
					<dt><a href="project.htm">Project</a></dt>
					<dt><a href="campus.htm">Campus</a></dt>
					<dt><a href="directory.htm">Directory</a></dt>
					<dt><a href="groups.htm">Groups</a></dt>
						<dd><a href="groups.htm">-Your Group</a></dd>
						<dd><a href="grouplike.htm">-Group You May Like</a></dd>
						<dd><a href="creategroup.htm">-Create a Group</a></dd>
					<dt><a href="pages.htm">Pages</a></dt>	
						<dd><a href="pages.htm">-Your Pages</a></dd>
						<dd><a href="pagelike.htm">-Pages You May Like</a></dd>
						<dd><a href="createpage.htm">-Create a Page</a></dd>	
					<dt id="searchinside">
						<form action="http://www.cashtivity.com" method="get">
						<p>
						<input type="text" size="20" name="q"/> 
						</p>
						</form>
					</dt>	
				</dl>
			</div>
		</div>
		<div id ="content">
			<fieldset class="content">
			<table border="0" summary="">
				<caption>Texts</caption>
					<tr>	
						<td>
				<?php echo $error;?>

				<?php echo form_open_multipart('upload/do_upload');?>
					<p>
						<input type="file" name="userfile" size="20" />

						<br /><br />


						<input type="submit" value="upload" name="upload"/>

				<?php echo form_close(); ?>
						</td>
					</tr>
			</table>
			</fieldset>
		</div>
	</fieldset>
</div>
	<div id="footer">
		<a href="http://www.cashtivity.com">About Us</a> |
		<a href="http://www.cashtivity.com">Calendar</a>|
		<a href="http://www.cashtivity.com">Terms & Privacy</a>
	</div>
</body>
</html>	