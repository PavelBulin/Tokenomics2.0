<x-layout>
  <h1>{{$category['adress']}}</h1>
    <div id="block">
    <div id="qr">{{QrCode::encoding('UTF-8')
      ->size(200)
      ->generate("http://www.cw62555.tmweb.ru/address/$category[adress]")}}
      <div class="row1">
        <div class="col col1_1"></div>
        <div class="col col1_2"></div>
        <div class="col col1_3"></div>
        <div class="col col1_4"></div>
      </div>
      <div class="row2">
        <div class="col col2_1"></div>
        <div class="col col2_2"></div>
        <div class="col col2_3"></div>
        <div class="col col2_4"></div>
      </div>
      <div class="row3">
        <div class="col col3_1"></div>
        <div class="col col3_2"></div>
        <div class="col col3_3"></div>
        <div class="col col3_4"></div>
      </div>
      <div class="row4">
        <div class="col col4_1"></div>
        <div class="col col4_2"></div>
        <div class="col col4_3"></div>
        <div class="col col4_4"></div>
      </div>
    </div>

      <div id="info2">
        <div class="info2">
        <div class="info2-one">
          <div class="title2">Blocked tokens</div>
          <div class="content2">{{$category['blocked']}}</div>
        </div>
        <div class="info2-one">
          <div class="title2">Unlocked tokens</div>
          <div class="content2">{{$category['unblocked']}}</div>
        </div>
        </div>
        <div class="info2">
        <div class="info2-one">
          <div class="title2">Round</div>
          <div class="content2">{{$category['raund']}}</div>
        </div>
        <div class="info2-one">
          <div class="title2">Time to unlock</div>
          <div class="content2">{{$category['offTime']}}</div>
        </div>
        </div>
      </div>
  </div>
</x-layout>

