<?php

namespace Database\Seeders;

use App\Models\Node;
use App\Models\Rainfall;
use App\Models\WaterFlow;
use App\Models\WaterLevel;
use App\Models\WindSpeed;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('nodes')->truncate();
        DB::table('water_flows')->truncate();
        DB::table('water_levels')->truncate();
        DB::table('rainfalls')->truncate();
        DB::table('wind_speeds')->truncate();

        for ($i = 1; $i <= 8; $i++) {
            $node = Node::create([
                'name' => "Node $i",
                'measurement_time' => 1,
                'status' => Node::STATUS_ACTIVE
            ]);

            for ($j = 1; $j <= 30; $j++) {
                WaterFlow::create([
                    'node_id' => $node->id,
                    'value' => rand(1, 100),
                    'time' => Carbon::now()->addMinutes($j)
                ]);

                WaterLevel::create([
                    'node_id' => $node->id,
                    'value' => rand(1, 100),
                    'time' => Carbon::now()->addMinutes($j)
                ]);

                Rainfall::create([
                    'node_id' => $node->id,
                    'value' => rand(1, 100),
                    'time' => Carbon::now()->addMinutes($j)
                ]);

                WindSpeed::create([
                    'node_id' => $node->id,
                    'value' => rand(1, 100),
                    'time' => Carbon::now()->addMinutes($j)
                ]);
            }
        }
    }
}
