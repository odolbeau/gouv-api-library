<?php

/*
 * This file is part of the gouv-api-library package.
 *
 * (c) 2020 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Library\GeoAPI\Model\Attribute;

/**
 * Array fields trait.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Library\GeoAPI\Model\Attribute
 */
trait ArrayFieldsTrait {

    /**
     * Fields
     *
     * @var string[]
     */
    private $fields;

    /**
     * Add a field.
     *
     * @param string $field The field.
     * @return self Returns tis instance.
     */
    public function addField(string $field): self {
        $this->fields[] = $field;
        return $this;
    }

    /**
     * Get the fields.
     *
     * @return string[] Returns the fields.
     */
    public function getFields(): array {
        return $this->fields;
    }

    /**
     * Set the fields.
     *
     * @param string[] $fields The fields.
     * @return self Returns tis instance.
     */
    protected function setFields(array $fields): self {
        $this->fields = $fields;
        return $this;
    }
}