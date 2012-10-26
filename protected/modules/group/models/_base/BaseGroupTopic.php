<?php

/**
 * This is the model base class for the table "group_topic".
 * DO NOT MODIFY THIS FILE! It is automatically generated by giix.
 * If any changes are necessary, you must set or override the required
 * property or method in class "GroupTopic".
 *
 * Columns in table "group_topic" available as properties of the model,
 * and there are no model relations.
 *
 * @property integer $id
 * @property string $name
 * @property integer $creator
 * @property string $created
 * @property integer $active
 * @property integer $group
 *
 */
abstract class BaseGroupTopic extends YsActiveRecord
{

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function tableName()
    {
        return 'group_topic';
    }

    public static function representingColumn()
    {
        return 'name';
    }

    public function rules()
    {
        return array(
            array('name, creator,  group', 'required'),
            array('creator, active, group', 'numerical', 'integerOnly' => true),
            array('name', 'length', 'max' => 255),
            array('active', 'default', 'setOnEmpty' => true, 'value' => null),
            array('id, name, creator, created, active, group', 'safe', 'on' => 'search'),
        );
    }

    public function relations()
    {
        return array(
        );
    }

    public function pivotModels()
    {
        return array(
        );
    }

    public function attributeLabels()
    {
        return array(
            'id' => Yii::t('group_topic', 'id'),
            'name' => Yii::t('group_topic', 'name'),
            'creator' => Yii::t('group_topic', 'creator'),
            'created' => Yii::t('group_topic', 'created'),
            'active' => Yii::t('group_topic', 'active'),
            'group' => Yii::t('group_topic', 'group'),
        );
    }

    public function search()
    {
        $criteria = new CDbCriteria;

        $criteria->compare('id', $this->id);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('creator', $this->creator);
        $criteria->compare('created', $this->created, true);
        $criteria->compare('active', $this->active);
        $criteria->compare('group', $this->group);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }
}