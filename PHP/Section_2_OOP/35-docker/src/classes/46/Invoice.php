<?php

namespace folderName;

class Invoice
{
  /**
   * __get and __set
   */

  protected array $data = [];

/*  public function __get(string $name)
  {
      if (array_key_exists($name, $this->data)) {
          return $this->data[$name];
      }

      return null;
  }

  public function __set(string $name, $value): void
  {
      $this->data[$name] = $value;
  }*/

  /**
   * __isset and __unset
   */

  public function __isset(string $name): bool
  {
      var_dump('isset');
      return array_key_exists($name, $this->data);
  }

  public function __unset(string $name): void
  {
      var_dump('unset');
      unset($this->data[$name]);
  }

}