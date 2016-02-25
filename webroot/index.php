<?PHP
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', dirname(dirname(__FILE__)));
define('VIEWS_PATCH', ROOT.DS.'views');

require_once(ROOT.DS.'lib'.DS.'init.php');

$router = new Router($_SERVER['REQUEST_URI']);

App::run($_SERVER['REQUEST_URI']);

$test = App::$db->query('SELECT * FROM pages');
echo '<pre>';
print_r($test);
