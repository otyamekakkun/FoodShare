@extends('layouts.app')
@section('content')
{{-- 
<div class="container">
    <h2>{{ __('Drill List') }}</h2>
    <div class="row">
       @foreach ($drills as $drill)
        <div class="col-sm-6">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">{{ $drill->title }}</h3>
                    <h3 class="card-title">{{ $drill->category_name }}</h3>
                     <h3 class="card-title">{{ $drill->img_path }}</h3> 
                     <img src="{{ Storage::url($drill->img_path) }}" width="25%">
                    <h3 class="card-title">{{ $drill->place }}</h3>
                    <h3 class="card-title">{{ $drill->best_by_date }}</h3>
                    <a href="#" class="btn btn-primary">{{ __('Go Practice')  }}</a>
                </div>
            </div>
        </div>
        @endforeach

<div id="app">
    <drills-component></drills-component>
</div>
    </div>
</div>
 --}}

<body>
       {{--
    <div id="app">
     <drills-component></drills-component>
    </div>

 --}}

 <form action="" method="post" enctype="multipart/form-data">
    <input type="file" value="ファイルを選択" name="image">
    <input type="value" value="送信">
  </form>  

<script>
var fileArea = document.getElementById('drag-drop-area');
var fileInput = document.getElementById('fileInput');
if (!isset($_FILES['image']['error']) || !is_int($_FILES['image']['error'])){
  echo "ファイルアップロードエラー";
} else {
  $file_name = $_FILES['image']['name'];
  $extension = pathinfo($file_name, PATHINFO_EXTENSION); //拡張子取得
  $tmp_path = $_FILES['image']['tmp_name'];
  $file_dir_path = "upload/";
  $uniq_name = date("YmdHis").md5(uniqid(microtime(),1)).session_id() . "." . $extension;

  if (is_uploaded_file($tmp_path)) {
    if(move_uploaded_file( $tmp_path, $file_dir_path . $uniq_name)) {
      chmod($file_dir_path . $uniq_name, 0644);
    } else {
      echo "Error:アップロードできませんでした。";
    }
  }
}

fileArea.addEventListener('dragover', function(evt){
  evt.preventDefault();
  fileArea.classList.add('dragover');
});

fileArea.addEventListener('dragleave', function(evt){
    evt.preventDefault();
    fileArea.classList.remove('dragover');
});
fileArea.addEventListener('drop', function(evt){
    evt.preventDefault();
    fileArea.classList.remove('dragenter');
    var files = evt.dataTransfer.files;
    fileInput.files = files;
});





</script>

</body>









@endsection