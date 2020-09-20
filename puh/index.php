<?php
    require_once 'lib.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VinniPuh</title>
    <link rel="stylesheet" href="puh.css">


    <!---->
    <meta name="robots" content="all">

    <link rel="icon" href="https://pngimg.com/uploads/honey/honey_PNG11575.png">
    <link rel="shortcut icon" href="https://pngimg.com/uploads/honey/honey_PNG11575.png">

    <meta name="description" content="ВинниПух и компания">
    <meta name="keywords" content="мед, перга, прополис, продукты пчеловодсва">
</head>
<body>

    <center>
        <table border="0" cellpadding=0 cellspacing="0" width="980px">
    <tr valign="top" style="text-align:">
        <td  valign="top" width="980px">  
            
            <a  href="index.php" style="padding:1%" target="_blank" style="float:left;">
                <img src="https://pngimg.com/uploads/honey/honey_PNG11575.png" alt="" width="13%" height="20%">
            </a>
            <h1 class="h1_opisan">"ВинниПух и компания"</h1>
        </td>
    </tr>

    <tr valign="top">
        <td  valign="top" width="980px">  
            <div id="container" style=" display: flex;flex-direction: row;justify-content: space-around;">
            <!-- <div id="vmenu"> -->
                <div>  <a href="index.php" style ="text-decoration: none;"> Главная</a></div>
                <div><a href="index.php?id=1" style ="text-decoration: none;">Товары</a></div>
                <div><a href="index.php?id=2" style ="text-decoration: none;">Заказать</a></div>
                <div><a href="index.php?id=3" style ="text-decoration: none;">Контакты</a></div>
                  <!-- <ul>
                      <li>
                          <a href="index.php"> Главная</a>
                      </li>
                      <li>
                          <a href="index.php?id=1">Товары</a>
                      </li>
                      <li><a href="index.php?id=2">Заказать</a></li>
                      <li><a href="index.php?id=3">Контакты</a></li>

                  </ul> -->
            </div>
    
        </td>
    </tr>

    <tr valign="top">
       <td>
           <table border="0" cellpadding=0 cellspacing="0" width="" id ="tab_center">
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
                                <!-- <div id="zakaz">
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
                                </div> -->

                                <?php
                                    $id_menu = getIdMenu();
                                    if ($id_menu==1){
                                        makeOpisan();   
                                    } else if ($id_menu==0){
                                        getHTML(6); 
                                    } else if ($id_menu==3){
                                        getHTML(7);
                                    } else if ($id_menu==2){
                                        getHTML(8);
                                        testPost();
                                        getHTML(9);
                                        makeTable();
                                        getHTML(10);
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