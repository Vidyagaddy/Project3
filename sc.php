<?php

use Model\SC;
/**
 * The South Carolina Controller.
 */
class Controller_SC extends Controller
{
	/**
	 * Shows a list of all sc items
	 */
//		INDEX PAGE		//
	public function action_index()
	{
		$layout = View::forge('sc/layoutfull');

		$content = View::forge('sc/index');

		$scs = SC::getAll();

		$content->set_safe('scs', $scs);

		$layout->content = Response::forge($content);

		return $layout;
	}
//		BEACH ATTRACTION	//
	public function action_beach()
        {
                $layout = View::forge('sc/layoutfull');

                $content = View::forge('sc/beach');

                $scs = SC::getAll();

                $content->set_safe('scs', $scs);

                $layout->content = Response::forge($content);

                return $layout;
        }
//		ISLAND ATTRACTION	//
	public function action_island()
        {
                $layout = View::forge('sc/layoutfull');

                $content = View::forge('sc/island');

                $scs = SC::getAll();

                $content->set_safe('scs', $scs);

                $layout->content = Response::forge($content);

                return $layout;
        }

//		UFO ATTRACTION		//
	public function action_ufo()
        {
                $layout = View::forge('sc/layoutfull');

                $content = View::forge('sc/ufo');

                $scs = SC::getAll();

                $content->set_safe('scs', $scs);

                $layout->content = Response::forge($content);

                return $layout;
        }
	
//		ABOUT SECTION		//
	public function action_about()
        {
                $layout = View::forge('sc/layoutfull');

                $content = View::forge('sc/about');

                $scs = SC::getAll();

                $content->set_safe('scs', $scs);

                $layout->content = Response::forge($content);

                return $layout;
        }

	//View a specific sc item
	public function action_view($id)
	{
		$layout = View::forge('sc/layoutfull');

		$content = View::forge('sc/view');

		$sc = new SC($id);

		$content->set_safe('sc', $sc);

		$layout->content = Response::forge($content);

		return $layout;
	}

//		LOGIN SECTION		//
	public function action_login()
        {
                $layout = View::forge('sc/layoutfull');

		$status = 'success';

                $content = View::forge('sc/login');

                $scs = SC::getAll();

                $content->set_safe('scs', $scs);

		$content->set_safe('status', $status);

                $layout->content = Response::forge($content);
         
                return $layout;
        }

//		CHECKER				//
        public function action_checkLogin()
        {

                $username = Input::post('username');

                $password = Input::post('password');

		//hardcoded users & passwords
                if(($username === 'ct310' && md5($password) === 'a6cebbf02cc311177c569525a0f119d7') || ($username === 'jtperea' && md5($password) === 'f869ce1c8414a264bb11e14a2c8850ed') || ($username === 'vgaddy' && md5($password) === '8e30b89c1efc7e8b03e23a44409498f5') )
                {
                        Session::create();

                        Session::set('username', $username);

                        Session::set('userid', 12345);

                        $content = View::forge('sc/success');

                        return $content;
                }
                else
                {

                        $content = View::forge('sc/login');

                        $content->set_safe('status','error');

                        return $content;
                }

        }

	 public function action_printUserDetails()
        {
                $session = Session::instance();

                $username = $session->get('username');

                $id = $session->get('userid');

                if(isset($username) && isset($id))
                {

                        $content = View::forge('sc/print');

                        $content->set_safe('username',$username);

                        $content->set_safe('id',$id);

                        return $content;

                }
                else
                {
                        $content = View::forge('sc/notLoggedIn');

                        return $content;
                }

        }

//			LOGOUT 			//
        public function action_logout()
        {
                $session = Session::instance();

                $session->destroy();

                $content = View::forge('sc/logout');

                return $content;
        }

/*	 public function get_addEdit($id = null)
        {
                $layout = View::forge('sc/layoutfull');

                $content = View::forge('sc/addEdit');

                $sc = new SC($id);

                $content->set_safe('sc', $sc);

                $layout->content = Response::forge($content);

                return $layout;
	}

	public function post_addEdit($id = null)
        {
                $sc = new SC($id);
                $sc->id = $_POST['id'];
                $sc->name = $_POST['name'];
                $sc->save();
                Response::redirect('index.php/sc/index');
        }

	public function action_delete($id)
	{
		$sc = new SC($id);
		$sc->delete();
		Response::redirect('index.php/sc/index');
	}  */

	public function action_404()
	{
		return Response::forge(Presenter::forge('welcome/404'), 404);
	}
}
