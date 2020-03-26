<?php
declare(strict_types=1);

namespace App\Mailer;

use Cake\Mailer\Mailer;
use Cake\Mailer\Email;
use Cake\Mailer\TransportFactory;

/**
 * Evaluation mailer.
 */
class EvaluationMailer extends Mailer
{
    /**
     * Mailer's name.
     *
     * @var string
     */
    public static $name = 'Evaluation';

    public function welcome($evaluation)
    {
       

        $this
            
            ->setTo('ivetsjoel@gmail.com')
            ->setFrom('juanmaza4520@gmail.com')
            ->setSubject(sprintf('Welcome %s', $evaluation->token))
            
            ->viewBuilder()
                ->setTemplate('default'); 
    }
}
