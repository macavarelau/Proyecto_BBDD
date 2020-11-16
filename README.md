# Entrega 4 (grupos 36 y 85)

## Consideraciones generales

### Cosas implementadas y no implementadas:

* GET básico:
   * ```/messages```: Implementado en su totalidad
   * ```/users```: Implementado en su totalidad
   * ```/messages/:id```: Implementado en su totalidad
   * ```/users/:id ```: Implementado en su totalidad
   * ```/messages?id1=x&id2=y```: Implementado en su totalidad. Para acceder a los id's entregados en la ruta, nos basamos en el código del siguiente link: https://stackoverflow.com/questions/15182696/multiple-parameters-in-in-flask-approute.
   
* GET búsqueda de texto: \

Implementado en su totalidad. \

Para lograr que funcionara al entregar solo palabras prohibidas (forbidden), nos basamos en el siguiente link: https://stackoverflow.com/questions/59574062/mongodb-text-search-with-only-negated-terms. Agregamos un campo llamado "dummy" que por default siempre tiene como valor un string "x". Luego creamos un indice text para "dummy" y para "message". Esto nos ayuda a tomar todos los mensajes excepto los que contengan las palabras que vienen en el campo "forbidden" del body del request. \

Además, para evitar las "stop words", usamos el siguiente link: https://stackoverflow.com/questions/49171693/disable-stop-word-filtering-in-a-mongodb-text-search. Lo que hicimos fue que al crear el index, pusimos como default-language: None.

* POST: Implementado en su totalidad.

* DELETE: Implementado en su totalidad.


## Ejecución :computer:

El módulo a ejecutar es  ```main.py```. \
Notar que antes de correr la aplicación, es necesario estar en el entorno virtual (mediante ```pipenv install``` y luego ```pipenv shell``` en la terminal, estando parado en la misma carpeta: Entrega 4).



## Librerías externas ocupadas :book:

* datetime
* flask
* pymongo
