<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Specialty;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Dan\UploadImage\Exceptions\UploadImageException;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/social';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data = ['specialty' => Specialty::all()];
        return view('auth.register', $data);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'image' => 'required',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'phone_number' => 'required|numeric',
            'user_profile' => 'required|string|max:255'
        ]);
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function create( Request $request ) {
        $validator = $this->validator($request->all());

        if ($validator->fails())
        {
            return Redirect::to('register')->withErrors($validator)->withInput();
        }

        $file = $request->file('image');
        $imageName = md5(time()).'.'.$file->getClientOriginalExtension();
        try { $file->move('images/uploads/avatars/', $imageName ); }
        catch (FileException $e){
            echo 'fail';
        }

        // Upload and save image.*/
        User::create([
            'username' => $request['username'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'image' => $imageName,
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'phone_number' => $request['phone_number'],
            'user_profile' => (int) $request['user_profile'],
            'specialty_id' => (int) $request['specialty_id']
        ]);

        if ( Auth::attempt(['email' => $request['email'], 'password' => $request['password']]) ) {
            return Redirect::to('social');
        }

        return Redirect::to('/');
    }

}
