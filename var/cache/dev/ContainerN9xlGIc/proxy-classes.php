<?php

namespace ContainerN9xlGIc;

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderfc200 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer504c2 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties71ff7 = [
        
    ];

    public function getConnection()
    {
        $this->initializer504c2 && ($this->initializer504c2->__invoke($valueHolderfc200, $this, 'getConnection', array(), $this->initializer504c2) || 1) && $this->valueHolderfc200 = $valueHolderfc200;

        return $this->valueHolderfc200->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer504c2 && ($this->initializer504c2->__invoke($valueHolderfc200, $this, 'getMetadataFactory', array(), $this->initializer504c2) || 1) && $this->valueHolderfc200 = $valueHolderfc200;

        return $this->valueHolderfc200->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer504c2 && ($this->initializer504c2->__invoke($valueHolderfc200, $this, 'getExpressionBuilder', array(), $this->initializer504c2) || 1) && $this->valueHolderfc200 = $valueHolderfc200;

        return $this->valueHolderfc200->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer504c2 && ($this->initializer504c2->__invoke($valueHolderfc200, $this, 'beginTransaction', array(), $this->initializer504c2) || 1) && $this->valueHolderfc200 = $valueHolderfc200;

        return $this->valueHolderfc200->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer504c2 && ($this->initializer504c2->__invoke($valueHolderfc200, $this, 'getCache', array(), $this->initializer504c2) || 1) && $this->valueHolderfc200 = $valueHolderfc200;

        return $this->valueHolderfc200->getCache();
    }

    public function transactional($func)
    {
        $this->initializer504c2 && ($this->initializer504c2->__invoke($valueHolderfc200, $this, 'transactional', array('func' => $func), $this->initializer504c2) || 1) && $this->valueHolderfc200 = $valueHolderfc200;

        return $this->valueHolderfc200->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer504c2 && ($this->initializer504c2->__invoke($valueHolderfc200, $this, 'wrapInTransaction', array('func' => $func), $this->initializer504c2) || 1) && $this->valueHolderfc200 = $valueHolderfc200;

        return $this->valueHolderfc200->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer504c2 && ($this->initializer504c2->__invoke($valueHolderfc200, $this, 'commit', array(), $this->initializer504c2) || 1) && $this->valueHolderfc200 = $valueHolderfc200;

        return $this->valueHolderfc200->commit();
    }

    public function rollback()
    {
        $this->initializer504c2 && ($this->initializer504c2->__invoke($valueHolderfc200, $this, 'rollback', array(), $this->initializer504c2) || 1) && $this->valueHolderfc200 = $valueHolderfc200;

        return $this->valueHolderfc200->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer504c2 && ($this->initializer504c2->__invoke($valueHolderfc200, $this, 'getClassMetadata', array('className' => $className), $this->initializer504c2) || 1) && $this->valueHolderfc200 = $valueHolderfc200;

        return $this->valueHolderfc200->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer504c2 && ($this->initializer504c2->__invoke($valueHolderfc200, $this, 'createQuery', array('dql' => $dql), $this->initializer504c2) || 1) && $this->valueHolderfc200 = $valueHolderfc200;

        return $this->valueHolderfc200->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer504c2 && ($this->initializer504c2->__invoke($valueHolderfc200, $this, 'createNamedQuery', array('name' => $name), $this->initializer504c2) || 1) && $this->valueHolderfc200 = $valueHolderfc200;

        return $this->valueHolderfc200->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer504c2 && ($this->initializer504c2->__invoke($valueHolderfc200, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer504c2) || 1) && $this->valueHolderfc200 = $valueHolderfc200;

        return $this->valueHolderfc200->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer504c2 && ($this->initializer504c2->__invoke($valueHolderfc200, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer504c2) || 1) && $this->valueHolderfc200 = $valueHolderfc200;

        return $this->valueHolderfc200->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer504c2 && ($this->initializer504c2->__invoke($valueHolderfc200, $this, 'createQueryBuilder', array(), $this->initializer504c2) || 1) && $this->valueHolderfc200 = $valueHolderfc200;

        return $this->valueHolderfc200->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer504c2 && ($this->initializer504c2->__invoke($valueHolderfc200, $this, 'flush', array('entity' => $entity), $this->initializer504c2) || 1) && $this->valueHolderfc200 = $valueHolderfc200;

        return $this->valueHolderfc200->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer504c2 && ($this->initializer504c2->__invoke($valueHolderfc200, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer504c2) || 1) && $this->valueHolderfc200 = $valueHolderfc200;

        return $this->valueHolderfc200->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer504c2 && ($this->initializer504c2->__invoke($valueHolderfc200, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer504c2) || 1) && $this->valueHolderfc200 = $valueHolderfc200;

        return $this->valueHolderfc200->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer504c2 && ($this->initializer504c2->__invoke($valueHolderfc200, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer504c2) || 1) && $this->valueHolderfc200 = $valueHolderfc200;

        return $this->valueHolderfc200->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer504c2 && ($this->initializer504c2->__invoke($valueHolderfc200, $this, 'clear', array('entityName' => $entityName), $this->initializer504c2) || 1) && $this->valueHolderfc200 = $valueHolderfc200;

        return $this->valueHolderfc200->clear($entityName);
    }

    public function close()
    {
        $this->initializer504c2 && ($this->initializer504c2->__invoke($valueHolderfc200, $this, 'close', array(), $this->initializer504c2) || 1) && $this->valueHolderfc200 = $valueHolderfc200;

        return $this->valueHolderfc200->close();
    }

    public function persist($entity)
    {
        $this->initializer504c2 && ($this->initializer504c2->__invoke($valueHolderfc200, $this, 'persist', array('entity' => $entity), $this->initializer504c2) || 1) && $this->valueHolderfc200 = $valueHolderfc200;

        return $this->valueHolderfc200->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer504c2 && ($this->initializer504c2->__invoke($valueHolderfc200, $this, 'remove', array('entity' => $entity), $this->initializer504c2) || 1) && $this->valueHolderfc200 = $valueHolderfc200;

        return $this->valueHolderfc200->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer504c2 && ($this->initializer504c2->__invoke($valueHolderfc200, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer504c2) || 1) && $this->valueHolderfc200 = $valueHolderfc200;

        return $this->valueHolderfc200->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer504c2 && ($this->initializer504c2->__invoke($valueHolderfc200, $this, 'detach', array('entity' => $entity), $this->initializer504c2) || 1) && $this->valueHolderfc200 = $valueHolderfc200;

        return $this->valueHolderfc200->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer504c2 && ($this->initializer504c2->__invoke($valueHolderfc200, $this, 'merge', array('entity' => $entity), $this->initializer504c2) || 1) && $this->valueHolderfc200 = $valueHolderfc200;

        return $this->valueHolderfc200->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer504c2 && ($this->initializer504c2->__invoke($valueHolderfc200, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer504c2) || 1) && $this->valueHolderfc200 = $valueHolderfc200;

        return $this->valueHolderfc200->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer504c2 && ($this->initializer504c2->__invoke($valueHolderfc200, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer504c2) || 1) && $this->valueHolderfc200 = $valueHolderfc200;

        return $this->valueHolderfc200->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer504c2 && ($this->initializer504c2->__invoke($valueHolderfc200, $this, 'getRepository', array('entityName' => $entityName), $this->initializer504c2) || 1) && $this->valueHolderfc200 = $valueHolderfc200;

        return $this->valueHolderfc200->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer504c2 && ($this->initializer504c2->__invoke($valueHolderfc200, $this, 'contains', array('entity' => $entity), $this->initializer504c2) || 1) && $this->valueHolderfc200 = $valueHolderfc200;

        return $this->valueHolderfc200->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer504c2 && ($this->initializer504c2->__invoke($valueHolderfc200, $this, 'getEventManager', array(), $this->initializer504c2) || 1) && $this->valueHolderfc200 = $valueHolderfc200;

        return $this->valueHolderfc200->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer504c2 && ($this->initializer504c2->__invoke($valueHolderfc200, $this, 'getConfiguration', array(), $this->initializer504c2) || 1) && $this->valueHolderfc200 = $valueHolderfc200;

        return $this->valueHolderfc200->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer504c2 && ($this->initializer504c2->__invoke($valueHolderfc200, $this, 'isOpen', array(), $this->initializer504c2) || 1) && $this->valueHolderfc200 = $valueHolderfc200;

        return $this->valueHolderfc200->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer504c2 && ($this->initializer504c2->__invoke($valueHolderfc200, $this, 'getUnitOfWork', array(), $this->initializer504c2) || 1) && $this->valueHolderfc200 = $valueHolderfc200;

        return $this->valueHolderfc200->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer504c2 && ($this->initializer504c2->__invoke($valueHolderfc200, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer504c2) || 1) && $this->valueHolderfc200 = $valueHolderfc200;

        return $this->valueHolderfc200->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer504c2 && ($this->initializer504c2->__invoke($valueHolderfc200, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer504c2) || 1) && $this->valueHolderfc200 = $valueHolderfc200;

        return $this->valueHolderfc200->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer504c2 && ($this->initializer504c2->__invoke($valueHolderfc200, $this, 'getProxyFactory', array(), $this->initializer504c2) || 1) && $this->valueHolderfc200 = $valueHolderfc200;

        return $this->valueHolderfc200->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer504c2 && ($this->initializer504c2->__invoke($valueHolderfc200, $this, 'initializeObject', array('obj' => $obj), $this->initializer504c2) || 1) && $this->valueHolderfc200 = $valueHolderfc200;

        return $this->valueHolderfc200->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer504c2 && ($this->initializer504c2->__invoke($valueHolderfc200, $this, 'getFilters', array(), $this->initializer504c2) || 1) && $this->valueHolderfc200 = $valueHolderfc200;

        return $this->valueHolderfc200->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer504c2 && ($this->initializer504c2->__invoke($valueHolderfc200, $this, 'isFiltersStateClean', array(), $this->initializer504c2) || 1) && $this->valueHolderfc200 = $valueHolderfc200;

        return $this->valueHolderfc200->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer504c2 && ($this->initializer504c2->__invoke($valueHolderfc200, $this, 'hasFilters', array(), $this->initializer504c2) || 1) && $this->valueHolderfc200 = $valueHolderfc200;

        return $this->valueHolderfc200->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer504c2 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolderfc200) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderfc200 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderfc200->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer504c2 && ($this->initializer504c2->__invoke($valueHolderfc200, $this, '__get', ['name' => $name], $this->initializer504c2) || 1) && $this->valueHolderfc200 = $valueHolderfc200;

        if (isset(self::$publicProperties71ff7[$name])) {
            return $this->valueHolderfc200->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfc200;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderfc200;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer504c2 && ($this->initializer504c2->__invoke($valueHolderfc200, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer504c2) || 1) && $this->valueHolderfc200 = $valueHolderfc200;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfc200;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderfc200;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer504c2 && ($this->initializer504c2->__invoke($valueHolderfc200, $this, '__isset', array('name' => $name), $this->initializer504c2) || 1) && $this->valueHolderfc200 = $valueHolderfc200;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfc200;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderfc200;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer504c2 && ($this->initializer504c2->__invoke($valueHolderfc200, $this, '__unset', array('name' => $name), $this->initializer504c2) || 1) && $this->valueHolderfc200 = $valueHolderfc200;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfc200;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderfc200;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer504c2 && ($this->initializer504c2->__invoke($valueHolderfc200, $this, '__clone', array(), $this->initializer504c2) || 1) && $this->valueHolderfc200 = $valueHolderfc200;

        $this->valueHolderfc200 = clone $this->valueHolderfc200;
    }

    public function __sleep()
    {
        $this->initializer504c2 && ($this->initializer504c2->__invoke($valueHolderfc200, $this, '__sleep', array(), $this->initializer504c2) || 1) && $this->valueHolderfc200 = $valueHolderfc200;

        return array('valueHolderfc200');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer504c2 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer504c2;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer504c2 && ($this->initializer504c2->__invoke($valueHolderfc200, $this, 'initializeProxy', array(), $this->initializer504c2) || 1) && $this->valueHolderfc200 = $valueHolderfc200;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfc200;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderfc200;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
