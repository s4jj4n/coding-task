<?php
namespace App\Http\Controllers\Frontend\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\User\UserRequest;
use App\Modules\Services\User\UserService;

class UserController extends Controller
{
    protected $user;

    public function __construct(UserService $user)
    {
        $this->user = $user;
    }

    /**
     * Display a listing of the user.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->user->all();

        return view('frontend.user.index', compact('users'));
    }

    /**
     * Show the form for creating a new user.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('frontend.user.create');
    }

    /**
     * Store a newly created user in storage.
     *
     * @param UserRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        $userDetails = array_except($request->all(), ['_token']);
        if($this->user->create($userDetails)) {

            return redirect()->route('users.index')->with('success', 'User created successfully.');
        }

        return redirect()->route('users.index')->with('error', 'User could not be created.');
    }

    /**
     * Display the specified user.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = $this->user->find($id);
        if(!$user)
            abort(404);

        return view('frontend.user.show', compact('user'));
    }

}
