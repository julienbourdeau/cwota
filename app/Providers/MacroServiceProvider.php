<?php namespace Cwota\Providers;

//use Illuminate\Support\ServiceProvider;
use Illuminate\Html\HtmlServiceProvider;
use Illuminate\Html\HtmlFacade as HTML;

class MacroServiceProvider extends HtmlServiceProvider {

	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function register()
	{
        // Macros must be loaded after the HTMLServiceProvider's
        // register method is called. Otherwise, csrf tokens
        // will not be generated
        parent::register();

        // Load macros
        require base_path() . '/resources/helpers/macros.php';
	}

}
