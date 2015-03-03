<?php namespace App\User\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\User\Services\Registrar;

class RegistrarController {

	/**
	 * The registrar implementation.
	 *
	 * @var Registrar
	 */
	protected $registrar;


	public function __construct(Registrar $registrar)
	{
		$this->registrar = $registrar;
		$this->middleware('guest', ['except' => 'getLogout']);
	}

	/**
	 * Show the application registration form.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function getRegister()
	{
		return view('larfang/user::auth.register');
	}

	/**
	 * Handle a registration request for the application.
	 *
	 * @param  \Illuminate\Foundation\Http\FormRequest  $request
	 * @return \Illuminate\Http\Response
	 */
	public function postRegister(Request $request)
	{
		$validator = $this->registrar->validator($request->all());

		if ($validator->fails())
		{
			$this->throwValidationException(
				$request, $validator
			);
		}

		$this->auth->login($this->registrar->create($request->all()));

		return redirect()->route('larfang/backend::home');
	}
}