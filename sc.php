<?php
/**
 * Demo for CT310
 */
use Model\SC;
/**
 * The Demo Controller.
 *
 * A basic MVC example using the classic view/addEdit/delete pattern
 */
class Controller_SC extends Controller
{
	/**
	 * Shows a list of all demo items
	 */
	public function action_index()
	{
		$layout = View::forge('sc/layoutfull');

		$content = View::forge('sc/index');

		$scs = SC::getAll();

		$content->set_safe('scs', $scs);

		$layout->content = Response::forge($content);

		return $layout;
	}

	//View a specific demo item
	public function action_view($id)
	{
		$layout = View::forge('sc/layoutfull');

		$content = View::forge('sc/view');

		$sc = new SC($id);

		$content->set_safe('sc', $sc);

		$layout->content = Response::forge($content);

		return $layout;
	}

	//
	public function get_addEdit($id = null)
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
	}

	public function action_404()
	{
		return Response::forge(Presenter::forge('welcome/404'), 404);
	}
}
