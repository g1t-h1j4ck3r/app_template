<?php
/***
*
*/
final class View {

  private $entity = '',
          $tmpl = [],
          $path = './inc/', //da in frontcontroller -> eigentlich nicht nochmal notwendig
          $tmplPath = 'tmpl/',
          $formPostAdr = '',
          $tmplExtension = '.tmpl.php';

  public function __construct()
  {
    $this->tmplPath = $this->path . $this->tmplPath;
    $this->formPostAdr = $_SERVER['SERVER_NAME'].':'.$_SERVER['SERVER_PORT'].$_SERVER['PATH_INFO'];

    //Entity Templates
    $this->tmpl['OneOfAnEntity'] = 'oneofanentity';
    $this->tmpl['AllOfAnEntity'] = $this->tmpl['OneOfAnEntity'];
    $this->tmpl['EditOneEntity'] = $this->tmpl['OneOfAnEntity'];

    //specific Templates
    $this->tmpl['Login'] = 'login';
    $this->tmpl['Startpage'] = 'startpage';

    //add file-extensions to template names
    foreach ($this->tmpl as $key => $val)
      $this->tmpl[$key] = $this->tmplPath .$val. $this->tmplExtension;
  }

  public function showHeader(){
    //provide postAdr for forms
    $postAdr = $this->formPostAdr;

    //show the header

    //TODO
  }

  public function showLogin(){

    //include template and write generated output
    require_once($this->tmpl['Login']);
  }

  public function showSingleEntity($data)
  {
    //create the content tab
    $output = '';
    foreach ($data as $key => $val)
      $output .= '<th>'.$key.'</th><td>'.$val.'</td>';

    //include template and write generated output
    require_once($this->tmpl['OneOfAnEntity']);
  }

  public function showAllOfEntity($data)
  {
    //create thre content tab
    $output = '';
    foreach ($data as $key => $val)
      $output .= '<th>'.$key.'</th><td>'.$val.'</td>';

    //include template and write generated output
    require_once($this>tmpl['AllOfAnEntity']);
  }

  public function showEditSingleEntity($data)
  {
    //create thre content tab
    $output = '';
    foreach ($data as $key => $val)
      $output .= '<th>'.$key.'</th><td>'.$val.'</td>';

    //include template and write generated output
    require_once($this->tmpl['EditOneEntity']);
  }

  public function showStartpage()
  {
    //include template
    require_once($this->tmpl['Startpage']);
  }
}
?>
