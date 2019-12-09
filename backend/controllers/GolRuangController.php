<?php

namespace backend\controllers;

use Yii;
use common\Models\RiwayatGolRuang;
use backend\models\GolRuangSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\RefGolongan;
use yii\helpers\ArrayHelper;

use common\Models\DataUtama;

use kartik\mpdf\Pdf;
/**
 * GolRuangController implements the CRUD actions for RiwayatGolRuang model.
 */
class GolRuangController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all RiwayatGolRuang models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new GolRuangSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single RiwayatGolRuang model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new RiwayatGolRuang model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new RiwayatGolRuang();
        $RefGolongan = ArrayHelper::map(RefGolongan::find()->select('id, nama')->all(), 'id', 'nama');

        if ($model->load(Yii::$app->request->post()) ) {
            $model->setGolRuang();
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
            'RefGolongan' => $RefGolongan,
        ]);
    }

    /**
     * Updates an existing RiwayatGolRuang model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $RefGolongan = ArrayHelper::map(RefGolongan::find()->select('id, nama')->all(), 'id', 'nama');

        if ($model->load(Yii::$app->request->post()) ) {
            $model->setGolRuang();
            $model->save();
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
            'RefGolongan' => $RefGolongan,
        ]);
    }

    /**
     * Deletes an existing RiwayatGolRuang model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the RiwayatGolRuang model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return RiwayatGolRuang the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = RiwayatGolRuang::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionCetak($nip){
        $tanggal = $this->tanggal();
        $model = DataUtama::find()->where(['nip'=>$nip ])->one();
        
        $pdf = new Pdf([
            'mode' => Pdf::MODE_UTF8, // leaner size using standard fonts
            'format' => Pdf::FORMAT_FOLIO,
            'content' => $this->renderPartial('cetak',[
                'model' => $model,
                'tanggal' => $tanggal,
            ]),
            'cssFile' => '@vendor/kartik-v/yii2-mpdf/src/assets/kv-mpdf-bootstrap.min.css',
        // any css to be embedded if required
        'cssInline' => '.kv-heading-1{font-size:6px}', 

            'options' => [
                'title' => 'Cetak Biodata',
            //'subject' => 'Generating PDF files via yii2-mpdf extension has never been easy'
            ],
            'orientation' => Pdf::ORIENT_PORTRAIT,
            'methods' => [
                // 'SetHeader' => ['Dicetak dari : <i>simpegbkd.sumutprov.go.id</i> '],
                // 'SetFooter' => ['|Badan Kepegawaian Daerah|{PAGENO}'],
            ]
        ]);
        return $pdf->render();
    }

    public function tanggal(){
        $bulans = [
            1 => 'Januari',
			'Februari',
			'Maret',
			'April',
			'Mei',
			'Juni',
			'Juli',
			'Agustus',
			'September',
			'Oktober',
			'November',
			'Desember'
        ];

        $tahun = date('Y');
        $bulan = $bulans[date('m')];
        $tanggal = date('d');

        return $tanggal." ".$bulan." ".$tahun;
    }
}
