<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Usuario;

/**
 * UsuarioSearch represents the model behind the search form of `app\models\Usuario`.
 */
class UsuarioSearch extends Usuario
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ID', 'PlanoID', 'CategoriaID', 'StatusID'], 'integer'],
            [['Nome', 'Endereco', 'Telefone', 'Celular', 'Descricao', 'Usuario', 'Senha', 'Email', 'Site', 'Facebook', 'GoogleID', 'Imagem', 'Device', 'LastIP', 'created_at'], 'safe'],
            [['Latitude', 'Longitude', 'Saldo'], 'number'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Usuario::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'ID' => $this->ID,
            'PlanoID' => $this->PlanoID,
            'CategoriaID' => $this->CategoriaID,
            'Latitude' => $this->Latitude,
            'Longitude' => $this->Longitude,
            'Saldo' => $this->Saldo,
            'created_at' => $this->created_at,
            'StatusID' => $this->StatusID,
        ]);

        $query->andFilterWhere(['like', 'Nome', $this->Nome])
            ->andFilterWhere(['like', 'Endereco', $this->Endereco])
            ->andFilterWhere(['like', 'Telefone', $this->Telefone])
            ->andFilterWhere(['like', 'Celular', $this->Celular])
            ->andFilterWhere(['like', 'Descricao', $this->Descricao])
            ->andFilterWhere(['like', 'Usuario', $this->Usuario])
            ->andFilterWhere(['like', 'Senha', $this->Senha])
            ->andFilterWhere(['like', 'Email', $this->Email])
            ->andFilterWhere(['like', 'Site', $this->Site])
            ->andFilterWhere(['like', 'Facebook', $this->Facebook])
            ->andFilterWhere(['like', 'GoogleID', $this->GoogleID])
            ->andFilterWhere(['like', 'Imagem', $this->Imagem])
            ->andFilterWhere(['like', 'Device', $this->Device])
            ->andFilterWhere(['like', 'LastIP', $this->LastIP]);

        return $dataProvider;
    }
}
