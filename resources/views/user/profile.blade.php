@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <div class="profile">
        <div class="name-container">
            <div class="container">
                <img src="{{ $user->image }}" alt="" class="avatar">
            </div>
            <section class="name">
                <div class="container">
                    <div class="row">
                        <h1>{{ $user->name }}</h1>
                    </div>
                </div>
            </section>
            @if ($project)
            <section class="project-details">
                <div class="container">
                    <div class="row">
                        <h2>HackMonth Website</h2>
                    </div>
                    <div class="row">
                        <h3><a href="https://github.com/rob-lowcock/hackmonth">github.com/rob-lowcock/hackmonth</a><svg width="24px" height="20px" viewBox="0 0 24 20" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <title>Private repository - visible only to you</title>
                                <g id="Welcome" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                    <g id="Desktop-Copy" transform="translate(-594.000000, -315.000000)" stroke="#6C38C4">
                                        <g id="view-off" transform="translate(594.000000, 315.000000)">
                                            <path d="M19.518,6.288 C20.9931662,7.35658827 22.3306338,8.6033687 23.5,10 C23.5,10 18.352,16.5 12,16.5 C10.9825715,16.4943537 9.97159411,16.3379892 9,16.036" id="Path"></path>
                                            <path d="M4.468,13.7 C2.99842344,12.6342775 1.66572143,11.3915866 0.5,10 C0.5,10 5.648,3.5 12,3.5 C12.8436321,3.50355982 13.6834986,3.61274247 14.5,3.825" id="Path"></path>
                                            <path d="M8,10 C8,7.790861 9.790861,6 12,6" id="Path"></path>
                                            <path d="M16,10 C16,12.209139 14.209139,14 12,14" id="Path"></path>
                                            <path d="M21.75,0.25 L2.25,19.75" id="Path"></path>
                                        </g>
                                    </g>
                                </g>
                            </svg></h3>
                    </div>
                </div>
            </section>
            @endif
        </div>

        @if($project)
        <div class="container timeline">
            <div class="row">
                <div class="col-1 day">Day 08</div>
                <div class="col-11 work">2 commits</div>
            </div>
            <div class="row">
                <div class="col-1 day">Day 07</div>
                <div class="col-11 work">
                    <div class="achievement container-fluid">
                        <div class="row">
                        <div class="col-1 col-2-md">
                        <svg width="48px" height="48px" viewBox="0 0 48 48" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Welcome" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                                <g id="Desktop-Copy" transform="translate(-217.000000, -452.000000)" stroke="#FFFFFF" stroke-width="2">
                                    <g id="Timeline" transform="translate(42.000000, 403.000000)">
                                        <g id="gaming-trophy-5" transform="translate(176.000000, 50.000000)">
                                            <path d="M27,6 L19,6 L19,10 C19,11.1045695 19.8954305,12 21,12 L24,12 C25.6568542,12 27,13.3431458 27,15 C27,16.6568542 25.6568542,18 24,18 L19,18" id="Path"></path>
                                            <path d="M5.13864312,27 C2.04967383,25.7990875 -0.000962606304,22.7017225 3.38991428e-07,19.2383841 L3.38991428e-07,14.0681097 C3.38991428e-07,12.9259243 0.880462925,12 1.96656857,12 L6,12" id="Path"></path>
                                            <path d="M40.8613569,27 C43.9503262,25.7990875 46.0009626,22.7017225 45.9999997,19.2383841 L45.9999997,14.0681097 C45.9999997,12.9259243 45.1195371,12 44.0334314,12 L40,12" id="Path"></path>
                                            <path d="M40.9993729,2.05000009 C41.0128797,1.51095781 40.807729,0.989309658 40.4304438,0.603352295 C40.0531586,0.217394931 39.5357072,-0.000168432535 38.9954347,9.78381596e-08 L7.00456533,9.78381596e-08 C6.46429279,-0.000168432535 5.94684143,0.217394931 5.56955621,0.603352295 C5.19227099,0.989309658 4.98712029,1.51095781 5.00062713,2.05000009 C5.69599369,30.478 20.9379476,22.3560001 20.9379476,33 C20.827731,39.164 18.266698,41.45 13.8780733,41.91 C12.8055196,42.0216186 11.9907047,42.9237504 11.9903636,44 C11.9903636,45.1045695 12.8875572,46 13.9943018,46 L32.0056982,46 C33.1124428,46 34.0096364,45.1045695 34.0096364,44 C34.0092953,42.9237504 33.1944804,42.0216186 32.1219267,41.91 C27.733302,41.45 25.172269,39.164 25.0620524,33 C25.0620524,22.3560001 40.3040063,30.478 40.9993729,2.05000009 Z" id="Path"></path>
                                        </g>
                                    </g>
                                </g>
                            </g>
                        </svg>
                        </div>
                        <div class="col-11 col-10-md">
                            <h3>5-day streak</h3>
                            <p>Commit code 5 days in a row</p>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-1 day">Day 06</div>
                <div class="col-11 work">2 commits</div>
            </div>
        </div>
{{--        @elseif($is_current)--}}
{{--            <div class="container"></div>--}}
        @else
            <div class="container project-message">
                <div class="row">
                    <div class="col-12">
                        <svg xmlns="http://www.w3.org/2000/svg" id="Line" width="220px" viewBox="0 0 178 178">
                            <defs>
                                <style>.cls-1{fill:none;stroke:#6C38C4;stroke-linecap:round;stroke-linejoin:round;}</style>
                            </defs>
                            <g id="Icons">
                                <path class="cls-1" d="M138,4H39.52a6.54,6.54,0,0,0-5.84,3.61h0V9.42H143.85V7.61h0A6.55,6.55,0,0,0,138,4Z"></path>
                                <path class="cls-1" d="M143.85,9.42a1.89,1.89,0,0,1-.14.69l-9.79,30.48a5.51,5.51,0,0,1-1.32,1.77"></path>
                                <path class="cls-1" d="M45.35,42.7a5.37,5.37,0,0,1-1.74-2.11L33.82,10.11a1.7,1.7,0,0,1-.14-.69"></path>
                                <path class="cls-1" d="M143.83,9.65a2,2,0,0,1-.12.46l-9.79,30.48a5.51,5.51,0,0,1-1.74,2.11"></path>
                                <path class="cls-1" d="M129.4,103.33H48.13a5.42,5.42,0,0,1-5.42-5.42V47.35a5.42,5.42,0,0,1,5.42-5.42H129.4a5.42,5.42,0,0,1,5.42,5.42V97.91A5.42,5.42,0,0,1,129.4,103.33Z"></path>
                                <rect class="cls-1" x="53.55" y="41.93" width="70.44" height="7.22"></rect>
                                <rect class="cls-1" x="53.55" y="41.93" width="70.44" height="3.61"></rect>
                                <path class="cls-1" d="M96.89,97.91H80.64a1.8,1.8,0,0,1-1.81-1.8V85.27a1.8,1.8,0,0,1,1.81-1.8H96.89a1.8,1.8,0,0,1,1.81,1.8V96.11A1.8,1.8,0,0,1,96.89,97.91Z"></path>
                                <path class="cls-1" d="M122.18,52.76H55.35a1.81,1.81,0,0,0-1.8,1.81V78.05a1.8,1.8,0,0,0,1.8,1.8h66.83a1.8,1.8,0,0,0,1.8-1.8V54.57A1.81,1.81,0,0,0,122.18,52.76Z"></path>
                                <line class="cls-1" x1="58.97" y1="74.44" x2="64.38" y2="74.44"></line>
                                <line class="cls-1" x1="58.97" y1="69.02" x2="64.38" y2="69.02"></line>
                                <line class="cls-1" x1="58.97" y1="63.6" x2="64.38" y2="63.6"></line>
                                <line class="cls-1" x1="58.97" y1="58.18" x2="64.38" y2="58.18"></line>
                                <line class="cls-1" x1="68" y1="69.02" x2="73.41" y2="69.02"></line>
                                <line class="cls-1" x1="68" y1="63.6" x2="73.41" y2="63.6"></line>
                                <line class="cls-1" x1="68" y1="58.18" x2="73.41" y2="58.18"></line>
                                <line class="cls-1" x1="77.03" y1="69.02" x2="82.44" y2="69.02"></line>
                                <line class="cls-1" x1="77.03" y1="63.6" x2="82.44" y2="63.6"></line>
                                <line class="cls-1" x1="77.03" y1="58.18" x2="82.44" y2="58.18"></line>
                                <line class="cls-1" x1="86.06" y1="69.02" x2="91.47" y2="69.02"></line>
                                <line class="cls-1" x1="86.06" y1="63.6" x2="91.47" y2="63.6"></line>
                                <line class="cls-1" x1="86.06" y1="58.18" x2="91.47" y2="58.18"></line>
                                <line class="cls-1" x1="95.09" y1="69.02" x2="100.5" y2="69.02"></line>
                                <line class="cls-1" x1="95.09" y1="63.6" x2="100.5" y2="63.6"></line>
                                <line class="cls-1" x1="95.09" y1="58.18" x2="100.5" y2="58.18"></line>
                                <line class="cls-1" x1="104.12" y1="69.02" x2="109.53" y2="69.02"></line>
                                <line class="cls-1" x1="104.12" y1="63.6" x2="109.53" y2="63.6"></line>
                                <line class="cls-1" x1="104.12" y1="58.18" x2="109.53" y2="58.18"></line>
                                <line class="cls-1" x1="113.15" y1="69.02" x2="118.56" y2="69.02"></line>
                                <line class="cls-1" x1="113.15" y1="63.6" x2="118.56" y2="63.6"></line>
                                <line class="cls-1" x1="113.15" y1="58.18" x2="118.56" y2="58.18"></line>
                                <line class="cls-1" x1="68" y1="74.44" x2="73.41" y2="74.44"></line>
                                <line class="cls-1" x1="77.03" y1="74.44" x2="100.5" y2="74.44"></line>
                                <line class="cls-1" x1="104.12" y1="74.44" x2="109.53" y2="74.44"></line>
                                <line class="cls-1" x1="113.15" y1="74.44" x2="118.56" y2="74.44"></line>
                                <polygon class="cls-1" points="134.82 14.84 42.71 14.84 49.93 36.51 127.59 36.51 134.82 14.84"></polygon>
                                <line class="cls-1" x1="49.93" y1="20.25" x2="57.16" y2="20.25"></line>
                                <line class="cls-1" x1="55.35" y1="23.87" x2="64.38" y2="23.87"></line>
                                <line class="cls-1" x1="58.96" y1="27.48" x2="67.99" y2="27.48"></line>
                                <line class="cls-1" x1="57.16" y1="31.09" x2="64.38" y2="31.09"></line>
                                <line class="cls-1" x1="115.85" y1="14.84" x2="113.15" y2="36.51"></line>
                                <line class="cls-1" x1="67.99" y1="23.87" x2="69.8" y2="23.87"></line>
                                <line class="cls-1" x1="60.77" y1="20.25" x2="62.58" y2="20.25"></line>
                                <line class="cls-1" x1="71.61" y1="27.48" x2="77.02" y2="27.48"></line>
                                <path class="cls-1" d="M162,110.62,165.4,114a2.71,2.71,0,0,0,3.84-3.83l-3.42-3.42"></path>
                                <circle class="cls-1" cx="155.83" cy="100.63" r="11.74"></circle>
                                <circle class="cls-1" cx="155.83" cy="100.63" r="8.13"></circle>
                                <path class="cls-1" d="M144.26,126.9a1.8,1.8,0,0,0-.49,3.54,1.68,1.68,0,0,0,.5.07,1.8,1.8,0,0,0,.49-3.54,1.73,1.73,0,0,0-.5-.07Z"></path>
                                <path class="cls-1" d="M137.07,127.59l-2.48,8.69a7.23,7.23,0,1,0,13.9,4l2.47-8.68a7.22,7.22,0,1,0-13.89-4Z"></path>
                                <path class="cls-1" d="M125.49,122.07a1.81,1.81,0,0,1,1.21,2.25L112,172.72a1.81,1.81,0,0,1-2.25,1.2"></path>
                                <line class="cls-1" x1="109.53" y1="122.89" x2="111.82" y2="123.59"></line>
                                <path class="cls-1" d="M69.8,157.94,58.6,122.42a1.81,1.81,0,0,1,1.18-2.27l10-3.16"></path>
                                <path class="cls-1" d="M92.83,166.54l-16.76,5.29a1.81,1.81,0,0,1-2.27-1.18l-1.29-4.11"></path>
                                <path class="cls-1" d="M85.09,112.17l9.14-2.88a1.81,1.81,0,0,1,2.27,1.18l.6,1.89"></path>
                                <line class="cls-1" x1="64.86" y1="124.23" x2="69.8" y2="122.67"></line>
                                <line class="cls-1" x1="66.49" y1="129.4" x2="69.8" y2="128.36"></line>
                                <line class="cls-1" x1="68.11" y1="134.57" x2="69.8" y2="134.04"></line>
                                <path class="cls-1" d="M109.53,164.74a1.79,1.79,0,0,1-1.8,1.8H71.61a1.8,1.8,0,0,1-1.81-1.8V114.17a1.81,1.81,0,0,1,1.81-1.81h36.12a1.8,1.8,0,0,1,1.8,1.81Z"></path>
                                <ellipse class="cls-1" cx="80.63" cy="121.4" rx="5.42" ry="3.61"></ellipse>
                                <ellipse class="cls-1" cx="80.63" cy="157.52" rx="5.42" ry="3.61"></ellipse>
                                <line class="cls-1" x1="80.63" y1="125.01" x2="80.63" y2="128.62"></line>
                                <rect class="cls-1" x="77.02" y="128.62" width="7.22" height="3.61"></rect>
                                <rect class="cls-1" x="96.88" y="128.62" width="7.22" height="3.61"></rect>
                                <line class="cls-1" x1="80.63" y1="132.23" x2="80.63" y2="135.85"></line>
                                <rect class="cls-1" x="78.07" y="136.9" width="5.11" height="5.11" transform="translate(-75 97.86) rotate(-45)"></rect>
                                <rect class="cls-1" x="97.94" y="145.93" width="5.11" height="5.11" transform="translate(-75.56 114.55) rotate(-45)"></rect>
                                <line class="cls-1" x1="80.63" y1="143.07" x2="80.63" y2="146.68"></line>
                                <polygon class="cls-1" points="104.11 141.26 95.08 141.26 96.88 137.65 105.91 137.65 104.11 141.26"></polygon>
                                <line class="cls-1" x1="100.49" y1="141.26" x2="100.49" y2="144.88"></line>
                                <line class="cls-1" x1="100.49" y1="132.23" x2="100.49" y2="137.65"></line>
                                <line class="cls-1" x1="96.88" y1="148.49" x2="86.05" y2="148.49"></line>
                                <rect class="cls-1" x="75.21" y="146.68" width="10.84" height="3.61"></rect>
                                <line class="cls-1" x1="80.63" y1="150.29" x2="80.63" y2="153.91"></line>
                                <polyline class="cls-1" points="96.88 130.43 91.47 130.43 91.47 139.46 84.24 139.46"></polyline>
                                <path class="cls-1" d="M42.75,118.89l-14.9,7.89a2.39,2.39,0,0,1-3.25-1L8.25,94.93a2.42,2.42,0,0,1,1-3.26l14.9-7.89a2.41,2.41,0,0,1,3.25,1l16.35,30.86A2.41,2.41,0,0,1,42.75,118.89Z"></path>
                                <rect class="cls-1" x="14.74" y="92.74" width="21.67" height="23.48" transform="translate(-45.94 24.14) rotate(-27.92)"></rect>
                                <line class="cls-1" x1="16.79" y1="91.77" x2="19.99" y2="90.07"></line>
                                <path class="cls-1" d="M34,118.42a.92.92,0,0,1-.38,1.23.9.9,0,1,1,.38-1.23Z"></path>
                                <path class="cls-1" d="M109.53,117.23l16,4.84"></path>
                                <path class="cls-1" d="M109.77,173.92l-20.56-6.23"></path>
                            </g>
                        </svg>
                        <h3>{{ $user->name }} hasn't set up a project yet.</h3>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection
