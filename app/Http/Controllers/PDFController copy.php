<?php

namespace App\Http\Controllers;

use TCPDF;
use Illuminate\Support\Facades\View;
use App\Models\family_rosters;
use App\Models\Grantees;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PDFController extends Controller
{
    public function generatePDF()
    {


        $pdf = new TCPDF();
        
       
        // Set document properties
        //$pdf->SetCreator('Laravel TCPDF');
        //$pdf->SetTitle('Generated PDF');
        //dd($_REQUEST['municipality']);
       
        $pdf->SetPrintHeader(false);
        $pdf->SetPrintFooter(false);
        // Set margins
        $pdf->SetMargins(10, -4, 10);
        $pdf->SetAutoPageBreak(true,1);
        // Add a page
        
        //$hh_id = '166806001-8923-00003';
        //$hh_id = $_REQUEST['hh_id'];
        //$PUROK = 'PUROK 1';
        $PROVINCE = $_REQUEST['prov'];
        $MUNICIPALITY = $_REQUEST['mun'];
        
        DB::table('grantees')
                            ->where('PROVINCE',$PROVINCE)
                            ->where('MUNICIPALITY',$MUNICIPALITY)
                            ->orderBy('PROVINCE','asc')
                            ->orderBy('MUNICIPALITY','asc')
                            ->orderBy('BARANGAY','asc')
                            ->orderBy('PUROK','asc')
                            ->chunk(200,function($grantees) use ($pdf){
                                //Dd($grantees);
                         foreach($grantees as $g)
                                {
                                    $grantee_id = $g->HH_ID;
                                    $grantee_fname = $g->FIRST_NAME;
                                    $grantee_lname = $g->LAST_NAME;
                                    $grantee_mname = $g->MIDDLE_NAME;
                                    $grantee_ext   = $g->EXT_NAME;
                                    $grantee_region = $g->REGION;
                                    $grantee_province = $g->PROVINCE;
                                    $grantee_municipality = $g->MUNICIPALITY;
                                    $grantee_barangay = $g->BARANGAY;
                                    $grantee_purok = $g->PUROK;
                               
                                    $data_grantee = [
                                                    ['HH_ID' => $grantee_id,
                                                    'FIRST_NAME'=>$grantee_fname, 
                                                    'LAST_NAME'=>$grantee_lname,
                                                    'MIDDLE_NAME'=>$grantee_mname,
                                                    'EXT_NAME' => $grantee_ext,
                                                    'REGION'=>$grantee_region,
                                                    'PROVINCE'=>$grantee_province,
                                                    'MUNICIPALITY'=>$grantee_municipality,
                                                    'BARANGAY'=>$grantee_barangay,
                                                    'PUROK'=>$grantee_purok
                                                    ]
                                        ]; 
                                        
                                    $family_rosters = family_rosters::where('hh_id',$grantee_id)
                                                        ->selectRaw('UPPER(LAST_NAME) as LAST_NAME,
                                                                    UPPER(FIRST_NAME) as FIRST_NAME,
                                                                    UPPER(MIDDLE_NAME) as MIDDLE_NAME,
                                                                    RELATION_TO_HH_HEAD,
                                                                    SEX,
                                                                    AGE,
                                                                    UPPER(BIRTHDAY) as BIRTHDAY,
                                                                    CIVIL_STATUS,
                                                                    GRADE_LEVEL,
                                                                    ATTEND_SCHOOL')
                                                        ->orderBy('RELATION_TO_HH_HEAD','asc')                
                                                        ->get();
                    
                                    $count_roster = $family_rosters->count();
                                    
                                    
                                    $pdf->AddPage();  
                                    $html = View::make('welcome',compact('family_rosters','data_grantee','count_roster'))->render();
                                    
                                    $pdf->writeHTML($html, true, false, true, false, '');                
                                }   
                            });
                            //->toSql();
                            //->getBindings();

        // dd($records);

                                
       // }while(!empty($records));

        // Output the PDF (Download)
        $pdf->Output('SWDI-GIS-'.$PROVINCE.'_'.$MUNICIPALITY.'.pdf', 'D'); // 'D' for download, 'I' for inline view
        //$pdf->Output('SWDI-GIS-'.$PROVINCE.'.pdf', 'D'); // 'D' for download, 'I' for inline view

            //.
    
            //$pdf->Output(storage_path('app/public/SWDI-GIS-'.$PROVINCE.'.pdf'), 'F'); // Save to file
            //return response()->download(storage_path('app/public/SWDI-GIS'.$PROVINCE.'_'.$MUNICIPALITY.'.pdf'));
    }
}
