<?php

namespace App\App\Shared\Controllers;

use Illuminate\Http\Request;

class BoxChatController
{
    public function pageBoxChat()
    {
        return view('shared.chatPage.main-page-chat');
    }
}
