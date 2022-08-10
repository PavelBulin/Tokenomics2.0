<x-layout>
  <script>
    let size = {{$size}};
    let tokenomics = @json($tokenomics);
    let catNames = @json($catNames);
  </script>

        <div id="charts">
          <div id="chart1">
            <canvas id="myChart"></canvas>
          </div>
          <div id="chart2">
            <canvas id="myChart2"></canvas>
          </div>
        </div>

        <div id="info">
          <div class="info">
            <div class="title">Tokens blocked</div>

            <div class="content">{{$locks}}</div>
          </div>
          <div class="info">
            <div class="title">Circulating supply</div>

            <div class="content">{{$bSum - $sum}}</div>
          </div>
          <div class="info">
            <div class="title">Time to full unlock</div>

            <div class="content">{{$maxTime}}</div>
          </div>
          <div class="info">
            <div class="title">Max supply</div>

            <div class="content">{{$bSum}}</div>
          </div>
        </div>

        <x-form action="{{ route('home') }}" method="get">
          <div class="row">
              <div class="col-12 col-md-4">
                  <div class="mb-3">
                      <x-input name="search" value="{{ request('search') }}" placeholder="{{ __('Search by address') }}" />
                  </div>
              </div>
          </div>
        </x-form>
        <table>
          <tr>
            @foreach ($thead as $col)
            <th>{{ $col }}</th>
            @endforeach
          </tr>
          @foreach ($categories as $cat => $category)
          <tr>
            @foreach ($category as $key=>$elem)
            <td>
              @if ($key == "adress")
              <a href="{{ route('address', $elem)}}" target="_blank">{{$elem}}</a>
              @else
                {{$elem}}
              @endif
              @if ($key == "globalPercent")
                <input class="gPercents" value="{{$elem}}" hidden>
              @endif
          </td>

          @endforeach

        </tr>
      @endforeach
    </table>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.js"></script>
  <script src="/js/chart.js"></script>
</x-layout>