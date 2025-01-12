<?php

namespace App\Controllers;

use App\Repositories\UserRepository;
use SimpleMVC\Core\Controller;
use SimpleMVC\Utils\Response;

class LoginController extends Controller
{
    protected UserRepository $userRepository;
    function __construct()
    {
        $this->userRepository = new UserRepository();
        parent::__construct();
    }

    public function sign_in($req): Response
    {
        $result = $this->userRepository->get_user($_POST["username"], $_POST["password"]);
        $response = new Response();

        if (empty($result)) {
            $response->json([
                "message" => "Kayıt Bulumadı veya  Bilgiler geçersiz.",
            ], 400);

            $response->send();
        }

        $response->json([
            "message" => "Giriş Başarılı.",
        ]);

        $_SESSION["user_id"] = $result["id"];

         return $response;
    }

    public function logout(): Response
    {
        session_destroy();

        http_response_code(302);
        header("location: /");
        exit();

    }
}