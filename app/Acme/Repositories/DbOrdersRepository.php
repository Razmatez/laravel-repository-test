<?php namespace App\Acme\Repositories;

use App\Orders;
/**
 *
 */
class DbOrdersRepository
{
  public function getAll()
  {
    return Orders::all();
  }

  public function getById($id){
    return Orders::find($id);
  }
}
