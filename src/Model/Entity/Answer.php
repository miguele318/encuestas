<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Answer Entity
 *
 * @property int $id
 * @property string $value
 * @property int $question_id
 * @property int $evaluation_id
 *
 * @property \App\Model\Entity\Question $question
 * @property \App\Model\Entity\Evaluation $evaluation
 */
class Answer extends Entity
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
        'value' => true,
        'question_id' => true,
        'evaluation_id' => true,
        'question' => true,
        'evaluation' => true,
    ];
}
