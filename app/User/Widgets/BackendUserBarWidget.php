<?php
/**
 * Created by PhpStorm.
 * User: Роман
 * Date: 03.03.2015
 * Time: 8:09
 */

namespace App\User\Widgets;


class BackendUserBarWidget {

	public function render()
	{
		return view('larfang/user::widgets.backend-user-bar');
	}

}