<?php

namespace backend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\TblAkun3;

/**
 * TblAkun3Search represents the model behind the search form about `common\models\TblAkun3`.
 */
class TblAkun3Search extends TblAkun3
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kd_akun1', 'kd_akun2', 'kd_akun3', 'akun3'], 'safe'],
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
        $query = TblAkun3::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere(['like', 'kd_akun1', $this->kd_akun1])
            ->andFilterWhere(['like', 'kd_akun2', $this->kd_akun2])
            ->andFilterWhere(['like', 'kd_akun3', $this->kd_akun3])
            ->andFilterWhere(['like', 'akun3', $this->akun3]);

        return $dataProvider;
    }
}
