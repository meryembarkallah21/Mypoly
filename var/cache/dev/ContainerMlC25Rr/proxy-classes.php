<?php

namespace ContainerMlC25Rr;

include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'persistence'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Persistence'.\DIRECTORY_SEPARATOR.'ObjectManager.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'doctrine'.\DIRECTORY_SEPARATOR.'orm'.\DIRECTORY_SEPARATOR.'lib'.\DIRECTORY_SEPARATOR.'Doctrine'.\DIRECTORY_SEPARATOR.'ORM'.\DIRECTORY_SEPARATOR.'EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder754e4 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer1a7c5 = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties51f0b = [
        
    ];

    public function getConnection()
    {
        $this->initializer1a7c5 && ($this->initializer1a7c5->__invoke($valueHolder754e4, $this, 'getConnection', array(), $this->initializer1a7c5) || 1) && $this->valueHolder754e4 = $valueHolder754e4;

        return $this->valueHolder754e4->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer1a7c5 && ($this->initializer1a7c5->__invoke($valueHolder754e4, $this, 'getMetadataFactory', array(), $this->initializer1a7c5) || 1) && $this->valueHolder754e4 = $valueHolder754e4;

        return $this->valueHolder754e4->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer1a7c5 && ($this->initializer1a7c5->__invoke($valueHolder754e4, $this, 'getExpressionBuilder', array(), $this->initializer1a7c5) || 1) && $this->valueHolder754e4 = $valueHolder754e4;

        return $this->valueHolder754e4->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer1a7c5 && ($this->initializer1a7c5->__invoke($valueHolder754e4, $this, 'beginTransaction', array(), $this->initializer1a7c5) || 1) && $this->valueHolder754e4 = $valueHolder754e4;

        return $this->valueHolder754e4->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer1a7c5 && ($this->initializer1a7c5->__invoke($valueHolder754e4, $this, 'getCache', array(), $this->initializer1a7c5) || 1) && $this->valueHolder754e4 = $valueHolder754e4;

        return $this->valueHolder754e4->getCache();
    }

    public function transactional($func)
    {
        $this->initializer1a7c5 && ($this->initializer1a7c5->__invoke($valueHolder754e4, $this, 'transactional', array('func' => $func), $this->initializer1a7c5) || 1) && $this->valueHolder754e4 = $valueHolder754e4;

        return $this->valueHolder754e4->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer1a7c5 && ($this->initializer1a7c5->__invoke($valueHolder754e4, $this, 'wrapInTransaction', array('func' => $func), $this->initializer1a7c5) || 1) && $this->valueHolder754e4 = $valueHolder754e4;

        return $this->valueHolder754e4->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer1a7c5 && ($this->initializer1a7c5->__invoke($valueHolder754e4, $this, 'commit', array(), $this->initializer1a7c5) || 1) && $this->valueHolder754e4 = $valueHolder754e4;

        return $this->valueHolder754e4->commit();
    }

    public function rollback()
    {
        $this->initializer1a7c5 && ($this->initializer1a7c5->__invoke($valueHolder754e4, $this, 'rollback', array(), $this->initializer1a7c5) || 1) && $this->valueHolder754e4 = $valueHolder754e4;

        return $this->valueHolder754e4->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer1a7c5 && ($this->initializer1a7c5->__invoke($valueHolder754e4, $this, 'getClassMetadata', array('className' => $className), $this->initializer1a7c5) || 1) && $this->valueHolder754e4 = $valueHolder754e4;

        return $this->valueHolder754e4->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer1a7c5 && ($this->initializer1a7c5->__invoke($valueHolder754e4, $this, 'createQuery', array('dql' => $dql), $this->initializer1a7c5) || 1) && $this->valueHolder754e4 = $valueHolder754e4;

        return $this->valueHolder754e4->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer1a7c5 && ($this->initializer1a7c5->__invoke($valueHolder754e4, $this, 'createNamedQuery', array('name' => $name), $this->initializer1a7c5) || 1) && $this->valueHolder754e4 = $valueHolder754e4;

        return $this->valueHolder754e4->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer1a7c5 && ($this->initializer1a7c5->__invoke($valueHolder754e4, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer1a7c5) || 1) && $this->valueHolder754e4 = $valueHolder754e4;

        return $this->valueHolder754e4->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer1a7c5 && ($this->initializer1a7c5->__invoke($valueHolder754e4, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer1a7c5) || 1) && $this->valueHolder754e4 = $valueHolder754e4;

        return $this->valueHolder754e4->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer1a7c5 && ($this->initializer1a7c5->__invoke($valueHolder754e4, $this, 'createQueryBuilder', array(), $this->initializer1a7c5) || 1) && $this->valueHolder754e4 = $valueHolder754e4;

        return $this->valueHolder754e4->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer1a7c5 && ($this->initializer1a7c5->__invoke($valueHolder754e4, $this, 'flush', array('entity' => $entity), $this->initializer1a7c5) || 1) && $this->valueHolder754e4 = $valueHolder754e4;

        return $this->valueHolder754e4->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer1a7c5 && ($this->initializer1a7c5->__invoke($valueHolder754e4, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1a7c5) || 1) && $this->valueHolder754e4 = $valueHolder754e4;

        return $this->valueHolder754e4->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer1a7c5 && ($this->initializer1a7c5->__invoke($valueHolder754e4, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer1a7c5) || 1) && $this->valueHolder754e4 = $valueHolder754e4;

        return $this->valueHolder754e4->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer1a7c5 && ($this->initializer1a7c5->__invoke($valueHolder754e4, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer1a7c5) || 1) && $this->valueHolder754e4 = $valueHolder754e4;

        return $this->valueHolder754e4->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer1a7c5 && ($this->initializer1a7c5->__invoke($valueHolder754e4, $this, 'clear', array('entityName' => $entityName), $this->initializer1a7c5) || 1) && $this->valueHolder754e4 = $valueHolder754e4;

        return $this->valueHolder754e4->clear($entityName);
    }

    public function close()
    {
        $this->initializer1a7c5 && ($this->initializer1a7c5->__invoke($valueHolder754e4, $this, 'close', array(), $this->initializer1a7c5) || 1) && $this->valueHolder754e4 = $valueHolder754e4;

        return $this->valueHolder754e4->close();
    }

    public function persist($entity)
    {
        $this->initializer1a7c5 && ($this->initializer1a7c5->__invoke($valueHolder754e4, $this, 'persist', array('entity' => $entity), $this->initializer1a7c5) || 1) && $this->valueHolder754e4 = $valueHolder754e4;

        return $this->valueHolder754e4->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer1a7c5 && ($this->initializer1a7c5->__invoke($valueHolder754e4, $this, 'remove', array('entity' => $entity), $this->initializer1a7c5) || 1) && $this->valueHolder754e4 = $valueHolder754e4;

        return $this->valueHolder754e4->remove($entity);
    }

    public function refresh($entity, ?int $lockMode = null)
    {
        $this->initializer1a7c5 && ($this->initializer1a7c5->__invoke($valueHolder754e4, $this, 'refresh', array('entity' => $entity, 'lockMode' => $lockMode), $this->initializer1a7c5) || 1) && $this->valueHolder754e4 = $valueHolder754e4;

        return $this->valueHolder754e4->refresh($entity, $lockMode);
    }

    public function detach($entity)
    {
        $this->initializer1a7c5 && ($this->initializer1a7c5->__invoke($valueHolder754e4, $this, 'detach', array('entity' => $entity), $this->initializer1a7c5) || 1) && $this->valueHolder754e4 = $valueHolder754e4;

        return $this->valueHolder754e4->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer1a7c5 && ($this->initializer1a7c5->__invoke($valueHolder754e4, $this, 'merge', array('entity' => $entity), $this->initializer1a7c5) || 1) && $this->valueHolder754e4 = $valueHolder754e4;

        return $this->valueHolder754e4->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer1a7c5 && ($this->initializer1a7c5->__invoke($valueHolder754e4, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer1a7c5) || 1) && $this->valueHolder754e4 = $valueHolder754e4;

        return $this->valueHolder754e4->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer1a7c5 && ($this->initializer1a7c5->__invoke($valueHolder754e4, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer1a7c5) || 1) && $this->valueHolder754e4 = $valueHolder754e4;

        return $this->valueHolder754e4->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer1a7c5 && ($this->initializer1a7c5->__invoke($valueHolder754e4, $this, 'getRepository', array('entityName' => $entityName), $this->initializer1a7c5) || 1) && $this->valueHolder754e4 = $valueHolder754e4;

        return $this->valueHolder754e4->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer1a7c5 && ($this->initializer1a7c5->__invoke($valueHolder754e4, $this, 'contains', array('entity' => $entity), $this->initializer1a7c5) || 1) && $this->valueHolder754e4 = $valueHolder754e4;

        return $this->valueHolder754e4->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer1a7c5 && ($this->initializer1a7c5->__invoke($valueHolder754e4, $this, 'getEventManager', array(), $this->initializer1a7c5) || 1) && $this->valueHolder754e4 = $valueHolder754e4;

        return $this->valueHolder754e4->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer1a7c5 && ($this->initializer1a7c5->__invoke($valueHolder754e4, $this, 'getConfiguration', array(), $this->initializer1a7c5) || 1) && $this->valueHolder754e4 = $valueHolder754e4;

        return $this->valueHolder754e4->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer1a7c5 && ($this->initializer1a7c5->__invoke($valueHolder754e4, $this, 'isOpen', array(), $this->initializer1a7c5) || 1) && $this->valueHolder754e4 = $valueHolder754e4;

        return $this->valueHolder754e4->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer1a7c5 && ($this->initializer1a7c5->__invoke($valueHolder754e4, $this, 'getUnitOfWork', array(), $this->initializer1a7c5) || 1) && $this->valueHolder754e4 = $valueHolder754e4;

        return $this->valueHolder754e4->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer1a7c5 && ($this->initializer1a7c5->__invoke($valueHolder754e4, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1a7c5) || 1) && $this->valueHolder754e4 = $valueHolder754e4;

        return $this->valueHolder754e4->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer1a7c5 && ($this->initializer1a7c5->__invoke($valueHolder754e4, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer1a7c5) || 1) && $this->valueHolder754e4 = $valueHolder754e4;

        return $this->valueHolder754e4->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer1a7c5 && ($this->initializer1a7c5->__invoke($valueHolder754e4, $this, 'getProxyFactory', array(), $this->initializer1a7c5) || 1) && $this->valueHolder754e4 = $valueHolder754e4;

        return $this->valueHolder754e4->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer1a7c5 && ($this->initializer1a7c5->__invoke($valueHolder754e4, $this, 'initializeObject', array('obj' => $obj), $this->initializer1a7c5) || 1) && $this->valueHolder754e4 = $valueHolder754e4;

        return $this->valueHolder754e4->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer1a7c5 && ($this->initializer1a7c5->__invoke($valueHolder754e4, $this, 'getFilters', array(), $this->initializer1a7c5) || 1) && $this->valueHolder754e4 = $valueHolder754e4;

        return $this->valueHolder754e4->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer1a7c5 && ($this->initializer1a7c5->__invoke($valueHolder754e4, $this, 'isFiltersStateClean', array(), $this->initializer1a7c5) || 1) && $this->valueHolder754e4 = $valueHolder754e4;

        return $this->valueHolder754e4->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer1a7c5 && ($this->initializer1a7c5->__invoke($valueHolder754e4, $this, 'hasFilters', array(), $this->initializer1a7c5) || 1) && $this->valueHolder754e4 = $valueHolder754e4;

        return $this->valueHolder754e4->hasFilters();
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

        $instance->initializer1a7c5 = $initializer;

        return $instance;
    }

    public function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, ?\Doctrine\Common\EventManager $eventManager = null)
    {
        static $reflection;

        if (! $this->valueHolder754e4) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder754e4 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder754e4->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer1a7c5 && ($this->initializer1a7c5->__invoke($valueHolder754e4, $this, '__get', ['name' => $name], $this->initializer1a7c5) || 1) && $this->valueHolder754e4 = $valueHolder754e4;

        if (isset(self::$publicProperties51f0b[$name])) {
            return $this->valueHolder754e4->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder754e4;

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

        $targetObject = $this->valueHolder754e4;
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
        $this->initializer1a7c5 && ($this->initializer1a7c5->__invoke($valueHolder754e4, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer1a7c5) || 1) && $this->valueHolder754e4 = $valueHolder754e4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder754e4;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder754e4;
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
        $this->initializer1a7c5 && ($this->initializer1a7c5->__invoke($valueHolder754e4, $this, '__isset', array('name' => $name), $this->initializer1a7c5) || 1) && $this->valueHolder754e4 = $valueHolder754e4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder754e4;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder754e4;
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
        $this->initializer1a7c5 && ($this->initializer1a7c5->__invoke($valueHolder754e4, $this, '__unset', array('name' => $name), $this->initializer1a7c5) || 1) && $this->valueHolder754e4 = $valueHolder754e4;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder754e4;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder754e4;
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
        $this->initializer1a7c5 && ($this->initializer1a7c5->__invoke($valueHolder754e4, $this, '__clone', array(), $this->initializer1a7c5) || 1) && $this->valueHolder754e4 = $valueHolder754e4;

        $this->valueHolder754e4 = clone $this->valueHolder754e4;
    }

    public function __sleep()
    {
        $this->initializer1a7c5 && ($this->initializer1a7c5->__invoke($valueHolder754e4, $this, '__sleep', array(), $this->initializer1a7c5) || 1) && $this->valueHolder754e4 = $valueHolder754e4;

        return array('valueHolder754e4');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer1a7c5 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer1a7c5;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer1a7c5 && ($this->initializer1a7c5->__invoke($valueHolder754e4, $this, 'initializeProxy', array(), $this->initializer1a7c5) || 1) && $this->valueHolder754e4 = $valueHolder754e4;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder754e4;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder754e4;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
