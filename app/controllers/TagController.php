<?php


class TagController extends BaseController {

	/*
        |
        |
        |
	*/

	public function viewTag()
        {
            echo View::make('viewTagList');
	}
      
	public function formAddTag()
        {
            echo View::make('formAddTag');
	}

	public function addTag()
        {
                        
         $validator = Validator::make(
                array(
                  'tag_text' => Input::get('tag_text'),
                  'review' => Input::get('review'),
                  'news' => Input::get('news')
                ),
                array(
                  'tag_text' => 'required',
                  'review' => 'required',
                  'news' => 'required'
                )
            );
            if($validator->fails()){
                return Redirect::to('add-tag')->withErrors($validator);
            }else{
                $review = Input::get('review');
                $news = Input::get('news');
                
                $tag = new Tag();
                $tag->tag_text = Input::get('tag_text');
                
                $tag->save();
                $tag->saveReview($review);
                $tag->saveNews($news);
                return View::make('viewSuccessAddTag');                
                
            }
        }

}