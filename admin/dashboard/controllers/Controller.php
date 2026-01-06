<?php
include "../admin/dashboard/models/Base.php";

class Controller extends Base
{
    private $process;


    public function __construct()
    {
        $this->process = new Base();
    }


    //new register

    public function register()
    {
        session_start();
        if (isset($_POST['submit'])) {
            //data
            $params  = [
                'name' => $_POST['name'],
                'email' => $_POST['email'],
                'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
            ];

            $success = $this->process->registerAdmin("admin", $params);

            if ($success) {
                $_SESSION['message'] = "Admin registered successfully!";
                $_SESSION['msg_type'] = "success";
                header("Location: ./login.php");
                exit();
            } else {
                $_SESSION['message'] = "Email Already Registered!";
                $_SESSION['msg_type'] = "error";
                header("Location: ./register.php");
                exit();
            }
        }
    }

    // login function
    public function login()
    {
        session_start();

        if (isset($_POST['login'])) {
            $email = trim($_POST['email']);
            $password = $_POST['password'];

            $user = $this->process->loginAdmin($email, $password);

            if ($user) {
                $_SESSION['admin_id'] = $user['id'];
                $_SESSION['admin_name'] = $user['name'];
                $_SESSION['message'] = "Login successful!";
                $_SESSION['msgg_type'] = "success";
                header("Location: ./dashboard/views/index.php");
                exit();
            } else {
                $_SESSION['message'] = "Email or password incorrect!";
                $_SESSION['msgg_type'] = "error";
                header("Location: ./login.php");
                exit();
            }
        }
    }
}
