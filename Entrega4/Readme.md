# Entrega 4 (grupos 36 y 85) :sunglasses:

## Consideraciones generales
---

### Cosas implementadas y no implementadas:

* GET básico:
   * ```/messages```: Implementado en su totalidad. :heavy_check_mark:
   * ```/users```: Implementado en su totalidad. :heavy_check_mark:
   * ```/messages/:id```: Implementado en su totalidad. :heavy_check_mark:
   * ```/users/:id ```: Implementado en su totalidad. :heavy_check_mark:
   * ```/messages?id1=x&id2=y```: Implementado en su totalidad. :heavy_check_mark:  
   Para acceder a los id's entregados en la ruta, nos basamos en el código del siguiente link: https://stackoverflow.com/questions/15182696/multiple-parameters-in-in-flask-approute.
   
* GET búsqueda de texto: 
    - Implementado en su totalidad. :heavy_check_mark:

      Para nuetra __API__ funcione correctamente al entregar solo palabras prohibidas (forbidden), nos basamos en el siguiente link: https://stackoverflow.com/questions/59574062/mongodb-text-search-with-only-negated-terms.  

      Además, agregamos un campo llamado "dummy" que por default siempre tiene como valor un string "x". Luego creamos un indice text para "dummy" y para "message". Esto nos ayuda a tomar todos los mensajes excepto los que contengan las palabras que vienen en el campo "forbidden" del body del request.

        Por último, para evitar las "stop words", usamos el siguiente link: https://stackoverflow.com/questions/49171693/disable-stop-word-filtering-in-a-mongodb-text-search.  Donde lo que hicimos fue que al crear el index, pusimos como default-language: None.

    * POST: Implementado en su totalidad.

    * DELETE: Implementado en su totalidad.

---
## Ejecución :computer:  :abc:

El módulo a ejecutar es  ```main.py```. 
Notar que antes de correr la aplicación, es necesario estar en el entorno virtual (mediante ```pipenv install``` y luego ```pipenv shell``` en la terminal, estando parado en la misma carpeta: Entrega 4).

---

## Librerías externas ocupadas :book:

* datetime :date: :alarm_clock:
* flask :postal_horn: :gun:
* pymongo :snake::seedling:
