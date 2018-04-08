<?php
use Model\SC;
use Model\Login;
use Model\Attractions;
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
		$attrs = Attractions::getAttractions();
		
		$content -> set_safe('attrs',$attrs);
		$layout->content = Response::forge($content);
		return $layout;
	}


	public function get_admin()
	{
        $layout = View::forge('sc/layoutfull');
        $content = View::forge('sc/admin');
          
        $attrs = Attractions::getAttractions();
        //$attrString;
        
        //foreach($attrs as $key => $attr){
         //   $attrString[$key] = $attr['title'];
      //  }
        
        $content->set_safe('attrs', $attrs);
		$layout->content = Response::forge($content);

		return $layout;
	}
	public function post_admin(){
		if(isset($_POST['op'])){
            $title = $_POST['name'];
            $desc = $_POST['description'];
            $image = $_POST['image'];
            
            Attractions::saveAttraction($title, $desc, $image);
            Response::redirect('index.php/sc/admin');
        }
        else if(isset($_POST['op2'])){
            Attractions::removeAttraction($_POST['name']);
            Response::redirect('index.php/sc/admin');
        }
    }
	
	public function action_reset(){
        $layout = View::forge('sc/layoutfull');
        $content = View::forge('sc/reset');
        $login = Login::find('all');
        $content->set_safe('login', $login);
        $layout->content = Response::forge($content);
        return $layout;
	}
	public function action_resetPW(){
        $layout = View::forge('sc/layoutfull');
        $content = View::forge('sc/resetPW');
        $logins = Login::find('all');
        $content->set_safe('logins', $logins);
        $layout->content = Response::forge($content);
        return $layout;
	}
	
	//view for each attraction in database
	public function action_view($attrID)
	{
		$layout = View::forge('sc/layoutfull');
		$content = View::forge('sc/view');
		
		$session = Session::instance();
        $username = $session->get('username');
                
                
		$attr = Attractions::find($attrID);
		$content->set_safe('attr', $attr);
		
		if(isset($username)){
            $content->set_safe('username',$username);
        }
        
		$layout->content = Response::forge($content);
		return $layout;
	}
	public function post_view(){
        
	}
	/*
//		BEACH ATTRACTION	//

                public function action_beach()
        {
                $layout = View::forge('sc/layoutfull');
                $content = View::forge('sc/beach');
                // TRY
                $session = Session::instance();
                $username = $session->get('username');
                $id = $session->get('userid');
                $scs = SC::getAll();
                $content->set_safe('scs', $scs);
                if(isset($username) && isset($id))
                {
                        $content->set_safe('username',$username);
                        $content->set_safe('id',$id);
                        $layout->content = Response::forge($content);
                        return $layout;
                }
                //END TRY
                $layout->content = Response::forge($content);
                return $layout;
        }
//		ISLAND ATTRACTION	//

                public function action_island()
        {
                $layout = View::forge('sc/layoutfull');
                $content = View::forge('sc/island');
                // TRY
                $session = Session::instance();
                $username = $session->get('username');
                $id = $session->get('userid');
                $scs = SC::getAll();
                $content->set_safe('scs', $scs);
                if(isset($username) && isset($id))
                {
                        $content->set_safe('username',$username);
                        $layout->set_safe('username',$username);
                        $content->set_safe('id',$id);
                        $layout->content = Response::forge($content);
                        return $layout;
                }
                //END TRY
                $layout->content = Response::forge($content);
                return $layout;
        }
//		UFO ATTRACTION		//

	        public function action_ufo()
        {
                $layout = View::forge('sc/layoutfull');
                $content = View::forge('sc/ufo');
                // TRY
                $session = Session::instance();
                $username = $session->get('username');
                $id = $session->get('userid');
                $scs = SC::getAll();
                $content->set_safe('scs', $scs);
                if(isset($username) && isset($id))
                {
                        $content->set_safe('username',$username);
                        $content->set_safe('id',$id);
                        $layout->content = Response::forge($content);
                        return $layout;
                }
                //END TRY
                $layout->content = Response::forge($content);
                return $layout;
        }
	*/
//		ABOUT SECTION		//

        public function action_about()
        {
                $layout = View::forge('sc/layoutfull');
                $content = View::forge('sc/about');
                $layout->content = Response::forge($content);
                return $layout;
        }
	//View a specific sc item
	
//		LOGIN SECTION		//
	public function action_login()
    {
        $layout = View::forge('sc/layoutfull');
        $status = 'success';
        $content = View::forge('sc/login');
        $content->set_safe('status', $status);
        $layout->content = Response::forge($content);
        return $layout;
    }
//		CHECKER				//
        public function action_checkLogin()
        {
        $layout = View::forge('sc/layoutfull');
        $username = $_POST['username'];
        $password = $_POST['password'];
        $logins = Login::getLogins();
        foreach($logins as $login){
        
            if($login['username'] == $username && $login['password'] == md5($password)){
                if($login['id'] == 1){
                    Session::create();
                    Session::set('username', $username);
                    Response::redirect('index.php/sc/admin');
                }
                else{
                     Session::create();
                        Session::set('username', $username);
                        Response::redirect('index.php/sc/index');
                }
            }
        }
			$content = View::forge('sc/login');
            $content->set_safe('status','error');
			$layout->content = Response::forge($content);
                        return $layout;
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
