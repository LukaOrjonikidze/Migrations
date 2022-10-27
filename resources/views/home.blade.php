<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
</head>
<body>
    <?php
        use Illuminate\Support\Facades\DB;

        $results = DB::select('select * from youtubes');
        echo '<pre>'; print_r($results); echo '</pre>';
        echo "gamarjoba"
    ?>
</body>
</html>