<?php
namespace Ds;

/**
 * Collection Interface
 *
 * @package Ds
 */
interface Collection extends \Traversable, \Countable, \JsonSerializable
{
    /**
     * Clears all elements in the Collection.
     */
    function clear();

    /**
     * Returns the size of the collection.
     *
     * @return int
     */
    function count(): int;

    /**
     * Returns whether the collection is empty.
     *
     * This should be equivalent to a count of zero, but is not required.
     * Implementations should define what empty means in their own context.
     *
     * @return bool
     */
    function isEmpty(): bool;

    /**
     * Returns an array representation of the collection.
     *
     * The format of the returned array is implementation-dependent.
     * Some implementations may throw an exception if an array representation
     * could not be created.
     *
     * @return array
     */
    function toArray(): array;
}
