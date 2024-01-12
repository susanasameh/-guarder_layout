<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }



    public function credentials(Request $request){
        if(is_numeric($request->email)){
        return['mobile'=>$request->email, 'password'=>$request->password];
        }elseif(filter_var($request->email, FILTER_VALIDATE_EMAIL)){
        return['email'=>$request->email, 'password'=>$request->password];
}
    }


    // public function createSession(){
    //     // Check user is admin or not
    //     if (Auth::user()->role == "admin"){
    //         session(['role' => 'admin']);
    //         return redirect('/dashboard/home');
    //         } else {
    //             session(['role' => 'customer']);
    //             return redirect('/');
    //             }

    // }

    // public function createSession(){
    //     Auth::attempt([
    //         'email' => request('email'),
    //         'password' => request('password')],
    //         request('remember'));
    //         if ($user = Auth::user())
    //         {
    //             // Store the user's role in the session for later use
    //             Session::put('role', $user->role);
    //             // Redirect to the intended location or default to home
    //             return redirect()->intended('/dashboard/home');
    //             }
    //             else {
    //                 // Authentication failed, redirect back to login with form data
    //                 return redirect()->back()
    //                 ->withInput(request(['email','remember']))
    //                 ->withErrors(['email' => trans('auth.failed')]);
    //                 }

    // }

    // public function createSession(){
    //     // Get the validated credentials from the LoginController
    //     $credentials = $this->validateLogin();
    //     // Attempt authentication using the provided credentials
    //     if (Auth::attempt($credentials)) {
    //         // If successful, then redirect to their intended location
    //         // The logic here should be customized to your application's requirements
    //         return redirect()->intended(route('dashboard.index'));
    //         }
    //         // If unsuccessful, then redirect back to the login with the form data and errors
    //         return redirect()->back()
    //         ->withInput(request(['username', 'remember']))
    //         ->withErrors(['username' => trans('auth.failed')]);
    //     }

    // }


    // public function createSession(){
    //     // Validate the form data
    //     $this->validator(request()->all())->validate();
    //     // Create a new user provider instance
    //     $provider = \App\Providers\UserProvider::create();
    //     // Attempt to get the user by their username and password, or throw an exception.
    //     try{
    //         $user = $provider->retrieveByCredentials(request(['username']));
    //         } catch (\Exception $e){
    //             dd("Error: {$e->getMessage()}");
    //             };
    //             // Check the password against the hashed value stored in the database
    //             if(!$provider->validateCredentials($user, request(['password']))){
    //                 // The password is incorrect so we will increment the maximum attempts and redirect the user back to
    //                 // Throw an unauthorised exception.
    //                 abort(401, 'This action is unauthorized.');
    //                 }
    //                 // Generate a token for the user and persist it in the session.
    //                 $token = $provider->createToken($user);
    //                 // Return a response that includes the token.
    //                 return response()->json([
    //                     'token' => $token->plainTextToken
    //                     ]);
    //                     }


    // public function createSession(){
    //     // Validation rules passed
    //     $rules = [
    //         'email' => ['required','email'],
    //         'password'=>['required']
    //         ];
    //         $messages =[
    //             'email.required'=>"Email is required",
    //             'email.email'=>"A valid email address must be provided",
    //             'password.required'=> "Password is required"
    //             ];
    //             $validator=Validator::make(request()->all(),$rules,$messages);
    //             if ($validator->fails()){
    //                 return response()->json($validator->errors(),422);
    //                 }else {
    //                     //Checking if the user exists and the password matches
    //                     $user = User::where('email',request('email'))->first();
    //                     if (!$user || !Hash::check(request('password'),$user->password
    //                     )) {
    //                         return response()->json('The credentials do not match our records', 401);
    //                         }
    //                         //Create a new personal access token for this user and return it with status code 2
    //                         //Create a new personal access token for this user and return it with status code 2
    //                         $token = $user->createToken('myapp')->plainTextToken;
    //                         $response=[
    //                             'user'=>$user,
    //                             'token'=>$token
    //                             ];
    //                             return response()->json($response,201);
    //                             }


    // }


    // }



    // public function createSession(){
    //     //Validate request
    //     $this->validate(request(),[
    //         'email'=>'required|email',
    //         'password'=>'required|min:5|max:30'
    //         ]);
    //         //Check if user exist with this email
    //         $user = User::where('email','=',request('email'))->first();
    //         if(!is_null($user)){
    //             //Verify Password
    //             if (Hash::check(request('password'),$user->getAttribute('password'))){
    //                 $token = auth()->login($user);
    //                 return response()->json([
    //                     "status"=>true,
    //                     "message"=>"User Logged In Successfully",
    //                     "access_token"=>$token,
    //                     "data"=>new UserResource($user)],200);
    //                     }else{
    //                         return response()->json("Password Doesn't Match",401);
    //                         }
    //                         }else{
    //                             return response()->json("Email Does Not Exist",404);
    //                             }
    //                             }
    //                             public function logout()
    //                             {
    //                                 auth()->logout();
    //                                 return response()->json(['message'=>'User logged out successfully'], 200
    //                                 );
    //                                 }
    //                                 public function getAuthenticatedUser()
    //                                 {
    //                                     try{
    //                                         $user = Auth::guard()->user();
    //                                         if ($user) {
    //                                             return new UserResource($user);
    //                                             } else {
    //                                                 return response()->json(['error'=>'Unauthenticated'], 4
    //                                                 * 100);
    //                                                 }
    //                                                 } catch(\Tymon\JWTAuth\Exceptions\TokenExp

    //                                                 \TokenExpiredException $e){
    //                                                     return response()->json(['error'=>'Token is Expired'],
    //                                                 }


    // }



    // public function createSession(){
    //     session()->put('testSession','The First Laravel Session');
    //     return 'session is start ' . session('testSession');
    // }


}
