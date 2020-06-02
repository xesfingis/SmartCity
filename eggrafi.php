<?php 

if (isset($_POST['koumpiegrafis']))
{
   $s="insert into users (email,password,onoma,tilefono,user)
   values ('$_POST[email]','$_POST[password]','$_POST[onoma]','$_POST[tilefono]','0')";
   if (mysql_query($s)) echo "Η εγγραφή σας έγινε επιτυχώς<br><br><br><br> ";
   else  echo "Η εγγραφή σας δεν έγινε<br><br><br><br> ";
}
else
{
 echo "

<h2> Εγγραφή χρήστη </h2>
<form action='' method=post>
<table>
<tr><td>email    </td><td><input type=email required name=email ></td></tr>
<tr><td>Password </td><td><input type=password required name=password></td></tr>
<tr><td>Όνομα    </td><td><input type=text name=onoma></td></tr>
<tr><td>Τηλέφωνο</td><td><input type=text name=tilefono></td></tr>
<tr><td>        </td><td><input type=submit name=koumpiegrafis  value='Εγγραφή'></td></tr>
</table>
</form>";

}

?>