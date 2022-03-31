<?php

require_once 'app/core/Core.php';

require_once 'app/controller/LoginControler.php';

require_once 'app/model/User.php';

$core = new Core;
echo $core->start($_GET);