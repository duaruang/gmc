@extends('layout.admin')

@section('content')
<div class="row">
    
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between">
                  <p class="card-title">Selamat Datang di CMS globalmoeslimcharity.com</p>
                 </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('vendor-js')
  <script src="{{ asset('assets/vendor/chart.js/Chart.min.js') }}"></script>
@endsection

@push('script')
<script>
 if ($("#sales-chart").length) {
      var SalesChartCanvas = $("#sales-chart").get(0).getContext("2d");
      var SalesChart = new Chart(SalesChartCanvas, {
        type: 'bar',
        data: {
          labels: @json($label),
          datasets: [{
              data: @json($dataset),
              backgroundColor: '#98BDFF'
            }
          ]
        },
        options: {
          cornerRadius: 5,
          responsive: true,
          maintainAspectRatio: true,
          layout: {
            padding: {
              left: 0,
              right: 0,
              top: 20,
              bottom: 0
            }
          },
          scales: {
            x: {
                type: 'time',
                time: {
                    unit: 'month'
                }
            },
            yAxes: [{
                    display: true,
                    ticks: {
                        beginAtZero: true,
                    }
                }]
          },
          legend: {
            display: false
          },
          elements: {
            point: {
              radius: 0
            }
          }
        },
      });
    }
</script>
@endpush