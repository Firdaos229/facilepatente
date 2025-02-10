<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Errore 403 - Accesso vietato</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            text-align: center;
            padding: 2rem;
        }
        .error-container {
            max-width: 600px;
            margin: auto;
            margin-top: 5%;
        }
        h1 {
            font-size: 4rem;
            color: #dc3545;
        }
        p {
            font-size: 1.2rem;
            margin: 1rem 0;
        }
        a {
            display: inline-block;
            margin-top: 1rem;
            padding: 0.5rem 1rem;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="error-container">
        <h1>403</h1>
        <p>Non disponi delle autorizzazioni necessarie per accedere a questa risorsa.</p>
        <a href="{{ url('/') }}">Ritorno a casa</a>
    </div>
</body>
</html>
