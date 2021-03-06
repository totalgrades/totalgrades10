<!DOCTYPE html>
<html lang="en">
<head>
  <title>Totalgrades - {{$current_school_year->school_year}} {{$current_term->term}} Registration Information</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style type="text/css" media="all">
    
    .page {
      overflow: hidden;
      page-break-before: always;
      page-break-inside: avoid;
      }
  </style>
</head>
<body>


<div class="page">
  <table class="table table-striped table-bordered table-hover">
    <thead>
        <th>Registration Code</th>
        <th>Title</th>
        <th>First Name</th>
        <th>Last Name</th>
    </thead>
    <tbody>
        @foreach ($staffers as $key=> $staffer)
        <tr>
            <td>{{ $staffer->registration_code }}</td>
            <td>{{ $staffer->title }}</td>
            <td>{{ $staffer->first_name }}</td>
            <td>{{ $staffer->last_name }}</td>
        </tr>
        @endforeach
        
    </tbody>
</table>
</div>


</body>
</html>
