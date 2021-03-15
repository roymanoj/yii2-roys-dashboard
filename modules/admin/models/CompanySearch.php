<?php

namespace app\modules\admin\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\modules\admin\models\Company;

/**
 * CompanySearch represents the model behind the search form of `app\modules\admin\models\Company`.
 */
class CompanySearch extends Company
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'compstatus'], 'integer'],
            [['companyname', 'comprintname', 'compcode', 'compaddress', 'compcity', 'comppin', 'compphone', 'compemail', 'compcontact', 'compgstin', 'updated_at', 'created_at'], 'safe'],
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
        $query = Company::find();

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
            'id' => $this->id,
            'compstatus' => $this->compstatus,
            'updated_at' => $this->updated_at,
            'created_at' => $this->created_at,
        ]);

        $query->andFilterWhere(['like', 'companyname', $this->companyname])
            ->andFilterWhere(['like', 'comprintname', $this->comprintname])
            ->andFilterWhere(['like', 'compcode', $this->compcode])
            ->andFilterWhere(['like', 'compaddress', $this->compaddress])
            ->andFilterWhere(['like', 'compcity', $this->compcity])
            ->andFilterWhere(['like', 'comppin', $this->comppin])
            ->andFilterWhere(['like', 'compphone', $this->compphone])
            ->andFilterWhere(['like', 'compemail', $this->compemail])
            ->andFilterWhere(['like', 'compcontact', $this->compcontact])
            ->andFilterWhere(['like', 'compgstin', $this->compgstin]);

        return $dataProvider;
    }
}
