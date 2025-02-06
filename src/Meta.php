<?php

namespace Indielab\AutoScout24;

class Meta
{
    private $_data = null;

    public function __construct(array $data)
    {
        $this->_data = $data;
    }

    /**
     * @return string i.e. `logo`
     */
    public function getParameterName(): string
    {
        return $this->_data['ParameterName'];
    }

    /**
     * @return string i.e `Qualilogo`
     */
    public function getDescription(): string
    {
        return $this->_data['Description'];
    }

    /**
     * @return string i.e. `Integer`
     */
    public function getValueType(): string
    {
        return $this->_data['ValueType'];
    }

    /**
     * @return boolean i.e. `false`
     */
    public function getAcceptsCustomValues(): bool
    {
        return $this->_data['AcceptsCustomValues'] ?? false;
    }

    public function getCustomValuesBounds()
    {
        return $this->_data['CustomValuesBounds'];
    }

    public function getFilterParameterNames()
    {
        return $this->_data['FilterParameterNames'];
    }

    /**
     * @return array Optinal Data
     */
    public function getOptions(): array
    {
        return $this->_data['Options'] ?? [];
    }
}