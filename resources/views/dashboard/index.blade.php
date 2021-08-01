@extends('layout.template')

@section('title','dashboard')

@section('container')
<div class="main">
    <!-- MAIN CONTENT -->
    <div class="main-content">
        <div class="container-fluid item-center">
            <div class="container pt-4">
                <div class="panel panel-headline">
                    <div class="panel-heading">
                        <h3 class="panel-title">Weekly Overview</h3>
                        <p class="panel-subtitle"><?php $mytime = Carbon\Carbon::now();
                                                    echo $mytime->toDateTimeString(); ?></p>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="metric">
                                    <span class="icon"><i class="fa fa-user"></i></span>
                                    <p>
                                        <span class="number">1,252</span>
                                        <span class="title">Jumlah Pekerja</span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="metric">
                                    <span class="icon"><i class="fa fa-shopping-bag"></i></span>
                                    <p>
                                        <span class="number">203</span>
                                        <span class="title">Request Peoject</span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="metric">
                                    <span class="icon"><i class="fa fa-eye"></i></span>
                                    <p>
                                        <span class="number">274,678</span>
                                        <span class="title">Visits</span>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="metric">
                                    <span class="icon"><i class="fa fa-bar-chart"></i></span>
                                    <p>
                                        <span class="number">35%</span>
                                        <span class="title">Conversions</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-9">
                                <div id="headline-chart" class="ct-chart"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="300" class="ct-chart-line" style="width: 100%; height: 300;">
                                        <g class="ct-grids">
                                            <line y1="265" y2="265" x1="50" x2="845.7000122070312" class="ct-grid ct-vertical"></line>
                                            <line y1="229.28571428571428" y2="229.28571428571428" x1="50" x2="845.7000122070312" class="ct-grid ct-vertical"></line>
                                            <line y1="193.57142857142856" y2="193.57142857142856" x1="50" x2="845.7000122070312" class="ct-grid ct-vertical"></line>
                                            <line y1="157.85714285714286" y2="157.85714285714286" x1="50" x2="845.7000122070312" class="ct-grid ct-vertical"></line>
                                            <line y1="122.14285714285714" y2="122.14285714285714" x1="50" x2="845.7000122070312" class="ct-grid ct-vertical"></line>
                                            <line y1="86.42857142857142" y2="86.42857142857142" x1="50" x2="845.7000122070312" class="ct-grid ct-vertical"></line>
                                            <line y1="50.71428571428572" y2="50.71428571428572" x1="50" x2="845.7000122070312" class="ct-grid ct-vertical"></line>
                                            <line y1="15" y2="15" x1="50" x2="845.7000122070312" class="ct-grid ct-vertical"></line>
                                        </g>
                                        <g>
                                            <g class="ct-series ct-series-a">
                                                <path d="M50,265L50,172.143L182.617,129.286L315.233,165L447.85,50.714L580.467,157.857L713.083,165L845.7,86.429L845.7,265Z" class="ct-area"></path>
                                            </g>
                                            <g class="ct-series ct-series-b">
                                                <path d="M50,265L50,236.429L182.617,157.857L315.233,207.857L447.85,93.571L580.467,129.286L713.083,65L845.7,22.143L845.7,265Z" class="ct-area"></path>
                                            </g>
                                        </g>
                                        <g class="ct-labels">
                                            <foreignObject style="overflow: visible;" x="50" y="270" width="132.61666870117188" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 133px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Mon</span></foreignObject>
                                            <foreignObject style="overflow: visible;" x="182.61666870117188" y="270" width="132.61666870117188" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 133px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Tue</span></foreignObject>
                                            <foreignObject style="overflow: visible;" x="315.23333740234375" y="270" width="132.61666870117188" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 133px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Wed</span></foreignObject>
                                            <foreignObject style="overflow: visible;" x="447.8500061035156" y="270" width="132.61666870117188" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 133px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Thu</span></foreignObject>
                                            <foreignObject style="overflow: visible;" x="580.4666748046875" y="270" width="132.61666870117188" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 133px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Fri</span></foreignObject>
                                            <foreignObject style="overflow: visible;" x="713.0833435058594" y="270" width="132.61666870117188" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 133px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Sat</span></foreignObject>
                                            <foreignObject style="overflow: visible;" x="845.7000122070312" y="270" width="30" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 30px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Sun</span></foreignObject>
                                            <foreignObject style="overflow: visible;" y="229.28571428571428" x="10" height="35.714285714285715" width="30"><span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">10</span></foreignObject>
                                            <foreignObject style="overflow: visible;" y="193.57142857142856" x="10" height="35.714285714285715" width="30"><span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">15</span></foreignObject>
                                            <foreignObject style="overflow: visible;" y="157.85714285714283" x="10" height="35.71428571428571" width="30"><span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">20</span></foreignObject>
                                            <foreignObject style="overflow: visible;" y="122.14285714285714" x="10" height="35.71428571428572" width="30"><span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">25</span></foreignObject>
                                            <foreignObject style="overflow: visible;" y="86.42857142857142" x="10" height="35.71428571428572" width="30"><span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">30</span></foreignObject>
                                            <foreignObject style="overflow: visible;" y="50.71428571428572" x="10" height="35.714285714285694" width="30"><span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">35</span></foreignObject>
                                            <foreignObject style="overflow: visible;" y="15" x="10" height="35.71428571428572" width="30"><span class="ct-label ct-vertical ct-start" style="height: 36px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">40</span></foreignObject>
                                            <foreignObject style="overflow: visible;" y="-15" x="10" height="30" width="30"><span class="ct-label ct-vertical ct-start" style="height: 30px; width: 30px" xmlns="http://www.w3.org/2000/xmlns/">45</span></foreignObject>
                                        </g>
                                    </svg></div>
                            </div>
                            <div class="col-md-3">
                                <div class="weekly-summary text-right">
                                    <span class="number">2,315</span> <span class="percentage"><i class="fa fa-caret-up text-success"></i> 12%</span>
                                    <span class="info-label">Total Sales</span>
                                </div>
                                <div class="weekly-summary text-right">
                                    <span class="number">$5,758</span> <span class="percentage"><i class="fa fa-caret-up text-success"></i> 23%</span>
                                    <span class="info-label">Monthly Income</span>
                                </div>
                                <div class="weekly-summary text-right">
                                    <span class="number">$65,938</span> <span class="percentage"><i class="fa fa-caret-down text-danger"></i> 8%</span>
                                    <span class="info-label">Total Income</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <!-- RECENT PURCHASES -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Recent Purchases</h3>
                                <div class="right">
                                    <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                                    <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                                </div>
                            </div>
                            <div class="panel-body no-padding">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Order No.</th>
                                            <th>Name</th>
                                            <th>Amount</th>
                                            <th>Date &amp; Time</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><a href="#">763648</a></td>
                                            <td>Steve</td>
                                            <td>$122</td>
                                            <td>Oct 21, 2016</td>
                                            <td><span class="label label-success">COMPLETED</span></td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">763649</a></td>
                                            <td>Amber</td>
                                            <td>$62</td>
                                            <td>Oct 21, 2016</td>
                                            <td><span class="label label-warning">PENDING</span></td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">763650</a></td>
                                            <td>Michael</td>
                                            <td>$34</td>
                                            <td>Oct 18, 2016</td>
                                            <td><span class="label label-danger">FAILED</span></td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">763651</a></td>
                                            <td>Roger</td>
                                            <td>$186</td>
                                            <td>Oct 17, 2016</td>
                                            <td><span class="label label-success">SUCCESS</span></td>
                                        </tr>
                                        <tr>
                                            <td><a href="#">763652</a></td>
                                            <td>Smith</td>
                                            <td>$362</td>
                                            <td>Oct 16, 2016</td>
                                            <td><span class="label label-success">SUCCESS</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="panel-footer">
                                <div class="row">
                                    <div class="col-md-6"><span class="panel-note"><i class="fa fa-clock-o"></i> Last 24 hours</span></div>
                                    <div class="col-md-6 text-right"><a href="#" class="btn btn-primary">View All Purchases</a></div>
                                </div>
                            </div>
                        </div>
                        <!-- END RECENT PURCHASES -->
                    </div>
                    <div class="col-md-6">
                        <!-- MULTI CHARTS -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Projection vs. Realization</h3>
                                <div class="right">
                                    <button type="button" class="btn-toggle-collapse"><i class="lnr lnr-chevron-up"></i></button>
                                    <button type="button" class="btn-remove"><i class="lnr lnr-cross"></i></button>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div id="visits-trends-chart" class="ct-chart"><svg xmlns:ct="http://gionkunz.github.com/chartist-js/ct" width="100%" height="270px" class="ct-chart-line" style="width: 100%; height: 270px;">
                                        <g class="ct-grids"></g>
                                        <g>
                                            <g ct:series-name="series-real" class="ct-series ct-series-a">
                                                <path d="M20,186.111L65.273,142.111L110.545,149.444L155.818,156.778L201.091,134.778L246.364,125L291.636,95.667L336.909,137.222L382.182,99.333L427.455,83.444L472.727,51.667L518,15" class="ct-line"></path>
                                                <line x1="20" y1="186.11111111111111" x2="20.01" y2="186.11111111111111" class="ct-point" ct:value="200"></line>
                                                <line x1="65.27272727272728" y1="142.11111111111111" x2="65.28272727272729" y2="142.11111111111111" class="ct-point" ct:value="380"></line>
                                                <line x1="110.54545454545455" y1="149.44444444444446" x2="110.55545454545455" y2="149.44444444444446" class="ct-point" ct:value="350"></line>
                                                <line x1="155.8181818181818" y1="156.77777777777777" x2="155.8281818181818" y2="156.77777777777777" class="ct-point" ct:value="320"></line>
                                                <line x1="201.0909090909091" y1="134.77777777777777" x2="201.10090909090908" y2="134.77777777777777" class="ct-point" ct:value="410"></line>
                                                <line x1="246.36363636363637" y1="125" x2="246.37363636363636" y2="125" class="ct-point" ct:value="450"></line>
                                                <line x1="291.6363636363636" y1="95.66666666666666" x2="291.6463636363636" y2="95.66666666666666" class="ct-point" ct:value="570"></line>
                                                <line x1="336.90909090909093" y1="137.22222222222223" x2="336.9190909090909" y2="137.22222222222223" class="ct-point" ct:value="400"></line>
                                                <line x1="382.1818181818182" y1="99.33333333333334" x2="382.1918181818182" y2="99.33333333333334" class="ct-point" ct:value="555"></line>
                                                <line x1="427.45454545454544" y1="83.44444444444446" x2="427.46454545454543" y2="83.44444444444446" class="ct-point" ct:value="620"></line>
                                                <line x1="472.72727272727275" y1="51.66666666666666" x2="472.73727272727274" y2="51.66666666666666" class="ct-point" ct:value="750"></line>
                                                <line x1="518" y1="15" x2="518.01" y2="15" class="ct-point" ct:value="900"></line>
                                            </g>
                                            <g ct:series-name="series-projection" class="ct-series ct-series-b">
                                                <path d="M20,235L20,176.333L65.273,149.444L110.545,147L155.818,142.111L201.091,137.222L246.364,125L291.636,117.667L336.909,107.156L382.182,99.333L427.455,88.333L472.727,63.889L518,39.444L518,235Z" class="ct-area"></path>
                                            </g>
                                        </g>
                                        <g class="ct-labels">
                                            <foreignObject style="overflow: visible;" x="20" y="240" width="45.27272727272727" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 45px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Jan</span></foreignObject>
                                            <foreignObject style="overflow: visible;" x="65.27272727272728" y="240" width="45.27272727272727" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 45px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Feb</span></foreignObject>
                                            <foreignObject style="overflow: visible;" x="110.54545454545455" y="240" width="45.272727272727266" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 45px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Mar</span></foreignObject>
                                            <foreignObject style="overflow: visible;" x="155.8181818181818" y="240" width="45.27272727272728" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 45px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Apr</span></foreignObject>
                                            <foreignObject style="overflow: visible;" x="201.0909090909091" y="240" width="45.27272727272728" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 45px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">May</span></foreignObject>
                                            <foreignObject style="overflow: visible;" x="246.36363636363637" y="240" width="45.27272727272725" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 45px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Jun</span></foreignObject>
                                            <foreignObject style="overflow: visible;" x="291.6363636363636" y="240" width="45.27272727272731" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 45px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Jul</span></foreignObject>
                                            <foreignObject style="overflow: visible;" x="336.90909090909093" y="240" width="45.27272727272725" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 45px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Aug</span></foreignObject>
                                            <foreignObject style="overflow: visible;" x="382.1818181818182" y="240" width="45.27272727272725" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 45px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Sep</span></foreignObject>
                                            <foreignObject style="overflow: visible;" x="427.45454545454544" y="240" width="45.27272727272731" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 45px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Oct</span></foreignObject>
                                            <foreignObject style="overflow: visible;" x="472.72727272727275" y="240" width="45.27272727272725" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 45px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Nov</span></foreignObject>
                                            <foreignObject style="overflow: visible;" x="518" y="240" width="30" height="20"><span class="ct-label ct-horizontal ct-end" style="width: 30px; height: 20px" xmlns="http://www.w3.org/2000/xmlns/">Dec</span></foreignObject>
                                            <foreignObject style="overflow: visible;" y="210.55555555555554" x="20" height="24.444444444444443" width="0"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 0px" xmlns="http://www.w3.org/2000/xmlns/">0</span></foreignObject>
                                            <foreignObject style="overflow: visible;" y="186.1111111111111" x="20" height="24.444444444444443" width="0"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 0px" xmlns="http://www.w3.org/2000/xmlns/">100</span></foreignObject>
                                            <foreignObject style="overflow: visible;" y="161.66666666666669" x="20" height="24.444444444444443" width="0"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 0px" xmlns="http://www.w3.org/2000/xmlns/">200</span></foreignObject>
                                            <foreignObject style="overflow: visible;" y="137.22222222222223" x="20" height="24.444444444444443" width="0"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 0px" xmlns="http://www.w3.org/2000/xmlns/">300</span></foreignObject>
                                            <foreignObject style="overflow: visible;" y="112.77777777777777" x="20" height="24.444444444444457" width="0"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 0px" xmlns="http://www.w3.org/2000/xmlns/">400</span></foreignObject>
                                            <foreignObject style="overflow: visible;" y="88.33333333333334" x="20" height="24.44444444444443" width="0"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 0px" xmlns="http://www.w3.org/2000/xmlns/">500</span></foreignObject>
                                            <foreignObject style="overflow: visible;" y="63.888888888888886" x="20" height="24.444444444444457" width="0"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 0px" xmlns="http://www.w3.org/2000/xmlns/">600</span></foreignObject>
                                            <foreignObject style="overflow: visible;" y="39.44444444444446" x="20" height="24.44444444444443" width="0"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 0px" xmlns="http://www.w3.org/2000/xmlns/">700</span></foreignObject>
                                            <foreignObject style="overflow: visible;" y="15" x="20" height="24.444444444444457" width="0"><span class="ct-label ct-vertical ct-start" style="height: 24px; width: 0px" xmlns="http://www.w3.org/2000/xmlns/">800</span></foreignObject>
                                            <foreignObject style="overflow: visible;" y="-15" x="20" height="30" width="0"><span class="ct-label ct-vertical ct-start" style="height: 30px; width: 0px" xmlns="http://www.w3.org/2000/xmlns/">900</span></foreignObject>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <!-- END MULTI CHARTS -->
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT -->
        </div>
    </div>
    @endsection