<?php

/* 

Con el comando git add *.js lo que hace git es agregar todos los 
archivos que tengan extension js solamente.

Cuando queremos agregar todos los archivos sin importar cual extension
es, simplemente hacemos git add. y listo.

También podemos agregar de a uno. Eso sería haciendo
git add nombreDelArchivo.php

Para ver el estado de nuestros archivos y saber si estan se hace
git status 
Ahi nos dice cuales hay y cuales no

Para agregar usuario y mail hacemos:
git config user.name "Nombre Apellido"
git config user.email "nuestro@email.com"

Para agregar un commit se hace:
git commit -m "Mensaje Aclarando Que Se Cambio"

Para ver el historial (de commits) de camios hacemos:
git log

Para remover un archivo utilizaremos el comando 
$ rm -rf .git (aquí estariamos eliminando el archivo .git de nuestra carpeta)

--------IMPORTANTE----------
Para vincular el repositorio local con el remoto, lo que debemos hacer es 
lo siguiente:
  1- tener creado el repositorio local
  2- tener commitiado todo
  3- en github crear un nuevo repositorio (darle nombre y demás)
  4- con la url que nos da github vincular los repositorios mediante
     la terminal de nuestro visual studio code
     $ git remote add origin https://github.com/CasciniMatias/Prueba-Digital-Mind.git
     $ git push -u origin main
  5- Ya están conectados los repositorios.
  6- si quiero subir algún archivo nuevo, primero debo agregarlo al repositorio
     local, luego commitiarlo y por último, con el comando 
     $ git push -u origin main
     se agrega en el repositorio de github todo lo que hayamos guardado y creado
     en el repositorio local.



*/

?>

