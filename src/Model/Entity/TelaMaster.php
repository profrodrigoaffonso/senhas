<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * TelaMaster Entity
 *
 * @property int $id
 * @property int|null $senha_id
 * @property int|null $guiche_id
 *
 * @property \App\Model\Entity\Senha $senha
 * @property \App\Model\Entity\Guich $guich
 */
class TelaMaster extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'senha_id' => true,
        'guiche_id' => true,
        'som' => true,
        'senha' => true,
        'guich' => true,
    ];
}
