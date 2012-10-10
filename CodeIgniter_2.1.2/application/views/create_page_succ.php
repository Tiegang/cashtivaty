

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
<title>cashtivity gruops page</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="author" content="Nan nan LI" />
<link href="style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<body>
	<div id="header">
		<fieldset id ="top">
				<div id="title">
					<h1>cashtivity</h1>
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
<div id ="nav">
	<div id ="pic">
		<table border="1" cellspacing="0" cellpadding="4" summary="">
			<tr>
				<td>
					<img id="img2" src="images/Standard-Pizza1.jpg" height="90" width="170"/>
					</a>
				<br />User name
				</td>
			</tr>
		</table>
	</div>
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
<div id ="contents">
<div id="groups">
	<table border="0" summary="">
		<caption>Your Groups</caption>
			<tr>
				<td>
					<div class="img">
						<a href="nab.htm">
						<img id="img" src="images/Winter.jpg" height="90" width="120"/>
						</a>
					<div class="desc">1 Add a description of the image here</div>
					</div>
				</td>
				<td>
					<div class="img">
						<a href="nab.htm">
						<img id="img" src="images/Winter.jpg" height="90" width="120"/>
						</a>
					<div class="desc">2 Add a description of the image here</div>
					</div>	
				</td>
				<td>
					<div class="img">
						<a href="nab.htm">
						<img id="img" src="images/Winter.jpg" height="90" width="120"/>
						</a>
					<div class="desc">2 Add a description of the image here</div>
					</div>	
				</td>
			</tr>	
			<tr>
				<td>
					<div class="img">
						<a href="nab.htm">
						<img id="img" src="images/Winter.jpg" height="90" width="120"/>
						</a>
					<div class="desc">3 Add a description of the image here</div>
					</div>
				</td>
				<td>
					<div class="img">
						<a href="nab.htm">
						<img id="img" src="images/Winter.jpg" height="90" width="120"/>
						</a>
					<div class="desc">4 Add a description of the image here</div>
					</div>	
				</td>
			</tr>
	</table>
</div>

<div id ="pages">
    <?php
        
        
        echo '<caption>Your Pages</caption>';
        echo '<table border="1">';
        //echo "<tr>";
        //echo "<td>test</td><td>Hello</td>";
        //echo "</tr>";
        //echo "</table>";
        echo'<tr>';
       foreach($results as $result){
        
	
	echo '<div class="img">';
	echo '<a href="';
        echo 'show_pages/display_page/';
        echo $result->page_id;
        echo '">';
	echo '<td><img id="img" src="images/Winter.jpg" height="90" width="100" />';
        echo '</a>';
	echo '</td>';
	echo '<td>';
        echo '<a href="';
        echo 'show_pages/delet_page/';
        echo $result->page_id;
        echo '">';
        echo 'delete page';
        echo '</a>';
        echo '<br/>';
        echo $result->page_title;
        echo '</td>';
        
           
       
	
       }
       echo '</tr></table>';
        ?>
	<?php echo $this->pagination->create_links(); ?>
    
    
</div>
</div>
</div>
<div id="footer">
	<a href="http://www.cashtivity.com">About Us</a> |
	<a href="http://www.cashtivity.com">Calendar</a>|
	<a href="http://www.cashtivity.com">Terms & Privacy</a>
</div>
</body>
</html>