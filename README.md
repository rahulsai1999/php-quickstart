## PHP-MySQL Quickstart

- Create a folder named data for the DB persistent volume
- Change Code in the src/index.php file or in the src folder in general
- Install Docker and execute:
- MySQL support will be added in next iteration

```
docker-compose up --build
docker-compose exec db bash
mysql -u root -p
Enter password: root
```
Then enter the following commands:

```
ALTER USER 'root'@'localhost' IDENTIFIED WITH mysql_native_password BY 'root';
ALTER USER 'root'@'%' IDENTIFIED WITH mysql_native_password BY 'root';
```