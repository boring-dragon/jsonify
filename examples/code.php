<?php

namespace Jinas\Jsonify;

require_once '../vendor/autoload.php';

$res = new Util();

$data = [
    'brand'  => 'Honda',
    'engine' => '4strokes',
];

echo $res->sendResponse($data, 'data grabbed succesfully');
