<?php
require_once 'config\database.php';
$links = mysqli_query($mysql, "SELECT * FROM `links`");
print_r($links);
?>
<!DOCTYPE html>
    <head>
        
        <title>Всякая всячина</title>
        <meta charset="utf-8"> <!--Да, он по умолчанию, но все равно указал-->
        <link  rel="shortcut icon" href="https://www.xn--h1aaecjlfhn1d.xn--p1ai/system/ckeditor_assets/pictures/180269/content_45520334_xxl.png">
        <!--стиль-->
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head >
    <body>
            <header><!--HTML5 элемент header (остановился здесь)-->
                <form id="loginform" action="#" method="post">
                    <input class="loginform_input" type="email" placeholder="post@mail.pt"/><br/>
                    <input class="loginform_input" type="password" placeholder="Пароль" required/><br/>
                    <input class="loginform_btn" id="enter" type="submit" value="Авторизоваться" onclick="alert('Этоа функция еще не работает')"><br/>
                </form>
                <form target="_blank" id='search' action="https://www.google.com/search" method="put">
                    <input name='q' type="search" placeholder="Поиск в гугл"/>
                    <input name="mysearch" id='search_btn' type="submit" value="⌕"/>
                </form>

            </header>
            <nav>
             <a href='#' id="main_page_btn">главная</a> 
                        <a href="#" id="calc_page_btn">калькулятор</a>  
                        <a href='#' id="rand_page_btn">рандомайзер</a> 
                        <a href='#'id='link_page_btn' onclick="alert('Этот раздел еще не работает')">укоротитель ссылок</a> 
                        <a target="_blank" href='resume\resume.html'>мое резюме</a> 
                        <a href='#' onclick="alert('Этот раздел еще не работает')">форум</a> 
                 
                
            </nav>
            <article id="calc_page" align="center"><!--Калькулятор-->
                <section>
                    <p>
                        <h3>Калькулятор</h3>
                    </p>
                    <p>
                        <label for="value_1" > Значение 1: </label>
                    <br/>        
                        <input class="input" id='value_1' type="number">
                    </p>
                    <p>
                        <label for="select_sumb" > Операция: </label>
                        <select class="select" id ='select_sumb'>
                            <option value="plus">   +   </option>
                            <option value="minus">   -   </option>
                            <option value="multiplication">   *   </option>
                            <option value="division">   /   </option>
                            <option value="exponentiation">  **  </option>
                        </select>
                    </p>
                    <p>
                        <label for="value_2"> Значение 2: </label>
                    <br/>      
                        <input class="input" id='value_2' type="number"></input>
                    </p>
                    <p>
                        <button class="btn" id="calc_btn" >Вычислить</button>
                    </p>
                    <h3 align="center"><div class="score" id="pool_calc">Ответ:</div></h3>
                </section>
            </article> 
            <article id="main_page"><!--Main page-->
                <section>
                    <h3 class="top">Для чего создан этот сайт?</h3>
        
                    <p>Этот сайт создается как площадка для отработки моих умений. Он не имеет 
                        никаких четких задач<!--<br/>--> кроме как научить создателя пользоваться разными 
                        инструментами создания сайтов, приложений,<!--<br/>--> управления версиями и так далее. 
                        Все делается и доробатывается исключительно на бум, и вид сайта <br/>будет звисить
                         от настроения автора.</p> 
                    <p>Сейчас реализовано: 
                        <ul> 
                            <li>Калькулятор</li>
                            <li>Рандомайзер</li>
                            <li>Поиск в гугл</li>
                        </ul>
                        Укоротитель ссылок и авторизащия пока реализованы только графически,
                         без функционала. Остальные функции будут добавляться по мере <br/>готовности.
                         Планы гранди озные и будут сто раз переосмысливаться, результат покажет время.</p> 

                    <p align="center">Спасибо за внимание!</p>
                </section>
            </article >
            <article id='rand_page' align="center"><!--Randomaser page-->
                <section>
                    <p>
                        <h3>Рандомайзер</h3>
                    </p>
                    <p>
                        <label for="rand_value" > Минимальное число: </label>
                    <br/>        
                        <input class="input" id='rand_value_start' type="number" value="0" min="0" max="999999999">
                    </p>
                    <p>
                        <label for="rand_value" > Максимальное число: </label>
                    <br/>        
                        <input class="input" id='rand_value_end' type="number" value="6" min="0" max="999999999">
                    </p>
                    <p>
                        <button class="btn" id="rand_btn">Мне повезет</button>
                    </p>
                    <h3 align="center"><div class="score" id="pool_rand">Выпало:</div></h3>
                </section>
            </article>
            <article align="center" id="link_page"><!-- Short Link maker  -->
                <selection>
                    <form action="links/link.php" method="post">
                    <p>
                        <h3>Укоротитель ссылок</h3>
                    </p>
                    <p>
                        <label for="long_link_value" > Ваша ссылка: </label>
                    <br/>        
                        <input class="input" id='long_link_value' type="link" placeholder="https://www.website.com/long-link/so-long124352465">
                    </p>
                    <p>
                        <label for="short_link_value" > Максимальное число: </label>
                    <br/>        
                        <input class="input" id='short_link_value' type="link" placeholder="https://www.short.com/link">
                    </p>
                    <p>
                        <button type="submit" class="btn" id="link_btn" onclick="alert('Этот раздел еще не работает')">Укороить ссылку</button>
                    </p>
                </form>
                </selection>
            </article>
            <aside>
                <!--Второстепенный сопутствующий контент-->
            </aside>
            <footer>
                <!--Подвал-->
                <h3>All rights reserved 2022</h3>
            </footer>
        <script src="script.js"></script>
    </script>


    </body>
</html>  