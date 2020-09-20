<?php
require_once 'lib.php'
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VinniPuh</title>
    <link rel="stylesheet" href="puh.css">
</head>
<body>

 <center>
     <table border="0" cellpadding="0" cellspacing="0" width="980px">
     <tr valign="top">
            <td  valign="top" width="980px">  
        <a href="http://" target="_blank">
        <img style="float:left; padding:1%" width="10%" height="10%" src="https://otvet.imgsmail.ru/download/12072643_2ef5ca996bfbea3b72b7687bbbf51252.jpg" alt="vinnipuh" >
        </a>
        <h1>"ВинниПух и компания"</h1>
        </td>
     </tr>


<tr valign="top">
    <td valign="top" width="980px">
    <div id="vmenu">
    <ul>
    <li>
    <a href="index.php">Главная</a>
    </li>
    <li>
    <a href="index.php?id=1">Товары</a>
    </li>
    <li>
    <a href="index.php?id=2">Заказать</a>
    </li>
    <li>
    <a href="index.php?id=3">Контакты</a>
    </li>
    </ul>
    </div>
    </td>
</tr>
    <tr valign="top">
                      <td>
           <table border="0" cellpadding="0" cellspacing="0" width="980px">
           <tr valign="top">
                <td  valign="top" width="200px"> 
                <?php
                        getHTML(getIdMenu()+1);
                      ?>
                  </td>
                <td  valign="top" width="580px">   
                <div id="sheet">
                <div id="sheet1"></div>
                <div id="sheet2">
                <?php
                   $id_menu=getIdMenu();
                   if ($id_menu==1){
                    makeOpisan();
                   } else if ($id_menu==0){
                    getHTML(6);
                   } else if ($id_menu==3){
                       getHTML(7);
                   } else if ($id_menu==2){
                       getHTML(8);
                       testPost();
                   }
                //    <div id="zakaz">
                //                     <form action="index.php?id=2" method="post">
                //                         <table border="1" width="520">
                //                             <tr>
                //                                 <th>Товар</th><th>Остаток, кг</th>
                //                             </tr>
                //                             <tr>
                //                                 <td>-------</td><td>-------</td>
                //                             </tr>
                //                             <tr>
                //                                 <td>Имя (*):</td><td> <input type="text" name="user_name" maxlength="21"></td>
                //                             </tr>
                //                             <tr>
                //                                 <td>Телефон (*):</td><td> <input type="text" name="user_tel" maxlength="21"></td>
                //                             </tr>
                //                             <tr>
                //                                 <td></td><td> <input type="submit" value="Заказать звонок" name="btn"></td>
                //                             </tr>
                //                         </table>
                //                     </form>
                //                 </div>
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

    <tr valign="top">
        <td  valign="top" width="980px">   
            <center>
                <span>
                    Проект "ВинниПух и компания", 2020г.
                </span>
            </center>
        </td>
    </tr>
        </table>
    </center>



</body>
</html>