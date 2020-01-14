<?php
/**
* Файл локализации базовых переменных
*
* @author Intervision (https://github.com/intervisionlord)
* Copyright © 2019-2020 Intervision
*/

// Основной сайт
define('MAIN_TITLE', 'Mantis Reporter');                          // Имя ресурса и title-тег
define('MAIN_DESCR', 'Форма отправки баг-репортов');              // Описание сайта (для метатега)

// Меню
define('GOTOMANTIS', 'Открыть Mantis');                           // Строка для ссылки на мантис в меню
define('ABOUTSTRING', 'О программе');                             // Заголовок "О программе" на странице "about"

// Основная форма запроса
define('FILLTHEFORM', 'Заполните форму запроса');                 // Заголовок формы запроса
define('LANG_SELECT_PROJECT', 'Выберите проект');                 // Название поля выбора проекта
define('LANG_SELECT_PROJECT_DESCR', 'По какому проекту вопрос');  // Описание поля выбора проекта
define('LANG_SELECT_CATEGORY', 'Выберите категорию');             // Название поля выбора категории
define('LANG_SELECT_CATEGORY_DESCR', 'Какого типа запрос');       // Описание поля выбора запроса
define('LANG_FORM_TITLE', 'Тема запроса');                        // Название поля темы запроса
define('LANG_FORM_TITLE_DESCR', 'Краткое описание запроса');      // Описание поля темы запроса
define('LANG_FULLTEXT', 'Описание');                              // Название поля ввода основного текста
define('LANG_FULLTEXT_DESCR', 'Подробное описание запроса');      // Описание поля ввода основного текста
define('LANG_EMAIL', 'e-mail');                                   // Название поля ввода email'а
define('LANG_EMAIL_DESCR', 'Если потребуется связаться с Вами');  // Описание поля ввода email'а
define('LANG_EMAIL_PLACEHOLDER', 'email@example.com');            // Заполнитель поля ввода email'а
define('LANG_REQURED', 'Поля, обязательные для заполнения.');     // Поясняющий текст к полям, отмеченным звездочкой
define('LANG_SUBMITBTN', 'Отправить');                            // Текст кнопки "Отправить"
define('LANG_REQFLD_EMPTY', 'Не все поля заполнены');             // Текст, отображаемый в случае, если не заполнены обязательные поля
define('LANG_REQFLD_DSCR', 'Заполните все поля со звездочкой');   // Пояснения к тексту по обязательным полям

//Работа с тасками
define('LANG_ISSUE_CREATED', 'Отправлено. Номер задачи:');        // Строка успешного добавления задачи
define('LANG_ISSUE_DETAILS', 'Подробности задачи');               // Заголовок "Подробности задачи"
define('LANG_ISSUE_CATEGORY', 'Категория');                       // Строка "Категория" в выводе подробностей задачи
define('LANG_ISSUE_TITLE', 'Заголовок');                          // Строка "Заголовок" в выводе подробностей задачи
define('LANG_ISSUE_DESCRIPTION', 'Описание');                     // Строка "Описание" в выводе подробностей задачи
define('LANG_REPORTER_EMAIL', 'Адрес для ответа');                // Строка "Обратный адрес" для вставки в задачу, если указан email
define('LANG_REPORTER_EMAIL_NOTDEFINED', 'Не указан');            // Если email не указан - выводим эту строку в выводе подробностей задачи

// Локализация в таблице "О программе"
define('LANG_VERSION', '0.4');                                    // Версия файла локализации (назначается автором локализации)
define('LANGSTRING', 'Локализация');                              // Строка "Локализация"
define('LANGVSTR', 'Версия локализации');                         // Строка "Версия локализации"
define('LANGTYPE', 'Определение локализации');                    // Строка настройки локализации
define('LOCALEFORCED', 'Локаль определена вручную');              // Локаль выставлена принудительно в настройках
define('LOCALENOTFORCED', 'Локаль определена автоматически');     // Локаль определа автоматически

// Интеграция с Mantis
define('INTEGRATION', 'Интеграция');                              // Строка "Интеграция" в таблице "О программе"
define('MANTISVERSION', 'Версия Mantis');                         // Строка "Версия Mantis" в таблице "О программе"

// Captcha
define('LANG_CAPTCHA_REQUIRED', 'Вы не прошли проверку');         // Текст при отсутствии галочки в каптче
define('LANG_CAPTCHA_NOTPASSED', 'Каптча не пройдена ;(');        // Текст при непройденной каптче

// Прочее
define('WEONGITHUB', 'Страница программы на GitHub');             // Описание ссылки на страницу на гитхабе (alt)
define('ABTVERSIONPARAM', 'Версия программы');                    // Строка "Версия" в таблице "О программе"
