<?php
require_once __DIR__ . '/Product.php';

class Material extends Product
{
    public $materials;

    public function __construct($name, $price, $description, $details, $valutation, $materials, $disposability)
    {
        parent::__construct($name, $price, $description, $details, $valutation, $disposability);
        $this->materials = $this->getMaterials($materials);
    }

    private function getMaterials($material)
    {
        if ($material === '') {
            return 'Nessuna informazione disponibile per questo prodotto';
        }
        return 'Lista materiali: ' . $material;
    }
}

