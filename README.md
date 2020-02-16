#Wstęp

Szukając rozwiązań trafiłem na stronę https://www.slant.co/topics/1397/~best-web-frameworks-to-create-a-web-rest-api#6

Na pierwszym miejscu Express.js - pokusa nauczenia się node.js była zbyt wielka abym szukał dalej. Znalazłem niemal gotowca, postawienie w pełni funkcjonalnego api z pełnym crudem zajęło mi pół godziny. Nie powiem, żebym się nauczył node.js ale od czegoś trzeba zacząć.

Do wyświetlania użyłem Laravela ze wzglądu na ogrom dostępnych bibliotek. Dodanie tu dowolnej autentykacji było by bardzo proste.

#Wymagania
1. PHP >= 7.2.0
2. MySQL/MariaDB
3. composer
4. npm
5. node.js

#Instalacja
* Baza danych

Zastanawiałem się nad dodaniem tego do migracji w laravelu, ale uznałem że będzie to złamanie logiki działania aplikacji.

CREATE DATABASE mydb;

CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(11) NOT NULL,
  `task` varchar(200) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
);
 
ALTER TABLE `tasks` ADD PRIMARY KEY (`id`);
ALTER TABLE `tasks` MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

INSERT INTO `tasks` (`id`, `task`, `status`, `created_at`) VALUES
(1, 'Find bugs', 1, '2016-04-10 23:50:40'),
(2, 'Review code', 1, '2016-04-10 23:50:40'),
(3, 'Fix bugs', 1, '2016-04-10 23:50:40'),
(4, 'Refactor Code', 1, '2016-04-10 23:50:40'),
(5, 'Push to prod', 1, '2016-04-10 23:50:50');

* W katalogu NodeServer
1. npm install
2. ewentualne zmiany w .env
3. node server.js
4. http://localhost:3000/tasks

* W katalogu LaravelClient
1. composer install
2. ewentualne zmiany w .env
3. php artisan serve
4. http://localhost:8000/

Pliki .env wrzuciłem do repo świadomie i celowo aby ułatwić odpalenie. W normalnej aplikacji bym tego nie zrobił.
