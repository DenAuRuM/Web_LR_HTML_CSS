<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\StaticPage;
use TheSeer\Tokenizer\Exception;

class StaticPageController extends Controller
{
    public function show($urlname)
    {
        $page = StaticPage::where('urlname', '=', $urlname) -> firstOrFail();
        return view($page->view, ['title' => $page -> title, 'content' => $page->content]);
    }

    public function create_static_page(Request $request)
    {
        
        $validated = $request->validate([
            'page_name' => 'required',
            'content' => 'required'
           ]);
        
        \App\Models\StaticPage::create(['urlname' => $validated['page_name'], 'view' => 'simple', 'title' => 'Статическая страница', 'content'=>$validated['content']]);
        return $this->show($validated['page_name']);
    }
}
