<?php
// @api
// @author [name] [<email address>]
// @copyright <description>
// @deprecated [<"Semantic Version">][:<"Semantic Version">] [<description>]
// @example [URI] [<description>]
// {@example [URI] [:<start>..<end>]}
// @inheritDoc
// @internal
// {@internal [description]}}
// @license [<SPDX identifier>|URI] [name]
// @method [return "Type"] [name](["Type"] [parameter], [...]) [description]
// @package [level 1]\[level 2]\[etc.]
// @param ["Type"] [name] [<description>]
// @property ["Type"] [name] [<description>]
// @return <"Type"> [description]
// @see [URI | "FQSEN"] [<description>]
// @since [<"Semantic Version">] [<description>]
// @throws ["Type"] [<description>]
// @todo [description]
// @uses [file | "FQSEN"] [<description>]
// @var ["Type"] [element_name] [<description>]
// @version ["Semantic Version"] [<description>]
// @filesource - Includes current file in phpDocumentor parsing results
// @link [URI] [<description>] - Link tag helps to define relation or link between structural elements.

/**
 * Adds two numbers together.
 *
 * @param Int $a First parameter to add
 * @param Int $b Second parameter to add
 * @return Int
 */
function sum($a, $b)
{
    return (int) $a + $b;
}

/**
 * Don't run me! I will always raise an exception.
 *
 * @throws Exception Always
 */
function dangerousCode()
{
    throw new Exception('Ouch, that was dangerous!');
}

/**
 * Old structures should be deprecated so people know not to use them.
 *
 * @deprecated
 */
function oldCode()
{
    mysql_connect(/* ... */);
}

//Describing a variable


class Example {
    /** @var string This is something that stays the same */
    const UNCHANGING = "Untouchable";

    /** @var string $some_str This is some string */
    public $some_str;

    /**
     * @var array $stuff    This is a collection of stuff
     * @var array $nonsense These are nonsense
     */
    private $stuff, $nonsense;

     
}
//Describing parameters
 /**
 * Parameters
 * 
 * @param  int    $int
 * @param  string $string
 * @param  array  $array
 * @param  bool   $bool
 */
function demo_param($int, $string, $array, $bool)
{
}

 /**
 * Parameters - Optional / Defaults
 *
 * @param  int    $int
 * @param  string $string
 * @param  array  $array
 * @param  bool   $bool
 */
function demo_param_optional($int = 5, $string = 'foo', $array = [], $bool = false)
{
}

/**
 * Parameters - Arrays
 * 
 * @param array          $mixed
 * @param int[]          $integers
 * @param string[]       $strings
 * @param bool[]         $bools
 * @param string[]|int[] $strings_or_integers
 */
function demo_param_arrays($mixed,$integers, $strings, $bools, $strings_or_integers)
{
}

/**
 * Parameters - Complex
 * @param array $config 
 * <pre>
 * $params = [
 *         'hostname'     => (string) DB hostname. Required.
 *         'database'     => (string) DB name. Required.
 *         'username'     => (string) DB username. Required.
 * ]
 * </pre>
 */
function demo_param_complex($config)
{
}