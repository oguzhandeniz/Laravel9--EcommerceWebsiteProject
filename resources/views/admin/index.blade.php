@extends('layouts.adminbase')


@section('title','Admin Panel')


@section('content')

    <div class="main-container">
        <div class="pd-ltr-20">
            <div class="min-height-200px">

                <!--header-->
                <div class="page-header">
                    <div class="row">
                        <div class="col-md-6 col-sm-12">
                            <nav aria-label="breadcrumb" role="navigation">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{route('admin.index')}}"><h4>HOME</h4></a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                        <div class="col-md-6 col-sm-12 text-right">
                            <div class="dropdown">
                                <a class="btn btn-primary dropdown-toggle" href="#" role="button"
                                   data-toggle="dropdown">
                                    January 2022
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#">Export List</a>
                                    <a class="dropdown-item" href="#">Policies</a>
                                    <a class="dropdown-item" href="#">View Assets</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--header 2 (Welcome Page)-->
                <div class="card-box pd-20 height-50-p mb-30">
                    <div class="row align-items-center">
                        <div class="col-md-4">
                            <img src="{{asset("assets/adminAssets")}}/vendors/images/banner-img.png" alt="">
                        </div>
                        <div class="col-md-8">
                            <h4 class="font-20 weight-500 mb-10 text-capitalize">Welcome back
                                <div class="weight-600 font-30 text-blue">Johnny Brown!</div>
                            </h4>
                            <p class="font-18 max-width-600">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Unde hic non repellendus debitis iure, doloremque assumenda. Autem modi, corrupti, nobis
                                ea iure fugiat, veniam non quaerat mollitia animi error corporis.
                            </p>
                        </div>
                    </div>
                </div>

                <!--istatistikler 1-->
                <div class="row">
                    <div class="col-xl-3 mb-30">
                        <div class="card-box height-100-p widget-style1">
                            <div class="d-flex flex-wrap align-items-center">
                                <div class="progress-data" style="position: relative;">
                                    <div id="chart" style="min-height: 102.7px;">
                                        <div id="apexcharts1a7aad"
                                             class="apexcharts-canvas apexcharts1a7aad apexcharts-theme-light"
                                             style="width: 70px; height: 102.7px;">
                                            <svg id="SvgjsSvg2227" width="70" height="102.69999999999999"
                                                 xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                                 xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                                 xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                 style="background: transparent;">
                                                <g id="SvgjsG2229" class="apexcharts-inner apexcharts-graphical"
                                                   transform="translate(-15, 0)">
                                                    <defs id="SvgjsDefs2228">
                                                        <clipPath id="gridRectMask1a7aad">
                                                            <rect id="SvgjsRect2230" width="106" height="102" x="-3"
                                                                  y="-1" rx="0" ry="0" fill="#ffffff" opacity="1"
                                                                  stroke-width="0" stroke="none"
                                                                  stroke-dasharray="0"></rect>
                                                        </clipPath>
                                                        <clipPath id="gridRectMarkerMask1a7aad">
                                                            <rect id="SvgjsRect2231" width="102" height="102" x="-1"
                                                                  y="-1" rx="0" ry="0" fill="#ffffff" opacity="1"
                                                                  stroke-width="0" stroke="none"
                                                                  stroke-dasharray="0"></rect>
                                                        </clipPath>
                                                        <linearGradient id="SvgjsLinearGradient2237">
                                                            <stop id="SvgjsStop2238" stop-opacity="1"
                                                                  stop-color="rgba(242,242,242,1)" offset="0"></stop>
                                                            <stop id="SvgjsStop2239" stop-opacity="1"
                                                                  stop-color="rgba(27,0,255,1)" offset="1"></stop>
                                                            <stop id="SvgjsStop2240" stop-opacity="1"
                                                                  stop-color="rgba(27,0,255,1)" offset="1"></stop>
                                                        </linearGradient>
                                                        <linearGradient id="SvgjsLinearGradient2247">
                                                            <stop id="SvgjsStop2248" stop-opacity="1"
                                                                  stop-color="rgba(236,240,244,1)" offset="0"></stop>
                                                            <stop id="SvgjsStop2249" stop-opacity="1"
                                                                  stop-color="rgba(27,0,255,1)" offset="1"></stop>
                                                            <stop id="SvgjsStop2250" stop-opacity="1"
                                                                  stop-color="rgba(27,0,255,1)" offset="1"></stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <g id="SvgjsG2233" class="apexcharts-radialbar">
                                                        <g id="SvgjsG2234">
                                                            <g id="SvgjsG2235" class="apexcharts-tracks">
                                                                <g id="SvgjsG2236"
                                                                   class="apexcharts-radialbar-track apexcharts-track"
                                                                   rel="1">
                                                                    <path id="apexcharts-radialbarTrack-0"
                                                                          d="M 50 20.762195121951216 A 29.237804878048784 29.237804878048784 0 1 1 49.99489704041412 20.762195567268446"
                                                                          fill="none" fill-opacity="1"
                                                                          stroke="rgba(242,242,242,0.85)"
                                                                          stroke-opacity="1" stroke-linecap="butt"
                                                                          stroke-width="5.524268292682928"
                                                                          stroke-dasharray="0"
                                                                          class="apexcharts-radialbar-area"
                                                                          data:pathOrig="M 50 20.762195121951216 A 29.237804878048784 29.237804878048784 0 1 1 49.99489704041412 20.762195567268446"></path>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG2242">
                                                                <g id="SvgjsG2246"
                                                                   class="apexcharts-series apexcharts-radial-series"
                                                                   seriesName="seriesx1" rel="1" data:realIndex="0">
                                                                    <path id="SvgjsPath2251"
                                                                          d="M 50 20.762195121951216 A 29.237804878048784 29.237804878048784 0 1 1 22.193195148565476 40.965021414464175"
                                                                          fill="none" fill-opacity="0.85"
                                                                          stroke="url(#SvgjsLinearGradient2247)"
                                                                          stroke-opacity="1" stroke-linecap="butt"
                                                                          stroke-width="5.695121951219512"
                                                                          stroke-dasharray="0"
                                                                          class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                          data:angle="288" data:value="80" index="0"
                                                                          j="0"
                                                                          data:pathOrig="M 50 20.762195121951216 A 29.237804878048784 29.237804878048784 0 1 1 22.193195148565476 40.965021414464175"></path>
                                                                </g>
                                                                <circle id="SvgjsCircle2243" r="21.47567073170732"
                                                                        cx="50" cy="50"
                                                                        class="apexcharts-radialbar-hollow"
                                                                        fill="transparent"></circle>
                                                                <g id="SvgjsG2244" class="apexcharts-datalabels-group"
                                                                   transform="translate(0, 0) scale(1)"
                                                                   style="opacity: 1;">
                                                                    <text id="SvgjsText2245"
                                                                          font-family="Helvetica, Arial, sans-serif"
                                                                          x="50" y="55" text-anchor="middle"
                                                                          dominant-baseline="auto" font-size="15px"
                                                                          font-weight="400" fill="#333333"
                                                                          class="apexcharts-text apexcharts-datalabel-value"
                                                                          style="font-family: Helvetica, Arial, sans-serif;">
                                                                        35%
                                                                    </text>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <line id="SvgjsLine2252" x1="0" y1="0" x2="100" y2="0"
                                                          stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                          class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine2253" x1="0" y1="0" x2="100" y2="0"
                                                          stroke-dasharray="0" stroke-width="0"
                                                          class="apexcharts-ycrosshairs-hidden"></line>
                                                </g>
                                            </svg>
                                            <div class="apexcharts-legend"></div>
                                        </div>
                                    </div>
                                    <div class="resize-triggers">
                                        <div class="expand-trigger">
                                            <div style="width: 81px; height: 104px;"></div>
                                        </div>
                                        <div class="contract-trigger"></div>
                                    </div>
                                </div>
                                <div class="widget-data">
                                    <div class="h4 mb-0">4812</div>
                                    <div class="weight-600 font-14">Sales</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 mb-30">
                        <div class="card-box height-100-p widget-style1">
                            <div class="d-flex flex-wrap align-items-center">
                                <div class="progress-data" style="position: relative;">
                                    <div id="chart2" style="min-height: 102.7px;">
                                        <div id="apexcharts1a7adc"
                                             class="apexcharts-canvas apexcharts1a7adc apexcharts-theme-light"
                                             style="width: 70px; height: 102.7px;">
                                            <svg id="SvgjsSvg2254" width="70" height="102.69999999999999"
                                                 xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                                 xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                                 xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                 style="background: transparent;">
                                                <g id="SvgjsG2256" class="apexcharts-inner apexcharts-graphical"
                                                   transform="translate(-15, 0)">
                                                    <defs id="SvgjsDefs2255">
                                                        <clipPath id="gridRectMask1a7adc">
                                                            <rect id="SvgjsRect2257" width="106" height="102" x="-3"
                                                                  y="-1" rx="0" ry="0" fill="#ffffff" opacity="1"
                                                                  stroke-width="0" stroke="none"
                                                                  stroke-dasharray="0"></rect>
                                                        </clipPath>
                                                        <clipPath id="gridRectMarkerMask1a7adc">
                                                            <rect id="SvgjsRect2258" width="102" height="102" x="-1"
                                                                  y="-1" rx="0" ry="0" fill="#ffffff" opacity="1"
                                                                  stroke-width="0" stroke="none"
                                                                  stroke-dasharray="0"></rect>
                                                        </clipPath>
                                                        <linearGradient id="SvgjsLinearGradient2264">
                                                            <stop id="SvgjsStop2265" stop-opacity="1"
                                                                  stop-color="rgba(242,242,242,1)" offset="0"></stop>
                                                            <stop id="SvgjsStop2266" stop-opacity="1"
                                                                  stop-color="rgba(0,150,136,1)" offset="1"></stop>
                                                            <stop id="SvgjsStop2267" stop-opacity="1"
                                                                  stop-color="rgba(0,150,136,1)" offset="1"></stop>
                                                        </linearGradient>
                                                        <linearGradient id="SvgjsLinearGradient2274">
                                                            <stop id="SvgjsStop2275" stop-opacity="1"
                                                                  stop-color="rgba(236,240,244,1)" offset="0"></stop>
                                                            <stop id="SvgjsStop2276" stop-opacity="1"
                                                                  stop-color="rgba(0,150,136,1)" offset="1"></stop>
                                                            <stop id="SvgjsStop2277" stop-opacity="1"
                                                                  stop-color="rgba(0,150,136,1)" offset="1"></stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <g id="SvgjsG2260" class="apexcharts-radialbar">
                                                        <g id="SvgjsG2261">
                                                            <g id="SvgjsG2262" class="apexcharts-tracks">
                                                                <g id="SvgjsG2263"
                                                                   class="apexcharts-radialbar-track apexcharts-track"
                                                                   rel="1">
                                                                    <path id="apexcharts-radialbarTrack-0"
                                                                          d="M 50 20.762195121951216 A 29.237804878048784 29.237804878048784 0 1 1 49.99489704041412 20.762195567268446"
                                                                          fill="none" fill-opacity="1"
                                                                          stroke="rgba(242,242,242,0.85)"
                                                                          stroke-opacity="1" stroke-linecap="butt"
                                                                          stroke-width="5.524268292682928"
                                                                          stroke-dasharray="0"
                                                                          class="apexcharts-radialbar-area"
                                                                          data:pathOrig="M 50 20.762195121951216 A 29.237804878048784 29.237804878048784 0 1 1 49.99489704041412 20.762195567268446"></path>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG2269">
                                                                <g id="SvgjsG2273"
                                                                   class="apexcharts-series apexcharts-radial-series"
                                                                   seriesName="seriesx1" rel="1" data:realIndex="0">
                                                                    <path id="SvgjsPath2278"
                                                                          d="M 50 20.762195121951216 A 29.237804878048784 29.237804878048784 0 1 1 22.193195148565476 59.03497858553581"
                                                                          fill="none" fill-opacity="0.85"
                                                                          stroke="url(#SvgjsLinearGradient2274)"
                                                                          stroke-opacity="1" stroke-linecap="butt"
                                                                          stroke-width="5.695121951219512"
                                                                          stroke-dasharray="0"
                                                                          class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                          data:angle="252" data:value="70" index="0"
                                                                          j="0"
                                                                          data:pathOrig="M 50 20.762195121951216 A 29.237804878048784 29.237804878048784 0 1 1 22.193195148565476 59.03497858553581"></path>
                                                                </g>
                                                                <circle id="SvgjsCircle2270" r="21.47567073170732"
                                                                        cx="50" cy="50"
                                                                        class="apexcharts-radialbar-hollow"
                                                                        fill="transparent"></circle>
                                                                <g id="SvgjsG2271" class="apexcharts-datalabels-group"
                                                                   transform="translate(0, 0) scale(1)"
                                                                   style="opacity: 1;">
                                                                    <text id="SvgjsText2272"
                                                                          font-family="Helvetica, Arial, sans-serif"
                                                                          x="50" y="55" text-anchor="middle"
                                                                          dominant-baseline="auto" font-size="15px"
                                                                          font-weight="400" fill="#333333"
                                                                          class="apexcharts-text apexcharts-datalabel-value"
                                                                          style="font-family: Helvetica, Arial, sans-serif;">
                                                                        56%
                                                                    </text>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <line id="SvgjsLine2279" x1="0" y1="0" x2="100" y2="0"
                                                          stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                          class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine2280" x1="0" y1="0" x2="100" y2="0"
                                                          stroke-dasharray="0" stroke-width="0"
                                                          class="apexcharts-ycrosshairs-hidden"></line>
                                                </g>
                                            </svg>
                                            <div class="apexcharts-legend"></div>
                                        </div>
                                    </div>
                                    <div class="resize-triggers">
                                        <div class="expand-trigger">
                                            <div style="width: 81px; height: 104px;"></div>
                                        </div>
                                        <div class="contract-trigger"></div>
                                    </div>
                                </div>
                                <div class="widget-data">
                                    <div class="h4 mb-0">1287</div>
                                    <div class="weight-600 font-14">New Deals</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 mb-30">
                        <div class="card-box height-100-p widget-style1">
                            <div class="d-flex flex-wrap align-items-center">
                                <div class="progress-data" style="position: relative;">
                                    <div id="chart3" style="min-height: 102.7px;">
                                        <div id="apexcharts1a7ae1"
                                             class="apexcharts-canvas apexcharts1a7ae1 apexcharts-theme-light"
                                             style="width: 70px; height: 102.7px;">
                                            <svg id="SvgjsSvg2281" width="70" height="102.69999999999999"
                                                 xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                                 xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                                 xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                 style="background: transparent;">
                                                <g id="SvgjsG2283" class="apexcharts-inner apexcharts-graphical"
                                                   transform="translate(-15, 0)">
                                                    <defs id="SvgjsDefs2282">
                                                        <clipPath id="gridRectMask1a7ae1">
                                                            <rect id="SvgjsRect2284" width="106" height="102" x="-3"
                                                                  y="-1" rx="0" ry="0" fill="#ffffff" opacity="1"
                                                                  stroke-width="0" stroke="none"
                                                                  stroke-dasharray="0"></rect>
                                                        </clipPath>
                                                        <clipPath id="gridRectMarkerMask1a7ae1">
                                                            <rect id="SvgjsRect2285" width="102" height="102" x="-1"
                                                                  y="-1" rx="0" ry="0" fill="#ffffff" opacity="1"
                                                                  stroke-width="0" stroke="none"
                                                                  stroke-dasharray="0"></rect>
                                                        </clipPath>
                                                        <linearGradient id="SvgjsLinearGradient2291">
                                                            <stop id="SvgjsStop2292" stop-opacity="1"
                                                                  stop-color="rgba(242,242,242,1)" offset="0"></stop>
                                                            <stop id="SvgjsStop2293" stop-opacity="1"
                                                                  stop-color="rgba(245,103,103,1)" offset="1"></stop>
                                                            <stop id="SvgjsStop2294" stop-opacity="1"
                                                                  stop-color="rgba(245,103,103,1)" offset="1"></stop>
                                                        </linearGradient>
                                                        <linearGradient id="SvgjsLinearGradient2301">
                                                            <stop id="SvgjsStop2302" stop-opacity="1"
                                                                  stop-color="rgba(236,240,244,1)" offset="0"></stop>
                                                            <stop id="SvgjsStop2303" stop-opacity="1"
                                                                  stop-color="rgba(245,103,103,1)" offset="1"></stop>
                                                            <stop id="SvgjsStop2304" stop-opacity="1"
                                                                  stop-color="rgba(245,103,103,1)" offset="1"></stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <g id="SvgjsG2287" class="apexcharts-radialbar">
                                                        <g id="SvgjsG2288">
                                                            <g id="SvgjsG2289" class="apexcharts-tracks">
                                                                <g id="SvgjsG2290"
                                                                   class="apexcharts-radialbar-track apexcharts-track"
                                                                   rel="1">
                                                                    <path id="apexcharts-radialbarTrack-0"
                                                                          d="M 50 20.762195121951216 A 29.237804878048784 29.237804878048784 0 1 1 49.99489704041412 20.762195567268446"
                                                                          fill="none" fill-opacity="1"
                                                                          stroke="rgba(242,242,242,0.85)"
                                                                          stroke-opacity="1" stroke-linecap="butt"
                                                                          stroke-width="5.524268292682928"
                                                                          stroke-dasharray="0"
                                                                          class="apexcharts-radialbar-area"
                                                                          data:pathOrig="M 50 20.762195121951216 A 29.237804878048784 29.237804878048784 0 1 1 49.99489704041412 20.762195567268446"></path>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG2296">
                                                                <g id="SvgjsG2300"
                                                                   class="apexcharts-series apexcharts-radial-series"
                                                                   seriesName="seriesx1" rel="1" data:realIndex="0">
                                                                    <path id="SvgjsPath2305"
                                                                          d="M 50 20.762195121951216 A 29.237804878048784 29.237804878048784 0 1 1 20.762195121951216 50.00000000000001"
                                                                          fill="none" fill-opacity="0.85"
                                                                          stroke="url(#SvgjsLinearGradient2301)"
                                                                          stroke-opacity="1" stroke-linecap="butt"
                                                                          stroke-width="5.695121951219512"
                                                                          stroke-dasharray="0"
                                                                          class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                          data:angle="270" data:value="75" index="0"
                                                                          j="0"
                                                                          data:pathOrig="M 50 20.762195121951216 A 29.237804878048784 29.237804878048784 0 1 1 20.762195121951216 50.00000000000001"></path>
                                                                </g>
                                                                <circle id="SvgjsCircle2297" r="21.47567073170732"
                                                                        cx="50" cy="50"
                                                                        class="apexcharts-radialbar-hollow"
                                                                        fill="transparent"></circle>
                                                                <g id="SvgjsG2298" class="apexcharts-datalabels-group"
                                                                   transform="translate(0, 0) scale(1)"
                                                                   style="opacity: 1;">
                                                                    <text id="SvgjsText2299"
                                                                          font-family="Helvetica, Arial, sans-serif"
                                                                          x="50" y="55" text-anchor="middle"
                                                                          dominant-baseline="auto" font-size="15px"
                                                                          font-weight="400" fill="#333333"
                                                                          class="apexcharts-text apexcharts-datalabel-value"
                                                                          style="font-family: Helvetica, Arial, sans-serif;">
                                                                        55%
                                                                    </text>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <line id="SvgjsLine2306" x1="0" y1="0" x2="100" y2="0"
                                                          stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                          class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine2307" x1="0" y1="0" x2="100" y2="0"
                                                          stroke-dasharray="0" stroke-width="0"
                                                          class="apexcharts-ycrosshairs-hidden"></line>
                                                </g>
                                            </svg>
                                            <div class="apexcharts-legend"></div>
                                        </div>
                                    </div>
                                    <div class="resize-triggers">
                                        <div class="expand-trigger">
                                            <div style="width: 81px; height: 104px;"></div>
                                        </div>
                                        <div class="contract-trigger"></div>
                                    </div>
                                </div>
                                <div class="widget-data">
                                    <div class="h4 mb-0">350</div>
                                    <div class="weight-600 font-14">New User</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 mb-30">
                        <div class="card-box height-100-p widget-style1">
                            <div class="d-flex flex-wrap align-items-center">
                                <div class="progress-data" style="position: relative;">
                                    <div id="chart4" style="min-height: 102.7px;">
                                        <div id="apexcharts1a7ae6"
                                             class="apexcharts-canvas apexcharts1a7ae6 apexcharts-theme-light"
                                             style="width: 70px; height: 102.7px;">
                                            <svg id="SvgjsSvg2308" width="70" height="102.69999999999999"
                                                 xmlns="http://www.w3.org/2000/svg" version="1.1"
                                                 xmlns:xlink="http://www.w3.org/1999/xlink"
                                                 xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg"
                                                 xmlns:data="ApexChartsNS" transform="translate(0, 0)"
                                                 style="background: transparent;">
                                                <g id="SvgjsG2310" class="apexcharts-inner apexcharts-graphical"
                                                   transform="translate(-15, 0)">
                                                    <defs id="SvgjsDefs2309">
                                                        <clipPath id="gridRectMask1a7ae6">
                                                            <rect id="SvgjsRect2311" width="106" height="102" x="-3"
                                                                  y="-1" rx="0" ry="0" fill="#ffffff" opacity="1"
                                                                  stroke-width="0" stroke="none"
                                                                  stroke-dasharray="0"></rect>
                                                        </clipPath>
                                                        <clipPath id="gridRectMarkerMask1a7ae6">
                                                            <rect id="SvgjsRect2312" width="102" height="102" x="-1"
                                                                  y="-1" rx="0" ry="0" fill="#ffffff" opacity="1"
                                                                  stroke-width="0" stroke="none"
                                                                  stroke-dasharray="0"></rect>
                                                        </clipPath>
                                                        <linearGradient id="SvgjsLinearGradient2318">
                                                            <stop id="SvgjsStop2319" stop-opacity="1"
                                                                  stop-color="rgba(242,242,242,1)" offset="0"></stop>
                                                            <stop id="SvgjsStop2320" stop-opacity="1"
                                                                  stop-color="rgba(41,121,255,1)" offset="1"></stop>
                                                            <stop id="SvgjsStop2321" stop-opacity="1"
                                                                  stop-color="rgba(41,121,255,1)" offset="1"></stop>
                                                        </linearGradient>
                                                        <linearGradient id="SvgjsLinearGradient2328">
                                                            <stop id="SvgjsStop2329" stop-opacity="1"
                                                                  stop-color="rgba(236,240,244,1)" offset="0"></stop>
                                                            <stop id="SvgjsStop2330" stop-opacity="1"
                                                                  stop-color="rgba(41,121,255,1)" offset="1"></stop>
                                                            <stop id="SvgjsStop2331" stop-opacity="1"
                                                                  stop-color="rgba(41,121,255,1)" offset="1"></stop>
                                                        </linearGradient>
                                                    </defs>
                                                    <g id="SvgjsG2314" class="apexcharts-radialbar">
                                                        <g id="SvgjsG2315">
                                                            <g id="SvgjsG2316" class="apexcharts-tracks">
                                                                <g id="SvgjsG2317"
                                                                   class="apexcharts-radialbar-track apexcharts-track"
                                                                   rel="1">
                                                                    <path id="apexcharts-radialbarTrack-0"
                                                                          d="M 50 20.762195121951216 A 29.237804878048784 29.237804878048784 0 1 1 49.99489704041412 20.762195567268446"
                                                                          fill="none" fill-opacity="1"
                                                                          stroke="rgba(242,242,242,0.85)"
                                                                          stroke-opacity="1" stroke-linecap="butt"
                                                                          stroke-width="5.524268292682928"
                                                                          stroke-dasharray="0"
                                                                          class="apexcharts-radialbar-area"
                                                                          data:pathOrig="M 50 20.762195121951216 A 29.237804878048784 29.237804878048784 0 1 1 49.99489704041412 20.762195567268446"></path>
                                                                </g>
                                                            </g>
                                                            <g id="SvgjsG2323">
                                                                <g id="SvgjsG2327"
                                                                   class="apexcharts-series apexcharts-radial-series"
                                                                   seriesName="seriesx1" rel="1" data:realIndex="0">
                                                                    <path id="SvgjsPath2332"
                                                                          d="M 50 20.762195121951216 A 29.237804878048784 29.237804878048784 0 1 1 26.346118975439797 32.814449483278"
                                                                          fill="none" fill-opacity="0.85"
                                                                          stroke="url(#SvgjsLinearGradient2328)"
                                                                          stroke-opacity="1" stroke-linecap="butt"
                                                                          stroke-width="5.695121951219512"
                                                                          stroke-dasharray="0"
                                                                          class="apexcharts-radialbar-area apexcharts-radialbar-slice-0"
                                                                          data:angle="306" data:value="85" index="0"
                                                                          j="0"
                                                                          data:pathOrig="M 50 20.762195121951216 A 29.237804878048784 29.237804878048784 0 1 1 26.346118975439797 32.814449483278"></path>
                                                                </g>
                                                                <circle id="SvgjsCircle2324" r="21.47567073170732"
                                                                        cx="50" cy="50"
                                                                        class="apexcharts-radialbar-hollow"
                                                                        fill="transparent"></circle>
                                                                <g id="SvgjsG2325" class="apexcharts-datalabels-group"
                                                                   transform="translate(0, 0) scale(1)"
                                                                   style="opacity: 1;">
                                                                    <text id="SvgjsText2326"
                                                                          font-family="Helvetica, Arial, sans-serif"
                                                                          x="50" y="55" text-anchor="middle"
                                                                          dominant-baseline="auto" font-size="15px"
                                                                          font-weight="400" fill="#333333"
                                                                          class="apexcharts-text apexcharts-datalabel-value"
                                                                          style="font-family: Helvetica, Arial, sans-serif;">
                                                                        75%
                                                                    </text>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                    <line id="SvgjsLine2333" x1="0" y1="0" x2="100" y2="0"
                                                          stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1"
                                                          class="apexcharts-ycrosshairs"></line>
                                                    <line id="SvgjsLine2334" x1="0" y1="0" x2="100" y2="0"
                                                          stroke-dasharray="0" stroke-width="0"
                                                          class="apexcharts-ycrosshairs-hidden"></line>
                                                </g>
                                            </svg>
                                            <div class="apexcharts-legend"></div>
                                        </div>
                                    </div>
                                    <div class="resize-triggers">
                                        <div class="expand-trigger">
                                            <div style="width: 81px; height: 104px;"></div>
                                        </div>
                                        <div class="contract-trigger"></div>
                                    </div>
                                </div>
                                <div class="widget-data">
                                    <div class="h4 mb-0">845</div>
                                    <div class="weight-600 font-14">New Vendor</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--PolluxUI Charts-->
                <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                    <!--PolluxUI Charts-->
                    <div class="row">
                        <!--PolluxUI Pie Charts-->
                        <div class="col-lg-6 grid-margin grid-margin-lg-0 stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="chartjs-size-monitor">
                                        <div class="chartjs-size-monitor-expand">
                                            <div class=""></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink">
                                            <div class=""></div>
                                        </div>
                                    </div>
                                    <h4 class="card-title">Overall Sales</h4>
                                    <canvas id="pieChart" width="1404" height="702"
                                            style="display: block; height: 351px; width: 702px;"
                                            class="chartjs-render-monitor"></canvas>
                                </div>
                            </div>
                        </div>
                        <!--PolluxUI Bar Charts-->
                        <div class="col-lg-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="chartjs-size-monitor">
                                        <div class="chartjs-size-monitor-expand">
                                            <div class=""></div>
                                        </div>
                                        <div class="chartjs-size-monitor-shrink">
                                            <div class=""></div>
                                        </div>
                                    </div>
                                    <h4 class="card-title">Popularity of the Site </h4>
                                    <canvas id="barChart" style="display: block; height: 351px; width: 702px;"
                                            width="1404"
                                            height="702" class="chartjs-render-monitor"></canvas>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!--istatistikler 2-->
                <div class="row">
                    <!--browser visit-->
                    <div class="col-lg-4 col-md-6 col-sm-12 mb-30">
                        <div class="card-box pd-30 pt-10 height-100-p">
                            <h2 class="mb-30 h4">Browser Visit</h2>
                            <div class="browser-visits">
                                <ul>
                                    <li class="d-flex flex-wrap align-items-center">
                                        <div class="icon"><img
                                                src="{{asset("assets/adminAssets")}}/vendors/images/chrome.png" alt="">
                                        </div>
                                        <div class="browser-name">Google Chrome</div>
                                        <div class="visit"><span class="badge badge-pill badge-primary">40%</span></div>
                                    </li>
                                    <li class="d-flex flex-wrap align-items-center">
                                        <div class="icon"><img
                                                src="{{asset("assets/adminAssets")}}/vendors/images/safari.png" alt="">
                                        </div>
                                        <div class="browser-name">Safari</div>
                                        <div class="visit"><span class="badge badge-pill badge-success">25%</span></div>
                                    </li>
                                    <li class="d-flex flex-wrap align-items-center">
                                        <div class="icon"><img
                                                src="{{asset("assets/adminAssets")}}/vendors/images/firefox.png" alt="">
                                        </div>
                                        <div class="browser-name">Mozilla Firefox</div>
                                        <div class="visit"><span class="badge badge-pill badge-secondary">20%</span>
                                        </div>
                                    </li>
                                    <li class="d-flex flex-wrap align-items-center">
                                        <div class="icon"><img
                                                src="{{asset("assets/adminAssets")}}/vendors/images/opera.png" alt="">
                                        </div>
                                        <div class="browser-name">Opera Mini</div>
                                        <div class="visit"><span class="badge badge-pill badge-info">10%</span></div>
                                    </li>
                                    <li class="d-flex flex-wrap align-items-center">
                                        <div class="icon"><img
                                                src="{{asset("assets/adminAssets")}}/vendors/images/edge.png" alt="">
                                        </div>
                                        <div class="browser-name">Microsoft Edge</div>
                                        <div class="visit"><span class="badge badge-pill badge-warning">5%</span></div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--top vendors-->
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="card-box height-100-p pd-20 min-height-200px">
                            <div class="d-flex justify-content-between pb-10">
                                <div class="h5 mb-0">Top Vendors</div>
                                <div class="dropdown">
                                    <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                       data-color="#1b3133" href="#" role="button" data-toggle="dropdown"
                                       style="color: rgb(27, 49, 51);" aria-expanded="false">
                                        <i class="dw dw-more"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list" style="">
                                        <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                        <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                                        <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                                    </div>
                                </div>
                            </div>
                            <div class="user-list">
                                <ul>
                                    <li class="d-flex align-items-center justify-content-between">
                                        <div class="name-avatar d-flex align-items-center pr-2">
                                            <div class="avatar mr-2 flex-shrink-0">
                                                <img src="{{asset("assets/adminAssets")}}/vendors/images/photo1.jpg"
                                                     class="border-radius-100 box-shadow" width="50" height="50" alt="">
                                            </div>
                                            <div class="txt">
                                                <span class="badge badge-pill badge-sm" data-bgcolor="#e7ebf5"
                                                      data-color="#265ed7"
                                                      style="color: rgb(38, 94, 215); background-color: rgb(231, 235, 245);">4.9</span>
                                                <div class="font-14 weight-600">Oğuzhan Deniz</div>
                                                <div class="font-12 weight-500" data-color="#b2b1b6"
                                                     style="color: rgb(178, 177, 182);">Bookseller
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cta flex-shrink-0">
                                            <a href="#" class="btn btn-sm btn-outline-primary">Profile</a>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center justify-content-between">
                                        <div class="name-avatar d-flex align-items-center pr-2">
                                            <div class="avatar mr-2 flex-shrink-0">
                                                <img src="{{asset("assets/adminAssets")}}/vendors/images/photo2.jpg"
                                                     class="border-radius-100 box-shadow" width="50" height="50" alt="">
                                            </div>
                                            <div class="txt">
                                                <span class="badge badge-pill badge-sm" data-bgcolor="#e7ebf5"
                                                      data-color="#265ed7"
                                                      style="color: rgb(38, 94, 215); background-color: rgb(231, 235, 245);">4.6</span>
                                                <div class="font-14 weight-600">Ren Delan</div>
                                                <div class="font-12 weight-500" data-color="#b2b1b6"
                                                     style="color: rgb(178, 177, 182);">Car Dealer
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cta flex-shrink-0">
                                            <a href="#" class="btn btn-sm btn-outline-primary">Profile</a>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center justify-content-between">
                                        <div class="name-avatar d-flex align-items-center pr-2">
                                            <div class="avatar mr-2 flex-shrink-0">
                                                <img src="{{asset("assets/adminAssets")}}/vendors/images/photo3.jpg"
                                                     class="border-radius-100 box-shadow" width="50" height="50" alt="">
                                            </div>
                                            <div class="txt">
                                                <span class="badge badge-pill badge-sm" data-bgcolor="#e7ebf5"
                                                      data-color="#265ed7"
                                                      style="color: rgb(38, 94, 215); background-color: rgb(231, 235, 245);">3.9</span>
                                                <div class="font-14 weight-600">Garrett Kincy</div>
                                                <div class="font-12 weight-500" data-color="#b2b1b6"
                                                     style="color: rgb(178, 177, 182);">Teacher
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cta flex-shrink-0">
                                            <a href="#" class="btn btn-sm btn-outline-primary">Profile</a>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center justify-content-between">
                                        <div class="name-avatar d-flex align-items-center pr-2">
                                            <div class="avatar mr-2 flex-shrink-0">
                                                <img src="{{asset("assets/adminAssets")}}/vendors/images/photo4.jpg"
                                                     class="border-radius-100 box-shadow" width="50" height="50" alt="">
                                            </div>
                                            <div class="txt">
                                                <span class="badge badge-pill badge-sm" data-bgcolor="#e7ebf5"
                                                      data-color="#265ed7"
                                                      style="color: rgb(38, 94, 215); background-color: rgb(231, 235, 245);">4.9</span>
                                                <div class="font-14 weight-600">Callie Reed</div>
                                                <div class="font-12 weight-500" data-color="#b2b1b6"
                                                     style="color: rgb(178, 177, 182);">Designer
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cta flex-shrink-0">
                                            <a href="#" class="btn btn-sm btn-outline-primary">Profile</a>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center justify-content-between">
                                        <div class="name-avatar d-flex align-items-center pr-2">
                                            <div class="avatar mr-2 flex-shrink-0">
                                                <img src="{{asset("assets/adminAssets")}}/vendors/images/photo4.jpg"
                                                     class="border-radius-100 box-shadow" width="50" height="50" alt="">
                                            </div>
                                            <div class="txt">
                                                <span class="badge badge-pill badge-sm" data-bgcolor="#e7ebf5"
                                                      data-color="#265ed7"
                                                      style="color: rgb(38, 94, 215); background-color: rgb(231, 235, 245);">4.9</span>
                                                <div class="font-14 weight-600">Callie Reed</div>
                                                <div class="font-12 weight-500" data-color="#b2b1b6"
                                                     style="color: rgb(178, 177, 182);">Designer
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cta flex-shrink-0">
                                            <a href="#" class="btn btn-sm btn-outline-primary">Profile</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!--top users-->
                    <div class="col-lg-4 col-md-6 mb-30">
                        <div class="card-box height-100-p pd-20 min-height-200px">
                            <div class="d-flex justify-content-between pb-10">
                                <div class="h5 mb-0">Top Users</div>
                                <div class="dropdown">
                                    <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle"
                                       data-color="#1b3133" href="#" role="button" data-toggle="dropdown"
                                       style="color: rgb(27, 49, 51);" aria-expanded="false">
                                        <i class="dw dw-more"></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list" style="">
                                        <a class="dropdown-item" href="#"><i class="dw dw-eye"></i> View</a>
                                        <a class="dropdown-item" href="#"><i class="dw dw-edit2"></i> Edit</a>
                                        <a class="dropdown-item" href="#"><i class="dw dw-delete-3"></i> Delete</a>
                                    </div>
                                </div>
                            </div>
                            <div class="user-list">
                                <ul>
                                    <li class="d-flex align-items-center justify-content-between">
                                        <div class="name-avatar d-flex align-items-center pr-2">
                                            <div class="avatar mr-2 flex-shrink-0">
                                                <img src="{{asset("assets/adminAssets")}}/vendors/images/photo1.jpg"
                                                     class="border-radius-100 box-shadow" width="50" height="50" alt="">
                                            </div>
                                            <div class="txt">
                                                <span class="badge badge-pill badge-sm" data-bgcolor="#e7ebf5"
                                                      data-color="#265ed7"
                                                      style="color: rgb(38, 94, 215); background-color: rgb(231, 235, 245);">4.9</span>
                                                <div class="font-14 weight-600">Oğuzhan Deniz</div>
                                                <div class="font-12 weight-500" data-color="#b2b1b6"
                                                     style="color: rgb(178, 177, 182);">Computer Engineer
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cta flex-shrink-0">
                                            <a href="#" class="btn btn-sm btn-outline-primary">Profile</a>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center justify-content-between">
                                        <div class="name-avatar d-flex align-items-center pr-2">
                                            <div class="avatar mr-2 flex-shrink-0">
                                                <img src="{{asset("assets/adminAssets")}}/vendors/images/photo2.jpg"
                                                     class="border-radius-100 box-shadow" width="50" height="50" alt="">
                                            </div>
                                            <div class="txt">
                                                <span class="badge badge-pill badge-sm" data-bgcolor="#e7ebf5"
                                                      data-color="#265ed7"
                                                      style="color: rgb(38, 94, 215); background-color: rgb(231, 235, 245);">4.6</span>
                                                <div class="font-14 weight-600">Ren Delan</div>
                                                <div class="font-12 weight-500" data-color="#b2b1b6"
                                                     style="color: rgb(178, 177, 182);">Co-Founder
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cta flex-shrink-0">
                                            <a href="#" class="btn btn-sm btn-outline-primary">Profile</a>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center justify-content-between">
                                        <div class="name-avatar d-flex align-items-center pr-2">
                                            <div class="avatar mr-2 flex-shrink-0">
                                                <img src="{{asset("assets/adminAssets")}}/vendors/images/photo3.jpg"
                                                     class="border-radius-100 box-shadow" width="50" height="50" alt="">
                                            </div>
                                            <div class="txt">
                                                <span class="badge badge-pill badge-sm" data-bgcolor="#e7ebf5"
                                                      data-color="#265ed7"
                                                      style="color: rgb(38, 94, 215); background-color: rgb(231, 235, 245);">3.9</span>
                                                <div class="font-14 weight-600">Garrett Kincy</div>
                                                <div class="font-12 weight-500" data-color="#b2b1b6"
                                                     style="color: rgb(178, 177, 182);">Architect
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cta flex-shrink-0">
                                            <a href="#" class="btn btn-sm btn-outline-primary">Profile</a>
                                        </div>
                                    </li>
                                    <li class="d-flex align-items-center justify-content-between">
                                        <div class="name-avatar d-flex align-items-center pr-2">
                                            <div class="avatar mr-2 flex-shrink-0">
                                                <img src="{{asset("assets/adminAssets")}}/vendors/images/photo4.jpg"
                                                     class="border-radius-100 box-shadow" width="50" height="50" alt="">
                                            </div>
                                            <div class="txt">
                                                <span class="badge badge-pill badge-sm" data-bgcolor="#e7ebf5"
                                                      data-color="#265ed7"
                                                      style="color: rgb(38, 94, 215); background-color: rgb(231, 235, 245);">4.9</span>
                                                <div class="font-14 weight-600">Callie Reed</div>
                                                <div class="font-12 weight-500" data-color="#b2b1b6"
                                                     style="color: rgb(178, 177, 182);">Student
                                                </div>
                                            </div>
                                        </div>
                                        <div class="cta flex-shrink-0">
                                            <a href="#" class="btn btn-sm btn-outline-primary">Profile</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!--Best Selling Products--> <!--SSD de Tablo var-->
                <div class="card-box mb-30">

                </div>

            </div>
        </div>
    </div>

@endsection
