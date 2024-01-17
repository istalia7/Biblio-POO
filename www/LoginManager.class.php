<?php
require_once "ConnexionManager.class.php";
require_once "UserManager.class.php";

class LoginManager extends UserManager
{
    public function connectionUser($identifiant, $password)
    {
        $this->getusers();
        $users = $this->users;
        foreach ($users as $user) {
            if ($user->getidentifiant() === $identifiant && password_verify($password, $user->getpassword())) {
                $this->initialisationSession($user);
            }
        }
        header('location: index.php');
    }

    private function initialisationSession(object $user)
    {
        $_SESSION['user'] = [
            'id_user' => $user->getId(),
            'identifiant' => $user->getidentifiant(),
            'password' => $user->getpassword(),
            'is_valide' => $user->getisValide()
        ];
    }
}
