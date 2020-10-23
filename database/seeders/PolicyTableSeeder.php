<?php

namespace Database\Seeders;

use App\Models\Policy;
use Illuminate\Database\Seeder;

class PolicyTableSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \DB::table("policies")->delete();
        for ($i = 0; $i < 100; $i++) {
            Policy::insert(["applicant_name" => "投保人" . $i, "insured_name" => "被保人" . $i, "policy_no" => "202021afdsa" . $i, "product_name" => "产品名称" . $i]);
        }
    }
}
