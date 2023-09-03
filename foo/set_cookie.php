<?php

// set cookie for a subdirectory
setcookie('subdir_example', 'hello', time() + 60 * 60 * 24 * 2);

echo 'subdirectory cookie set';