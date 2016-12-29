<?php

namespace Interop\Session\Writer;

interface SessionWriterInterface {
  /***
  ** This function should save $toSave into the $_SESSION without removing value not contained into $toSave. 
  * IT must ensure the saving, that mean the session should be writed via this function
  * This function must let the session at the previous state
  **/
  public function save(iterable $toSave): void;
}
