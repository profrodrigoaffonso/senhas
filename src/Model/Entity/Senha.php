<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Senha Entity
 *
 * @property int $id
 * @property string|null $senha
 * @property string $em_uso
 *
 * @property \App\Model\Entity\Chamada[] $chamadas
 */
class Senha extends Entity
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
        'senha' => true,
        'em_uso' => true,
        'chamadas' => true,
    ];
}
