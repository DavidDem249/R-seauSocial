<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profil;

use App\Repository\ConversationRepository;
use Illuminate\Auth\AuthManager;
use App\Http\Requests\StoreMessageRequest;
use App\Notifications\MessageReceived;


class MessageController extends Controller
{
    
    private $r;
	private $auth;

	public function __construct(ConversationRepository $conversationRepository, AuthManager$auth)
	{
		$this->middleware('auth');
		$this->r = $conversationRepository;
		$this->auth = $auth;
	}


    public function messagepage()
    {

    	if(auth()->guest())
    	{
    		return redirect()->route('auth.view');
    	}

    	return View('pages.messages.create', [

    		'users' => $this->r->getConversation($this->auth->user()->id),
    		'unread' => $this->r->unreadCount($this->auth->user()->id),
    		'userConnect' => auth()->user(),
            'user' => auth()->user(),
    	]);

    	// $users = User::all();
    	// $userConnect = auth()->user();
    	// return view('pages.messages.create',compact('users','userConnect'));
    }

    public function show(User $user)
    {
    	//$users = User::select('name','id')->where('id', '!=', auth()->user()->id)->get();
    	$me = $this->auth->user();
    	$messages = $this->r->getMessagesFor($me->id, $user->id)->paginate(100);
    	$unread = $this->r->unreadCount($me->id);

    	if(isset($unread[$user->id]))
    	{
    		$this->r->readAllFrom($user->id, $me->id);
    		unset($unread[$user->id]);
    	}

    	return View('pages.messages.show', [

    		'users' => $this->r->getConversation($this->auth->user()->id),
    		'user' => $user,
    		'messages' => $messages,
    		'unread' => $unread,
    		'userConnect' => auth()->user(),

    	]);
    }

    public function store(User $user, StoreMessageRequest $request)
    {

    	$message = $this->r->createMessage(

    		$request->get('message'),
    		$this->auth->user()->id,
    		$user->id

    	);
    	//dd($message);
    	$user->notify(new MessageReceived($message));
    	//return redirect(route('conversation.show',['id' =>$user->id]));
    	return redirect()->back();

    }
}
