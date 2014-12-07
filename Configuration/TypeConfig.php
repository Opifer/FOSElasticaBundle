<?php

/**
 * This file is part of the FOSElasticaBundle project.
 *
 * (c) Tim Nagel <tim@nagel.com.au>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\ElasticaBundle\Configuration;

class TypeConfig
{
    /**
     * @var array
     */
    private $config;

    /**
     * @var array
     */
    private $mapping;

    /**
     * @var string
     */
    private $name;

    public function __construct($name, array $mapping, array $config = array())
    {
        $this->config = $config;
        $this->mapping = $mapping;
        $this->name = $name;
    }

    /**
     * @return string|null
     */
    public function getIndexAnalyzer()
    {
        return $this->getConfig('index_analyzer');
    }

    /**
     * @return array
     */
    public function getMapping()
    {
        return $this->mapping;
    }

    /**
     * @return string|null
     */
    public function getModel()
    {
        return isset($this->config['persistence']['model']) ?
            $this->config['persistence']['model'] :
            null;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string|null
     */
    public function getSearchAnalyzer()
    {
        return $this->getConfig('search_analyzer');
    }

    /**
     * @param string $key
     */
    private function getConfig($key)
    {
        return isset($this->config[$key]) ?
            $this->config[$key] :
            null;
    }
}
