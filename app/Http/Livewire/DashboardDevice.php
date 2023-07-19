<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\RequestException;
use Illuminate\Http\Client\Response;

class DashboardDevice extends Component
{
    public $data;

    protected $listeners = ['Device' => 'mount'];

    public function mount(){
        try {
        $response = Http::connectTimeout(3)->acceptJson()->get('http://192.168.3.166:3000/user');

            if ($response['status'] > 200) {
                $this->data = [
                    'status' => $response['status'],

                ];
            } else {
                $this->data = [
                    'status' => $response['status'],
                    'username' => $response['username'],
                    'nomor' => $response['nomor'],
                ];
            }
        }catch (RequestException $e) {
            
        } catch (\Exception $e) {
            // Tangkap kesalahan umum
            // abort(404);


            $this->data = [
                'status' => 505,

            ];
        }
        
    }


    public function render()
    {
        return view('livewire.dashboard-device');
    }
}
