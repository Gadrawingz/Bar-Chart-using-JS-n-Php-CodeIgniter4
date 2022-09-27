<?php

namespace App\Controllers;
use App\Models\DepositModel;

class BarChartController extends BaseController{

    protected $db;
    public function __construct() {
        helper(['url', 'form']);
        $this->db = \Config\Database::connect();
    }

    // The main point for entry
    public function index() {
        $depositModel = new DepositModel();

        $depositData = $this->db->query("SELECT MONTHNAME(depo_date) AS month_name, SUM(amount) as amount FROM deposit GROUP BY month_name")->getResultArray();

        $data = [
            'deposits' => $depositData 
        ];

        return view('dynamic-chart', $data);
    }

}