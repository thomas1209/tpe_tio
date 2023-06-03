# [Trabajo Práctico de GIT - TIO](https://moodle.exa.unicen.edu.ar/pluginfile.php/117373/mod_resource/content/1/TPE%20-%20TIO%20-%20Loberia-%202022.docx.pdf)

En este trabajo práctico se deberá realizar lo siguiente:

1. Utilizar un repositorio público en GitHub: Deberás crear un repositorio público en GitHub y agregar a todos los integrantes del equipo como colaboradores. Este repositorio será utilizado para alojar los artefactos con los que trabajarán en el proyecto. Asegúrate de copiar el enlace al repositorio y agregarlo en el informe.

2. Utilizar un tablero público en Trello: Crea un equipo en Trello y agrega a los integrantes del grupo como miembros colaboradores. Utiliza este tablero para gestionar y coordinar el proyecto de forma colaborativa. Crea tarjetas correspondientes a las tareas a realizar en el proyecto y asigna a los miembros encargados de resolverlas. Crea las estructuras de listas para los diferentes estados de las tareas. Además, utiliza etiquetas para categorizar las tarjetas (por ejemplo, Requerimiento, Reporte de Error, Mejora). Copia el enlace al tablero de Trello y agrégalo al informe.

3. Elección de proyecto o problemática a resolver: El equipo deberá elegir un proyecto o problemática a resolver. Puede ser un proyecto nuevo creado desde cero o uno existente utilizado para el desarrollo de otro trabajo práctico o materia. El repositorio utilizado deberá tener al menos 5 archivos de diferentes extensiones, con al menos 3 archivos siendo código fuente en algún lenguaje de programación.

4. Trabajo colaborativo en el repositorio utilizando comandos GIT: El equipo deberá trabajar colaborativamente sobre el repositorio utilizando los comandos GIT vistos en clase. Deberán mostrar cómo inician el repositorio con los respectivos comandos, realizar al menos 3 secuencias de add-commit y al menos 3 pull-push. Además, deberán realizar la eliminación de al menos 1 archivo, el renombramiento de al menos 1 archivo o directorio, y crear una carpeta que no sea tenida en consideración para el seguimiento.

5. Manipulación de confirmaciones (commits): Deberán deshacer al menos 1 confirmación utilizando los métodos vistos en clase, añadir cambios y/o cambiar el mensaje de al menos 1 confirmación, y retirar modificaciones del área de preparación al menos 1 vez.

6. Creación y eliminación de ramas: Deberán crear al menos una rama a nivel local, trabajar en ella y llevar los cambios a la rama master. Una vez llevados los cambios, deberán eliminar dicha rama. Además, deberán crear una rama alternativa a master y publicarla en el repositorio remoto. Colaborar con sus compañeros de equipo sobre esta rama y luego llevar sus cambios a la rama master. No se deberá eliminar esta rama remota.

### Se deberán utilizar los siguientes comandos de Git:

| Comando                           | Descripción                                                                                   |
|-----------------------------------|-----------------------------------------------------------------------------------------------|
| `git init`                        | Para inicializar un repositorio Git en el directorio actual.                                  |
| `git clone [URL]`                 | Para clonar un repositorio remoto en el directorio local.                                    |
| `git add [archivos]`              | Para agregar archivos al área de preparación.                                                 |
| `git commit -m "mensaje"`         | Para confirmar los cambios agregados al área de preparación y crear una nueva confirmación.   |
| `git pull`                        | Para obtener y fusionar los cambios del repositorio remoto en la rama local.                  |
| `git push`                        | Para enviar los cambios confirmados localmente al repositorio remoto.                        |
| `git rm [archivos]`               | Para eliminar archivos del repositorio.                                                       |
| `git mv [antiguo] [nuevo]`        | Para renombrar archivos o directorios en el repositorio.                                      |
| `git branch [nombre]`             | Para crear una nueva rama en el repositorio.                                                  |
| `git checkout [rama]`             | Para cambiar a una rama específica en el repositorio.                                         |
| `git merge [rama]`                | Para fusionar los cambios de una rama en otra rama.                                           |
| `git branch -d [rama]`            | Para eliminar una rama local después de haberla fusionado.                                    |
| `git push origin [rama]`          | Para publicar una nueva rama en el repositorio remoto.                                        |
| `git revert [confirmación]`       | Para deshacer una confirmación específica creando una nueva confirmación que revierte los cambios. |
| `git commit --amend`              | Para añadir cambios a la confirmación más reciente o modificar su mensaje.                    |
| `git reset [archivos]`            | Para retirar cambios de los archivos del área de preparación.                                 |

7. Presentación del informe: El informe deberá reflejar el trabajo realizado sobre el repositorio. Deberán comentar la problemática abordada, cómo se dividieron las tareas y evidenciar cómo trabajaron sobre el repositorio. Deben incluir capturas de pantalla de los diferentes comandos utilizados junto con los resultados en la consola. Explica cada captura de pantalla y detalla cronológicamente los comandos ejecutados, problemas encontrados y soluciones aplicadas. Presta atención a la claridad, puntuación y ortografía en el informe.

##### Integrantes: Jazmín Bascuñan, Juan Bernaola, Thomas Gonzalez, Thomas Hojsgaard y Franco Luna.