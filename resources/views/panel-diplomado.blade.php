@extends('layout')

@section('content')
    @push('css')
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.css">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
    @endpush
    <div class="m-8">
        <br>
      <br>
      <br>
      <br>
      <br>
      <div>
        <h3>Mi avance profesional en: {{ $slug->titulo }}</h3>
      </div>

      <div class="grid grid-cols-2">
          <div>
              Certificado de aprobación por curso: {{ $porcCert }}%
              <hr>
              Porcentaje de vídeo reproducido: {{ $porceMart }}%
              <hr>
              Preguntas Respondidas: {{ $porcPreg }}%
              <hr>
              Actividades entregadas {{ $porcTar }}%
              <hr>
          </div>
          <div>
              <canvas id="myChart" width="450" height="150"></canvas>
          </div>
      </div>
      <table class="table-fixed">
          <thead>
              <tr>
                  <th class="w-1/2 ...">Curso</th>
                  <th class="w-1/4 ...">Docente</th>
                  <th class="w-1/4 ...">Avance</th>
                  <th class="w-1/4 ...">Nota</th>
              </tr>
          </thead>
          <tbody>
              @foreach ($slug->diplCursos as $item)
                  <tr>
                      <td>
                          <strong>{{ $item->cursoAsign->curso->nom }}</strong>
                      </td>
                      <td>
                          <strong>{{ $item->cursoAsign->trabajador->nombres }} </strong>
                      </td>
                      <td>
                          <x-historial-video cursoid="{{ $item->cursoAsign->curso->idcur }}" />
                      </td>
                      <td>
                          {{ round($item->notaCurso($item->cursoAsign->idasig),2) }}
                          
                      </td>
                  </tr>
              @endforeach

          </tbody>
      </table>
    </div>
    @push('js')
        <script>
            // let cursos2 = @json($cursos);
            // console.log(cursos2);
            let cursos = [{
                    total: 22,
                    alumno: 'Aarón  Jarrin'
                },
                {
                    total: 35,
                    alumno: 'Aaron Peña Asenjo'
                },
                {
                    total: 50,
                    alumno: 'Aaron Calderon'
                },
                {
                    total: 60,
                    alumno: ' Vania Helen Aguirre Dick '
                },
                {
                    total: 10,
                    alumno: ' Armas '
                },
                {
                    total: 20,
                    alumno: ' '
                },
                {
                    total: 30,
                    alumno: 'Aarón  Ramírez '
                },
                {
                    total: 50,
                    alumno: ' MARCO VELASQUEZ'
                },
                {
                    total: 30,
                    alumno: 'Aarom Fernando  Gamero Barrios '
                },
                {
                    total: 40,
                    alumno: 'Aaron Almanza'
                },
                {
                    total: 55,
                    alumno: ' Silva Silva'
                },
                {
                    total: 70,
                    alumno: ' Anita Margot  López López '
                },
                {
                    total: 80,
                    alumno: ' Vladimir Vásquez Bolívar'
                },
            ];
            let altos = cursos.sort((a, b) => (b.total - a.total))
            title1 = [];
            total1 = [];
            for (let i = 0; i < 5; i++) {
                title1.push(altos[i].alumno)
                total1.push(altos[i].total)
            }
            console.log(altos);
        </script>

        <script type="text/javascript">
            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'horizontalBar',
                data: {
                    labels: title1,
                    datasets: [{
                        label: 'Avance en (%)',
                        data: total1,
                        backgroundColor: [
                            '#33cc66',
                            '#007bff',
                            '#6666FF',
                            '#FF9E01',
                            '#fa3a5d'
                        ]
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                                beginAtZero: true
                            }
                        }],
                        xAxes: [{
                            ticks: {
                                beginAtZero: true,
                                min: 0,
                                max: 100,
                                stepSize: 5 // <----- This prop sets the stepSize
                            }
                        }]
                    },
                    legend: {
                        display: false,
                        position: 'bottom',
                    }
                }
            });
        </script>
    @endpush
@endsection
