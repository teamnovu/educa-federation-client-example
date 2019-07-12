<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Example Project</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="container p-5">
    <h1 class="text-2xl font-bold">Example Project</h1>
    <p>
        This is an example project to show the usage of <a class="text-blue-600" href="https://github.com/teamnovu/educa-federation-client">educa-federation-client</a>.
    </p>
    <p>
        <ul class="list-disc list-inside">
            <li><a href="/metadata.php" class="text-blue-600">Show generated Metadata</a></li>
            <li><a href="/acs.php" class="text-blue-600">Return URL to handle SAMLResponse</a> <span class="font-bold">(Open this link will not work)</span></li>
        </ul>
    </p>
    </div>
</body>
</html>