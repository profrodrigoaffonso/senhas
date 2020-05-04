<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Chamada Entity
 *
 * @property int $id
 * @property int|null $senha_id
 * @property \Cake\I18n\FrozenTime|null $created
 *
 * @property \App\Model\Entity\Senha $senha
 */
class Chamada extends Entity
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
        'created' => true,
        'finalizada' => true,
        'senha' => true,
    ];
}
