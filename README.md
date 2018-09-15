# Simple Book Market

#### Перейти на сайт: <http://www.bookstorage.online>

#### Условия заказчика:

Нужно создать веб интерфейс администратора для внесения/редактирования названий книг (и
краткого описания о чем книга), цен, авторов и жанров.
Пользователь интернета должен уметь:
1. Посмотреть список книг выбирая жанр (книга может принадлежать разным жанрам);
2. Посмотреть список книг выбрав автора (книга может принадлежать разным авторам);
3. Посмотреть страницу с детальной информацией о понравившейся книге;
4. На этой же странице пользователь должен иметь возможность
отправить форму заказа этой книги с полями - Адрес, ФИО, Количество экземпляров.
Эта форма отправит письмо админу с информацией о книге и информацию о
заказчике.

#### Дополнительная информация:

1. вход в админ часть сделать с помощью .htaccess, информацию о логин/пароле
администратора в БД хранить не нужно;
2. жанры книг одноуровневые, вложений нет;
3. хранить информацию о пользователях сайта не нужно;
4. информацию о заказах книг хранить в БД не нужно, она должна оставаться в письмах;

#### В следующих обновлениях будет добавлено:

* Переход на PDO-драйвер для работы с базой данных
* Использование регулярных выражений и защита от инъекций
* Оптимизация кода
