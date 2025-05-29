<?php

namespace App\Accounts;

use App\Enums\Status;

class Transaction
{
    /**
     * The transaction count.
     */
    private static int $count = 0;

    /**
     * The transaction ID.
     */
    private static int $id = 0;

    /**
     * The transaction object ID.
     */
    private int $transactionId;

    /**
     * The transaction status.
     */
    private Status $status;

    /**
     * The customer associated with the transaction.
     */
    private ?Customer $customer;

    /**
     * Create a new class instance.
     */
    public function __construct(
        private float $amount,
        private string $description
    ) {
        $this->customer = new Customer();
        $this->status = Status::PENDING;
        self::$count++;
        self::$id++;
        $this->transactionId = self::$id;
    }

    /**
     * Add tax to the transaction.
     *
     * @param  float  $rate
     * @return $this
     */
    public function addTax(float $rate): self
    {
        $this->amount += $this->amount * $rate / 100;

        return $this;
    }

    /**
     * Apply discount to the transaction.
     *
     * @param  float  $rate
     * @return $this
     */
    public function applyDiscount(float $rate): self
    {
        $this->amount -= $this->amount * $rate / 100;

        return $this;
    }

    /**
     * Get the transaction amount.
     *
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * Get the transaction description.
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Get the customer associated with the transaction.
     *
     * @return ?Customer
     */
    public function getCustomer(): ?Customer
    {
        return $this->customer;
    }

    /**
     * Get the transaction status.
     *
     * @return Status
     */
    public function getStatus(): Status
    {
        return $this->status;
    }

    /**
     * Set the transaction status.
     *
     * @param  Status::PAID|Status::PENDING|Status::DECLINED $status
     * @return $this
     */
    public function setStatus(Status $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Getter for the transaction object ID.
     *
     * @return int
     */
    public function getTransactionId(): int
    {
        return $this->transactionId;
    }

    /**
     * Static getter for the transaction count.
     *
     * @return int
     */
    public static function getCount(): int
    {
        return self::$count;
    }

    /**
     * Demo only.
     *
     * We cannot reliably control exactly when __destruct() is called — only
     * that it will happen before the script ends or when the object is no
     * longer referenced.
     *
     * In web applications, all objects are destroyed at the end of the request
     * anyway, so destructors are rarely crucial unless dealing with
     * long-running CLI scripts or resource-heavy operations.
     */
    public function __destruct()
    {
        // Demo-only: No-op destructor
        // In real applications, use destructors only for resource cleanup
    }
}
