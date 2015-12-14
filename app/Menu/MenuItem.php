<?php

namespace MenuWithAuthentication\Menu;

/**
 * Created by PhpStorm.
 * User: pau
 * Date: 14/12/15
 * Time: 17:45
 */
/**
 * Class MenuItem
 * @property MenuItem current
 * @package MenuWithAuthentication\Menu
 */
/**
 * Class MenuItem
 * @package MenuWithAuthentication\Menu
 */
class MenuItem
{
    /**
     * @var
     */
    protected $title;
    /**
     * @var
     */
    protected $icon;
    /**
     * @var
     */
    protected $url;
    /**
     * @var
     */
    protected $rol;
    /**
     * @var
     */
    protected $permission;
    /**
     * @var
     */
    protected $user;
    /**
     * @var
     */
    protected $level;
    /**
     * @var
     */
    protected $subItems;

    /**
     * @var
     */
    private $id;

    /**
     * @var
     */
    public static $current;


    /**
     * MenuItem constructor.
     */
    public function __construct($id)
    {

        $this->id = $id;

        if (is_null(static::$current))
        {
            static::$current = $this;
            $this ->level(0);
        } else{
            static::$current->addItem($this);
            $this->level(static::$current->level() + 1);
        }
    }

    /**
     * @param $item
     * @return $this
     */
    public function addItem($item)
    {
        $this->subItems[] = $item;
        return $this;
    }

    /**
     * @param null $title
     * @return $this
     */
    public function title($title=null)
    {
        if ($title == null) {
            return $this->title;
        }

        $this->title = $title;
        return $this;
    }

    /**
     * @param null $icon
     * @return $this
     */
    public function icon($icon=null)
    {
        if ($icon == null) {
            return $this->icon;
        }

        $this->icon = $icon;
        return $this;
    }

    /**
     * @param null $url
     * @return $this
     */
    public function url ($url=null)
    {
        if ($url == null) {
            return $this->url;
        }

        $this->url = $url;
        return $this;
    }

    /**
     * @param null $level
     * @return $this
     */
    public function level($level = null)
    {
        if (is_null($level)) {
            return $this->level;
        }

        $this->level = $level;
        return $this;
    }

    /**
     * @param null $rol
     * @return $this
     */
    public function rol ($rol=null)
    {
        if ($rol == null) {
            return $this->rol;
        }

        $this->rol = $rol;
        return $this;
    }

    /**
     * @param null $permission
     * @return $this
     */
    public function permission ($permission=null)
    {
        if ($permission == null) {
            return $this->permission;
        }

        $this->permission = $permission;
        return $this;
    }

    /**
     * @param null $user
     * @return $this
     */
    public function user ($user=null)
    {
        if ($user == null) {
            return $this->user;
        }

        $this->user = $user;
        return $this;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->render();
    }

    /**
     * @return string
     */
    public function render()
    {
        $data = array();
        $data['url'] = $this->url;
        $data['icon'] = $this->icon;
        $data['id'] = $this->id;
//        $data['permission'] = $this->permission;
//        $data['rol'] = $this->rol;
//        $data['user'] = $this->user;
        $data['title'] = $this->title;
        return (String) view('menu.menuitem',$data);
    }
}