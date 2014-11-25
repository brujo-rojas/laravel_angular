#Información para frontend

iniciar el proyecto

```bash

    npm install
    
    bower install
    
    # compila y minifica javascript y css en /dist
    grunt build 

    #watch para compilar SASS, mas rapido que grunt watch
    compass compile

```


##explicaciones generales

cambio de sintaxis en blade, cambiando las llaves por simbolos distintos

esto es para mantener la compatibilidad entre blade y angular
```php
    <?php 
    // routes.php

    Blade::setContentTags('<%', '%>');      // for variables and all things Blade
    Blade::setEscapedContentTags('<%%', '%%>');     // for escaped data


```





cambios en salida de html desde las vistas

esto limpia de comentarios la salida

el codigo comentado dentro borra espacios y saltos de lineas innecesarios

para dejar compilado el codigo

```
<?php
    //... filters.php

    App::after(function($request, $response)
    {
        // HTML Minification
        if(App::Environment() != 'local')
        {
            if($response instanceof Illuminate\Http\Response)
            {
                $output = $response->getOriginalContent();
                // Clean comments
                $output = preg_replace('/<!--([^\[|(<!)].*)/', '', $output);
                $output = preg_replace('/(?<!\S)\/\/\s*[^\r\n]*/', '', $output);
                // Clean Whitespace
                //$output = preg_replace('/\s{2,}/', '', $output);
                //$output = preg_replace('/(\r?\n)/', '', $output);
                $response->setContent($output);
            }
        }
    });

```
