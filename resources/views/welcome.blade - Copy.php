<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SWDI 2023</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
            padding: 1px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 0px;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        .title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .header {
            font-size: 8px;
            margin-bottom: 0px;
        }
        .subtitle {
            font-size: 14px;
            margin-bottom: 0px;
            font-weight: bold;
            font-style: italic;
        }
        .font_address{
            text-decoration:underline;
            font-size: 10px;

        }

        .section {
            margin-bottom: 1;
        }

        .table_th{
            font-family: Arial MT;
            font-size: 7px;
        }

        .normalfont{
            font-style: normal;
            font-family: Arial MT;
            font-size: 12px;
            
        }
    </style>
</head>
<body>
<div class="container">
        <div class="title"></div>
<table>
                    <tr>
                        <td align="right"> Form 1</td>
                      
                    </tr>
                    <tr>
                     
                        <td align="center">Department of Social Welfare and Development </td>
                         
                    </tr>
                    <tr>
                
                        <td align="center">Batasan Complex Constitution Hills Quezon City</td>
                    </tr>
                    <tr>
                
                            <td align="center">&nbsp;</td>
                     </tr>
                     <tr>
                
                            <td align="center">&nbsp;</td>
                     </tr>
                    <tr>
                
                        <td align="center" class="title">GENERAL INTAKE SHEET</td>
                    </tr>

                    <tr>

                        <td align="center">
                               

                        </td>
                 </tr>
            </table>

  <table position="relative" width="100%" border-colapse="collapse">
    <tr>
         <td class="header">CONFIDENTIALITY: This data collection activity is authorized by the Department of Social Welfare and Development (DSWD). NO data/information collected thru this activity can be used for taxation purposes.</td>
    </tr>
  </table>
        <br>
    
          Date of Interview:__________&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          Time Started:__________  
          <br>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          &nbsp;&nbsp;<font class="table_th">(mm/dd/yyyy)</font>
          &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Wave No.:__________  
  
            <div class="subtitle">Part I. Family Identification</div>
            <table z-index: 3>
                <tr><br>
                    @foreach ($data_grantee as $grantee )
                        <th height="20px">1. ID No.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <table border="1">
                            @php 
                                
                                $hhid_array = str_split($grantee['HH_ID']); 
                                $hh_count = strlen($grantee['HH_ID']);
                                $box_bilin = 25 - $hh_count;
                                

                            @endphp
                                <tr>
                                @foreach ($hhid_array as $hid)<td width="4%"> {{ $hid }} </td> @endforeach
                                @if($box_bilin > 1) @for($i=0;$i<$box_bilin;$i++) <td width="4%"></td> @endfor @endif 
                               </tr>
                        </table>         
                    </th>
                </tr>
                <tr>        
                        <th>2. Name of Grantee &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <!--img src="images/image003.gif" height="15" width="400"-->
                            <table border="1">
                                <tr>
                                    <td width="30%">{{ strtoupper($grantee['LAST_NAME']) }} </td>
                                    <td width="30%">{{ strtoupper($grantee['FIRST_NAME']) }} </td>
                                    <td width="30%">{{ strtoupper($grantee['MIDDLE_NAME']) }} </td>
                                    <td width="10%">{{ strtoupper($grantee['EXT_NAME']) }}</td>
                                </tr>
                            </table>
                       </th>
                </tr>
                <tr>        
                        <th>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        Last Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        First Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        Middle Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        Ext.
                        </th>
                </tr>
                <tr>
                        <th>3. Name of Respondent 
                            
                        <table border="1">
                                <tr>
                                    <td width="30%">&nbsp; </td>
                                    <td width="30%">&nbsp; </td>
                                    <td width="30%">&nbsp;</td>
                                    <td width="10%">&nbsp;</td>
                                </tr>
                            </table>
                        </th>
                   
                        
                    @endforeach
                    
                </tr>
                <tr>        
                        <th>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        Last Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        First Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        Middle Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        Ext.
                        </th>
                </tr>
           
            </table>
            <table border="0">
                <tr>
                    <th width="50%"><br><br>
                     4. Religion 
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img margin="5px" src="images/image005.gif" height="15" width="70"> ___________
                    <br>
                    <font class="table_th">(refer to codes in Annex 1)</font>
                    <br>
                    5. IP Membership &nbsp;&nbsp;<img src="images/image005.gif" height="15" width="70"> ___________<br>
                    <font class="table_th">(refer to codes in Annex 1)</font>
                    </th>
                 
                    <th width="50%">
                        <table border="0" widht="100%">
                            <tr>
                                <td width="42%">6. Present Address</td>
                                <td width="18%"></td>
                                <td width="41%"></td>
                                
                            </tr>
                            <tr>
                                <td>&nbsp;Region
                                

                                </td>
                                <td>
                                    <table border="1">
                                            <tr>
                                                <td></td>
                                                <td></td>
                                            </tr>

                                        </table>   

                                </td>
                                <td class="font_address">{{$grantee['REGION']}} </td>
                               
                            </tr>
                            <tr>
                                <td>&nbsp;Province
                                

                                </td>
                                <td>
                                <table border="1">
                                            <tr>
                                                <td></td>
                                                <td></td>
                                            </tr>

                                        </table>

                                </td>
                                <td class="font_address">{{$grantee['PROVINCE']}}</td>
                            </tr>
                            <tr>
                                <td > City/Municipality
                                

                                </td>
                                <td>
                                <table border="1">
                                            <tr>
                                                <td></td>
                                                <td></td>
                                            </tr>

                                        </table>
                                </td>
                                <td class="font_address"> {{$grantee['MUNICIPALITY']}} </td>
                              
                            </tr>
                            <tr>
                                <td> Barangay &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                               

                                </td>
                                  <td> <table border="1">
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>

                                        </table></td>
                                  <td class="font_address"> {{$grantee['BARANGAY']}} </td>
                            </tr>
                            <tr>
                                <td> Purok/Street No.</td>
                                <td colspan="2" class="font_address"> {{$grantee['PUROK']}} </td>
                                
                            </tr>
                        </table>
                    </th>
                </tr>

            </table>
        
       
            <div><font style="font-style:italic;font-weight: bold;font-size:14px">Part II. Family Composition </font><font style="font-style: normal;">(Use additional sheets if necessary; refer to codes in Annex 1)</font></div> 
            <table class="table_th" border="1">
                <tr>
                    <th width="4%">Line No.</th>
                    <th width="10%">Last Name</th>
                    <th width="10%">First Name</th>
                    <th width="9%">Middle Name</th>
                    <th width="9%">Relationship to Grantee</th>
                    <th width="6%">Sex</th>
                    <th width="4%">Age</th>
                    <th width="8%">Birthdate</th>
                    <th width="8%">Marital Status</th>
                    <th width="11%">Highest Educational Attainment</th>
                    <th width="6%">Currently Attending School</th>
                    <th width="5%">Primary Occupation</th>
                    <th width="5%">Class of Worker</th>
                    <th width="5%">Remarks</th>
                </tr>

                <tr>
                    <th> (1)</th>
                    <th>(2)</th>
                    <th>(3)</th>
                    <th>(4)</th>
                    <th>(5)</th>
                    <th>(6)</th>
                    <th>(7)</th>
                    <th>(8)</th>
                    <th>(9)</th>
                    <th>(10)</th>
                    <th>(11)</th>
                    <th>(12)</th>
                    <th>(13)</th>
                    <th>(14)</th>
                </tr>
                @php 
                
                    $x=1; 
                    if($count_roster<6){
                @endphp

                @foreach ($family_rosters as $roster )
                <tr>
                    <td height="10">{{ $x."."; }}</td>
                    <td>{{ $roster->LAST_NAME }}</td>
                    <td>{{ $roster->FIRST_NAME}}</td>
                    <td>{{ $roster->MIDDLE_NAME }}</td>
                    <td>{{ $roster->RELATION_TO_HH_HEAD }}</td>
                    <td>{{ $roster->SEX }}</td>
                    <td>{{ $roster->AGE }}</td>
                    <td>{{ $roster->BIRTHDAY }}</td>
                    <td>{{ $roster->CIVIL_STATUS}}</td>
                    <td>{{ $roster->GRADE_LEVEL }}</td>
                    <td>{{ $roster->ATTEND_SCHOOL }}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                @php $x++; @endphp
                @endforeach 

                @php
                    $counter = 10-$count_roster;
                    for($x=0;$x<=$counter;$x++){
                   
                @endphp
                <tr>
                    <td height="10"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                @php
                    }
                @endphp
               
            </table>
           
            <table>
            <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><font style="font-style:normal;font-weight: normal;font-size:12px">Accomplished by:</font></td>
                    <td><font style="font-style:normal;font-weight: normal;font-size:12px">If not the ML/SWO</font></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>____________________________________</td>
                    <td>_________________________________</td>
                </tr>
                <tr>
                    <td><font style="font-style:normal;font-size:12px">Signature over Printed Name of the ML/SWO</font></td>
                    <td><font style="font-style:normal;font-size:12px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Signature over Printed Name</font></td>
                </tr>
                <tr>
                    <td><font style="font-style:normal;font-size:8px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Last Name, First Name, Middle Name)</font></td>
                    <td><font style="font-style:normal;font-size:8px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Last Name, First Name, Middle Name and Designation)</font></td>
                </tr>
            </table> 
         
            
          
            @php
                }
                else if($count_roster==7)
                {
            @endphp

            @foreach ($family_rosters as $roster )
                <tr>
                    <td height="20">{{ $x."."; }}</td>
                    <td>{{$roster->LAST_NAME}}</td>
                    <td>{{$roster->FIRST_NAME}}</td>
                    <td>{{$roster->MIDDLE_NAME}}</td>
                    <td>{{$roster->RELATION_TO_HH_HEAD}}</td>
                    <td>{{$roster->SEX}}</td>
                    <td>{{$roster->AGE}}</td>
                    <td>{{$roster->BIRTHDAY}}</td>
                    <td>{{$roster->CIVIL_STATUS}}</td>
                    <td>{{$roster->GRADE_LEVEL}}</td>
                    <td>{{$roster->ATTEND_SCHOOL}}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                @php $x++; @endphp
                @endforeach 

                @php
                    $counter = 3;
                    for($x=0;$x<$counter;$x++){
                   
                @endphp
                <tr>
                    <td height="20"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                @php
                    }
                @endphp
                
             
                <tr>
                    <td height="20"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
               
            </table>
            <table>
            <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><font style="font-style:normal;font-weight: normal;font-size:12px">Accomplished by:</font></td>
                    <td><font style="font-style:normal;font-weight: normal;font-size:12px">If not the ML/SWO</font></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>____________________________________</td>
                    <td>_________________________________</td>
                </tr>
                <tr>
                    <td><font style="font-style:normal;font-size:12px">Signature over Printed Name of the ML/SWO</font></td>
                    <td><font style="font-style:normal;font-size:12px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Signature over Printed Name</font></td>
                </tr>
                <tr>
                    <td><font style="font-style:normal;font-size:8px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Last Name, First Name, Middle Name)</font></td>
                    <td><font style="font-style:normal;font-size:8px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Last Name, First Name, Middle Name and Designation)</font></td>
                </tr>
            </table> 

            @php
                }else if($count_roster==8)
                {
            @endphp

            @foreach ($family_rosters as $roster )
                <tr>
                    <td height="20">{{ $x."."; }}</td>
                    <td>{{$roster->LAST_NAME}}</td>
                    <td>{{$roster->FIRST_NAME}}</td>
                    <td>{{$roster->MIDDLE_NAME}}</td>
                    <td>{{$roster->RELATION_TO_HH_HEAD}}</td>
                    <td>{{$roster->SEX}}</td>
                    <td>{{$roster->AGE}}</td>
                    <td>{{$roster->BIRTHDAY}}</td>
                    <td>{{$roster->CIVIL_STATUS}}</td>
                    <td>{{$roster->GRADE_LEVEL}}</td>
                    <td>{{$roster->ATTEND_SCHOOL}}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                @php $x++; @endphp
                @endforeach 

                @php
                    $counter = 2;
                    for($x=0;$x<$counter;$x++){
                   
                @endphp
                <tr>
                    <td height="20"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                @php
                    }
                @endphp
               
                <tr>
                    <td height="20"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td height="20"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
               
            </table>
            <table>
            <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><font style="font-style:normal;font-weight: normal;font-size:12px">Accomplished by:</font></td>
                    <td><font style="font-style:normal;font-weight: normal;font-size:12px">If not the ML/SWO</font></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>____________________________________</td>
                    <td>_________________________________</td>
                </tr>
                <tr>
                    <td><font style="font-style:normal;font-size:12px">Signature over Printed Name of the ML/SWO</font></td>
                    <td><font style="font-style:normal;font-size:12px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Signature over Printed Name</font></td>
                </tr>
                <tr>
                    <td><font style="font-style:normal;font-size:8px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Last Name, First Name, Middle Name)</font></td>
                    <td><font style="font-style:normal;font-size:8px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Last Name, First Name, Middle Name and Designation)</font></td>
                </tr>
            </table> 

            @php
                }
                else if($count_roster==9)
                {
            @endphp

            @foreach ($family_rosters as $roster )
                <tr>
                    <td height="20">{{ $x."."; }}</td>
                    <td>{{$roster->LAST_NAME}}</td>
                    <td>{{$roster->FIRST_NAME}}</td>
                    <td>{{$roster->MIDDLE_NAME}}</td>
                    <td>{{$roster->RELATION_TO_HH_HEAD}}</td>
                    <td>{{$roster->SEX}}</td>
                    <td>{{$roster->AGE}}</td>
                    <td>{{$roster->BIRTHDAY}}</td>
                    <td>{{$roster->CIVIL_STATUS}}</td>
                    <td>{{$roster->GRADE_LEVEL}}</td>
                    <td>{{$roster->ATTEND_SCHOOL}}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                @php $x++; @endphp
                @endforeach 

                @php
                    $counter = 1;
                    for($x=0;$x<$counter;$x++){
                   
                @endphp
                <tr>
                    <td height="20"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                @php
                    }
                @endphp

            
                <tr>
                    <td height="20"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td height="20"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td height="20"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
               
            </table>
            <table>
            <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><font style="font-style:normal;font-weight: normal;font-size:12px">Accomplished by:</font></td>
                    <td><font style="font-style:normal;font-weight: normal;font-size:12px">If not the ML/SWO</font></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>____________________________________</td>
                    <td>_________________________________</td>
                </tr>
                <tr>
                    <td><font style="font-style:normal;font-size:12px">Signature over Printed Name of the ML/SWO</font></td>
                    <td><font style="font-style:normal;font-size:12px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Signature over Printed Name</font></td>
                </tr>
                <tr>
                    <td><font style="font-style:normal;font-size:8px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Last Name, First Name, Middle Name)</font></td>
                    <td><font style="font-style:normal;font-size:8px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Last Name, First Name, Middle Name and Designation)</font></td>
                </tr>
            </table> 

            @php
                }
                else if($count_roster>=10)
                {
            @endphp

            @foreach ($family_rosters as $roster )
                <tr>
                    <td height="20">{{ $x."."; }}</td>
                    <td>{{$roster->LAST_NAME}}</td>
                    <td>{{$roster->FIRST_NAME}}</td>
                    <td>{{$roster->MIDDLE_NAME}}</td>
                    <td>{{$roster->RELATION_TO_HH_HEAD}}</td>
                    <td>{{$roster->SEX}}</td>
                    <td>{{$roster->AGE}}</td>
                    <td>{{$roster->BIRTHDAY}}</td>
                    <td>{{$roster->CIVIL_STATUS}}</td>
                    <td>{{$roster->GRADE_LEVEL}}</td>
                    <td>{{$roster->ATTEND_SCHOOL}}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                @php $x++; @endphp
                @endforeach 

                @php
                    $counter = 10-$count_roster;
                    for($x=0;$x<=$counter;$x++){
                   
                @endphp
                <tr>
                    <td height="20"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

                @php
                    }
                @endphp
               
                  
                    <tr>
                    <td height="20"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td height="20"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <tr>
                    <td height="20"></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            
             
            </table>
            <br><br><br><br><br><br><br><br>
            <table>
            <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td><font style="font-style:normal;font-weight: normal;font-size:12px">Accomplished by:</font></td>
                    <td><font style="font-style:normal;font-weight: normal;font-size:12px">If not the ML/SWO</font></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td>&nbsp;</td>
                </tr>
                <tr>
                    <td>____________________________________</td>
                    <td>_________________________________</td>
                </tr>
                <tr>
                    <td><font style="font-style:normal;font-size:12px">Signature over Printed Name of the ML/SWO</font></td>
                    <td><font style="font-style:normal;font-size:12px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Signature over Printed Name</font></td>
                </tr>
                <tr>
                    <td><font style="font-style:normal;font-size:8px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Last Name, First Name, Middle Name)</font></td>
                    <td><font style="font-style:normal;font-size:8px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Last Name, First Name, Middle Name and Designation)</font></td>
                </tr>
            </table> 

            @php
                }
            @endphp
    </div>
</body>
</html>