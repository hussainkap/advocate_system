<?php

class AuthController extends Controller {

    public function login() {
        $this->view('auth/login');
    }

    public function loginPost() {
        $email = $_POST['email'];
        $password = $_POST['password'];

        $model = new User();
        $user = $model->findByEmail($email);

        if ($user && $password === $user['password']) {
            $_SESSION['user'] = $user;
            $this->redirect('?controller=admin&action=dashboard');
        } else {
            echo "Invalid login";
        }
    }
}