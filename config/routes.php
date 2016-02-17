<?php
/**
 * Created by PhpStorm.
 * User: donghai
 * Date: 16/2/17
 * Time: 下午10:04
 */

use NoahBuscher\Macaw\Macaw;

Macaw::get('fuck', function() {
    echo "成功！";
});

Macaw::get('(:all)', function($fu) {
    echo '未匹配到路由<br>'.$fu;
});

Macaw::dispatch();