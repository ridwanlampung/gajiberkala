<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\Models\RiwayatGajiBerkala;

/**
 * GajiBerkalaSearch represents the model behind the search form of `common\Models\RiwayatGajiBerkala`.
 */
class GajiBerkalaSearch extends RiwayatGajiBerkala
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'gaji_pokok_terakhir', 'masa_kerja_tahun', 'masa_kerja_bulan', 'gaji_pokok_baru'], 'integer'],
            [['nip', 'pangkat', 'oleh_pejabat', 'tanggal_sk', 'nomor_sk', 'tmt_sk', 'tmt_gaji', 'kenaikan_berikutnya'], 'safe'],
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
        $query = RiwayatGajiBerkala::find();

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
            'gaji_pokok_terakhir' => $this->gaji_pokok_terakhir,
            'tanggal_sk' => $this->tanggal_sk,
            'tmt_sk' => $this->tmt_sk,
            'masa_kerja_tahun' => $this->masa_kerja_tahun,
            'masa_kerja_bulan' => $this->masa_kerja_bulan,
            'gaji_pokok_baru' => $this->gaji_pokok_baru,
            'tmt_gaji' => $this->tmt_gaji,
            'kenaikan_berikutnya' => $this->kenaikan_berikutnya,
        ]);

        $query->andFilterWhere(['like', 'nip', $this->nip])
            ->andFilterWhere(['like', 'pangkat', $this->pangkat])
            ->andFilterWhere(['like', 'oleh_pejabat', $this->oleh_pejabat])
            ->andFilterWhere(['like', 'nomor_sk', $this->nomor_sk]);

        return $dataProvider;
    }
}
