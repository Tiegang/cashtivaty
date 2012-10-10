
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>cashtivity create a new page</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="Nan nan LI" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="header">
	<div id="title">
		<h1>cashtivity</h1>
	</div>
	<div id="link">
		<a href="home.htm">Home</a> &nbsp;&nbsp;&nbsp;
		<a href="connections.htm">Connections</a>  &nbsp;&nbsp;&nbsp;
		<a href="messages.htm">Messages</a> &nbsp;&nbsp;&nbsp;
		<a href="notifications.htm">Notifications</a>  &nbsp;&nbsp;&nbsp;
		<a href="compus.htm">Campus</a> &nbsp;&nbsp;&nbsp;
		<a href="connections.htm">Connections</a>  &nbsp;&nbsp;&nbsp;
		<a href="logout.htm">Logout</a> 
	</div>
	<div id="search">
		<form action="http://www.cashtivity.com" method="get">
			<p>
				<input type="text" size="40" name="q"/> 
				<input type="submit"name="search" value="Search"/> 
			</p>
		</form>
	</div>
</div>
<div id="searchinside">
	<form action="http://www.cashtivity.com" method="get">
		<p>
			<input type="text" size="40" name="q"/> 
		</p>
	</form>
</div>
<div id="menu">

</div>
<div id="content">
	<form action="new_group/insertdata" method="post">
		<fieldset>
			<legend>Create a New Group</legend>
				<table>
					<tr>
						<td><label>Page Name:</label></td>
						<td><input id="pagename" name="pagename" type="text" size="50"></input></td>
					</tr>
					<tr>
						<td><label>Description:</label></td>
						<td><textarea id="description" name="description" ></textarea></td>
					</tr>
					<tr>
						<td><label>Upload Settings:</label></td>
						<td>					
						<br/>
						<input type="radio" name="upload_setting" checked="checked" value="public"/>Public
						<br/>
						<input type="radio" name="upload_setting" value="only me"/>Only me	</td>
					</tr>
					<tr>
						<td><label>Access Levels:</label></td>
						<td>					
							<select id="accesslevels" name="accesslevels">
								<option value="onlyme">Only me</option>
								<option value="frineds">Friends</option>
								<option value="classmates">Classmates</option>
								<option value="schoolmates">Schoolmates</option>
							</select> 
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<input type="submit" value="Create"/>
						</td>
					</tr>
				</table>
		</fieldset>
	</form>
</div>
</body>
</html>