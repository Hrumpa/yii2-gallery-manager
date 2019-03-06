<?php

namespace zxbodya\yii2\galleryManager;

class GalleryImage
{
    const STATUS_DISABLED = 0;
    const STATUS_ENABLED = 10;
    
    public $name;
    public $description;
    public $id;
    public $rank;
    public $status;
    
    /**
     * @var GalleryBehavior
     */
    protected $galleryBehavior;

    /**
     * @param GalleryBehavior $galleryBehavior
     * @param array           $props
     */
    function __construct(GalleryBehavior $galleryBehavior, array $props)
    {

        $this->galleryBehavior = $galleryBehavior;

        $this->name = isset($props['name']) ? $props['name'] : '';
        $this->description = isset($props['description']) ? $props['description'] : '';
        $this->id = isset($props['id']) ? $props['id'] : '';
        $this->rank = isset($props['rank']) ? $props['rank'] : '';
        $this->status = isset($props['status']) ? $props['status'] : '';
    }

    /**
     * @param string $version
     *
     * @return string
     */
    public function getUrl($version)
    {
        return $this->galleryBehavior->getUrl($this->id, $version);
    }
    
    public function isEnabled()
    {
        return $this->status === self::STATUS_ENABLED;
    }
}
