<?php 
namespace frontend\models;

use yii\base\Model;
use yii\web\UploadedFile;

class Upload extends Model
{
    /**
     * @var UploadedFile
     */
    public $user_img;

    public function rules()
    {
        return [
            [['user_img'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }
    
    public function upload()
    {
        if ($this->validate()) {
            $this->user_img->saveAs('uploads/' . $this->user_img->baseName . '.' . $this->user_img->extension);
            return true;
        } else {
            return false;
        }
    }
}