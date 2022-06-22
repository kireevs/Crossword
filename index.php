<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Crossword</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
    <?php
    $let_one = array("А", "В", "Г");
    $let_two = array("Е", "И", "К");
    $let_three = array("Л", "Н", "О");
    $let_four = array("П", "Р", "С");
    $let_five = array("Т", "У", "Щ");
    $let_six = array("Ь", "Я", "ПУСТО");

    $num = array($let_one, $let_two, $let_three, $let_four, $let_five, $let_six);

    $table = array(
        array([0, 'yellow'], [0, 'yellow'], [4, 'yellow'], [2, 'yellow'], [1, 'orange'], [3, 'yellow'], [0, 'yellow'], [4, 'yellow'], [1, 'yellow'], [5, 'yellow']),
        array([0, 'yellow'], [5, 'yellow'], [4, 'yellow'], [5, 'yellow'], [2, 'yellow'], [2, 'yellow'], [4, 'purple'], [2, 'yellow'], [5, 'yellow'], [0, 'yellow']),
        array([4, 'yellow'], [3, 'purple'], [1, 'yellow'], [3, 'blue'], [1, 'yellow'], [4, 'yellow'], [0, 'yellow'], [2, 'yellow'], [1, 'yellow'], [1, 'yellow']),
        array([2, 'purple'], [5, 'yellow'], [4, 'yellow'], [4, 'orange'], [4, 'yellow'], [0, 'yellow'], [5, 'yellow'], [4, 'yellow'], [5, 'yellow'], [2, 'blue']),
        array([3, 'yellow'], [1, 'yellow'], [0, 'yellow'], [2, 'yellow'], [5, 'yellow'], [2, 'yellow'], [2, 'yellow'], [3, 'orange'], [4, 'yellow'], [5, 'blue'])
    );
    ?>

</head>

<body>
    <center>
        <h1>Crossword</h1>
    </center>
    <hr>
    <table class="center">
        <?php
        for ($row = 0; $row < 5; $row++) { ?>
            <tr>
                <?php
                for ($col = 0; $col < 10; $col++) { ?>
                    <td>
                        <select class="let_select <?php echo $table[$row][$col][1] ?>">
                            <option value=" "> </option>
                            <?php
                            foreach ($num[$table[$row][$col][0]] as $l) {
                            ?>
                                <option> <?php echo $l; ?> </option>
                            <?php } ?>
                        </select>
                    </td>
                <?php } ?>
            </tr>
        <?php } ?>
    </table>

    <center><h3>Ключевое слово</h3></center>
    <table class="keyword">
        <td>
            <select class="orange_keyword let_select"></select>
        </td>
        <td>
            <select class="orange_keyword let_select"></select>
        </td>
        <td>
            <select class="orange_keyword let_select"></select>
        </td>
        <td>
            <select class="blue_keyword let_select"></select>
        </td>
        <td>
            <select class="blue_keyword let_select"></select>
        </td>
        <td>
            <select class="blue_keyword let_select"></select>
        </td>
        <td>
            <select class="purple_keyword let_select"></select>
        </td>
        <td>
            <select class="purple_keyword let_select"></select>
        </td>
        <td>
            <select class="purple_keyword let_select"></select>
        </td>

    </table>

    <center>
        <p id="desc">Введите известные буквы в поле ввода, заменяя неизвестные буквы знаком дефис "-", если количество букв не известно используйте знак "+"</p>
    </center>
    <form class="word_search" action="https://poncy.ru/crossword/" target="_blank">
        Поиск слова: <input type="text" name="mask">
        <input type="submit" value="Найти">
    </form>

</body>

</html>