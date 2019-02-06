<?php

namespace Maatwebsite\Excel\Concerns;

use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

interface ToArray
{
    /**
     * @param array $array
     * @param Worksheet $worksheet
     */
     public function array(array $array, Worksheet $worksheet);
}
