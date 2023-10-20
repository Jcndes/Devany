<!DOCTYPE html>
<html lang="pt-br">
 
 use head.blade.php  
 <link rel="stylesheet" href="style.css"/>
        <title>My Webpage</title>
    <body>
        <ul id="navigation">
        
            { % include 'body.blade.php' % }
       
        </ul>

        <h1>My Webpage</h1>
        {{ a_variable }}
    </body>
    {% include "foot.blade.php" %}
</html>