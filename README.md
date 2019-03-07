# php-mvc-framework
We developed a framework

exxxxx

page name: "index"

Routing -> APP/config/routing.php  

routing : App::get('/index', false)

modules : new module  create in  app/modules/modulename  any folder name 

My choice folder name is  "home" 

Create  home folder in "controller" folder  

Create home folder in  "model" folder 

Create  home folder in  "view" folder 

Create  homeController.php file in controller folder.(Traffic between Model and View)

Create  homeModel.php file in model folder.(DB transactions)

Create  homeView.php file in view folder


Controller in :

class homeController extends Controller
{

    public function indexAction()
    {
        $data = array();
        //$Data is a array post to view page.

        $this->RenderLayout("main", "home", "index", $data);
    }

}


Model in :
/this sec  for database transactions

class homeModel extends Model {

}


Last...
indexView  this is your view page

