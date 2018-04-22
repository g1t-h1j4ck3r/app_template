<?php
/***
*
*/
final class Controller{

  private $path = './inc/',
          $cmd = '';

  public function __contstruct(){

    if (isset($_REQUEST['cmd']) && ($_REQUEST['cmd'] != "")) {
        $this->$cmd = $_REQUEST['cmd'];
    }
  }

  /*** handle the requests */
  public function handleCmd(){
    require_once($this->path.'View.php');
    $view = new View();

    if ($this->cmd != "") {
      if ($this->cmd == 'login') {
        $view->showStartpage();
      }
      else if($this->cmd == 'hole'){
        require_once($this->path.'Model.php');
        $model = new Model();
        $data = $model->getData();

        $view->showSingleEntity($data);
      }
    }
    else {
      $this->unsetSession($view);
    }

    unset($view);
    return;
  }

  /*** deletes all session data, start a new one an redirects to the login-page */
  private function unsetSession($view){
    session_unset();
    session_destroy();
    session_start();

    $view->showLogin();
    return;
  }
}
?>
