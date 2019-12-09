<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;

use common\Models\RiwayatGajiBerkala;
use common\Models\RiwayatGolRuang;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $tahun = date("Y");
        $bulan = date("m");

        $tahun1 = date("Y",strtotime("+1 month"));
        $bulan1 = date("m",strtotime("+1 month"));

        $np_tahun = date("Y",strtotime("-4 year"));
        $np_bulan = date("m",strtotime("-4 year"));

        $gaji_berkala = RiwayatGajiBerkala::find()->where('YEAR(kenaikan_berikutnya) = '.$tahun.' AND MONTH(kenaikan_berikutnya) = '.$bulan)->all();
        $gaji_berkala_bulan_depan = RiwayatGajiBerkala::find()->where('YEAR(kenaikan_berikutnya) = '.$tahun1.' AND MONTH(kenaikan_berikutnya) = '.$bulan1)->all();

        $GolRuangTahun = RiwayatGolRuang::find()->where('YEAR(sk_tanggal) = '.$np_tahun)->all();
        $GolRuangTahunBulan = RiwayatGolRuang::find()->where('YEAR(sk_tanggal) = '.$np_tahun.' AND MONTH(sk_tanggal) = '.$np_bulan)->all();

        return $this->render('index',[
            'tahun' => $tahun,
            'bulan' => $bulan,
            'tahun1' => $tahun1,
            'bulan1' => $bulan1,
            'np_tahun' => $np_tahun,
            'np_bulan' => $np_bulan,
            'gaji_berkala' => $gaji_berkala,
            'gaji_berkala_bulan_depan' => $gaji_berkala_bulan_depan,
            'GolRuangTahun' => $GolRuangTahun,
            'GolRuangTahunBulan' => $GolRuangTahunBulan,
        ]);
    }

    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        // $this->layout = 'login';
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
