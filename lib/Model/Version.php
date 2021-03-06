<?php
/**
 * Version
 *
 * PHP version 5
 *
 * @category Class
 * @package  Autodesk\Forge\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Forge SDK
 *
 * The Forge Platform contains an expanding collection of web service components that can be used with Autodesk cloud-based products or your own technologies. Take advantage of Autodesk’s expertise in design and engineering.
 *
 * OpenAPI spec version: 0.1.0
 * Contact: forge.help@autodesk.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Autodesk\Forge\Client\Model;

use \ArrayAccess;

/**
 * Version Class Doc Comment
 *
 * @category    Class
 * @package     Autodesk\Forge\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Version implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
     * The original name of the model.
     * @var string
     */
    protected static $swaggerModelName = 'version';

    /**
     * Array of property to type mappings. Used for (de)serialization
     * @var string[]
     */
    protected static $swaggerTypes = [
        'jsonapi' => '\Autodesk\Forge\Client\Model\JsonApiVersionJsonapi',
        'data' => '\Autodesk\Forge\Client\Model\JsonApiResource',
        'included' => '\Autodesk\Forge\Client\Model\JsonApiResource[]',
        'links' => '\Autodesk\Forge\Client\Model\JsonApiLinks',
        'id' => 'string',
        'type' => 'string',
        'attributes' => '\Autodesk\Forge\Client\Model\VersionAttributes',
        'meta' => '\Autodesk\Forge\Client\Model\JsonApiMeta',
        'relationships' => '\Autodesk\Forge\Client\Model\VersionRelationships',
    ];

    /**
     * @return \string[]
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'jsonapi' => 'jsonapi',
        'data' => 'data',
        'included' => 'included',
        'links' => 'links',
        'id' => 'id',
        'type' => 'type',
        'attributes' => 'attributes',
        'meta' => 'meta',
        'relationships' => 'relationships',
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'jsonapi' => 'setJsonapi',
        'data' => 'setData',
        'included' => 'setIncluded',
        'links' => 'setLinks',
        'id' => 'setId',
        'type' => 'setType',
        'attributes' => 'setAttributes',
        'meta' => 'setMeta',
        'relationships' => 'setRelationships',
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'jsonapi' => 'getJsonapi',
        'data' => 'getData',
        'included' => 'getIncluded',
        'links' => 'getLinks',
        'id' => 'getId',
        'type' => 'getType',
        'attributes' => 'getAttributes',
        'meta' => 'getMeta',
        'relationships' => 'getRelationships',
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const TYPE_VERSIONS = 'versions';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_VERSIONS,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['jsonapi'] = isset($data['jsonapi']) ? $data['jsonapi'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['included'] = isset($data['included']) ? $data['included'] : null;
        $this->container['links'] = isset($data['links']) ? $data['links'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['attributes'] = isset($data['attributes']) ? $data['attributes'] : null;
        $this->container['meta'] = isset($data['meta']) ? $data['meta'] : null;
        $this->container['relationships'] = isset($data['relationships']) ? $data['relationships'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['data'] === null) {
            $invalid_properties[] = "'data' can't be null";
        }
        if ($this->container['links'] === null) {
            $invalid_properties[] = "'links' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalid_properties[] = "'id' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalid_properties[] = "'type' can't be null";
        }
        $allowed_values = ["versions"];
        if (!in_array($this->container['type'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'type', must be one of 'versions'.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['data'] === null) {
            return false;
        }
        if ($this->container['links'] === null) {
            return false;
        }
        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['type'] === null) {
            return false;
        }
        $allowed_values = ["versions"];
        if (!in_array($this->container['type'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets jsonapi
     * @return \Autodesk\Forge\Client\Model\JsonApiVersionJsonapi
     */
    public function getJsonapi()
    {
        return $this->container['jsonapi'];
    }

    /**
     * Sets jsonapi
     * @param \Autodesk\Forge\Client\Model\JsonApiVersionJsonapi $jsonapi
     * @return $this
     */
    public function setJsonapi($jsonapi)
    {
        $this->container['jsonapi'] = $jsonapi;

        return $this;
    }

    /**
     * Gets data
     * @return \Autodesk\Forge\Client\Model\JsonApiResource
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     * @param \Autodesk\Forge\Client\Model\JsonApiResource $data
     * @return $this
     */
    public function setData($data)
    {
        $this->container['data'] = $data;

        return $this;
    }

    /**
     * Gets included
     * @return \Autodesk\Forge\Client\Model\JsonApiResource[]
     */
    public function getIncluded()
    {
        return $this->container['included'];
    }

    /**
     * Sets included
     * @param \Autodesk\Forge\Client\Model\JsonApiResource[] $included
     * @return $this
     */
    public function setIncluded($included)
    {
        $this->container['included'] = $included;

        return $this;
    }

    /**
     * Gets links
     * @return \Autodesk\Forge\Client\Model\JsonApiLinks
     */
    public function getLinks()
    {
        return $this->container['links'];
    }

    /**
     * Sets links
     * @param \Autodesk\Forge\Client\Model\JsonApiLinks $links
     * @return $this
     */
    public function setLinks($links)
    {
        $this->container['links'] = $links;

        return $this;
    }

    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id resource id
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets type
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     * @param string $type
     * @return $this
     */
    public function setType($type)
    {
        $allowed_values = array('versions');
        if ((!in_array($type, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'type', must be one of 'versions'");
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets attributes
     * @return \Autodesk\Forge\Client\Model\VersionAttributes
     */
    public function getAttributes()
    {
        return $this->container['attributes'];
    }

    /**
     * Sets attributes
     * @param \Autodesk\Forge\Client\Model\VersionAttributes $attributes
     * @return $this
     */
    public function setAttributes($attributes)
    {
        $this->container['attributes'] = $attributes;

        return $this;
    }

    /**
     * Gets meta
     * @return \Autodesk\Forge\Client\Model\JsonApiMeta
     */
    public function getMeta()
    {
        return $this->container['meta'];
    }

    /**
     * Sets meta
     * @param \Autodesk\Forge\Client\Model\JsonApiMeta $meta
     * @return $this
     */
    public function setMeta($meta)
    {
        $this->container['meta'] = $meta;

        return $this;
    }

    /**
     * Gets relationships
     * @return \Autodesk\Forge\Client\Model\VersionRelationships
     */
    public function getRelationships()
    {
        return $this->container['relationships'];
    }

    /**
     * Sets relationships
     * @param \Autodesk\Forge\Client\Model\VersionRelationships $relationships
     * @return $this
     */
    public function setRelationships($relationships)
    {
        $this->container['relationships'] = $relationships;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Autodesk\Forge\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Autodesk\Forge\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


