<?php

namespace App\Listeners;

use App\Events\CRMEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\Contact;

class CRMListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  CRMEvent  $event
     * @return void
     */
    public function handle(CRMEvent $event)
    {
        // dd($event);
        try {	
                $data = $event->lead;
                $api3="Pbqs2d5MLVM0Eg03TqkSJRbmlPPgiGEe7mWn";
                $mobile =  '+'.$data['country_code'].$data['mobile'];
                // echo "https://crm.mahimagroup.com?apikey=$api3&entryPoint=webtolead&name=".$data['name']."&phone=".$mobile."&email=".$data['email']."&type=".$data['page']."&message=".$data['city'];
  
                $ch1 = curl_init();
                curl_setopt($ch1, CURLOPT_URL,"https://crm.mahimagroup.com?apikey=".$api3."&entryPoint=webtolead&name=".rawurlencode($data['name'])."&phone=".$mobile."&email=".$data['email']."&type=".rawurlencode($data['page'])."&message=".rawurlencode($data['city']));
                curl_setopt($ch1, CURLOPT_POST, 1);
                // curl_setopt($ch1, CURLOPT_POSTFIELDS, $data_string);
                curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);
                $response = curl_exec($ch1);
                $err = curl_error($ch1);	
                    if(isset($response)){
                        $status_code = explode(':',$response);
                            if($status_code[0] == '200'){
                                Contact::where('id',$data['id'])->update(['is_crm_status'=>1]);
                            }else{
                                    if($status_code[0] == '201'){
                                    Contact::where('id',$data['id'])->update(['is_crm_status'=>2]);
                                        $this->write_to_file_duplicate(json_encode($data));
                                    }else{
                                         Contact::where('id',$data['id'])->update(['is_crm_status'=>3]);
                                         $this->write_to_file(json_encode($data));
                                    }
                                }
                    }else{
                            Contact::where('id',$data['id'])->update(['is_crm_status'=>3]);
                            $this->write_to_file(json_encode($data));
                        }	
                curl_close($ch1);	
            }catch (\Excaption $th) {
            }   
    }


    function write_to_file($txt){
        $txt = trim(preg_replace('/\s\s+/', ' ', $txt));
        $folder = getcwd()."/storage/log/failedlog";
        if (!file_exists($folder)) {
            mkdir($folder, 0777, true);
        }
        $file = $folder."/".'failedlog_file'.time().'.txt';
        $fh = fopen($file, 'a');
        fwrite($fh, $txt."\n");
    }
    
    function write_to_file_duplicate($txt){
        $txt = trim(preg_replace('/\s\s+/', ' ', $txt));
        $folder = getcwd()."/storage/duplicate";
        if (!file_exists($folder)) {
            mkdir($folder, 0777, true);
        }
        $file = $folder."/".'duplicate_log_file'.time().'.txt';
        $fh = fopen($file, 'a');
        fwrite($fh, $txt."\n");
    }


}
