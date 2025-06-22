<?php
include "functions.php";
$update=getInfoById($_GET['id']);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Форма редактирования</title> 
    </head>
    <body> 
        <div>
            <form action="updateController.php" method="POST" role='form'>
                <div>
                    <input id="student_id" type="hidden" name="student_id" value="<?php echo $update['student_id'];?>"/>
                    <div>
                        <label for="fio">ФИО</label>
                        <div>
                            <input id="fio" type="text" name="fio" value="<?php echo $update['full_name'];?>"/>
                        </div>
                    </div>
                    <div>
                        <label for="birth">Дата рождения</label>
                        <div>
                            <input id="birth" type="date" name="birth" value="<?php echo $update['birth_date'];?>"/>
                        </div>
                    </div>
                    <div>
                        <label for="home">Домашний адрес</label>
                        <div>
                            <input id="home" type="text" name="home" value="<?php echo $update['address'];?>"/>
                        </div>
                    </div>
                    <div>
                        <label for="phonenumber">Номер телефона</label>
                        <div>
                            <input id="phonenumber" type="text" name="phonenumber" value="<?php echo $update['phone'];?>"/>
                        </div>
                    </div>
                    
                    <button type="submit" name="add">Редактировать</button>
                </div>
            </form>
        </div>
    </body>
<html></html>