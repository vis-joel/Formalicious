<?php
namespace Sterc\Formalicious\Processors\Mgr\FieldTypes;

use MODX\Revolution\Processors\Model\CreateProcessor;
use Sterc\Formalicious\Model\FormaliciousFieldType;

class Create extends CreateProcessor
{
    /**
     * @access public.
     * @var String.
     */
    public $classKey = FormaliciousFieldType::class;

    /**
     * @access public.
     * @var Array.
     */
    public $languageTopics = ['formalicious:default'];

    /**
     * @access public.
     * @var String.
     */
    public $objectType = 'formalicious.field_type';

    /**
     * @access public.
     * @return Mixed.
     */
    public function beforeSave() {
        $name  = $this->getProperty('name');
        $query = ['name' => $name];

        if (empty($name)) {
            $this->addFieldError('name',$this->modx->lexicon('formalicious.category_err_ns_name'));
        } else if ($this->doesAlreadyExist($query)) {
            $this->addFieldError('name',$this->modx->lexicon('formalicious.category_err_ae'));
        }

        $this->object->set('fields', implode(',', $this->getProperty('fields', [])));

        return parent::beforeSave();
    }
}