<?php

$config = ['site_name', 'title', 'company_name', 'author'];

unset($config[3]);

echo '<pre>';
print_r($config);
echo '</pre>';