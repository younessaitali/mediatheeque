@extends('vendor.multiauth.layouts.dash')
@section('content')
<div class="container">
    <div class="row justify-content-center">
      

        
        <div class="col-md-6 col-lg-4">
            <div class="card text-white bg-flat-color-2">
                <div class="card-body pb-0">
                    
                    <h4 class="mb-0">
                            <span class="count">10468</span>
                        </h4>
                    <p class="text-light">Members online</p>

                    <div class="chart-wrapper px-0" style="height:80px;" height="80" >
                    <canvas id="widgetChart2"></canvas>
                </div>

            </div>
        </div>
    </div>

  
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection