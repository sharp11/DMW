<?php

class DMW_Controller extends Base_Controller {

    /*
	|--------------------------------------------------------------------------
	| The Default Controller
	|--------------------------------------------------------------------------
	|
	| Instead of using RESTful routes and anonymous functions, you might wish
	| to use controllers to organize your application API. You'll love them.
	|
	| This controller responds to URIs beginning with "dmw", and it also
	| serves as the default controller for the application, meaning it
	| handles requests to the root of the application.
	|
	| You can respond to GET requests to "/dmw/profile" like so:
	|
	|		public function action_profile()
	|		{
	|			return "This is your profile!";
	|		}
	|
	| Any extra segments are passed to the method as parameters:
	|
	|		public function action_profile($id)
	|		{
	|			return "This is the profile for user {$id}.";
	|		}
	|
	*/

	public function action_index()	{

        return View::make('dmw.index')
            ->with('title','Dalton Musicworks - Home')
            ->with('navbar_itemName', ''); // Home page does not have a navbar item
	}

    public function action_guitars() {

        return View::make('dmw.guitars')
            ->with('title','Dalton Musicworks - Guitars')
            ->with('navbar_itemName', 'top_navbar_guitars');
    }

    public function action_basses() {

        return View::make('dmw.basses')
            ->with('title','Dalton Musicworks - Basses')
            ->with('navbar_itemName', 'top_navbar_basses');
    }

    public function action_parts()
    {
        return View::make('dmw.parts')
            ->with('title','Dalton Musicworks - Parts')
            ->with('navbar_itemName', 'top_navbar_parts');
    }

    public function action_amps()
    {
        return View::make('dmw.amps')
            ->with('title','Dalton Musicworks - Amps')
            ->with('navbar_itemName', 'top_navbar_amps');
    }

    public function action_effects()
    {
        return View::make('dmw.effects')
            ->with('title','Dalton Musicworks - Effects')
            ->with('navbar_itemName', 'top_navbar_effects');
    }

    public function action_videos() {

        return View::make('dmw.videos')
            ->with('title','Dalton Musicworks - Videos')
            ->with('navbar_itemName', 'top_navbar_videos');
    }

    public function action_faq()
    {
        return View::make('dmw.faq')
            ->with('title','Dalton Musicworks - FAQ')
            ->with('navbar_itemName', 'top_navbar_faq');
    }

    public function action_how_to_buy()
    {
        return View::make('dmw.howtobuy')
            ->with('title','Dalton Musicworks - How to Buy')
            ->with('navbar_itemName', 'top_navbar_howtobuy');
    }

    public function action_about_philosophy()
    {
        return View::make('dmw.about_philosophy')
            ->with('title','Dalton Musicworks - About our Philosophy')
            ->with('navbar_itemName', 'top_navbar_about');
    }

    public function action_about_people()
    {
        return View::make('dmw.about_people')
            ->with('title','Dalton Musicworks - About our People')
            ->with('navbar_itemName', 'top_navbar_about');
    }

    public function action_contact() {

        return View::make('dmw.contact')
            ->with('title','Dalton Musicworks - Contact')
            ->with('navbar_itemName', 'top_navbar_contact');
    }
}