<?php
class Namibia extends Theme
{
	public function add_template_vars()
	{
		if ( !$this->template_engine->assigned( 'pages' ) ) {
			$this->assign( 'pages', Posts::get( 'page_list' ) );
		}
	}
}
?>