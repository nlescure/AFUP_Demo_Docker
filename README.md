Permet de monter une infrastructure Docker avec Nginx, PHP FPM, Mysql.

Pour le lancer, il suffit de se mettre à la racine et de lancer :

   > docker-compose up -d

Pour y accéder : http://localhost:8000

Les différents docker-compose permettent de montrer étape par étape les différents services utilisés : 
- nginx (avec la configuration associée)
- PHP FPM + Version perso venant de DockerHub avec juste la prise en charge des extension Mysqli
- Mysql
- PhpMyAdmin
