<?php


namespace PhrestDoc;

use PhrestAPI\PhrestAPI;
use PhrestAPI\Structure\Structure;

class PhrestDoc
{
  public $structure;

  public function __construct(PhrestAPI $api)
  {
    $this->structure = new Structure($api);
  }
}
