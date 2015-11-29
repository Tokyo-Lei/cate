<!doctype html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>Cate</title>
   <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

  <div class="container">

       <h1>Cate List</h1>
       <hr>
      <table class="table table-bordered table-hover">
          <thead>
          <tr>
              <th>id</th>
              <th>Name</th>
              <th>sort</th>
          </tr>
          </thead>
          <tbody>


          @foreach ($categories as $v)
              <tr>
                  <td>{{ $v->id }}</td>
                  <td>{{ $v->name }}</td>
                  <td>{{ $v->sort }}</td>
                 @foreach ($v->children as $s)
                  <tr>
                      <td>{{ $s->id }}</td>
                      <td>-{{ $s->name }}</td>
                      <td>{{ $s->sort }}</td>
                              @foreach ($s->children as $z)
                              <tr>
                                  <td>{{ $z->id }}</td>
                                  <td>---{{ $z->name }}</td>
                                  <td>{{ $z->sort }}</td>

                              </tr>
                              @endforeach
                  </tr>
                  @endforeach
              </tr>
          @endforeach
          </tbody>

      </table>




  </div>

</body>
</html>