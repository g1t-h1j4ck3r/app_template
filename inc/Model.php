<?php
/**
 *
 */
final class Model
{
  private const elevatedRights = ['Admin', 'Mandant'];

  public function __construct(){
    # code...
  }

  public function getData() {
    $res = FALSE;

    //only if in array
    if (isset($_SESSION['userRole']) && in_array($_SESSION['userRole'], self::elevatedRights)){
      $res = ['id'=>1,
              'name' => 'max',
              'email' => 'muster@man.de'];
    }

    return $res;
  }
}
?>
