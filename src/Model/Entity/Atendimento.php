<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Atendimento Entity
 *
 * @property int $id_atendimento
 * @property int|null $agenda_id
 * @property int|null $horario_id
 * @property int|null $client_id
 * @property int|null $service_id
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Agenda $agenda
 * @property \App\Model\Entity\Horario $horario
 * @property \App\Model\Entity\Client $client
 * @property \App\Model\Entity\Service $service
 */
class Atendimento extends Entity
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
        'agenda_id' => true,
        'horario_id' => true,
        'client_id' => true,
        'service_id' => true,
        'created' => true,
        'modified' => true,
        'agenda' => true,
        'horario' => true,
        'client' => true,
        'service' => true,
    ];
}
