<?php
namespace zxbodya\yii2\galleryManager\migrations;

use yii\db\Schema;
use yii\db\Migration;

class m190305_084023_add_field_status extends Migration
{

    public $tableName = '{{%gallery_image}}';

    public function up()
    {
        $this->addColumn($this->tableName, 'status', $this->integer()->unsigned()->defaultValue(\zxbodya\yii2\galleryManager\GalleryImage::STATUS_ENABLED));
    }

    public function down()
    {
        $this->dropColumn($this->tableName, 'status');
    }
}
