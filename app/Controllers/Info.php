<?php

namespace App\Controllers;

class Info extends BaseController
{
  public function index()
  {
    return phpinfo();
  }

  //--------------------------------------------------------------------

}