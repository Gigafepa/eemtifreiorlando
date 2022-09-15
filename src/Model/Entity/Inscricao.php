<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Inscricao Entity
 *
 * @property int $id
 * @property int $aluno_id
 * @property int $eletiva_id
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time|null $updated
 *
 * @property \App\Model\Entity\Aluno $aluno
 * @property \App\Model\Entity\Eletiva $eletiva
 */
class Inscricao extends Entity
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
        'aluno_id' => true,
        'eletiva_id' => true,
        'created' => true,
        'updated' => true,
        'aluno' => true,
        'eletiva' => true
    ];
}
