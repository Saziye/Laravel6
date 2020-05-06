<?php

namespace App;

class Example
{
    /*
   protected $foo;

   public function __construct($foo) 
   {
       $this->foo = $foo;
   }
*/
    /*
    protected $collaborator;
    protected $foo;
    public function __construct(Collaborator $collaborator, $foo)
    {
        $this->collaborator = $collaborator;
        $this->foo = $foo;
    }
*/
    public function __construct($apikey)
    {
        $this->apikey = $apikey;
    }
    public function handle()
    {
        die('its works handle');
    }
}
