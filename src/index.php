<?php
session_start();
$actualLink = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
$config = require './config.php';
?>
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
    <hr class="border mt-8"/>
    <h2 class="text-xl font-bold pt-4">Example usage "Login Button"</h2>

    <div class="mt-4">
        <form action="https://discovery-federation.educa.ch/federation/discovery" method="post" style="display: inline">
            <input type="hidden" name="ressource_name" value="<?=$actualLink?>"  />
            <input type="hidden" name="cookie_sessionid" value="<?=session_id()?>" />
            <input type="hidden" name="entity_id" value="<?=$config['entityId']?>" />
            <button class="px-4 py-2 rounded bg-blue-400 text-white" type="submit">Mit dem Identifikator anmelden</button>
        </form>
        <div class="mt-6">
            <h3 class="font-bold">Source Code of Button</h3>
<pre class="text-sm">
<code>
    &lt;form action="https://discovery-federation.educa.ch/federation/discovery" method="post" style="display: inline">
        &lt;input type="hidden" name="ressource_name" value="<?=$actualLink?>"  /&gt;
        &lt;input type="hidden" name="cookie_sessionid" value="<?=session_id()?>" /&gt;
        &lt;input type="hidden" name="entity_id" value="<?=$config['entityId']?>" /&gt;
        &lt;button class="px-4 py-2 rounded bg-blue-400 text-white" type="submit"&gt;Mit dem Identifikator anmelden&lt;/button&gt;
    &lt;/form>
</code>
</pre>
            </div>
        </div>
    </div>
</body>
</html>