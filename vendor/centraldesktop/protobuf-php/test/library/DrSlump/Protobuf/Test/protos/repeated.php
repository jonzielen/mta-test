<?php 
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@// Source: repeated.proto 
//   Date: 2013-12-14 03:22:54 


namespace DrSlump\Protobuf\Test\protos {

         
    class Repeated extends \DrSlump\Protobuf\Message {
                                                             
        /** @var \DrSlump\Protobuf\Descriptor */
        protected static $__descriptor;
        /** @var \Closure[] */
        protected static $__extensions = array();

        public static function descriptor()
        {
            $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'DrSlump.Protobuf.Test.protos.Repeated');

             
            // repeated string string = 1 
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 1;
            $f->name   = "string";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_REPEATED;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_STRING;

            $descriptor->addField($f);
             
            // repeated int32 int = 2 
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 2;
            $f->name   = "int";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_REPEATED;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_INT32;

            $descriptor->addField($f);
             
            // repeated message nested = 3 
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 3;
            $f->name   = "nested";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_REPEATED;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_MESSAGE;
             
            $f->reference = '\DrSlump\Protobuf\Test\protos\Repeated\Nested';

            $descriptor->addField($f);
            
            foreach (self::$__extensions as $cb) {
                $descriptor->addField($cb(), true);
            }

            return $descriptor;
        }


                
        /**
         * Check if "string" has a value
         *
         * @return boolean
         */
        public function hasString()
        {
            return isset($this->string);
        }

        /**
         * Clear "string" value
         */
        public function clearString()
        {
            unset($this->string);
        }

        
        /**
         * Get "string" value
         *
         * @return string[]
         */
        public function getString($idx = null)
        {
            if (NULL !== $idx) {
                return $this->string[$idx];
            }

            return $this->string;
        }

        /**
         * Get "string" list of values
         *
         * @return string[]
         */
        public function getStringList()
        {
            return $this->getString();
        }

        /**
         * Set "string" value
         *
         * @param string[] $value
         */
        public function setString($value)
        {
            return $this->string = $value;
        }

        /**
         * Add a new element to "string"
         *
         * @param string $value
         */
        public function addString($value)
        {
            $this->string[] = $value;
        }

        
                
        /**
         * Check if "int" has a value
         *
         * @return boolean
         */
        public function hasInt()
        {
            return isset($this->int);
        }

        /**
         * Clear "int" value
         */
        public function clearInt()
        {
            unset($this->int);
        }

        
        /**
         * Get "int" value
         *
         * @return int[]
         */
        public function getInt($idx = null)
        {
            if (NULL !== $idx) {
                return $this->int[$idx];
            }

            return $this->int;
        }

        /**
         * Get "int" list of values
         *
         * @return int[]
         */
        public function getIntList()
        {
            return $this->getInt();
        }

        /**
         * Set "int" value
         *
         * @param int[] $value
         */
        public function setInt($value)
        {
            return $this->int = $value;
        }

        /**
         * Add a new element to "int"
         *
         * @param int $value
         */
        public function addInt($value)
        {
            $this->int[] = $value;
        }

        
                
        /**
         * Check if "nested" has a value
         *
         * @return boolean
         */
        public function hasNested()
        {
            return isset($this->nested);
        }

        /**
         * Clear "nested" value
         */
        public function clearNested()
        {
            unset($this->nested);
        }

        
        /**
         * Get "nested" value
         *
         * @return DrSlump\Protobuf\Test\protos\Repeated\Nested[]
         */
        public function getNested($idx = null)
        {
            if (NULL !== $idx) {
                return $this->nested[$idx];
            }

            return $this->nested;
        }

        /**
         * Get "nested" list of values
         *
         * @return DrSlump\Protobuf\Test\protos\Repeated\Nested[]
         */
        public function getNestedList()
        {
            return $this->getNested();
        }

        /**
         * Set "nested" value
         *
         * @param DrSlump\Protobuf\Test\protos\Repeated\Nested[] $value
         */
        public function setNested($value)
        {
            return $this->nested = $value;
        }

        /**
         * Add a new element to "nested"
         *
         * @param DrSlump\Protobuf\Test\protos\Repeated\Nested $value
         */
        public function addNested($value)
        {
            $this->nested[] = $value;
        }
    }
}


namespace DrSlump\Protobuf\Test\protos\Repeated {

         
    class Nested extends \DrSlump\Protobuf\Message {
                             
        /** @var \DrSlump\Protobuf\Descriptor */
        protected static $__descriptor;
        /** @var \Closure[] */
        protected static $__extensions = array();

        public static function descriptor()
        {
            $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'DrSlump.Protobuf.Test.protos.Repeated.Nested');

             
            // optional int32 id = 1 
            $f = new \DrSlump\Protobuf\Field();
            $f->number = 1;
            $f->name   = "id";
            $f->rule   = \DrSlump\Protobuf\Protobuf::RULE_OPTIONAL;
            $f->type   = \DrSlump\Protobuf\Protobuf::TYPE_INT32;

            $descriptor->addField($f);
            
            foreach (self::$__extensions as $cb) {
                $descriptor->addField($cb(), true);
            }

            return $descriptor;
        }


                
        /**
         * Check if "id" has a value
         *
         * @return boolean
         */
        public function hasId()
        {
            return isset($this->id);
        }

        /**
         * Clear "id" value
         */
        public function clearId()
        {
            unset($this->id);
        }

        
        /**
         * Get "id" value
         *
         * @return int 
         */
        public function getId()
        {
            return $this->id;
        }

        /**
         * Set "id" value
         *
         * @param int $value
         */
        public function setId($value)
        {
            return $this->id = $value;
        }
    }
}


