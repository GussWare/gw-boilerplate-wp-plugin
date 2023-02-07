
# GW Boilerplate WP Plugin 📝  
Este proyecto tiene la finalidad de ser un boilerplate para la creación de plugins en wordpress.


 
## Pre-requisitos
Es necesario tener instalados las siguientes paquetes  
- Composer
- NPM
 
## Instalación  
Clonar el proyecto desde github  

~~~bash  
  git clone https://github.com/GussWare/gw-boilerplate-wp-plugin.git
~~~

Ingresar a directorio gw-boilerplate-wp-plugin

~~~bash  
  cd gw-boilerplate-wp-plugin
~~~

Instalar las dependencias tanto de Composer como de NPM

Dentro de la carpeta ya se encuentran los archivos composer.json y package.json con las dependecias necesarias. Solamente es necesario ejecutar los comandos de instalación.

Para Composer

~~~bash  
composer install
~~~

Estos son los paquetes que se instalaran de Composer.

- sultann/wp-query-builder
- siriusphp/validation
- rexon/request-sanitizer

Para NPM

~~~bash  
npm run start
~~~  

Paquetes que se instalaran de NPM
- handlebars
- jquery-form
- jquery-validation
- plugin-basic-pagination

 
## License  
[MIT](https://choosealicense.com/licenses/mit/)  
