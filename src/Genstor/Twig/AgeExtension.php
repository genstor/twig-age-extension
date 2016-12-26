<?php
namespace Genstor\Twig;
use \DateTime;
use \Twig_Extension;
use \Twig_SimpleFilter;

/**
 * Class AgeExtension
 * @package Genstor\Twig
 */
class AgeExtension extends Twig_Extension
{
    /**
     * @param DateTime|string $dateTime
     * @return int
     */
    public function age($dateTime)
    {
        if (is_object($dateTime) && get_class($dateTime) === 'DateTime') {
            return $dateTime->diff(new DateTime())->format('%y');
        } else {
            return (new DateTime())->setTimestamp(strtotime($dateTime))->diff(new DateTime())->format('%Y');
        }
    }
    /**
     * @return array
     */
    public function getFilters()
    {
        return [
            new Twig_SimpleFilter('age', [$this, 'age']),
        ];
    }
    /**
     * @return string
     */
    public function getName()
    {
        return 'genstor\age';
    }
}