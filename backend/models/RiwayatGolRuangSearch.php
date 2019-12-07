<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\Models\RiwayatGolRuang;

/**
 * RiwayatGolRuangSearch represents the model behind the search form of `common\Models\RiwayatGolRuang`.
 */
class RiwayatGolRuangSearch extends RiwayatGolRuang
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'gol_id', 'masa_kerja_gol_tahun', 'masa_kerja_gol_bulan'], 'integer'],
            [['nip', 'golongan', 'sk_no', 'sk_tanggal', 'tmt_golongan', 'jenis_kenaikan_pangkat'], 'safe'],
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
        $query = RiwayatGolRuang::find();

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
            'gol_id' => $this->gol_id,
            'sk_tanggal' => $this->sk_tanggal,
            'tmt_golongan' => $this->tmt_golongan,
            'masa_kerja_gol_tahun' => $this->masa_kerja_gol_tahun,
            'masa_kerja_gol_bulan' => $this->masa_kerja_gol_bulan,
        ]);

        $query->andFilterWhere(['like', 'nip', $this->nip])
            ->andFilterWhere(['like', 'golongan', $this->golongan])
            ->andFilterWhere(['like', 'sk_no', $this->sk_no])
            ->andFilterWhere(['like', 'jenis_kenaikan_pangkat', $this->jenis_kenaikan_pangkat]);

        return $dataProvider;
    }
}
