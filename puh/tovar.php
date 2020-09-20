<?php
//  echo $_GET["tov1"];

// ?tov1=4&tov2=3
if ($_GET){
        $flag=false;
        for($i=1;$i<=10;$i++){
            $tmp="tov".$i;  //$
            if($_GET[$tmp]){
                $flag=true;
                 break;
            }
            else{
                echo "1-oe yslovie error";
            }
            
        }
        if($flag){
            runMySQL();
        }  
        else{
            echo "2-oe yslovie error";
        }
}

function runMySQL(){
    $db=mysql_connect("localhost","root","");

    if($db){
        if (mysql_select_db("puh",$db)){
            mysql_query("SET names 'utf8'",$db);
            getQuery();
            javaKol();
        }
        mysql_close($db);
    }
}
function getQuery(){
    $date_time=date('Y-m-d [H:i:s]');
    for($i=1;$i<=10;$i++){
        $tmp="tov".$i;
        if($_GET[$tmp]){
            $kol=$_GET[$tmp];
            $q="INSERT INTO tovar (name,kol,dv)".
            "VALUES ({$i},{$kol},'{$date_time}')";
            mysql_query($q);
        }
    }
}

function javaKol(){
    $otvet="";
    $sql="select name,SUM(kol) from tovar group by name ASC";

    $rez=mysql_query($sql);
    for($i=0;$i<10;$i++){
       $row=mysql_fetch_row($rez) ;
       $kol=$row[1]; //
       $otvet.=$kol;
       if($i!=9)$otvet.="~";
    }
    echo $otvet;
}  

?>
