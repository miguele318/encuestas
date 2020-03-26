<?php
declare(strict_types=1);

namespace App\Mailer;

use Cake\Mailer\Mailer;

/**
 * UsersTest mailer.
 */
class UsersTestMailer extends Mailer
{
    /**
     * Mailer's name.
     *
     * @var string
     */
    public static $name = 'UsersTest';

    public function welcome($usersTest)
    {
        $this
            ->setTo($user->email)
            ->setSubject(sprintf('Welcome %s', $usersTest->name))
            ->viewBuilder()
                ->setTemplate('welcome_mail'); // By default template with same name as method name is used.
    }
    public function welcome($usersTest, $correo)
    {
       
        $mailer = new Mailer('default');
        $mailer = $mailer
            ->setEmailFormat('html')
            ->setTo('ivetsjoel@gmail.com')
            ->setFrom('juanmaza4520@gmail.com')
            ->setSubject(sprintf('Welcome %s', menssagge))
            //->setFrom('app@domain.com')
            ->viewBuilder()
                ->setTemplate('default')
                ->setLayout('default');
                
       
     

    }
}
