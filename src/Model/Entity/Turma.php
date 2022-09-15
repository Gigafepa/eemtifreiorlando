<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Turma Entity
 *
 * @property int $id
 * @property string $nome
 * @property int $serie
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time|null $updated
 * @property string $status
 *
 * @property \App\Model\Entity\Aluno[] $alunos
 */
class Turma extends Entity
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
        'nome' => true,
        'serie' => true,
        'created' => true,
        'updated' => true,
        'status' => true,
        'alunos' => true
    ];

    protected function _getFullName() {
        return "{$this->serie}° ANO '{$this->nome}'";
    }
}
