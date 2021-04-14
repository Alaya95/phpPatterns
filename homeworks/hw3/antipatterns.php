<?php

/*
 * антипатерн кода:
 *     - Спагетти-код - чрезмерная вложенность циклов
 *     - шифрованный (таинственный) код - название переменных указаны некорректно
 *
 * архитектурный антипаттерн:
 *   - затычка на ввод - недостаточная проработанность защиты (нет защиты от sql инъекций)
 */

if(isset($_GET)) {
    $productID = $_GET['addToCart'];
    $result = mysqli_query($db, "SELECT product.id FROM product WHERE product.id='$productID'");

    if ($result){
        $row = mysqli_fetch_assoc($result);

        if ($productID == $row['id']) {
            $result2 =mysqli_query ($db, "SELECT * FROM basket WHERE product_id='$productID' AND user_id='$idUser'");
            $row2 = mysqli_fetch_assoc($result2);

            if ($productID == $row2['product_id'] && $idUser == $row2['user_id'])
            {
                $resultWrite = mysqli_query($db, "update basket set count = count+1 where basket.product_id ='$productID' AND user_id='$idUser'");
            } else {
                $resultWrite = mysqli_query($db, "INSERT INTO basket (product_id, user_id, count) VALUES ($productID, $idUser, 1)");
            }
        }
    }
}

/*
 * антипатерн кода:
 *     - Слепая вера - чрезмерная проверка
 *     - Здесь также может сработать антипаттерн - фактор невероятности
 */

if(isset($_POST)){
    $login = trim($_POST['login']);
    $password = trim($_POST['password']);

    if(empty($password) || empty($login)) {
        exit("Пожалуйста. заполните все поля");
    }

    $login = stripslashes($login);
    $login = htmlspecialchars($login);

    $password = stripslashes($password);
    $password = htmlspecialchars($password);

    include "dbConnect.php";
    $result = mysqli_query($db, "select * from users where login='$login'");

    if($result) {
        $row = mysqli_fetch_assoc($result);
        /*
         * $password === $row['password']
         */
        if ($login === $row['login'] && password_verify($password, $row['password'])) {
            $_SESSION['login'] = $row['login'];
            $_SESSION['id'] = $row['id'];
            echo "Вход на сайт выполнен";
            echo "<br> Welcome, " . $_SESSION['login'];
        } else {
            exit("Неверно введены данные. Пожалуйста, проверьте логин или пароль.");
        }
    } else {
        exit("Пользователя не существует. Убедитесь что введенные вами данные верные.");
    }
}

/*
 * Способы избавления от антипаттернов
 *      - убрать чрезмерную вложенность циклов
 *      - Переименовать все переменные к примеру из result в resultSearchBasket
 *      - Добавить защиту от sql инъекций и введеные пользователем данные
 *      - добавить проверку на все возвращаемые результаты и места,
 *      которые могут вернуть потенциальную ошибку оборачивать в конструкцию try catch
 */