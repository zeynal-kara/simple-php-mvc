<?php

namespace App\Repositories;

use PDO;
use SimpleMVC\Core\Repository;

class DeedRepository extends Repository
{
    protected string $table = 'deed';

    public function get_by_filter(
        string|null $first_name = null,
        string|null $last_name = null,
        string|null $city_name = null,
        string|null $district_name = null,
        string|null $registration_date = null,
        string|null $plot_parcel = null,
        string $order_by = 'registration_date',
        string $order_type = 'DESC',
        int $limit = 10,
        int $offset = 0
    ): array|null
    {
        $stmt = $this->db->prepare("CALL FilterDeeds(?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

        $stmt->bindParam(1, $first_name, PDO::PARAM_STR);
        $stmt->bindParam(2, $last_name, PDO::PARAM_STR);
        $stmt->bindParam(3, $city_name, PDO::PARAM_STR);
        $stmt->bindParam(4, $district_name, PDO::PARAM_STR);
        $stmt->bindParam(5, $registration_date, PDO::PARAM_STR);
        $stmt->bindParam(6, $plot_parcel, PDO::PARAM_STR);
        $stmt->bindParam(7, $order_by, PDO::PARAM_STR);
        $stmt->bindParam(8, $order_type, PDO::PARAM_STR);
        $stmt->bindParam(9, $limit, PDO::PARAM_INT);
        $stmt->bindParam(10, $offset, PDO::PARAM_INT);

        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function get_count_by_filter(
        string|null $first_name = null,
        string|null $last_name = null,
        string|null $city_name = null,
        string|null $district_name = null,
        string|null $registration_date = null,
        string|null $plot_parcel = null
    ): int|null
    {
        $stmt = $this->db->prepare("CALL FilterDeedsCount(?, ?, ?, ?, ?, ?)");

        $stmt->bindParam(1, $first_name, PDO::PARAM_STR);
        $stmt->bindParam(2, $last_name, PDO::PARAM_STR);
        $stmt->bindParam(3, $city_name, PDO::PARAM_STR);
        $stmt->bindParam(4, $district_name, PDO::PARAM_STR);
        $stmt->bindParam(5, $registration_date, PDO::PARAM_STR);
        $stmt->bindParam(6, $plot_parcel, PDO::PARAM_STR);

        $stmt->execute();
        return $stmt->fetchColumn();
    }


}