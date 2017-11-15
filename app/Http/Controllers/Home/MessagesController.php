<?php

namespace App\Http\Controllers\Home;

use App\Http\Requests\MessagesRequest;
use App\Model\Board;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MessagesController extends Controller
{
    protected $board;

    public function __construct ( Board $board )
    {
        $this->board = $board;
    }

    public function index ()
    {
        return view('home.board.board');
    }

    public function store ( MessagesRequest $request )
    {
        $user = \Auth::user();
        $data = array_add($request->only('message', 'to_user_id', 'parent_id'), 'user_id', $user->id);

        $board   = $this->board->create($data);
        $message = array_merge(
            $board->only('message'),
            $user->only('avatar', 'id', 'name'),
            [ 'parent' => $board->id, 'time' => Carbon::parse($board->create_at)->toDateString() ]
        );


        return $this->sendSuccessResponse($message);
    }
}
