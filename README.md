# Desenvolvimento-Web-Avan-ado-2022-com-PHP-Laravel-e-Vue.JS
Curso Desenvolvimento Web Avançado 2022 com PHP, Laravel e Vue.JS realizado pela Udemy

O nome do banco de dados que atualmente está no arquivo .env é: sg
basta criá-lo no SGB MySQL e depois rodar as migrations com o comando: php artisan migrate

Observações:

Caso de problema na migration por erro de conexão, basta alterar o usuário do MySQL com o comando:
alter user 'username'@'localhost' identified with mysql_native_password by 'password';