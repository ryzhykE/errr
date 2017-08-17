<?php

use TinyURL\Repository\LinkRepository;

Class IndexController extends BaseController
{
    public function showIndex()
    {
        return View::make('index');
    }

    public function postUrl()
    {
        $url = Input::get('url');
        $rules = array('url'=> 'required|url');
        $validator = Validator::make(array('url' => $url),$rules);
        if($validator->fails())
        {
            return Redirect::to('/')->withErrors($validator); 
        }
        $link = new Link();
        $link->url = $url;
        $link->save();
        $shortUrl = URL::to('/',[$link->id]);
        return View::make('link',['link' => $shortUrl]);

    }

    public function getRedirect($id)
    {
        $url = 
        return Redirect::to($url);
    }
}
