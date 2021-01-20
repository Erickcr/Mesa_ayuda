<body>
    <div id="container"></div>
</body>
<script src="https://code.highcharts.com/highcharts.js"></script>

<script type="text/javascript">
    var ticket= <?php echo json_encode($ticket) ?>;
    Highcharts.chart('container',{
        title:{
            text:'Tickets registrados en el sistema'
        },
        subtitle:{
            text:'Grafica de los tickets'
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