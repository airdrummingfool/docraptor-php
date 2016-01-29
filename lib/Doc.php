<?php
/**
 * Doc
 *
 * PHP version 5
 *
 * @category Class
 * @package  DocRaptor
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */
/**
 *  Copyright 2016 SmartBear Software
 *
 *  Licensed under the Apache License, Version 2.0 (the "License");
 *  you may not use this file except in compliance with the License.
 *  You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 *  Unless required by applicable law or agreed to in writing, software
 *  distributed under the License is distributed on an "AS IS" BASIS,
 *  WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *  See the License for the specific language governing permissions and
 *  limitations under the License.
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace DocRaptor;

use \ArrayAccess;
/**
 * Doc Class Doc Comment
 *
 * @category    Class
 * @description 
 * @package     DocRaptor
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Doc implements ArrayAccess
{
    /**
      * Array of property to type mappings. Used for (de)serialization 
      * @var string[]
      */
    static $swaggerTypes = array(
        'name' => 'string',
        'document_type' => 'string',
        'document_content' => 'string',
        'document_url' => 'string',
        'test' => 'bool',
        'strict' => 'string',
        'ignore_resource_errors' => 'bool',
        'tag' => 'string',
        'help' => 'bool',
        'javascript' => 'bool',
        'referrer' => 'string',
        'callback_url' => 'string',
        'prince_options' => '\DocRaptor\PrinceOptions'
    );
  
    /** 
      * Array of attributes where the key is the local name, and the value is the original name
      * @var string[] 
      */
    static $attributeMap = array(
        'name' => 'name',
        'document_type' => 'document_type',
        'document_content' => 'document_content',
        'document_url' => 'document_url',
        'test' => 'test',
        'strict' => 'strict',
        'ignore_resource_errors' => 'ignore_resource_errors',
        'tag' => 'tag',
        'help' => 'help',
        'javascript' => 'javascript',
        'referrer' => 'referrer',
        'callback_url' => 'callback_url',
        'prince_options' => 'prince_options'
    );
  
    /**
      * Array of attributes to setter functions (for deserialization of responses)
      * @var string[]
      */
    static $setters = array(
        'name' => 'setName',
        'document_type' => 'setDocumentType',
        'document_content' => 'setDocumentContent',
        'document_url' => 'setDocumentUrl',
        'test' => 'setTest',
        'strict' => 'setStrict',
        'ignore_resource_errors' => 'setIgnoreResourceErrors',
        'tag' => 'setTag',
        'help' => 'setHelp',
        'javascript' => 'setJavascript',
        'referrer' => 'setReferrer',
        'callback_url' => 'setCallbackUrl',
        'prince_options' => 'setPrinceOptions'
    );
  
    /**
      * Array of attributes to getter functions (for serialization of requests)
      * @var string[]
      */
    static $getters = array(
        'name' => 'getName',
        'document_type' => 'getDocumentType',
        'document_content' => 'getDocumentContent',
        'document_url' => 'getDocumentUrl',
        'test' => 'getTest',
        'strict' => 'getStrict',
        'ignore_resource_errors' => 'getIgnoreResourceErrors',
        'tag' => 'getTag',
        'help' => 'getHelp',
        'javascript' => 'getJavascript',
        'referrer' => 'getReferrer',
        'callback_url' => 'getCallbackUrl',
        'prince_options' => 'getPrinceOptions'
    );
  
    
    /**
      * $name A name for identifying your document.
      * @var string
      */
    protected $name;
    
    /**
      * $document_type The type of document being created.
      * @var string
      */
    protected $document_type;
    
    /**
      * $document_content The HTML data to be transformed into a document. You must supply content using document_content or document_url.
      * @var string
      */
    protected $document_content;
    
    /**
      * $document_url The URL to fetch the HTML data to be transformed into a document. You must supply content using document_content or document_url.
      * @var string
      */
    protected $document_url;
    
    /**
      * $test Enable test mode for this document. Test documents are not charged for but include a watermark.
      * @var bool
      */
    protected $test = true;
    
    /**
      * $strict Force strict HTML validation.
      * @var string
      */
    protected $strict = 'none';
    
    /**
      * $ignore_resource_errors Failed loading of images/javascripts/stylesheets/etc. will not cause the rendering to stop.
      * @var bool
      */
    protected $ignore_resource_errors = true;
    
    /**
      * $tag A field for storing a small amount of metadata with this document.
      * @var string
      */
    protected $tag;
    
    /**
      * $help Request support help with this request if it succeeds.
      * @var bool
      */
    protected $help = false;
    
    /**
      * $javascript Enable DocRaptor JavaScript parsing. PrinceXML JavaScript parsing is also available elsewhere.
      * @var bool
      */
    protected $javascript = false;
    
    /**
      * $referrer Set HTTP referrer when generating this document.
      * @var string
      */
    protected $referrer;
    
    /**
      * $callback_url A URL that will receive a POST request after successfully completing an asynchronous document. The POST data will include download_url and download_id similar to status api responses. WARNING: this only works on asynchronous documents.
      * @var string
      */
    protected $callback_url;
    
    /**
      * $prince_options 
      * @var \DocRaptor\PrinceOptions
      */
    protected $prince_options;
    

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        if ($data != null) {
            $this->name = $data["name"];
            $this->document_type = $data["document_type"];
            $this->document_content = $data["document_content"];
            $this->document_url = $data["document_url"];
            $this->test = $data["test"];
            $this->strict = $data["strict"];
            $this->ignore_resource_errors = $data["ignore_resource_errors"];
            $this->tag = $data["tag"];
            $this->help = $data["help"];
            $this->javascript = $data["javascript"];
            $this->referrer = $data["referrer"];
            $this->callback_url = $data["callback_url"];
            $this->prince_options = $data["prince_options"];
        }
    }
    
    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
  
    /**
     * Sets name
     * @param string $name A name for identifying your document.
     * @return $this
     */
    public function setName($name)
    {
        
        $this->name = $name;
        return $this;
    }
    
    /**
     * Gets document_type
     * @return string
     */
    public function getDocumentType()
    {
        return $this->document_type;
    }
  
    /**
     * Sets document_type
     * @param string $document_type The type of document being created.
     * @return $this
     */
    public function setDocumentType($document_type)
    {
        $allowed_values = array("pdf", "xls", "xlsx");
        if (!in_array($document_type, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'document_type', must be one of 'pdf', 'xls', 'xlsx'");
        }
        $this->document_type = $document_type;
        return $this;
    }
    
    /**
     * Gets document_content
     * @return string
     */
    public function getDocumentContent()
    {
        return $this->document_content;
    }
  
    /**
     * Sets document_content
     * @param string $document_content The HTML data to be transformed into a document. You must supply content using document_content or document_url.
     * @return $this
     */
    public function setDocumentContent($document_content)
    {
        
        $this->document_content = $document_content;
        return $this;
    }
    
    /**
     * Gets document_url
     * @return string
     */
    public function getDocumentUrl()
    {
        return $this->document_url;
    }
  
    /**
     * Sets document_url
     * @param string $document_url The URL to fetch the HTML data to be transformed into a document. You must supply content using document_content or document_url.
     * @return $this
     */
    public function setDocumentUrl($document_url)
    {
        
        $this->document_url = $document_url;
        return $this;
    }
    
    /**
     * Gets test
     * @return bool
     */
    public function getTest()
    {
        return $this->test;
    }
  
    /**
     * Sets test
     * @param bool $test Enable test mode for this document. Test documents are not charged for but include a watermark.
     * @return $this
     */
    public function setTest($test)
    {
        
        $this->test = $test;
        return $this;
    }
    
    /**
     * Gets strict
     * @return string
     */
    public function getStrict()
    {
        return $this->strict;
    }
  
    /**
     * Sets strict
     * @param string $strict Force strict HTML validation.
     * @return $this
     */
    public function setStrict($strict)
    {
        $allowed_values = array("none");
        if (!in_array($strict, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'strict', must be one of 'none'");
        }
        $this->strict = $strict;
        return $this;
    }
    
    /**
     * Gets ignore_resource_errors
     * @return bool
     */
    public function getIgnoreResourceErrors()
    {
        return $this->ignore_resource_errors;
    }
  
    /**
     * Sets ignore_resource_errors
     * @param bool $ignore_resource_errors Failed loading of images/javascripts/stylesheets/etc. will not cause the rendering to stop.
     * @return $this
     */
    public function setIgnoreResourceErrors($ignore_resource_errors)
    {
        
        $this->ignore_resource_errors = $ignore_resource_errors;
        return $this;
    }
    
    /**
     * Gets tag
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }
  
    /**
     * Sets tag
     * @param string $tag A field for storing a small amount of metadata with this document.
     * @return $this
     */
    public function setTag($tag)
    {
        
        $this->tag = $tag;
        return $this;
    }
    
    /**
     * Gets help
     * @return bool
     */
    public function getHelp()
    {
        return $this->help;
    }
  
    /**
     * Sets help
     * @param bool $help Request support help with this request if it succeeds.
     * @return $this
     */
    public function setHelp($help)
    {
        
        $this->help = $help;
        return $this;
    }
    
    /**
     * Gets javascript
     * @return bool
     */
    public function getJavascript()
    {
        return $this->javascript;
    }
  
    /**
     * Sets javascript
     * @param bool $javascript Enable DocRaptor JavaScript parsing. PrinceXML JavaScript parsing is also available elsewhere.
     * @return $this
     */
    public function setJavascript($javascript)
    {
        
        $this->javascript = $javascript;
        return $this;
    }
    
    /**
     * Gets referrer
     * @return string
     */
    public function getReferrer()
    {
        return $this->referrer;
    }
  
    /**
     * Sets referrer
     * @param string $referrer Set HTTP referrer when generating this document.
     * @return $this
     */
    public function setReferrer($referrer)
    {
        
        $this->referrer = $referrer;
        return $this;
    }
    
    /**
     * Gets callback_url
     * @return string
     */
    public function getCallbackUrl()
    {
        return $this->callback_url;
    }
  
    /**
     * Sets callback_url
     * @param string $callback_url A URL that will receive a POST request after successfully completing an asynchronous document. The POST data will include download_url and download_id similar to status api responses. WARNING: this only works on asynchronous documents.
     * @return $this
     */
    public function setCallbackUrl($callback_url)
    {
        
        $this->callback_url = $callback_url;
        return $this;
    }
    
    /**
     * Gets prince_options
     * @return \DocRaptor\PrinceOptions
     */
    public function getPrinceOptions()
    {
        return $this->prince_options;
    }
  
    /**
     * Sets prince_options
     * @param \DocRaptor\PrinceOptions $prince_options 
     * @return $this
     */
    public function setPrinceOptions($prince_options)
    {
        
        $this->prince_options = $prince_options;
        return $this;
    }
    
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset 
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->$offset);
    }
  
    /**
     * Gets offset.
     * @param  integer $offset Offset 
     * @return mixed 
     */
    public function offsetGet($offset)
    {
        return $this->$offset;
    }
  
    /**
     * Sets value based on offset.
     * @param  integer $offset Offset 
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        $this->$offset = $value;
    }
  
    /**
     * Unsets offset.
     * @param  integer $offset Offset 
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->$offset);
    }
  
    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) {
            return json_encode(\DocRaptor\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        } else {
            return json_encode(\DocRaptor\ObjectSerializer::sanitizeForSerialization($this));
        }
    }
}
