# web2TPE
Diagrama de entidad relación (DER)
El diagrama entidad relación (DER) del modelo de datos planteado (archivo jpeg o pdf)
El código SQL que genera la base de datos (exportado desde phpMyAdmin)

Integrantes :
Melina Theill
Mail: meli.theill@gmail.com
Dni : 40455464

Documentación de los endpoints generados: 

METHOD: GET  ENDPOINT:

 http://localhost/Web2tpe/web2TPE-API/api/artistas?sort=idArtista&order=desc

 Devuelve el arreglo de canciones ordenado por alguno de los campos de la base de dato que se pase por parametro get y puede ser descendente  o ascendente.

 METHOD: GET  ENDPOINT:

 http://localhost/Web2tpe/web2TPE-API/api/artistas

 Devuelve el arreglo con todas los de artistas

 METHOD: GET  ENDPOINT:

 http://localhost/Web2tpe/web2TPE-API/api/canciones

 Devuelve el arreglo con todas los de canciones, vinculandolas con los artistas y albums correspondientes

 METHOD: GET  ENDPOINT:

 http://localhost/Web2tpe/web2TPE-API/api/canciones/(idCancion)

 Devuelve la cancion que corresponde, de acuerdo al id asignado en el endpoint

 METHOD: PUT  ENDPOINT:

 http://localhost/Web2tpe/web2TPE-API/api/artistas/(idArtista)

 Modifica los atributos nombre, nacionalidad y edad de un artista seleciono por su id.

 METHOD: POST  ENDPOINT:

 http://localhost/Web2tpe/web2TPE-API/api/artistas/

 Crea un artista nuevo artista

 METHOD: DELETE  ENDPOINT:

 http://localhost/Web2tpe/web2TPE-API/api/artistas/(IdArtista)

 Elimina al artista  de acuerdo a al id pasado en el endpoint.
