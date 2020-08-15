<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Create newsletter in laravel 5.7</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">    
  </head>
  <body>
  
    @if (\Session::has('success'))
      <div class="alert alert-success">
        <p>{{ \Session::get('success') }}</p>
      </div><br />
     @endif
     @if (\Session::has('failure'))
      <div class="alert alert-danger">
        <p>{{ \Session::get('failure') }}</p>
      </div><br />
     @endif
      <h2>Laravel Newsletter Tutorial With Example</h2><br/>
      <form method="post" action="{{url('newsletter')}}">
        @csrf
        </div>
       
          <div class="col-md-4"></div>
            <div class="form-group col-md-4">
              <label for="Email">Email:</label>
              <input type="text" class="form-control" name="email">
            </div>
          </div>
    
        
          
            <button type="submit" class="btn btn-success">Subscribe</button>
          </div>
        </div>
      </form>
   
  </body>
</html>