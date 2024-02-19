# Game Donati Shop

## Introduction
Game Donati Shop is a simple webapi built using HTML, CSS, JavaScript, PHP, MySQL. It allows users to browse, select, and buy game items on account, CRUD (Create, Read, Update, Delete) operations for user authentication, registration, and profile management. This project is a demonstration of basic web development concepts with backend functionality and database integration.

## Features
- View available game items
- Sort items by price or popularity
- Register accounts
- Add game items to the account cart
- Remove game items from the cart
- Delete account

## Database
- All work with items is done with a database
- Create 3 tables: Account, Cart, Goods
- Tables have foreign keys and use one-to-many relationships

## Getting Started
To get started with the Game Donati Shop locally, follow these steps:
1. Clone this repository to your local machine.
2. Paste repository on root folder of your web server (e.g. htdocs in XAMPP).
3. Import `game-donati-shop.sql` file to your database.
2. Open the `localhost/index.php` file in your browser.

## Usage
- Browse through the available game items listed on the homepage.
- Register new account.
- Click on the "Buy" button to add a game item to your cart.
- Click on the "Remove" button in the cart to remove a game item.
- Click on the "Buy" button in the cart to finalize your request and transfer items on your account.
- Click on your nicname on right top for observe your account resources (Balance, premium).
______________________________________________________

## Введение
Game Donati Shop - это простое веб-приложение, созданное с использованием HTML, CSS, JavaScript, PHP и MySQL. Оно позволяет пользователям просматривать, выбирать и покупать игровые предметы на своем аккаунте, выполнять операции CRUD (Create, Read, Update, Delete) для аутентификации пользователей, регистрации и управления профилем. Этот проект является демонстрацией основных концепций веб-разработки с бэкэнд функционалом и интеграцией базы данных.

## Особенности
- Просмотр доступных игровых предметов
- Сортировка предметов по цене или популярности
- Регистрация аккаунтов
- Добавление игровых предметов в корзину аккаунта
- Удаление игровых предметов из корзины
- Удаление аккаунта

## База данных
- Вся работа с предметами выполняется с использованием базы данных
- Создание 3 таблиц: Account, Cart, Goods
- Таблицы имеют внешние ключи и используют отношения один-ко-многим

## Начало работы
Чтобы начать работу с Game Donati Shop локально, выполните следующие шаги:
1. Клонируйте этот репозиторий на свой компьютер.
2. Вставьте репозиторий в корневую папку вашего веб-сервера (например, htdocs в XAMPP).
3. Импортируйте файл `game-donati-shop.sql` в вашу базу данных.
4. Откройте файл `localhost/index.php` в вашем браузере.

## Использование
- Просматривайте доступные игровые предметы, перечисленные на главной странице.
- Зарегистрируйте новый аккаунт.
- Нажмите кнопку "Купить", чтобы добавить игровой предмет в корзину.
- Нажмите кнопку "Удалить" в корзине, чтобы удалить игровой предмет.
- Нажмите кнопку "Купить" в корзине, чтобы завершить ваш запрос и перевести предметы на ваш аккаунт.
- Нажмите на ваш никнейм в верхнем правом углу, чтобы просмотреть ресурсы вашего аккаунта (баланс, премиум).