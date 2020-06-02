<?php 

if (isset($_POST['koumpiallagis2']))
{
 if ($_POST['koumpiallagis2']=='Αποθήκευση')
 {
   $s="update users set password='$_POST[password]',onoma='$_POST[onoma]',tilefono='$_POST[tilefono]', user='$_POST[user]' where email='$_POST[email]'";
   if (mysql_query($s)) echo "Τα στοιχεία άλλαξαν<br><br><br><br> ";
   else  echo "Λάθος στα στοιχεια<br><br><br><br> ";
   }
   if ($_POST['koumpiallagis2']=='Διαγραφή') 
   {
    $s="delete from users where email='$_POST[email]'";
   if (mysql_query($s)) echo "O Χρήστης Διαγράφηκε<br><br><br><br> ";
   else  echo "Λάθος στα στοιχεια<br><br><br><br> ";
   
   
   }
   
 }
else
{

$s="select * from users where email='$_GET[e]'";
$t=mysql_query($s);
$r=mysql_fetch_array($t);

 echo "

<h2> Στοιχεία Χρήστη </h2>
<form action='' method=post>
<table>
<tr><td>email    </td><td><input type=email required readonly name=email value='$r[email]'></td></tr>
<tr><td>Password </td><td><input type=password required name=password value='$r[password]'></td></tr>
<tr><td>Όνομα    </td><td><input type=text name=onoma value='$r[onoma]'></td></tr>
<tr><td>Τηλέφωνο</td><td><input type=text name=tilefono value='$r[tilefono]'></td></tr>
<tr><td>Τύπος</td><td><select name=user>";
if ($r['user']==0) echo "<option value=0>User</option>";
if ($r['user']==1) echo "<option value=1>Admin</option>";
echo"
<option value=0>User</option>
<option value=1>Admin</option>
</select></td></tr>


<tr><td>        </td><td><input type=submit name=koumpiallagis2  value='Αποθήκευση'><input type=submit name=koumpiallagis2  value='Διαγραφή'></td></tr>
</table>
</form>";

}

?>