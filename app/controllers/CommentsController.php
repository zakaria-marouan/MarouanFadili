<?php

class CommentsController extends BaseController {

        # Handles "GET /" request
        public function getComments()
        {
        return View::make('ArticleNouveauteCinema')->with('comments', Comments::all());

        }
         public function getComments1()
        {
        return View::make('ArticleNouveauteCinema1')->with('comments', Comments::all());

        }
        public function getComments2()
        {
        return View::make('ArticleNouveauteCinema2')->with('comments', Comments::all());

        }
        public function getComments3()
        {
        return View::make('RepliquesClassiqueCinema')->with('comments', Comments::all());

        }
        public function getComments4()
        {
        return View::make('Top10')->with('comments', Comments::all());

        }

		public function deleteComments () { 
			
			comments::find(Input::get('id'))->delete();
			return Redirect::to('/NouveauteCinema');
		}
       
       
       public function get_edit($id) {
		
		return View::make('edit')
			->with('title', 'Edit critiques')
			->with('comments', comments::find($id));
		}
	
		public function put_update() {
		
		$id = Input::get('id');
			
			    comments::find($id)->update(Input::all());

			return Redirect::to('/home');
		}
       
       
        # Handles "POST /"  request
        public function postComments()
        {
        
        // get form input data
    	$entry = array(
        'title' => Input::get('title'),
        'text' => Input::get('text'),
        
      
        
    );

    // save the critiques entry to the database
    Comments::create($entry);

    return Redirect::to('/NouveauteCinema');
        }

}
