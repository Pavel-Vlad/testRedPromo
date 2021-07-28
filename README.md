Задача:

Первый уровень:
- Главная страница с избранными новостями (некоторые новости отмечены в базе как избранные, пользователь с этим не взаимодействует)
- Страница всех новостей
- Страница отдельной новости (новость состоит из изображения, заголовка, краткого описания, текста)

Второй уровень:
- Раздел "Похожие новости" на странице отдельной новости
- Поиск по новостям

Третий уровень:
- Переключение между двумя городами. К каждому городу привязаны как свои так и общие новости.
- Избранные новости на главной, выбираемые пользователем (у каждой новости есть кнопка "Добавить в избранное")

По дизайну/верстке предпочтений нет, можно использовать базовые стили Bootstrap. Тематика новостей на ваше усмотрение. Административную панель разрабатывать не обязательно, таблицы можно заполнять напрямую.

Для тестирования выполненного задания:

База данных наполняется Сидом PostSeeder
Создаем пустую базу данных, редактируем .env файл.
Выполняем команды:
php artisan migrate
php artisan db:seed --class=PostSeeder


Для тестирования выполненного задания:

База данных наполняется Сидом PostSeeder

Создаем пустую базу данных, редактируем .env файл.

Выполняем команды:

php artisan migrate

php artisan db:seed --class=PostSeeder


