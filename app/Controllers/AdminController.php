<?php

namespace App\Controllers;

use App\Repositories\DeedRepository;
use SimpleMVC\Core\Controller;
use SimpleMVC\Utils\Response;

class AdminController extends Controller
{
    protected DeedRepository $deedRepository;

    public function home():Response
    {
        return $this->render('admin/home');
    }

    private function getInput($input)
    {
        return !empty($_POST[$input]) ? $_POST[$input] : null;
    }

    public function get_title_deed_list(): Response
    {
        $first_name = $this->getInput('first_name');
        $last_name = $this->getInput('last_name');
        $city_name = $this->getInput('city_name');
        $registration_date = $this->getInput('registration_date');
        $district_name = $this->getInput('district_name');
        $plot_parcel = $this->getInput('plot_parcel');

        $this->deedRepository = new DeedRepository();
        $data = $this->deedRepository->get_by_filter(
            $first_name, $last_name, $city_name, $district_name, $registration_date, $plot_parcel
        );

        $recordsFiltered = $this->deedRepository->get_count_by_filter(
            $first_name, $last_name, $city_name, $district_name, $registration_date, $plot_parcel
        );

        $response = new Response();
        $response->json([
            "recordsTotal"=> $recordsFiltered,
            "recordsFiltered"=> $recordsFiltered,
            "data" => $data ?? [],

        ]);

        return $response;
    }
}