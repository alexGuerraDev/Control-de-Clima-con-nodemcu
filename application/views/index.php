<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: jguerra and Duvan Sarmiento
 * Date: 12/11/17
 * Time: 09:54 AM
 */
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Proyecto Embebidos</title>
    <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/custom.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/highcharts-more.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
</head>
<body>
    <div class="container" style="margin-bottom:30px">
        <h1>Proyecto Sistemas Embebidos</h1>
        <hr>
        <div class="row">
            <?php for ($i=0; $i < sizeof($array); $i++) { ?>
            <div class="col-sm-4 custom">
                <h2>Temperatura Interna</h2>
                <div class="row date">
                    <div class="col-sm-7">
                        <div class="row">
                           <div class="col-sm-3"><img src="images/calendar.png" alt=""></div>
                            <div class="col-sm-9"><h4>Fecha</h4></div>
                        </div>
                    </div>
                    <div class="col-sm-5"><h4># Registro</h4></div>
                </div>
                <div class="row date">
                    <div class="col-sm-7"><p><span><?php echo $array[$i]['fecha']; ?></span></p></div>
                    <div class="col-sm-5"><p><span><?php echo $array[$i]['id'];?></span></p></div>
                </div>

                <div class="row temperature">
                    <div class="col-sm-4"><img style="width: 80%;" src="images/thermometer.png" alt=""></div>
                    <div class="col-sm-8"><p><span> <?php echo $array[$i]['temperatura'];?>&degC</span></p></div>
                </div>


                <div class="row humidity">
                    <div class="col-sm-4"><img style ="width: 80%;" src="images/humidity.png" alt=""></div>
                    <div class="col-sm-8"><p><span><?php echo $array[$i]['humedad']; ?>% </span> </p></div>
                </div>

            </div>
            <?php } ?>
            <div class="col-sm-8">
                <div id="container" style="min-width: 310px; max-width: 660px; height: 370px; margin: 0 auto"></div>
            </div>
        </div>


        <script>

            $.getJSON('index.php/Proyecto/registro/', function (data) {

                Highcharts.chart('container', {

                    chart: {
                        type: 'line',
                        zoomType: 'x',
                        backgroundColor: {
                            linearGradient: { x1: 0, y1: 0, x2: 1, y2: 1 },
                            stops: [
                                [0, '#2a2a2b'],
                                [1, '#3e3e40']
                            ]
                        },
                        style: {
                            fontFamily: '\'Unica One\', sans-serif'
                        },
                        plotBorderColor: '#606063'

                    },

                    title: {
                        text: 'Variacion de Temperatura Interna',
                        style: {
                            color: '#E0E0E3',
                            textTransform: 'uppercase',
                            fontSize: '20px'
                        }
                    },

                    xAxis: {
                        type: 'datetime',
                        gridLineColor: '#707073',
                        labels: {
                            style: {
                                color: '#E0E0E3'
                            }
                        },
                        lineColor: '#707073',
                        minorGridLineColor: '#505053',
                        tickColor: '#707073',
                        title: {
                            style: {
                                color: '#A0A0A3'

                            }
                        }
                    },

                    yAxis: {
                       
                        gridLineColor: '#707073',
                        labels: {
                            style: {
                                color: '#E0E0E3'
                            }
                        },
                        lineColor: '#707073',
                        minorGridLineColor: '#505053',
                        tickColor: '#707073',
                        tickWidth: 1,
                        title: {
                            text:'Temperatura (°C)',
                            style: {
                                color: '#A0A0A3'
                            }
                        }
                    },

                    tooltip: {
                        crosshairs: true,
                        shared: true,
                        valueSuffix: '°C',
                        backgroundColor: 'rgba(0, 0, 0, 0.85)',
                        style: {
                            color: '#F0F0F0'
                        }
                    },

                    legend: {
                        enabled: false,
                        itemStyle: {
                            color: '#E0E0E3'
                        },
                        itemHoverStyle: {
                            color: '#FFF'
                        },
                        itemHiddenStyle: {
                            color: '#606063'
                        }
                    },



                    series: [{
                        name: 'Temperatura',
                        data: data
                    }]

                });
            });


        </script>
        
    </div>


    <!---------------------------------------------------------------------------------------------------------->



    <div class="container">
    <hr>
        <div class="row">
            <?php for ($i=0; $i < sizeof($array2); $i++) { ?>
            <div class="col-sm-4 custom">
                 <h2>Temperatura Externa</h2>
                <div class="row date">
                    <div class="col-sm-7">
                        <div class="row">
                           <div class="col-sm-3"><img src="images/calendar.png" alt=""></div>
                            <div class="col-sm-9"><h4>Fecha</h4></div>
                        </div>
                    </div>
                    <div class="col-sm-5"><h4># Registro</h4></div>
                </div>
                <div class="row date">
                    <div class="col-sm-7"><p><span><?php echo $array2[$i]['fecha']; ?></span></p></div>
                    <div class="col-sm-5"><p><span><?php echo $array2[$i]['id'];?></span></p></div>
                </div>

                <div class="row temperature">
                    <div class="col-sm-4"><img style="width: 80%;" src="images/thermometer.png" alt=""></div>
                    <div class="col-sm-8"><p><span> <?php echo $array2[$i]['temperatura'];?>&degC</span></p></div>
                </div>


                <div class="row humidity">
                    <div class="col-sm-4"><img style ="width: 80%;" src="images/humidity.png" alt=""></div>
                    <div class="col-sm-8"><p><span><?php echo $array2[$i]['humedad']; ?>% </span> </p></div>
                </div>

            </div>
            <?php } ?>
            <div class="col-sm-8">
                <div id="container2" style="min-width: 310px; max-width: 660px; height: 370px; margin: 0 auto"></div>
            </div>
        </div>


        <script>

            $.getJSON('index.php/Proyecto/registroSensor2/', function (data) {

                Highcharts.chart('container2', {

                    chart: {
                        type: 'line',
                        zoomType: 'x',
                        backgroundColor: {
                            linearGradient: { x1: 0, y1: 0, x2: 1, y2: 1 },
                            stops: [
                                [0, '#2a2a2b'],
                                [1, '#3e3e40']
                            ]
                        },
                        style: {
                            fontFamily: '\'Unica One\', sans-serif'
                        },
                        plotBorderColor: '#606063'

                    },

                    title: {
                        text: 'Variacion de Temperatura Externa',
                        style: {
                            color: '#E0E0E3',
                            textTransform: 'uppercase',
                            fontSize: '20px'
                        }
                    },

                    xAxis: {
                        type: 'datetime',
                        gridLineColor: '#707073',
                        labels: {
                            style: {
                                color: '#E0E0E3'
                            }
                        },
                        lineColor: '#707073',
                        minorGridLineColor: '#505053',
                        tickColor: '#707073',
                        title: {
                            style: {
                                color: '#A0A0A3'

                            }
                        }
                    },

                    yAxis: {
                       
                        gridLineColor: '#707073',
                        labels: {
                            style: {
                                color: '#E0E0E3'
                            }
                        },
                        lineColor: '#707073',
                        minorGridLineColor: '#505053',
                        tickColor: '#707073',
                        tickWidth: 1,
                        title: {
                            text:'Temperatura (°C)',
                            style: {
                                color: '#A0A0A3'
                            }
                        }
                    },

                    tooltip: {
                        crosshairs: true,
                        shared: true,
                        valueSuffix: '°C',
                        backgroundColor: 'rgba(0, 0, 0, 0.85)',
                        style: {
                            color: '#F0F0F0'
                        }
                    },

                    legend: {
                        enabled: false,
                        itemStyle: {
                            color: '#E0E0E3'
                        },
                        itemHoverStyle: {
                            color: '#FFF'
                        },
                        itemHiddenStyle: {
                            color: '#606063'
                        }
                    },



                    series: [{
                        name: 'Temperatura',
                        data: data
                    }]

                });
            });


        </script>
        
    </div>
</body>
</html>