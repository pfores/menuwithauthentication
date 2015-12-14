<?php

namespace MenuWithAuthentication\Http\ViewComposers;

use Illuminate\Contracts\View\View;

/**
 * Created by PhpStorm.
 * User: albert
 * Date: 14/12/15
 * Time: 17:10
 */


/**
 * Class SidebarComposer
 * @package MenuWithAuthentication\Http
 */
class SidebarComposer {
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('menu', $this->getSideBarMenu());
    }

    private function getSideBarMenu()
    {
        $menu = MenuWithAuthentication::instance()->getMenu();
        return array($menu);
    }
}