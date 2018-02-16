<?php

namespace PhangoApp\Welcome;

use PhangoApp\PhaRouter\Controller;
use PhangoApp\PhaView\View;

/*
* @PhangoController /welcome PhangoApp\Welcome\Home
*/

function Home()
{
    
    echo View::load_view(array('Hello world', '<p>This is an example of the power of Phango!!</p><p>PHP version: ' . substr(phpversion(), 0, 1)), 'welcome/home');

}

//A example with symlink

//The types are string, integer, float. 

/*
* @PhangoController /welcome/([0-9]+)/([a-zA-Z0-9_\-]+) PhangoApp\Welcome\Page
*/
	
function Page($number, $str)
{
		
    echo View::load_view(array('Example', '<p>First element: '.$number.'</p><p>Second element: '.$str.'</p>'), 'welcome/home');
		
}

?>
