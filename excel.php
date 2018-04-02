<?php

include("config.php");
mysql_connect($AddressBook_HOST, $AddressBook_Username, $AddressBook_Password) or die ("Can't connect!"); 
mysql_select_db($AddressBook_DatabaseName) or die ("Can't open database!"); 

$XML = "ID,Name,DOB,HouseNumber,Street,City,Country,Telephone,Fax,Email,Remarks\n";
$file ="report_". date("Y-m-d"). ".csv";

$query = "SELECT * FROM Addresses ORDER by ID ASC";
$result = mysql_query($query) or die("Error: ". mysql_error(). " with query ". $query);
while($myrow = mysql_fetch_array($result)) {
    $XML.= $myrow[ID]. ",";
    $XML.= $myrow[Name]. ",";
    $XML.= $myrow[DOB]. ",";
    $XML.= $myrow[HouseNumber]. ",";
    $XML.= $myrow[Street]. ",";
    $XML.= $myrow[City]. ",";
    $XML.= $myrow[Country]. ",";
    $XML.= $myrow[Telephone]. ",";
    $XML.= $myrow[Fax]. ",";
    $XML.= $myrow[email]. ",";
    $XML.= $myrow[Remarks]. "\n";
}
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=\"$file\"");
header("Content-Transfer-Encoding: binary");
if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE')){
    header('Cache-Control: public');
}
echo $XML;
exit;
?>