<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Eletiva Entity
 *
 * @property int $id
 * @property string $titulo
 * @property string|null $descricao
 * @property int|null $professor_id
 * @property int $vagas
 * @property string $status
 * @property \Cake\I18n\Date $data_eletiva
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time|null $updated
 *
 * @property \App\Model\Entity\Professor $professor
 * @property \App\Model\Entity\Inscricao[] $inscricoes
 */
class Eletiva extends Entity
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
        'titulo' => true,
        'descricao' => true,
        'professor_id' => true,
        'vagas' => true,
        'status' => true,
        'data_eletiva' => true,
        'created' => true,
        'updated' => true,
        'professor' => true,
        'inscricoes' => true
    ];
}
