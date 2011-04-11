<?php

/**
 * JXHEditor class file.
 *
 * @author jerry2801 <jerry2801@gmail.com>
 *
 * @version alpha 7 (2010-12-2 16:33) fix jQuery 1.4.4 & xhEditor v1.1.2
 * @version alpha 6 (2010-10-21 17:02) fix jQuery 1.4.3
 * @version alpha 5 (2010-4-8 23:59)
 *
 * @requires xhEditor 1.1.2
 *
 * A typical usage of JXHEditor is as follows:
 * <pre>
 * $this->widget('application.extensions.xheditor.JXHEditor',array(
 *     'model'=>$model,
 *     'attribute'=>'content',
 *     'htmlOptions'=>array('cols'=>80,'rows'=>20,'style'=>'width: 100%; height: 500px;'),
 * ));
 * </pre>
 */

Yii::import('zii.widgets.jui.CJuiInputWidget');

class JXHEditor extends CJuiInputWidget
{
	public $language;

    public function run()
    {
		list($name,$id)=$this->resolveNameID();

		if(isset($this->htmlOptions['id']))
			$id=$this->htmlOptions['id'];
		else
			$this->htmlOptions['id']=$id;
		if(isset($this->htmlOptions['name']))
			$name=$this->htmlOptions['name'];
		else
			$this->htmlOptions['name']=$name;

		if($this->hasModel())
			echo CHtml::activeTextArea($this->model,$this->attribute,$this->htmlOptions);
		else
			echo CHtml::textArea($name,$this->value,$this->htmlOptions);

		$options=CJavaScript::encode($this->options);

        $path=dirname(__FILE__).DIRECTORY_SEPARATOR.'source';
        $baseUrl=Yii::app()->getAssetManager()->publish($path);

        $js='jQuery(\'#'.$id.'\').xheditor('.$options.');';

		$cs=Yii::app()->getClientScript();
        Yii::app()->clientScript->registerCoreScript('jquery');

        if(is_null($this->language))
            $this->language=Yii::app()->language;

        switch($this->language) {
            case 'zh_cn' :
                $language='zh-cn';
                break;
            case 'zh_tw' :
                $language='zh-tw';
                break;
            default :
                $language='en';
        }

        $cs->registerScriptFile($baseUrl.'/xheditor-'.$language.'.min.js');

		$cs->registerScript(__CLASS__.'#'.$id,$js);
    }
}