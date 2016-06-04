<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\tblOrders;

/**
 * tblOrdersSearch represents the model behind the search form about `app\models\tblOrders`.
 */
class tblOrdersSearch extends tblOrders
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'colOrder', 'Phone'], 'integer'],
            [['First_Name', 'Last_Name', 'Email', 'Status', 'Payment', 'Type', 'Created_Date', 'Updated_Date'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = tblOrders::find();

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
            'colOrder' => $this->colOrder,
            'Phone' => $this->Phone,
            'Created_Date' => $this->Created_Date,
            'Updated_Date' => $this->Updated_Date,
        ]);

        $query->andFilterWhere(['like', 'First_Name', $this->First_Name])
            ->andFilterWhere(['like', 'Last_Name', $this->Last_Name])
            ->andFilterWhere(['like', 'Email', $this->Email])
            ->andFilterWhere(['like', 'Status', $this->Status])
            ->andFilterWhere(['like', 'Payment', $this->Payment])
            ->andFilterWhere(['like', 'Type', $this->Type]);

        return $dataProvider;
    }
}
