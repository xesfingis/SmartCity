<?php
header('Content-Type: application/rss+xml; charset=UTF-8');
mysql_connect("localhost","root","");
mysql_select_db("mybase");
 
mysql_query("set names 'utf8'");

echo"<?xml version=\"1.0\" encoding=\"UTF-8\" ?>
<rss version=\"2.0\">

<channel>
  <title>MY RSS</title>
  <link>http://www.rsspatras.gr</link>
  <description>Συστημα RSS</description>


";
$s="select * from anafores limit 0,20";
$q=mysql_query($s);
while($r=mysql_fetch_array($q))
{
echo"	<item>
    <title>$r[katigoria]</title>
    <pubDate>$r[date1]</pubDate>
	<user>$r[email_user]</user>
    <description>$r[description]</description>
  </item>";

}
    
echo "</channel></rss>";

?>