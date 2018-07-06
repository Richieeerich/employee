
<?php 
echo "hi";?>
<?php include 'db_config.php';?>
<?php
$perpage = 5;
$pagesquery=mysql_query("select count('id') from button_table");
$pages=ceil(mysql_result($pagequery,0)/$perpage);

if(!isset($_GET('page'))){
	header("location:tableshow.php?page=1");
}else{
	$page=$_GET['page'];
}
$start=(($page-1)*perpage);
$button=mysql_query("select * from button_table limit $start,$perpage");
while($row=mysql_fetch_assoc($button))
{
	$button= $row['$button'];
	echo"$button";
}
for($number=1;$number<=$page;$number++)
{
	echo '<a href="?page='.$number'">'.$number.'</a>';
}
echo"<br>current page:$page";
?>