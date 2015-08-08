<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "curso".
 *
 * @property integer $id
 * @property string $sigla
 * @property string $nome
 *
 * @property Aluno[] $alunos
 */
class Curso extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'curso';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id'],'integer'],
            [['sigla'], 'string', 'max' => 4],
            [['nome'], 'string', 'max' => 50],
            [['id','nome','sigla'],'required', 'message'=>'Campo obrigatório']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'sigla' => 'Sigla Curso',
            'nome' => 'Nome Curso',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAlunos()
    {
        return $this->hasMany(Aluno::className(), ['id_curso' => 'id']);
    }
}
