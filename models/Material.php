<?php
require_once __DIR__ . '/Product.php';

class Material extends Product
{
    public $materials;

    public function __construct($name, $price, $description, $materials, $disposability)
    {
        parent::__construct($name, $price, $description, $disposability);
        $this->materials = $this->setMaterials($materials);
    }

    public function getMaterials()
    {
        return $this->materials;
    }
    private function setMaterials($material)
    {
        if ($material === '') {
            return 'Nessuna informazione disponibile per questo prodotto';
        }
        return 'Lista materiali: ' . $material;
    }
}
