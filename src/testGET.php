<?php

namespace Massfice\Application;

use Massfice\Action\HtmlAction;
use Massfice\Action\VerifyStatus;
use Massfice\ResponseStatus\ResponseStatusFactory;
use Massfice\ResponseStatus\ResponseStatus;
use Massfice\Application\System\Views;

class testGET implements HtmlAction {
    public function verify() : VerifyStatus {
        return new VerifyStatus();
    }

    public function load(array $data, array $config) : array {
        return [
            "test" => "Test message"
        ];
    }

    public function validate(array $data) : ResponseStatus {
        return ResponseStatusFactory::create(200);
    }

    public function execute(array $data) : array {
        return $data;
    }

    public function onDisplay(array $data) {
        Views::generateView("test.tpl",$data);
    }

    public function onError(array $errors) {

    }
}

?>