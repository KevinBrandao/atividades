<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Templates</title>
</head>
<body>
    
    <form action="/c" method="POST">
        @csrf
        <input type="text" name="energy" placeholder="Digite um valor">


            <button type="submit">Enviar</button>
            @if ($energy > 800)
            <h1>"Mais de 8000!"</h1>        
            @else
                <h1>"Inseto!"</h1>
        
            @endif
    </form>
            
    
    
</body>
</html>