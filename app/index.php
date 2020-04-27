<?php

echo phpinfo();die;
require "vendor/autoload.php";

use DebugBar\StandardDebugBar;
debuggerRenderer();
$a = 3;

$b = $a;

$c = $a + $b;

echo $c;
//sleep(1);
function debuggerRenderer(){
    $debugger = new StandardDebugBar();
    $debuggerRenderer = $debugger->getJavascriptRenderer();

    $debugger['messages']->addMessage('PHP 7 by Packt');

    $renderHead = $debuggerRenderer->renderHead();
    $render = $debuggerRenderer->render();
    echo '<html><head>'.$renderHead.'</head><title>Welcome to Debug Bar</title><body>'.$render.'</body></html>';
}



