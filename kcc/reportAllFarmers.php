<?php

//connect the database
$conn =mysql_connect("localhost","root","")or die(mysql_error());
$db =mysql_select_db('farmer', $conn)or die(mysql_error());

//Enter the headings of the excel columns
$contents="FARMER ID,FARMER NAMES,TOTAL LITRES, DELIVERY DATE\n";




$user_query = mysql_query(" 
    select      
    			tbluser.user_id,
                tbluser.firstname,
                tbluser.lastname,
                
            
                delivery.kg,
                delivery.date
               
    
                
        
    
FROM tbluser
 JOIN delivery 
ON tbluser.user_id=delivery.user_id  ;") or die(mysql_error());





//Mysql query to get records from datanbase


//While loop to fetch the records
while($row = mysql_fetch_array($user_query))
{
$contents.=$row['user_id'].",";
$contents.=$row['firstname']." ".$row['lastname'].",";
$contents.=$row['kg'].",";
$contents.=$row['date']."\n";
}

// remove html and php tags etc.
$contents = strip_tags($contents); 

//header to make force download the file
header("Content-Disposition: attachment; filename=AllFarmers_Report.xls".date('d-m-Y').".csv");
print $contents;

//For more examples related PHP visit www.webinfoipedia.com and enjoy demo and free download..
?>