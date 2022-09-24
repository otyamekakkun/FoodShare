<form action="{{ route('item.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="" placeholder="商品名">
    <input type="file" name="img_path">
    <input type="number" name="" min="date" placeholder="価格　円">
    {{-- 日付はこれでok --}}
    <input type="date" name="">
    <input type="submit" value="商品を出品する">
    </form>

{{-- 写真をアップロードする機能は制作した。ここから商品名を入力する処理＋日付を入力する処理＋お金を入力する処理を記述する
    ちなみに写真は導出した
    --}}







{{--  
    <form>
        <label>
          推奨したいパーティーの日を選択してください (必須、4月1日～20日):
          <input type="date" name="party" min="date+0" max="date+30" required>
          <span class="validity"></span>
        </label>
      --}}
        <p>
          <button>送信</button>
        </p>
      </form>