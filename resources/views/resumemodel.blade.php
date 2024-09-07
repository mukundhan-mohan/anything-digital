<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
        @page {
          size: A4;
          margin: 10mm;
        }
    
        html {
          margin: 0;
          font-family: Poppins, sans-serif;
          font-size: 10px;
          line-height: 1.1;
          height: 100%;
        }
    
        body {
          margin: 0;
          padding: 0;
        }
    
        .headingStyle {
          color: white;
          background-color: #172a99;
          font-size: 14px;
          font-weight: 700;
          text-transform: uppercase;
          padding: 0px 0px 5px 5px;
        }
    
        .fw-700 {
          font-weight: 700;
        }
    	
        .fw-600 {
          font-weight: 600;
        }
    
        .fw-500 {
          font-weight: 500;
        }
    
        .upperCase {
          text-transform: uppercase;
        }
    
        .content {
          margin: 2px 0;
        }
    	
        .contentText {
            font-size: 10px;
        }
    
        table {
          width: 100%;
          border-collapse: collapse;
        }
    
        td, th {
          padding: 2px;
          margin: 0;
          vertical-align: top;
        }
    
        tr {
          margin: 0;
          padding: 0;
        }
    
        .page-break {
          page-break-before: always;
        }
    
        /* Avoid breaking table rows across pages */
        /* table, tr, td {
          page-break-inside: avoid;
        } */
    
        p {
          margin: 4px;
        }
    
        .small-text {
            font-size: 8px !important;
            line-height: 1;
        }
        .tg{
            padding:10px;
        }

        .resumeIcons{
            height: 3rem;
            width: 3rem;
            background-size: contain;
            background-position: center;
            background-repeat: no-repeat;
            object-fit: contain;
            display:flex;
            align-items:center;
            justify-content: center;
            fill: red;
        }
        
        .zeroMarginPadding{
            padding:0px !important;
            margin: 0px !important;
        }

        .userName{
            font-size: 30px;
            font-weight: 700;
            white-space: nowrap;
            letter-spacing: 5px;
        }

        .profession{
            font-size: 15px;
            font-weight: 700;
        }
    </style>
</head>

<body>
    <table class="tg">
        <tbody>
            <tr>
                <td colspan="2" style="text-align: start;line-height:0;"> 
                    <h1 class="userName upperCase">{{ $data['first_name'] }} <span style="color:#172a99;">{{ $data['last_name'] }}</span></h1>
                    <p class="profession upperCase">{{ $data['user_job_title'] }}</p>
                </td>
            </tr>
            <div style="background-color:#172a99;width:40%;margin-left:5px;">
                <hr style="padding:1px;">
            </div>
            
            <tr>
                <td width="35%">
                    <p class="headingStyle">contact me</p>
                    <div class="content fw-600">
                        <table>
                            <tr>
                                <td width=25%><img class="resumeIcons" src="{{ env('STORAGE_PATH') }}public/resume_icons/Location.svg"></td>
                                <td width=75%><p>{{ $data['user_location'] }}</p></td>
                            </tr>
                            <tr>
                                <td width=25%><img class="resumeIcons" src="{{ env('STORAGE_PATH') }}public/resume_icons/Phone.svg"></td>
                                <td width=75%><p>{{ $data['user_phone'] }}</p></td>
                            </tr>
                            <tr>
                                <td width=25%><img class="resumeIcons" src="{{ env('STORAGE_PATH') }}public/resume_icons/Email.svg"></td>
                                <td width=75%><p>{{ $data['user_email'] }}</p></td>
                            </tr>
                            <tr>
                                <td width=25%><img class="resumeIcons" src="{{ env('STORAGE_PATH') }}public/resume_icons/Linkedin.svg"></td>
                                <td width=75%><a href="{{ $data['user_linkedin'] }}"><p>{{ $data['user_linkedin'] }}</p></a></td>
                            </tr>
                            @if($data['user_website'])
                                <tr>
                                    <td width=25%><img class="resumeIcons" src="{{ env('STORAGE_PATH') }}public/resume_icons/Web.svg"></td>
                                    <td width=75%><p>{{ $data['user_website'] }}</p></td>
                                </tr>
                            @endif
                        </table>
                    </div>
                    @if(!empty($data['languagesKnownArray']))
                        <p class="headingStyle">language</p>
                        <div class="content fw-600">
                            <table class="zeroMarginPadding">
                                @foreach($data['languagesKnownArray'] as $Language)
                                    <tr>
                                        <td width=30%>{{ $Language['language'] }}</td>
                                        @php
                                            $proficiency = $Language['lang_proficiency'];
                                            $icon = $proficiency == 'Beginner' ? 'STARS-02.svg' :
                                                    ($proficiency == 'Fluent' ? 'STARS-03.svg' :
                                                    ($proficiency == 'Proficient' ? 'STARS-04.svg' :
                                                    'STARS-05.svg'));
                                        @endphp
                                        <td width="70%">
                                            <img style="width: 100%; height: 25px; padding: 2px;" class="resumeIcons" 
                                                src="{{ env('STORAGE_PATH') }}public/resume_icons/{{ $icon }}">
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    @endif
                    @if(!empty($data['certificatesArray']))
                        <p class="headingStyle">certification</p>
                        @foreach($data['certificatesArray'] as $certificate)
                            <div class="content" style="line-height:1">
                                <p><b>{{$certificate['certificate_name']}}</b> - {{ $certificate['certificate_issued'] }}</p>
                                <p><small>ID: {{ $certificate['certificate_id']  }}</small></p>
                                <p style="font-size:smaller"><a href="{{ $certificate['certicate_link']  }}">{{ $certificate['certicate_link']  }}</a></p>
                            </div>
                        @endforeach
                    @endif
                    <p class="headingStyle">technical skills</p>
                    <div class="content fw-600">
                        <table class="zeroMarginPadding">
                            @foreach($data['skillsArray'] as $skills)
                                <tr>
                                    <td width=40%><p class="upperCase">{{ $skills['skills'] }}</p></td>
                                    @php
                                        $skillProf = $skills['skills_proficiency'];
                                        $skillIcon = $skillProf == 'Basic' ? 'STARS-02.svg' :
                                                ($skillProf == 'Intermediate' ? 'STARS-04.svg' :'STARS-05.svg');
                                    @endphp
                                    <td width=60%><img style="width: 100%;height:22px;padding:2px;" class="resumeIcons" src="{{ env('STORAGE_PATH') }}public/resume_icons/{{ $skillIcon }}"></td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                    @if(!empty($data['hobbiesArray']))
                        <p class="headingStyle">hobbies</p>
                        <div class="fw-600" style="margin: 0px 25px">
                            @foreach($data['hobbiesArray'] as $hobby)
                                <li>{{ $hobby['hobbies'] }}</li>
                            @endforeach
                        </div>
                    @endif
                    @if(!empty($data['extraCurricularArray']))
                        <p class="headingStyle" style="font-size:10px">Extra Curricular activities</p>
                        <div class="fw-600" style="margin: 0px 25px">
                            @foreach($data['extraCurricularArray'] as $extra)
                                <li>{{ $extra['extra_curricular_activites'] }}</li>
                            @endforeach
                        </div>
                    @endif
                </td>
                <td width="65%" valign="top">
                    <p class="headingStyle" style="width:65%"><span>about me</span></p>
                    <div class="content">
                        <p class="small-text">{!! $data['user_summary'] !!}</p>
                    </div>
                    <p class="headingStyle" style="width:65%"><span>experience</span></p>
                    <div class="content">
                        <table>
                            @foreach($data['workExpArray'] as $exp)
                                <tr>
                                    <td width="30%">
                                        <small class="fw-700">{{ $exp['work_start_year'] }} - {{ $exp['work_end_year'] }}</small>
                                        <small class="fw-700">{{ $exp['work_org_name'] }}</small>
                                        <small class="fw-700">{{ $exp['work_location'] }}</small>
                                    </td>
                                    <td width="70%">
                                        <small class="upperCase fw-600">{{ $exp['work_designation'] }}</small>
                                        <small style="font-size:7px;line-height:0.9;">{!! $exp['work_job_description'] !!}</small>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                    <p class="headingStyle" style="width:65%"><span>education</span></p>
                    <div class="content fw-600">
                        <table>
                            @foreach($data['EduDetailsArray'] as $education)
                                <tr>
                                    <td width="50%">
                                        <p>{{ $education['edu_start_year']}} - {{ $education['edu_end_year']}}</p>
                                        <p class="upperCase fw-500">{{ $education['edu_degree']}} </p>
                                    </td>
                                    <td width="40%">
                                        <p>{{ $education['edu_college_name'] }}</p>
                                        <p>{{ $education['edu_percentage'] }}{{ $education['edu_cgpa_percentage'] }}</p>
                                    </td>
                                    <td width="10%">
                                        <p>{{ $education['edu_location'] }}</p>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                    @if($data['selected_exp_level'] == 1)
                        <p class="headingStyle" style="width:65%;"><span>projects</span></p>
                        <div class="content">
                            <table>
                                @foreach($data['projectDetailsArray'] as $project)
                                    <tr>
                                        <td width="20%">
                                            <p class="fw-700">{{ $project['project_start_name']}} - {{ $project['project_end_name']}}</p>
                                        </td>
                                        <td width="80%">
                                            <p class="upperCase fw-600">{{ $project['project_name'] }}</p>
                                            <!-- <p class="small-text">{!! $project['project_description'] !!}</p> -->
                                            <small style="font-size:7px;line-height:0.9;">{!! $project['project_description'] !!}</small>
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    @endif
                    @if(!empty($data['referenceArray']))
                        <p class="headingStyle" style="width:65%"><span>reference</span></p>
                        <div class="content">
                            <table>
                                <tr style="line-height:1;">
                                    @foreach($data['referenceArray'] as $reference)
                                        <td width="50%">
                                            <p><b>{{ $reference['ref_name'] }}</b></p>
                                            <p><b>{{ $reference['ref_position'] }}, {{ $reference['ref_organization'] }}</b></p>
                                            <p>{{ $reference['ref_email'] }}</p>
                                            <p><b>phone:</b> {{ $reference['ref_contact'] }}</p>
                                        </td>
                                    @endforeach
                                </tr>
                            </table>
                        </div>
                    @endif
                </td>
            </tr>
        </tbody>
    </table>
</body>

</html>