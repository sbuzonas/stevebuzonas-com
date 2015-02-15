DirectoryIndex index.php

Alias /wp-content <?= dirname(__DIR__).'/content' ?>

<Directory <?= dirname(__DIR__).'/content' ?>>
    AllowOverride All
    Require all granted
</Directory>
