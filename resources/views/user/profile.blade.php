@extends('layouts.app')

@section('title', 'Profile')

@section('content')
    <div class="profile">
        <div class="row title-row">
            <div class="col-sm">
                <h2>HackMonth Website 2019</h2>
                <p class="status">Public &mdash; Unreleased <a href="#" class="help">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><title>question-circle</title><path d="M12,0A12,12,0,1,0,24,12,12.013,12.013,0,0,0,12,0Zm0,19a1.5,1.5,0,1,1,1.5-1.5A1.5,1.5,0,0,1,12,19Zm1.6-6.08a1,1,0,0,0-.6.917,1,1,0,1,1-2,0,3,3,0,0,1,1.8-2.75A2,2,0,1,0,10,9.255a1,1,0,1,1-2,0,4,4,0,1,1,5.6,3.666Z" fill="#6E6E6E"></path></svg>
                    </a></p>
                <p><a href="#">github.com/rob-lowcock/hackmonth2019</a></p>
            </div>
            <div class="col-sm">
                <h2 class="day-number text-sm-right">Day 11</h2>
            </div>
        </div>
        <div class="row blog-row">
            <div class="col-3 icon-col">
                <svg width="47px" height="43px" viewBox="0 0 47 43" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Welcome" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round" stroke-linejoin="round">
                        <g id="Mobile-Portrait" transform="translate(-28.000000, -329.000000)" stroke="#6C38C4">
                            <g id="newspaper-fold" transform="translate(29.000000, 330.000000)">
                                <path d="M18,19 C18,19.5522847 17.5522847,20 17,20 L7,20 C6.44771525,20 6,19.5522847 6,19 L6,9 C6,8.44771525 6.44771525,8 7,8 L17,8 C17.5522847,8 18,8.44771525 18,9 L18,19 Z" id="Path"></path>
                                <path d="M21,8 L27,8" id="Path"></path>
                                <path d="M21,14 L27,14" id="Path"></path>
                                <path d="M21,20 L27,20" id="Path"></path>
                                <path d="M6,25 L28,25" id="Path"></path>
                                <path d="M6,31 L28,31" id="Path"></path>
                                <path d="M39.1304348,41 L5.86956522,41 C2.62789386,41 4.34435097e-16,38.3776678 0,35.1428571 L0,1.95238095 C-2.17217548e-16,0.874110727 0.87596462,0 1.95652174,0 L31.3043478,0 C32.3849049,0 33.2608696,0.874110727 33.2608696,1.95238095 L33.2608696,35.1428571 C33.2608696,38.3776678 35.8887634,41 39.1304348,41 C42.3721061,41 45,38.3776678 45,35.1428571 L45,5.85714286" id="Path"></path>
                                <path d="M39,6 L39,36" id="Path"></path>
                            </g>
                        </g>
                    </g>
                </svg>
            </div>
            <div class="col">
                <p>From the blog:</p>
                <h3>Designing for Developers</h3>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="day-indicators">
                    <div class="row">
                        <div class="col"><div class="indicator complete"></div></div>
                        <div class="col"><div class="indicator complete"></div></div>
                        <div class="col"><div class="indicator complete"></div></div>
                        <div class="col"><div class="indicator today"></div></div>
                        <div class="col"><div class="indicator incomplete"></div></div>
                        <div class="col"><div class="indicator incomplete"></div></div>
                    </div>
                    <div class="row">
                        <div class="col"><div class="indicator incomplete"></div></div>
                        <div class="col"><div class="indicator incomplete"></div></div>
                        <div class="col"><div class="indicator incomplete"></div></div>
                        <div class="col"><div class="indicator incomplete"></div></div>
                        <div class="col"><div class="indicator incomplete"></div></div>
                        <div class="col"><div class="indicator incomplete"></div></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
