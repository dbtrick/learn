<?php

declare(strict_types=1);

namespace folderName;

class Transaction
{

    /**
     * Encapsulation
     * - hides the internal state/information
     * -public (accessible outside of class)
     * -private (accessible inside of class)
     * -protective (same as private but extend to a child/subclasses)
     * - don't just add getters and setters unless needed
     *
     * Abstraction
     * - hides implementation
     *
     */

  private float $amount;

  public function __construct(float $amount)
  {
      $this->amount = $amount;
  }

  public function getAmount(): float
  {
      return $this->amount;
  }

  public function process()
  {
      echo 'Processing $' . $this->amount . ' transaction';

      $this->generateReceipt();

      $this->sendEmail();
  }

  private function generateReceipt()
  {

  }

  private function sendEmail()
  {

  }



}