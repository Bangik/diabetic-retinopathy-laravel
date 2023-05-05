<?php

namespace Database\Seeders;

use App\Models\Examination;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExaminationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $examinations = [
            [
                'patient_id' => 3,
                'doctor_id' => 2,
                'queue_number' => 'Q1',
                'status' => 'be examined',
                'room_number' => '1',
                'name' => 'Examination 1',
                'description' => 'Examination 1 description',
                'result' => 'Examination 1 result',
                'action' => 'Examination 1 action',
                'file' => 'Examination 1 file',
            ],
            [
                'patient_id' => 3,
                'doctor_id' => 2,
                'queue_number' => 'Q2',
                'status' => 'waiting',
                'room_number' => '2',
                'name' => 'Examination 2',
                'description' => 'Examination 2 description',
                'result' => 'Examination 2 result',
                'action' => 'Examination 2 action',
                'file' => 'Examination 2 file',
            ],
            [
                'patient_id' => 3,
                'doctor_id' => 2,
                'queue_number' => 'Q3',
                'status' => 'waiting',
                'room_number' => '3',
                'name' => 'Examination 3',
                'description' => 'Examination 3 description',
                'result' => 'Examination 3 result',
                'action' => 'Examination 3 action',
                'file' => 'Examination 3 file',
            ],
            [
                'patient_id' => 3,
                'doctor_id' => 2,
                'queue_number' => 'Q4',
                'status' => 'waiting',
                'room_number' => '4',
                'name' => 'Examination 4',
                'description' => 'Examination 4 description',
                'result' => 'Examination 4 result',
                'action' => 'Examination 4 action',
                'file' => 'Examination 4 file',
            ],
            [
                'patient_id' => 3,
                'doctor_id' => 2,
                'queue_number' => 'Q5',
                'status' => 'waiting',
                'room_number' => '1',
                'name' => 'Examination 5',
                'description' => 'Examination 5 description',
                'result' => 'Examination 5 result',
                'action' => 'Examination 5 action',
                'file' => 'Examination 5 file'
            ],
        ];

        foreach ($examinations as $examination) {
            Examination::create($examination);
        }
    }
}
