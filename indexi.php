<?php
require_once 'lib.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta chraset="UTF-8'>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>VinniPuh</title>
<link rel="stylesheet" href="puh.css">
<meta name="robots" comtent="all">

<link rel="icon" href="https://im0-tub-kz.yandex.net/i?id=6a7954692cb98e1a87f4ba1fa2ceba6b-l&n=13">
<link rel="shortcut icon" href="https://avatars.mds.yandex.net/get-pdb/1080201/ad254270-c412-41f9-85b4-2e9d68f3155e/s1200?webp=false">
<meta name="description" content="ВинниПух и компания">
<meta name="keywords" content="мёд,перга, прополис, продукты пчеловодства">
</head>
<body>
<center>
<table border="1" cellpadding=0 cellspacing=0 width="980px">

<tr valing="top">
<td valing=top" width="980px">
<a href="" >
<img src="https://img2.freepng.ru/20181117/rqc/kisspng-stock-photography-jar-honey-bee-honey-tpa-5bf03d2ae376b1.0440832115424709549317.jpg" alt="lfynt" width="15%" height="15%">
</a>
<h1>"ВинниПух и компания"</h1>
</td>
</tr>
<tr valing="top">
<td valing=top" width="980px">
<div id="vmenu">
<ul>
<li>
<a href="indexi.php">Главная</a>
</li>
<li>
<a href="indexi.php?id=2">Товары</a>

</li>
<li>
<a href="indexi.php?id=3">Контакты</a>
</li>
<li>
<a href="indexi.php?id=4">Заказать</a>
</li>
</div>


<!-- <div id="vmenu">
<ul>
<li>
<a href="index.php">Главная</a>
</li>
<li>
<a href="index.php?id=2">Товары</a>

</li>
<li>
<a href="index.php?id=3">Контакты</a>
</li>
<li>
<a href="index.php?id=4">Заказать</a>
</li>
</div> -->
</td>
</tr>

<tr valign="top">
       <td>
           <table border="0" cellpadding=0 cellspacing="0" width="" id ="tab_center">
               <tr valign="top">
                    <td  valign="top" width="200px">  
                    <?php
                        //getHTML(getIdMenu()+1);
                      ?> 
                      </td>
                    <td  valign="top" width="580px">  
                        <div id="sheet">
                            <div id="sheet1"></div>
                            <div id="sheet2">
                                <div id="zakaz">
                                    <form action="index.php?id=2" method="post">
                                        <table border="1" width="520">
                                            <tr>
                                                <th>Товар</th><th>Остаток, кг</th>
                                            </tr>
                                            <tr>
                                                <td>-------</td><td>-------</td>
                                            </tr>
                                            <tr>
                                                <td>Имя (*):</td><td> <input type="text" name="user_name" maxlength="21"></td>
                                            </tr>
                                            <tr>
                                                <td>Телефон (*):</td><td> <input type="text" name="user_tel" maxlength="21"></td>
                                            </tr>
                                            <tr>
                                                <td></td><td> <input type="submit" value="Заказать звонок" name="btn"></td>
                                            </tr>
                                        </table>
                                    </form>
                                </div>

                                <?php
                                    $id_menu = getIdMenu();
                                    if ($id_menu==1){
                                        makeOpisanie();   
                                    } else if ($id_menu==0){
                                        getHTML(6); 
                                    } else if ($id_menu==3){
                                        getHTML(7);
                                    } else if ($id_menu==2){
                                        getHTML(8);
                                        testPost();
                                    }

                                ?>
                            </div>
                            <div id="sheet3"></div>
                        </div>
                
                </td>
                    <td  valign="top" width="200px">   
                        
                    <?php
                        getHTML(5);
                    ?> 


                    </td>
                </tr>
           </table>
       </td>
    </tr>

<tr valing="top">
<td valing="top" width="980px"> 
<h1>
<span>
Проект Винни пух 2020гг.
</span>
</h1>
</td>
</tr>

</table>
</center>
</body>