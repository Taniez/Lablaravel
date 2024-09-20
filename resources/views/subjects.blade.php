<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}" >
    <title>Document</title>
    <style>
        @import url( {{asset('css/style.css')}} );
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<nav>
<ul>
<li><a href="/dashboard">Home</a></lis>
<li><a href="#">Subject List</a></li>
</ul>
</nav>
<header ><h1>Subject Management</h1></header>
<h2>Add Subjects</h2>
<form action="/subjects/insert" method="post">
    @csrf
    <p>ชื่อรายวิชา: <input type="text" name="sj_name"></p>
    <p>หน่วยกิต: <input type="Number" name="credit"></p>
    <p> คณะ:<select name="fac_name">
        <option value=1>Facultyof Science</option>
        <option value=2>College of Computing</option>
        <option value=3>Faculty of Engineering</option>
        <option value=4>Facultyof Education</option>
        <option value=5>Faculty of LaW</option>
        <option value=6>Faculty of Economics</option>
    </select></p>
    <div  class="button">
    <input type="submit" value="Add Subject" class="button"></div>
</form>


<h3>Subject List {{$num_subj}}</h3>

<table border="1">
    <tr>
        <th>Subject ID</th>
        <th>Subject Name</th>
        <th>Credit</th>
        <th>Faculty</th>
    </tr>
    @foreach($subjects as $subjects)
    <tr>
    <td>
        {{$subjects -> id }}
        </td>
        <td>
        {{$subjects -> subj_name }}
        </td>
        <td>
        {{$subjects -> credit }}
        </td>
        <td>
        {{$subjects -> faculty }}
        </td>
        <td>
            <button onclick="alert_update({{$subjects -> id }})" type="button" class="btn btn-warning">update</button>
        </td>
        <td>
        <button onclick="alert_delete({{$subjects -> id }})" class ="delete">
          delete
        </button>
        </td>
    </tr>
    @endforeach
</body>
</html>
<script>

    function alert_delete(id_) {
        var txt;
        var r = confirm("Are you sure you want to delete this subject?");
        if (r == true) {
            txt = "You pressed OK!";
        }   
        else {
            txt = "You pressed Cancel!";
        }
        if (txt=="You pressed OK!"){
            window.location.href = "/subjects/delete/"+id_; 
            alert("Subject has been deleted.");

        }

    }
    function alert_update(id_) {
        var txt;
        var r = confirm("Are you sure you want to update this subject?");
        if (r == true) {
            txt = "You pressed OK!";
        }   
        else {
            txt = "You pressed Cancel!";
        }
        if (txt=="You pressed OK!"){
            window.location.href = "/subjects/update/"+id_; 
        }

    }
 
</script>