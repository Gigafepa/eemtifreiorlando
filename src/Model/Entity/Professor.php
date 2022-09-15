<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Auth\DefaultPasswordHasher;

/**
 * Professor Entity
 *
 * @property int $id
 * @property string $nome
 * @property string $cpf
 * @property string $senha
 * @property string|null $img_src
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time|null $updated
 * @property string $status
 *
 * @property \App\Model\Entity\Eletiva[] $eletivas
 */
class Professor extends Entity
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
        'cpf' => true,
        'senha' => true,
        'img_src' => true,
        'created' => true,
        'updated' => true,
        'status' => true,
        'eletivas' => true
    ];

    protected function _setSenha($value)
    {
        if (strlen($value)) {
            $hasher = new DefaultPasswordHasher();
            return $hasher->hash($value);
        }
    }
}
