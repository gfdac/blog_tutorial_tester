<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "Usuario".
 *
 * @property int $ID
 * @property string $Nome
 * @property int $PlanoID
 * @property int $CategoriaID
 * @property string $Endereco
 * @property string $Latitude
 * @property string $Longitude
 * @property string $Telefone
 * @property string $Celular Numero Celular ou WhatsAPP
 * @property string $Descricao Descrição do que usuario.
 * @property string $Usuario
 * @property string $Senha
 * @property string $Email
 * @property string $Site
 * @property string $Facebook
 * @property string $GoogleID
 * @property string $Imagem
 * @property string $Device
 * @property string $LastIP
 * @property string $Saldo
 * @property string $created_at
 * @property int $StatusID
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Usuario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['Nome', 'PlanoID', 'CategoriaID', 'Endereco', 'Telefone', 'Usuario', 'Senha', 'Email', 'StatusID'], 'required'],
            [['PlanoID', 'CategoriaID', 'StatusID'], 'integer'],
            [['Endereco', 'Senha', 'Email', 'Imagem'], 'string'],
            [['Latitude', 'Longitude', 'Saldo'], 'number'],
            [['created_at'], 'safe'],
            [['Nome', 'Usuario', 'Site', 'Facebook', 'GoogleID', 'Device'], 'string', 'max' => 255],
            [['Telefone', 'Celular', 'LastIP'], 'string', 'max' => 20],
            [['Descricao'], 'string', 'max' => 45],
            [['Usuario'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ID' => 'ID',
            'Nome' => 'Nome',
            'PlanoID' => 'Plano ID',
            'CategoriaID' => 'Categoria ID',
            'Endereco' => 'Endereco',
            'Latitude' => 'Latitude',
            'Longitude' => 'Longitude',
            'Telefone' => 'Telefone',
            'Celular' => 'Celular',
            'Descricao' => 'Descricao',
            'Usuario' => 'Usuario',
            'Senha' => 'Senha',
            'Email' => 'Email',
            'Site' => 'Site',
            'Facebook' => 'Facebook',
            'GoogleID' => 'Google ID',
            'Imagem' => 'Imagem',
            'Device' => 'Device',
            'LastIP' => 'Last Ip',
            'Saldo' => 'Saldo',
            'created_at' => 'Created At',
            'StatusID' => 'Status ID',
        ];
    }
}
