<x-app-layout>
    <x-slot name="title">{{-- Esto es para mandarle el titulo al app layout. --}}
        Historial de Tickets
    </x-slot>
    <div class="py-3">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl p-8 sm:rounded-lg">

                <div class="panel-heading">
                    <h1 style="text-align:center;"><strong>Historial de Tickets</strong></h1>
                    <br>
                    <p>En este historial verás los tickets que han sido atendidos, canalizados o estan en
                        proceso. Así como una gráfica de los tickets que han llegado en estos meses.</p>
                </div>
                <br>



                @foreach($historial as $historia)
                <div style="width:25%; float: left;padding:4px;">
                    <div class="card text-white bg-green-400">
                        <div class="card-body hover:bg-green-600 select-none">
                             
                            @if($historia->NumTick == 0)
                            <h5 class="card-title"><strong>TICKETS ATENDIDOS</strong></h5>
                                <p class="card-text">Están atendidos un total de <strong>{!! $historia -> NumTick
                                        !!}</strong> tickets.</p>
                            @else
                            <a href="{{ route('admin.mostrar', 'Atendido') }}" class=" hover:no-underline no-underline hover:text-white">
                                <h5 class="card-title"><strong>TICKETS ATENDIDOS</strong></h5>
                                <p class="card-text">Están ATENDIDOS un total de <strong>{!! $historia -> NumTick
                                        !!}</strong> tickets.</p>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>

                @endforeach


               
                @foreach($canalizados as $histori)
                <div style="width:25%; float: left;padding:4px;">
                    <div class="card text-white bg-blue-400 ">
                        <div class="card-body hover:bg-blue-600 select-none">
                           
                            @if($histori->NumTick == 0)
                            <h5 class="card-title"><strong>TICKETS CANALIZADOS</strong></h5>
                            <p class="card-text">Están canalizados un total de <strong>{!! $histori -> NumTick
                                    !!}</strong> tickets.</p>
                            @else
                            <a href="{{ route('admin.mostrar', 'Canalizado   ') }}" class=" hover:no-underline no-underline hover:text-white ">
                                <h5 class="card-title"><strong>TICKETS CANALIZADOS</strong></h5>
                                <p class="card-text">Están canalizados un total de <strong>{!! $histori -> NumTick
                                        !!}</strong> tickets.</p>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach

               
                @foreach($resueltos as $histor)
                <div style="width:25%; float: left;padding:4px;">
                    <div class="card text-white bg-red-400 ">
                        <div class="card-body hover:bg-red-600 select-none">
                            @if($histor->NumTick == 0)
                            <h5 class="card-title"><strong>TICKETS PENDIENTES</strong></h5>
                            <p class="card-text">Están pendientes un total de <strong>{!! $histor -> NumTick
                                    !!}</strong> tickets.</p>
                            @else
                            <a href="{{ route('admin.mostrar', 'Pendiente   ') }}" class=" hover:no-underline no-underline hover:text-white ">
                                <h5 class="card-title"><strong>TICKETS PENDIENTES</strong></h5>
                                <p class="card-text">Están pendientes un total de <strong>{!! $histor -> NumTick
                                        !!}</strong> tickets.</p>
                            </a>
                            @endif
                            
                           
                        </div>
                    </div>
                </div>
                @endforeach


                
                @foreach($total as $tot)
                <div style="width:25%; float: left;padding:4px;">
                    <div class="card text-white bg-secondary bg-gray-400 ">
                        <div class="card-body hover:bg-gray-600 select-none">
                            
                            @if($historia->NumTick == 0)
                            <h5 class="card-title"><strong>TICKETS TOTALES</strong></h5>
                                <p class="card-text">Se han recibido un total de <strong>{!! $tot -> NumTick
                                        !!}</strong> tickets.</p>
                            @else
                            <a href="{{ route('Administrador.Adminticket') }}" class=" hover:no-underline no-underline hover:text-white">
                                <h5 class="card-title"><strong>TICKETS TOTALES</strong></h5>
                                <p class="card-text">Se han recibido un total de <strong>{!! $tot -> NumTick
                                        !!}</strong> tickets.</p>
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
               

                <br>
                <br>
                <br>



            </div>

        </div>

    </div>
    <figure class="highcharts-figure" style =" min-width: 320px; 
    max-width: 1200px;
    margin: 1em auto;">
    <div id="container"></div>
    <p class="highcharts-description" style="background-color: #e0e0e0;
    padding: .5em;">

    Esta tabla funciona, haciendo un conteo de todos los tickets que han sido recibidos, correspondiente a los meses del año.
    </p>
</figure>

</x-app-layout>


<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/themes/sand-signika.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<script type="text/javascript">
    var ticket= <?php echo json_encode($ticket) ?>;
    Highcharts.chart('container',{
        chart:{
            type: 'area'
        },
        title:{
            text:'Tickets registrados en el sistema'
        },
        subtitle:{
            text:'Gráfica de los tickets en estos meses'
        },
        xAxis:{
            categories:['Ene','Feb','Mar','Abr','May','Jun','Jul','Ago','Sep','Oct','Nov','Dic']
        },
        yAxis:{
            title:{
                text:'Nuevos Tickets'
            }
        },
        legend:{
            layout:'vertical',
            align:'right',
            verticalAlign:'middle'
        },
        plotOptions:{
            series:{
                allowPointSelect: true
            }
        },
        series:[{
                name:'Nuevos Tickets',
                data: ticket
        }],
        responsive:{
            rules:[
                {
                    condition:{
                        maxWidth:500       
                    },
                    chartOptions:{
                        legend:{
                        layout: 'horizontal',
                        align:'center',
                        verticalAlign:'bottom'
                    }
                    }
                }]
        }
    



    });
</script>