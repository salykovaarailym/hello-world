<?php
    define("ServerName", "localhost");
    define("UserLogin","root");
    define("UserPassword","");
    define("DbName","puh");

    function makeOpisan(){
        $db=mysql_connect(ServerName,UserLogin,UserPassword);
        if($db){
            if(mysql_select_db(DbName,$db)){
                mysql_query("SET names 'utf8'",$db);
                //       
                $rez = mysql_query("SELECT * FROM opisan", $db);
                $out_page="";
                for($i=0;$i<10;$i++){
                    $row=mysql_fetch_row($rez);
                    $name=$row[1];
                    $txt=$row[2];
                    $out_page.="<h1 class='h1_opisan'>{$name}</h1>".
                    "<div class='div_opisan'>{$txt}</div><br/>";     
                }
                echo $out_page;
            }
            mysql_close($db);
        }
    }

    function getIdMenu(){
        $tmp=0;
        if($_GET){
            if($_GET["id"]){
                $tmp=$_GET["id"];
            }

             if(!(($tmp>=1)&&($tmp<=3)))  $tmp=0;
        }
        return $tmp;
    }
    function getHTML($nom){
        $html="";
        $db=mysql_connect(ServerName,UserLogin,UserPassword);
        if($db){
            if(mysql_select_db(DbName,$db)){
                mysql_query("SET names 'utf8'",$db);
                //       
                $rez = mysql_query("SELECT * FROM razmetka where (id={$nom})");
                $kol_str=mysql_num_rows($rez);
                if($kol_str==1){
                    $row=mysql_fetch_row($rez);
                    $html=$row[1];
                }
            }
            mysql_close($db);
        }
        echo $html;
    }

    
function testPost(){
    if ($_POST["btn"]){
        $rez="";
        if (trim($_POST["user_name"])=="") $rez="Введите имя!";
        else if (trim($_POST["user_tel"])=="") $rez="Введите номер телефона!";
        else {
            $info = "Name: ".trim($_POST["user_name"]).
                    "Tel: ".trim($_POST["user_tel"]);

                    $file_name="".rand(1000000,9999999).".txt";
                    $rez="Заявка принята!";

                    $f=fopen(".doc/".$file_name,"w");

                    if ($f){
                        fwrite($f,  $info);
                        fclose($f);
                    }
                }
                    echo "<h1 class='h1_opisan' style='font-size:35px;'> {$rez}</h1>";
        
    }
}

function makeTable(){
    $db=mysql_connect(ServerName,UserLogin,UserPassword);//i
    if($db){
        if(mysql_select_db(DbName,$db)){//i
            mysql_query("SET names 'utf8'",$db);//i
            //
            $sql1="SELECT name, sum(kol) from tovar group by name ASC";
            $rez1=mysql_query($sql1,$db); //i, swap

            $sql2="SELECT name from opisan";
            $rez2=mysql_query($sql2,$db); //i, swap
           // $rez2=mysqli_query($db,$sql2); 
            $out_page="";
            for($i=0;$i<10;$i++){
                $row1=mysql_fetch_row($rez1);//i
                $row2=mysql_fetch_row($rez2);//i
                $kol=$row1[1];
                $name=$row2[0];

                $out_page .= "<tr><td>{$name}</td><td>{$kol}</td></tr>";
            }
            echo  $out_page;
        }
        mysql_close($db);//i
    }
}
?>