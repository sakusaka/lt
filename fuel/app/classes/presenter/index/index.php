<?php

/**
 * The index hello presenter.
 *
 * @package  app
 * @extends  Presenter
 */
class Presenter_Index_Index extends Presenter
{
	/**
	 * Prepare the view data, keeping this in here helps clean up
	 * the controller.
	 *
	 * @return void
	 */
	public function view()
	{
		$this->name = $this->request()->param('name', 'Ogasawara');
	}
}
