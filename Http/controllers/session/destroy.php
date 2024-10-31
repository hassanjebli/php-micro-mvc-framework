<?php

use Core\Middleware\Authenticator;

(new Authenticator)->logout();



header("location: /");
exit();
