<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Menu as LavMenu;
use \App\Menu;
class MenuController extends Controller
{
    public function index()
    {
        $arrMenu = Menu::all();
        $menu = $this->buildMenu($arrMenu);
        return view('home', ['menu' => $menu]);
    }
    public function buildMenu ($arrMenu)
    {
        $mBuilder = LavMenu::make('MyNav', function($m) use ($arrMenu) {
            foreach($arrMenu as $item){
                /*
                 * Для родительского пункта меню формируем элемент меню в корне
                 * и с помощью метода id присваиваем каждому пункту идентификатор
                 */
                if($item->parent_id == 0){
                    $m->add($item->title, $item->path)->id($item->id);
                }
                //иначе формируем дочерний пункт меню
                else {
                    //ищем для текущего дочернего пункта меню в объекте меню ($m)
                    //id родительского пункта (из БД)
                    if($m->find($item->parent_id)){
                        $m->find($item->parent_id)->add($item->title, $item->path)->id($item->id);
                    }
                }
            }
        });
        return $mBuilder;
    }
}
