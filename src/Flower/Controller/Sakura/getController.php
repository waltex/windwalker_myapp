<?php

// src/Flower/Controller/Sakura/GetController.php

namespace Flower\Controller\Sakura;

use Windwalker\Core\Controller\AbstractController;

/**
 * Sakura Controller
 */
class GetController extends AbstractController {

    protected function doExecute() {
        $view = $this->getView();

        $view['name'] = 'Sakura';
        return $view->render();  //default
        // Another quick way
        //return $this->renderView('Sakura', 'default', 'php', ['name' => 'Sakura']);

        //return $view->setLayout('photo')->render();
    }

}
