<?php

namespace app\controllers;

use yii\rest\ActiveController;
use yii\web\Response;

/**
 * UsuarioController implements the CRUD actions for Usuario model.
 */
class UsuarioController extends ActiveController
{


    //Qual modelos esta classe se refere
    public $modelClass = 'app\models\Usuario';

    //Adicione estas linhas para poder retornar os dados em XML
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['contentNegotiator']['formats']['application/xml'] = Response::FORMAT_XML;
        return $behaviors;
    }


}
